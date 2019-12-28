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
          <h2>Add Category</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <?php  if($error=$this->session->flashdata('msg')):  ?>
          <div class="row">
            <div class="col-lg-6">
              <div class="alert alert-danger">
                <?= $error; ?>
              </div>
            </div>
          </div>

        <?php endif; ?>
        <div class="x_content">
          <br />
          <?php echo form_open('admin/addcategoryvalue', 'class="form-horizontal form-label-left" id="demo-form2"');?>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Name<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?php echo form_input(['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Enter Category Name','name'=>'category_name','value'=>set_value('category_name')]);  ?>
              <?php  echo form_error('category_name');  ?>
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