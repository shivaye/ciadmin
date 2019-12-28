<?php include('sidebar.php');?>

<!-- top navigation -->
<?php include('header.php');?>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Manage Profile</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>

        <div class="x_content">
          <br />
            <?php echo form_open('admin/profile_update', 'class="form-horizontal form-label-left" id="demo-form2"');?>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Name<span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
               <?php echo form_input(['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Enter Name','name'=>'name','value'=>set_value('name',$details->name)]);  ?>
               <?php  echo form_error('name');  ?>
             </div>
           </div>
           <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?php echo form_input(['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Enter Email','name'=>'email','value'=>set_value('email',$details->email)]);  ?>
              <?php  echo form_error('email');  ?>
           </div>
         </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phone<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?php echo form_input(['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Enter Phone','name'=>'phone','value'=>set_value('phone',$details->phone)]);  ?>
              <?php  echo form_error('phone');  ?>
           </div>
         </div>
         <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?php echo form_upload(['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Upload Image','name'=>'img','value'=>set_value('img')]);  ?>
           </div>
         </div>
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select id="event-status" name="status" required="required" class="form-control col-md-7 col-xs-12">
              <option value='1'>Active</option>
              <option value='0'>Deactive</option>
            </select>
          </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
           <?php  echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']);  ?>
             <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-success','value'=>'Submit']);  ?>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
</div>

</div>
<!-- /page content -->

<!-- footer start -->
<?php include("footer.php");?>
<!-- footer end -->