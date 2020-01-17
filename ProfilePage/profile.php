<?php
    include_once 'connection.php';
    session_start();

    if(!isset($_SESSION['email']))
    {
      header("Location: ../Login-SignUp/loginPage.php");
      exit();
    }

    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang=en>

<head>
    <link href="profileStyle.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php
    $sql = "SELECT * FROM `profile` WHERE `Email` = '$email'";
    $results = mysqli_query($con,$sql);
    $resultCheck = mysqli_num_rows($results);
    if($resultCheck>0){
        while($row = mysqli_fetch_assoc($results)){
            $FName = $row['FName'];
            $LName = $row['LName'];
            $Address = $row['Address'];
            $City = $row['City'];
            $ID_State = $row['ID_State'];
            $Zipcode = $row['Zipcode'];
            $Email = $row['Email'];
            $Profile = $row['ID_Profile'];

        }
    }
?>

    <div class="container">
        <div class="headercontainer">
            <div class="header">
                <h1>Profile Management Page</h1>
            </div>
        </div>

        <div class="topnav">
            <div class="navdiv">
                <ul>
                    <li><a class="active" href="#">Profile</a></li>
                    <li><a href="../FuelQuoteInformation/FuelQuotePage.php">Fuel Quote Information</a></li>
                    <li> <a href="../Login-SignUp/logout.php">Log Out</a></li>
                </ul>
            </div>
        </div>

        <div class="userform">
            <div class="header2">
                <h2>User Profile</h2>
            </div>

            <form align="center" method="post" action="error.php">
                <label for="fname">First Name</label>
                <input type="text" name="firstname" value="<?php echo $FName; ?>" contenteditable="true">
                <br>

                <label for="lname">Last Name</label>
                <input type="text" name="lastname" value="<?php echo $LName; ?>" contenteditable="true">
                <br>

                <label for="email">Email</label>
                <input type="text" name="email" value="<?php echo $Email; ?>" contenteditable="true">
                <br>

                <label for="address">Address</label>
                <input type="text" name="address" value="<?php echo $Address; ?>" contenteditable="true">
                <br>

                <label for="city">City</label>
                <input type="text" name="city" value="<?php echo $City; ?>" contenteditable="true">
                <br>

                <label for="state">State</label>
                <br>
                <select type="text" name = "state">
                    
                    <option <?php if ($ID_State == 52) echo 'selected="selected"'; ?> value=52>Alabama</option>
                    <option <?php if ($ID_State == 53) echo 'selected="selected"'; ?> value=53>Alaska</option>
                    <option <?php if ($ID_State == 54) echo 'selected="selected"'; ?> value=54>Arizona</option>
                    <option <?php if ($ID_State == 55) echo 'selected="selected"'; ?> value=55>Arkansas</option>
                    <option <?php if ($ID_State == 56) echo 'selected="selected"'; ?> value=56>California</option>
                    <option <?php if ($ID_State == 57) echo 'selected="selected"'; ?> value=57>Colorado</option>
                    <option <?php if ($ID_State == 58) echo 'selected="selected"'; ?> value=58>Connecticut</option>
                    <option <?php if ($ID_State == 59) echo 'selected="selected"'; ?> value=59>Delaware</option>
                    <option <?php if ($ID_State == 60) echo 'selected="selected"'; ?> value=60>District Of Columbia</option>
                    <option <?php if ($ID_State == 61) echo 'selected="selected"'; ?> value=61>Florida</option>
                    <option <?php if ($ID_State == 62) echo 'selected="selected"'; ?> value=62>Georgia</option>
                    <option <?php if ($ID_State == 63) echo 'selected="selected"'; ?> value=63>Hawaii</option>
                    <option <?php if ($ID_State == 64) echo 'selected="selected"'; ?> value=64>Idaho</option>
                    <option <?php if ($ID_State == 65) echo 'selected="selected"'; ?> value=65>Illinois</option>
                    <option <?php if ($ID_State == 66) echo 'selected="selected"'; ?> value=66>Indiana</option>
                    <option <?php if ($ID_State == 67) echo 'selected="selected"'; ?> value=67>Iowa</option>
                    <option <?php if ($ID_State == 68) echo 'selected="selected"'; ?> value=68>Kansas</option>
                    <option <?php if ($ID_State == 69) echo 'selected="selected"'; ?> value=69>Kentucky</option>
                    <option <?php if ($ID_State == 70) echo 'selected="selected"'; ?> value=70>Louisiana</option>
                    <option <?php if ($ID_State == 71) echo 'selected="selected"'; ?> value=71>Maine</option>
                    <option <?php if ($ID_State == 72) echo 'selected="selected"'; ?> value=72>Maryland</option>
                    <option <?php if ($ID_State == 73) echo 'selected="selected"'; ?> value=73>Massachusetts</option>
                    <option <?php if ($ID_State == 74) echo 'selected="selected"'; ?> value=74>Michigan</option>
                    <option <?php if ($ID_State == 75) echo 'selected="selected"'; ?> value=75>Minnesota</option>
                    <option <?php if ($ID_State == 76) echo 'selected="selected"'; ?> value=76>Mississippi</option>
                    <option <?php if ($ID_State == 77) echo 'selected="selected"'; ?> value=77>Missouri</option>
                    <option <?php if ($ID_State == 78) echo 'selected="selected"'; ?> value=78>Montana</option>
                    <option <?php if ($ID_State == 79) echo 'selected="selected"'; ?> value=79>Nebraska</option>
                    <option <?php if ($ID_State == 80) echo 'selected="selected"'; ?> value=80>Nevada</option>
                    <option <?php if ($ID_State == 81) echo 'selected="selected"'; ?> value=81>New Hampshire</option>
                    <option <?php if ($ID_State == 82) echo 'selected="selected"'; ?> value=82>New Jersey</option>
                    <option <?php if ($ID_State == 83) echo 'selected="selected"'; ?> value=83>New Mexico</option>
                    <option <?php if ($ID_State == 84) echo 'selected="selected"'; ?> value=84>New York</option>
                    <option <?php if ($ID_State == 85) echo 'selected="selected"'; ?> value=85>North Carolina</option>
                    <option <?php if ($ID_State == 86) echo 'selected="selected"'; ?> value=86>North Dakota</option>
                    <option <?php if ($ID_State == 87) echo 'selected="selected"'; ?> value=87>Ohio</option>
                    <option <?php if ($ID_State == 88) echo 'selected="selected"'; ?> value=88>Oklahoma</option>
                    <option <?php if ($ID_State == 89) echo 'selected="selected"'; ?> value=89>Oregon</option>
                    <option <?php if ($ID_State == 90) echo 'selected="selected"'; ?> value=90>Pennsylvania</option>
                    <option <?php if ($ID_State == 91) echo 'selected="selected"'; ?> value=91>Rhode Island</option>
                    <option <?php if ($ID_State == 92) echo 'selected="selected"'; ?> value=92>South Carolina</option>
                    <option <?php if ($ID_State == 93) echo 'selected="selected"'; ?> value=93>South Dakota</option>
                    <option <?php if ($ID_State == 94) echo 'selected="selected"'; ?> value=94>Tennessee</option>
                    <option <?php if ($ID_State == 95) echo 'selected="selected"'; ?> value=95>Texas</option>
                    <option <?php if ($ID_State == 96) echo 'selected="selected"'; ?> value=96>Utah</option>
                    <option <?php if ($ID_State == 97) echo 'selected="selected"'; ?> value=97>Vermont</option>
                    <option <?php if ($ID_State == 98) echo 'selected="selected"'; ?> value=98>Virginia</option>
                    <option <?php if ($ID_State == 99) echo 'selected="selected"'; ?> value=99>Washington</option>
                    <option <?php if ($ID_State == 100) echo 'selected="selected"'; ?> value=100>West Virginia</option>
                    <option <?php if ($ID_State == 101) echo 'selected="selected"'; ?> value=101>Wisconsin</option>
                    <option <?php if ($ID_State == 102) echo 'selected="selected"'; ?> value=102>Wyoming</option>
                </select>
                <br>
                
                <label for="zipcode">Zip Code</label>
                <input type="text" name="zipcode" value="<?php echo $Zipcode; ?>" contenteditable="true">
                <br>
            
                <input type="hidden" name="profile" value="<?php echo $Profile; ?>">


                <button type = "submit" class = "buttonStyle" name="submit">Submit</button>
                <button type = "reset" class= "buttonStyle" name="reset">Reset</button>
            </form>
            <?php
                $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


                if (strpos($fullurl,"profile=empty") == true){
                    echo "All fields are were not filled";

                }
                if((strpos($fullurl,"profile=inputlarge") == true)){
                    echo "Invaild input size, try a smaller size or contact the administrator";

                }

                if((strpos($fullurl,"profile=variable") == true)){
                    echo "Please use only letters";

                }

                if (strpos($fullurl,"profile=number") == true){
                    echo "Please use a number";

                }

                if (strpos($fullurl,"profile=email") == true){
                    echo "Please use a valid email address";

                }

                if (strpos($fullurl,"profile=ziplarge") == true){
                    echo "Please use a smaller zip code";

                }

                if (strpos($fullurl,"profile=duplicate") == true){
                    echo "Duplicate email address";

                }

                if (strpos($fullurl,"profile=success") == true){
                    echo "Update successful";

                }

            ?>
        </div>


        <div class="mainfooter">
            <footer>Copyright © 2019 Software Design Project</footer>
        </div>
    </div>

</body>

</html>
