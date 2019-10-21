<html>
<form name="form1" method="post" action="check_login1.php">

  <head>
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
        <div class="content">
          <b>WELCOME!</b>
          <br> Here you can share your style or can see other lifestyle
        </div>
      </div>
      <div class="box-right">
        <div class="content-right">
          <b>
            <font size="4">LogIn</font>
          </b>
          <br>
          <form method="post" action="check_login1.php">
            <div id="input">
              <input name="txtEmail" type="Email" id="txtEmail" placeholder="Email">
            </div>
            <div id="input2">
              <input name="txtPassword" type="Password" id="txtPassword" placeholder="Password">
            </div>

            <button class="button">LogIn</button>
          </form>
          <br>
          <font size="2"> Don't have an account?
            <a href="register.php">Sign Up</a>
          </font>
        </div>
      </div>
    </div>


</form>
</body>

</html>
