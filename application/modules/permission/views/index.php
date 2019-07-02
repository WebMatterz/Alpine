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

          <!-- Nav tabs -->

          <div role="tabpanel" class="tab-pane active fade in" id="tab21">
            <br/>
            <?php echo form_open('permission/perm_submit', array('class' => 'form-horizontal form-label-left', 'id'=>'demo-form2')); ?>
            <div class="col-md-6">
              <div class="panel-body basic-form-panel">
                <div class="form-group">
                  <label for="permname">Name</label>
                  <input type="text" class="form-control" id="permname" name="permname" placeholder="Permission name">
                </div>
                <div class="form-group">
                  <label for="display_name">Display Name</label>
                  <input type="text" class="form-control" id="display_name" name="display_name" placeholder="Display name">
                </div>
                <div class="form-group">
                  <label for="controller_name">Controller Name</label>
                  <input type="text" class="form-control" id="controller_name" name="controller_name" placeholder="Controller name">
                </div>
              </div>

            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="action_name">Action</label>
                <input type="text" class="form-control" id="action_name" name="action_name" placeholder="Action name">
              </div>
              <div class="form-group">
                <label for="discription">Description</label>
                <input type="text" class="form-control" id="discription" name="discription" placeholder="Description">
              </div>
              <div class="form-group">
                <label>Menu <b class="text-danger">*</b></label>
                <div>
                  <select required id="menu_id" name="menu_id" class="js-source-states form-control" style="width: 100%">
                    <option value="">Select Menu</option>
                    <option value="1">Analytics</option>
                    <option value="2">Manage Profile</option>
                    <option value="5">Taxes</option>
                    <option value="6">Targets</option>
                    <option value="7">User Management</option>
                    <option value="8">App Setting</option>
                  </select>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
          </form>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="tab22">

          <br/>

        </div>

      </div>

    </div>
  </div>
</div>
