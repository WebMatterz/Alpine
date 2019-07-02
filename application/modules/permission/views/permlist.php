<div class="row">

  <div id="main-wrapper">
    <div class="col-md-12">

      <div class="page-title">
        <h3 class="breadcrumb-header">Permission Manager</h3>
        <h6>Permission Management | <a href="<?php echo base_url(); ?>permission/index">Add new permission</a></h6>
      </div>

      <div class="panel panel-white">
        <?php
        if (isset($_SESSION['msg']))
        {
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
        ?>
        <div class="panel-heading hbuilt">
          <span class="pull-left"><a class="pull-right" href="<?php echo base_url(); ?>permission/permissionuser"><i class="fa fa-plus"></i> Set Permission Users property</span>
            <a class="pull-right" href="<?php echo base_url(); ?>permission/permlist"><i class="fa fa-th"></i> List All Permission</a>
            <div class="clearfix"></div>
          </div>
          <hr/>
          <br/>
          <div class="panel-body" style="padding-bottom:0px;">
            <div class="col-md-12">
              <?php
              if(isset($permission_list) and sizeof($permission_list)>0) {
                ?>
                <table id="example2" class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>S/N</th>
                      <th>Name</th>
                      <th>Controller</th>
                      <th>Action</th>
                      <th>Description</th>
                      <th>Created at</th>
                      <th>Task</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $sn = 0;
                    foreach ($permission_list as $list) {
                      ?>
                      <tr>
                        <td style="width:0px;"><?php echo ++$sn; ?></td>
                        <td><?php echo $list['display_name']; ?></td>
                        <td><?php echo $list['controller_name']; ?></td>
                        <td><?php echo $list['action_name']; ?></td>
                        <td><?php echo $list['discription']; ?></td>
                        <td><?php echo $list['created_at']; ?></td>

                        <td>
                          <div class="btn-group">
                            <a href="<?php echo base_url(); ?>permission/set_up/<?php echo $list['id']; ?>" class="btn btn-default btn-xs" title="Edit details">
                              <i class="fa fa-pencil"></i> Edit
                            </a>
                            <a href="<?php echo base_url(); ?>permission/delete/<?php echo $list['id']; ?>" class="btn btn-danger btn-xs" title="Delete details" onclick="return confirm('Are you sure want to delete this permission?')">
                              <i class="fa fa-trash"></i> Delete
                            </a>
                          </div>
                        </td>
                      </tr>
                    <?php } ?>

                  </tbody>
                </table>
              <?php }
              else {
                print '<div class="alert alert-info"><i class="fa fa-info-circle"></i> No User has been set.</div><br />';
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
