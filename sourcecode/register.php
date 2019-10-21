<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="./css.css">
  <link rel="stylesheet" href="./login.css">
</head>

<body>
<div>
      <ul>
        <li>
          <a class="logo" href="index.php">
            <b>
              <font size="4">Mixthy</font>
            </b>
          </a>
        </li>
        <li class="auth">
          <?php
        if(isset($_SESSION["click"])){?>
            <div>
              <span class="logo">
                <b>
                  <font size="4">
                    <?php echo $_SESSION["Username"];?>
                  </font>
                </b>
              </span>
              <a class="logo" href="logout.php">
                <b>
                  <font size="4">Log out</font>
                </b>
              </a>
            </div>
            <?php
        }
        else{?>
              <a class="logo" href="login.php">
                <b>
                  <font size="4">LogIn</font>
                </b>
              </a>
              <?php
        }
        ?>
        </li>
      </ul>
    </div>

<div class="box">
<div class="box-left">
<div class="content-logo">
<font size="10"><b>Mixthy</b></font>
        </div>
</div>
<div class="box-right">
      <form name="form1" method="post" action="save_register.php">
      <div class="content-register">
      <b>
            <font size="4">Sign Up</font>
          </b>
       <br><br>

          <div id="input-register">
            <input name="txtUsername" type="text" id="txtUsername" placeholder="Username">
          </div>
          <div id="input-register">
            <input name="txtEmail" type="Email" id="txtEmail" placeholder="Email">
          </div>
          <div id="input-register">
            <input name="txtPassword" type="password" id="txtPassword" placeholder="Password">
          </div>
          <div id="input-register">
            <input name="txtConPassword" type="password" id="txtConPassword" placeholder="Confirm Password">
          </div>
          <button class="button-register">Create Account</button>
          <br>
          <font size="2">You have an account
          <a href="login.php">Log In</a>
          </font>
          </div>

</div>
</div>
  </form>
</body>

</html>
