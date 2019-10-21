<?php  session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
 
  <link rel="stylesheet" href="./css.css">
  <link rel="stylesheet" href="./mix&match.css">
  <meta charset="utf-8">
  <title>Men Mix & Match</title>
  <style media="screen">
    body {
      background-color: #FAF8F6;
    }

    img {
      width: 80px;
      height: 80px;
    }
  </style>
</head>

<body>
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


  <div class="content">
    <h1>Mix & Match</h1>
  </div>
  <form name="form1" method="post" action="save_men.php">
    <div class="choose">
      <TABLE>
        <tr>
          <td>
            <TABLE border=2>
              <caption>shirts</caption>
              <tr>
                <td>
                  <label for="shirt1">
                    <img class="img" src="image/men/shirt/shirt1.jpg" />
                  </label>
                  <input type="radio" id="shirt1" name="shirt" value="1" required/>
                </td>
                <td>
                  <label for="shirt2">
                    <img class="img" src="image/men/shirt/shirt2.jpg" />
                  </label>
                  <input type="radio" id="shirt2" name="shirt" value="2" />
                </td>
                <td>
                  <label for="shirt3">
                    <img class="img" src="image/men/shirt/shirt3.jpg" />
                  </label>
                  <input type="radio" id="shirt3" name="shirt" value="3" />
                </td>
              </tr>
              <tr>
                <td>
                  <label for="shirt4">
                    <img class="img" src="image/men/shirt/shirt4.jpg" />
                  </label>
                  <input type="radio" id="shirt4" name="shirt" value="4" />
                </td>
                <td>
                  <label for="shirt5">
                    <img class="img" src="image/men/shirt/shirt5.jpg" />
                  </label>
                  <input type="radio" id="shirt5" name="shirt" value="5" />
                </td>
                <td>
                  <label for="shirt6">
                    <img class="img" src="image/men/shirt/shirt6.jpg" />
                  </label>
                  <input type="radio" id="shirt6" name="shirt" value="6" />
                </td>
              </tr>
              <tr>
                <td>
                  <label for="shirt7">
                    <img class="img" src="image/men/shirt/shirt7.jpg" />
                  </label>
                  <input type="radio" id="shirt7" name="shirt" value="7" />
                </td>
                <td>
                  <label for="shirt8">
                    <img class="img" src="image/men/shirt/shirt8.jpg" />
                  </label>
                  <input type="radio" id="shirt8" name="shirt" value="8" />
                </td>
                <td>
                  <label for="shirt9">
                    <img class="img" src="image/men/shirt/shirt9.jpg" />
                  </label>
                  <input type="radio" id="shirt9" name="shirt" value="9" />
                </td>
              </tr>
            </TABLE>
          </td>

          <td>
            <TABLE border=2>
              <caption>pants</caption>
              <tr>
                <td>
                  <label for="pant1">
                    <img class="img" src="image/men/pant/pant1.jpg" />
                  </label>
                  <input type="radio" id="pant1" name="pant" value="1" required/>
                </td>
                <td>
                  <label for="pant2">
                    <img class="img" src="image/men/pant/pant2.jpg" />
                  </label>
                  <input type="radio" id="pant2" name="pant" value="2" />
                </td>
                <td>
                  <label for="pant3">
                    <img class="img" src="image/men/pant/pant3.jpg" />
                  </label>
                  <input type="radio" id="pant3" name="pant" value="3" />
                </td>
              </tr>
              <tr>
                <td>
                  <label for="pant4">
                    <img class="img" src="image/men/pant/pant4.jpg" />
                  </label>
                  <input type="radio" id="pant4" name="pant" value="4" />
                </td>
                <td>
                  <label for="pant5">
                    <img class="img" src="image/men/pant/pant5.jpg" />
                  </label>
                  <input type="radio" id="pant5" name="pant" value="5" />
                </td>
                <td>
                  <label for="pant6">
                    <img class="img" src="image/men/pant/pant6.jpg" />
                  </label>
                  <input type="radio" id="pant6" name="pant" value="6" />
                </td>
              </tr>
              <tr>
                <td>
                  <label for="pant7">
                    <img class="img" src="image/men/pant/pant7.jpg" />
                  </label>
                  <input type="radio" id="pant7" name="pant" value="7" />
                </td>
                <td>
                  <label for="pant8">
                    <img class="img" src="image/men/pant/pant8.jpg" />
                  </label>
                  <input type="radio" id="pant8" name="pant" value="8" />
                </td>
                <td>
                  <label for="pant9">
                    <img class="img" src="image/men/pant/pant9.jpg" />
                  </label>
                  <input type="radio" id="pant9" name="pant" value="9" />
                </td>
              </tr>
            </TABLE>
          </td>

          <td>
            <TABLE border=2>
              <caption>shoes</caption>
              <tr>
                <td>
                  <label for="shoe1">
                    <img class="img" src="image/men/shoe/shoe1.jpg" />
                  </label>
                  <input type="radio" id="shoe1" name="shoe" value="1" required/>
                </td>
                <td>
                  <label for="shoe2">
                    <img class="img" src="image/men/shoe/shoe2.jpg" />
                  </label>
                  <input type="radio" id="shoe2" name="shoe" value="2" />
                </td>
                <td>
                  <label for="shoe3">
                    <img class="img" src="image/men/shoe/shoe3.jpg" />
                  </label>
                  <input type="radio" id="shoe3" name="shoe" value="3" />
                </td>
              </tr>
              <tr>
                <td>
                  <label for="shoe4">
                    <img class="img" src="image/men/shoe/shoe4.jpg" />
                  </label>
                  <input type="radio" id="shoe4" name="shoe" value="4" />
                </td>
                <td>
                  <label for="shoe5">
                    <img class="img" src="image/men/shoe/shoe5.jpg" />
                  </label>
                  <input type="radio" id="shoe5" name="shoe" value="5" />
                </td>
                <td>
                  <label for="shoe6">
                    <img class="img" src="image/men/shoe/shoe6.jpg" />
                  </label>
                  <input type="radio" id="shoe6" name="shoe" value="6" />
                </td>
              </tr>
              <tr>
                <td>
                  <label for="shoe7">
                    <img class="img" src="image/men/shoe/shoe7.jpg" />
                  </label>
                  <input type="radio" id="shoe7" name="shoe" value="7" />
                </td>
                <td>
                  <label for="shoe8">
                    <img class="img" src="image/men/shoe/shoe8.jpg" />
                  </label>
                  <input type="radio" id="shoe8" name="shoe" value="8" />
                </td>
                <td>
                  <label for="shoe9">
                    <img class="img" src="image/men/shoe/shoe9.jpg" />
                  </label>
                  <input type="radio" id="shoe9" name="shoe" value="9" />
                </td>
              </tr>
            </TABLE>
          </td>
        </tr>
      </TABLE>
    </div>
  <div>
    <div class="left">
      <a href="mix&match.php" class="button-back">Back</a>
    </div>

    <div class="right">
      <button class="button-mix" name="submit">Mix&Match</button>
    </div>
  </div>
  </form>
  <?php

  //   include("config.php");
  //   $gender = "men";
  //
  //  $strSQL = "INSERT INTO uniform (gender) VALUES ($gender)";
  //   $objQuery = mysqli_query($objCon,$strSQL);
  // mysqli_close($objCon);
     ?>


</body>

</html>
