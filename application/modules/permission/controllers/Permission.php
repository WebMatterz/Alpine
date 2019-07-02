<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permission extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function loadView($data)
	{
		$data['module'] = 'permission';
		echo Modules::run('templ/adminContent', $data);
	}

	public function index()
	{
		$this->load->model('mdl_permission');
		$perm = $this->mdl_permission->get_all_permission();

		$usr = $this->mdl_permission->get_all_users();

		$data['permission_list'] = $perm[1];
		$data['user_list'] = $usr[1];
		$data['title'] = "Administration - LIRS Informal Sector";
		$data['view_file'] = 'index';

		$this->loadView($data);
	}

	public function permissionuser()
	{
		$this->load->model('mdl_permission');
		$perm = $this->mdl_permission->get_all_permission();
		$usr = $this->mdl_permission->get_all_users();

		$data['permission_list'] = $perm[1];
		$data['user_list'] = $usr[1];
		$data['title'] = "Administration - LIRS Informal Sector";
		$data['view_file'] = 'perm_user';

		$this->loadView($data);
	}

	public function permissionroles()
	{
		$this->load->model('mdl_permission');
		$perm = $this->mdl_permission->get_all_permission();
		$role = $this->mdl_permission->get_all_roles();

		$data['permission_list'] = $perm[1];
		$data['role_list'] = $role[1];
		$data['title'] = "Administration - LIRS Informal Sector";
		$data['view_file'] = 'permissionroles';

		$this->loadView($data);
	}

	public function permlist()
	{
		$this->load->model('mdl_permission');
		$perm = $this->mdl_permission->get_all_permission();

		$data['permission_list'] = $perm[1];
		$data['title'] = "Administration - LIRS Informal Sector";
		$data['view_file'] = 'permlist';


		$this->loadView($data);
	}

	public function perm_submit()
	{
		$this->form_validation->set_rules('permname', 'Permission name', 'required');
		$this->form_validation->set_rules('display_name', 'Display name', 'required');
		$this->form_validation->set_rules('controller_name', 'Controller name', 'required');
		$this->form_validation->set_rules('action_name', 'Action name', 'required');
		$this->form_validation->set_rules('discription', 'Discription', 'required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');


		if($this->form_validation->run() == FALSE)
		{
			$_SESSION['msg'] = '<div class="alert alert-warning"><i class="fa fa-bolt"></i> Error, all fields must not be empty.</div>';
			redirect('/permission/permlist');
		}
		else
		{
			$data = $this->get_data_from_post();
			$check_user = $this->check_uniqueid($data['uniqueId']);

			if($check_user != true)
			{
				$this->_insert($data);

				// log audit trail
				$username = $_SESSION['username'];
				$this->fire_audit_log($username, '/'.$this->router->fetch_class().'/'.$this->router->fetch_method(), 'Permission: '.$check_user, 'CREATE-PERMISSION');

				redirect('/permission/permlist');
			}
			else
			{
				$_SESSION['msg'] = "<div class='alert alert-warning'><i class='fa fa-warning'></i> $check_user Permission already exist.</div>";
				redirect('/permission/permlist');
			}
		}

	}

	public function permusersubmit()
	{
		$this->form_validation->set_rules('allpermission', 'Select Permission', 'required');
		$this->form_validation->set_rules('allusers', 'Select User', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$_SESSION['msg'] = '<div class="alert alert-warning"><i class="fa fa-bolt"></i> Error, all fields must not be empty.</div>';
			redirect('/permission/permlist');
		}
		else
		{
			$user = $this->input->post('allusers', TRUE);
			$data = $this->get_perm_user_data_from_post();
			$check = $this->permuser_duplicates($data);

			if($check == true)
			{
				$_SESSION['msg'] = "<div class='alert alert-warning'><i class='fa fa-warning'></i>  Permission already exist.</div>";
				redirect('/permission/permlist');
			}
			else
			{
			$this->_insert_permission_user($data);

			// log audit trail
			$username = $_SESSION['username'];
			$this->fire_audit_log($username, '/'.$this->router->fetch_class().'/'.$this->router->fetch_method(), 'User: '.$user, 'CREATE-PERMISSION-USER');

			redirect('/permission/permlist');
		}

		}
	}

	public function permrolesubmit()
	{
		$this->form_validation->set_rules('allpermission', 'Select Permission', 'required');
		$this->form_validation->set_rules('allroles', 'Select Roles', 'required');

		if($this->form_validation->run() == FALSE)
		{
			$_SESSION['msg'] = '<div class="alert alert-warning"><i class="fa fa-bolt"></i> Error, all fields must not be empty.</div>';
			redirect('/permission/permlist');
		}
		else
		{
			$user = $this->input->post('allusers', TRUE);
			$data = $this->get_perm_role_data_from_post();

			$this->_insert_permission_role($data);

			// log audit trail
			$username = $_SESSION['username'];
			$this->fire_audit_log($username, '/'.$this->router->fetch_class().'/'.$this->router->fetch_method(), 'User: '.$user, 'CREATE-PERMISSION-ROLE');

			redirect('/permission/permlist');
		}
	}

	public function check_permission_user($var)
	{
		$query = "select * from permission_user where permission_id = '$var'";
		$result = $this->_custom_num_rows_query($query);
		if ($result > 0)
		{
			return true;
		}
	}

	// checking if data exist within the database
	public function check_uniqueid($var)
	{
		$query = "select uniqueId from permissions where uniqueId = '$var'";
		$result = $this->_custom_num_rows_query($query);
		if ($result > 0)
		{
			return true;
		}
	}

	public function get_perm_user_data_from_post()
	{
		$data = array();
		$data['perm_id'] = $this->input->post('allpermission', TRUE);
		$data['user_id'] = $this->input->post('allusers', TRUE);

		return $data;
	}

	public function get_perm_role_data_from_post()
	{
		$data = array();

		$data['permission_id'] = $this->input->post('allpermission', TRUE);
		$data['role_id'] = $this->input->post('allroles', TRUE);

		return $data;
	}

	public function get_unique_controller()
	{
		$this->load->model('mdl_permission');
		$query = $this->mdl_permission->get_unique_controller();

		return $query;
	}

	public function get_data_from_post()
	{
		$data = array();
		$uniqueId = strtoupper($this->str_random());

		$data['uniqueId'] = $uniqueId;
		$data['name'] = $this->input->post('permname', TRUE);
		$data['display_name'] = $this->input->post('display_name', TRUE);
		$data['controller_name'] = $this->input->post('controller_name', TRUE);
		$data['action_name'] = $this->input->post('action_name', TRUE);
		$data['discription'] = $this->input->post('discription', TRUE);
		$data['menu_item_id'] = $this->input->post('menu_id', TRUE);
		$data['created_at'] = date("Y-m-d h:i:s");
		$data['updated_at'] = date("Y-m-d h:i:s");

		return $data;
	}

	public function _insert($data)
	{
		$this->load->model('mdl_permission');
		$this->mdl_permission->_insert($data);
	}

	public function _insert_permission_user($data)
	{
		$this->load->model('mdl_permission');
		$this->mdl_permission->_insert_permission_user($data);
	}

	public function _insert_permission_role($data)
	{
		$this->load->model('mdl_permission');
		$this->mdl_permission->_insert_permission_role($data);
	}

	public function _custom_num_rows_query($mysql_query)
	{
		$this->load->model('mdl_permission');
		$query = $this->mdl_permission->_custom_num_rows_query($mysql_query);
		return $query;
	}

	public function _custom_query($mysql_query)
	{
		$this->load->model('mdl_permission');
		$query = $this->mdl_permission->_custom_query($mysql_query);
		return $query;
	}

	function str_random($length = 10)
	{
		$str = "";
		$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
		$max = count($characters) - 1;
		for ($i = 0; $i < $length; $i++) {
			$rand = mt_rand(0, $max);
			$str .= $characters[$rand];
		}
		$date = date("Ymdhis");
		return $date.$str;
	}


	function fire_audit_log($user, $url, $auditdata, $action)
	{
		$session_id = session_id();
		if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
			$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
			$ip_address = $_SERVER['REMOTE_ADDR'];
		}

		$sql = "insert into audit_trail ( sessionid, ipaddress, userid, urlaccessed, timeaccessed, auditdata, auditaction)
		values('".$session_id."', '".$ip_address."', '".$user."', '".$url."', CURRENT_TIMESTAMP, '".$auditdata."', '".$action."')";
		$this->_custom_query($sql);
	}

}
