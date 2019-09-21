<head>
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">
</head>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign Up </h2>
    <!--h2 class="inactive underlineHover">Sign Up </h2-->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="<?php echo base_url('assets/a.gif'); ?>" style="width:75px;height:50px;" id="icon" alt="User Icon" />
      <br>
    </div>

    <!-- Login Form -->
    <form method="POST" action="<?php echo site_url('/register/enter_data') ?>" >
      <input type="text" id="fname" class="fadeIn second" name="fname" placeholder="First Name">
      <input type="text" id="lname" class="fadeIn second" name="lname" placeholder="Last Name">
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email">
      <input type="text" id="phone" class="fadeIn second" name="phone" placeholder="Contact Number">
      <input type="text" id="pass" class="fadeIn second" name="pass" placeholder="Passwrod">
      <input type="text" id="cpass" class="fadeIn third" name="cpass" placeholder="Confirm Password">
      <input type="submit" name="submit" class="fadeIn fourth" value="Sign Up">
    </form>


  </div>
</div>