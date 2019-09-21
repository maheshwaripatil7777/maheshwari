<head>
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">
</head>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    <!--h2 class="inactive underlineHover">Sign Up </h2-->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="<?php echo base_url('assets/a.gif'); ?>" style="width:75px;height:50px;" id="icon" alt="User Icon" />
      <br>
    </div>

    <!-- Login Form -->
    <form action="<?php echo site_url('login/check'); ?>" method="POST">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
      <input type="text" id="password" class="fadeIn third" name="pass" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="<?php echo site_url('register/ui') ?>">Sign Up</a>
    </div>

  </div>
</div>