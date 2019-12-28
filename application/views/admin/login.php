<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin login</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url();?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo base_url();?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo base_url();?>/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="<?php echo base_url();?>/vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?php echo base_url();?>build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <?php echo form_open('Login/login'); ?>
          <?php  if($error=$this->session->flashdata('Login_failed')):  ?>
            <div class="row">
              <div class="col-lg-6">
                <div class="alert alert-danger">
                  <?= $error; ?>
                </div>
              </div>
            </div>

          <?php endif; ?>
          <h1>Admin Login</h1>
          <div>
            <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Email','name'=>'email','value'=>set_value('email')]);  ?>
            <?php  echo form_error('email');  ?>
          </div>
          <div>
           <?php  echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter Password','name'=>'pass','value'=>set_value('pass')]); ?>
           <?php  echo form_error('pass');  ?>
         </div>
         <div>
          <!-- <a class="btn btn-default submit" href="index.html">Log in</a> -->
          <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Submit']);  ?>
          <a class="reset_pass" href="#">Lost your password?</a>
        </div>

        <div class="clearfix"></div>

        <div class="separator">
          <p class="change_link">New to site?
            <!-- <a href="#signup" class="to_register"> Create Account </a> -->
            <?php echo anchor('admin#signup', 'Create Account', 'class="to_register"') ?>
          </p>

          <div class="clearfix"></div>
          <br />

          <!-- <div>
            <h1><i class="fa fa-paw"></i> Admin Panel</h1>
            <p>©2019 All Rights Reserved. Admin Panel. Privacy and Terms</p>
          </div> -->
        </div>
      </form>
    </section>
  </div>

  <div id="register" class="animate form registration_form">
    <section class="login_content">
      <form>
        <h1>Create Account</h1>
        <div>
          <input type="text" class="form-control" placeholder="email" required="" />
        </div>
        <div>
          <input type="email" class="form-control" placeholder="Email" required="" />
        </div>
        <div>
          <input type="password" class="form-control" placeholder="Password" required="" />
        </div>
        <div>
          <a class="btn btn-default submit" href="index.html">Submit</a>
        </div>

        <div class="clearfix"></div>

        <div class="separator">
          <p class="change_link">Already a member ?
            <!-- <a href="#signin" class="to_register"> Log in </a> -->
             <?php echo anchor('admin#signin', 'Create Account', 'class="to_register"') ?>
          </p>
          <div class="clearfix"></div>
          <br />
          <!-- <div>
            <h1><i class="fa fa-paw"></i> Admin Panel</h1>
            <p>©2019 All Rights Reserved. Admin Panel. Privacy and Terms</p>
          </div> -->
        </div>
      </form>
    </section>
  </div>
</div>
</div>
</body>
</html>
