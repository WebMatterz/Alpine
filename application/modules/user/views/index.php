<div id="main-wrapper">
  <div class="col-md-12">

    <div class="page-title">
      <h3 class="breadcrumb-header">User Manager</h3>
      <h6>User Management | <a href="<?php echo base_url(); ?>user/index">Add new users</a></h6>
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

          <!-- Nav tabs -->

            <br/>
            <?php echo form_open('user/usrsubmit', array('class' => 'form-horizontal form-label-left', 'id'=>'demo-form2')); ?>
            <div class="col-md-6">
              <div class="panel-body basic-form-panel">
                <div class="form-group">
                  <label for="usercode">Staff Id</label>
                  <input type="text" class="form-control" id="usercode" name="usercode" placeholder="Staff Id">
                </div>
                <div class="form-group">
                  <label for="staffname">Name</label>
                  <input type="text" class="form-control" id="staffname" name="staffname" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="emailaddress">Email</label>
                  <input type="email" class="form-control" id="emailaddress" name="emailaddress" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="admin">Administrator</label>
                  <input type="text" class="form-control" id="admin" name="admin" placeholder="Administrator">
                </div>
              </div>

            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="usertype">User Type</label>
                <select required id="usertype" name="usertype" class="js-source-states form-control" style="width: 100%">
                  <option value="">Select User Type</option>
                  <option value="Directorate">Directorate</option>
                  <option value="Regional Coordinator">Regional Coordinator</option>
                  <option value="Station Head">Station Head</option>
                  <option value="Field Staff">Field Staff</option>
                </select>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
