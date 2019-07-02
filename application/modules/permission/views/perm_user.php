<div id="main-wrapper">
  <div class="col-md-12">

    <div class="page-title">
      <h3 class="breadcrumb-header">Permission Manager</h3>
      <h6>Permission Management | <a href="<?php echo base_url(); ?>permission/index">Add new permission</a> | <a class="pull-right" href="<?php echo base_url(); ?>permission/permissionroles">Add permission roles</a></h6>
    </div>

    <div class="panel panel-white">
      <?php
      if (isset($_SESSION['msg']))
      {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
      ?>

      <br/>
      <div class="panel-heading hbuilt">
        <span class="pull-left"><a class="pull-right" href="<?php echo base_url(); ?>permission/permissionuser"><i class="fa fa-plus"></i> Set Users Permission property</span>
          <a class="pull-right" href="<?php echo base_url(); ?>permission/permlist"><i class="fa fa-th"></i> List All Permission</a>
          <div class="clearfix"></div>
        </div>
        <hr/>
        <br/>

        <div class="panel-body">
          <div class="col-md-12">
            <?php echo form_open('permission/permusersubmit', array('class' => 'form-horizontal form-label-left', 'id'=>'demo-form2')); ?>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Permission <b class="text-danger">*</b></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select required id="allpermission" name="allpermission" class="js-source-states form-control" style="width: 100%">
                  <option value="">Select Permission</option>
                  <?php
                  foreach($permission_list as $list)
                  {
                    echo '<option value="'.$list['id'].'">'.$list['display_name'].'</option>';
                  }
                  ?>
                </select>
              </div>
            </div>

            <div class="form-group" id="showdiv">
              <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Users <b class="text-danger">*</b></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select required id="allusers" name="allusers" class="js-source-states form-control" style="width: 100%">
                  <option value="">Select User</option>
                  <?php
                  foreach($user_list as $list)
                  {
                    echo '<option value="'.$list['id'].'">'.$list['name']. ' | '. $list['user_type'].'</option>';
                  }
                  ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <a href="<?php echo base_url(); ?>permission/permissionuser" class="btn btn-warning"><i class="fa fa-history"></i> Cancel</a>&nbsp; &nbsp;
                <button type="submit" id="target-form" class="all-form btn btn-success"><i class="fa fa-check"></i> Add permission property</button>
              </div>
            </div>
          </form>
        </div>
      </div>
