
<div id="main-wrapper">
  <div class="col-md-12">

    <div class="page-title">
      <h3 class="breadcrumb-header">User Manager</h3>
      <h6>User Management | Set station users property</h6>
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
        <span class="pull-left"><a class="pull-right" href="<?php echo base_url(); ?>user/stationuser"><i class="fa fa-plus"></i> Set Users Station property</span>
          <a class="pull-right" href="<?php echo base_url(); ?>user/userlist"><i class="fa fa-th"></i> List All User</a>
          <div class="clearfix"></div>
        </div>
        <hr/>
        <br/>

        <div class="panel-body">
          <div class="col-md-12">
            <?php echo form_open('user/statusersubmit', array('class' => 'form-horizontal form-label-left', 'id'=>'demo-form2')); ?>

            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12 text-right">Station <b class="text-danger">*</b></label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select required id="allstation" name="allstation" class="js-source-states form-control" style="width: 100%">
                  <option value="">Select Station</option>
                  <?php
                  foreach($station_list as $list)
                  {
                    echo '<option value="'.$list['id'].'">'.$list['station_name'].'</option>';
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
                    echo '<option value="'.$list['id'].'">'.$list['name'].'</option>';
                  }
                  ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <a href="<?php echo base_url(); ?>user/stationuser" class="btn btn-warning"><i class="fa fa-history"></i> Cancel</a>&nbsp; &nbsp;
                <button type="submit" id="target-form" class="all-form btn btn-success"><i class="fa fa-check"></i> Add user property</button>
              </div>
            </div>
          </form>
        </div>
      </div>
