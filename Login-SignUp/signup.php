<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>Sign In Confirmation</title>
        <link rel="stylesheet" href="LogStyle.css">


    </head>
    <body>
        <header id="mainHeader">
            <div class="container">
                <h1>Log In/Sign Up</h1>
            </div>
        </header>

        <nav class="navbar">
            <div class="container">
                <ul>
                    <li><a href="loginPage.php">Back</a></li>
                </ul>
            </div>
        </nav>

    <?php
        $email = $_POST["Email"];
	    $name = $_POST["company"];
	    $pass = $_POST["Password"];
	    $Cpass = $_POST["ConfirmPassword"];

		$valid = 1;

        //email constraints
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			if(strlen($email)>50)
			{
				echo nl2br("Email is too long\n\n");
				$valid = 0;
			}
			else {
            //Check if it is unique
				echo nl2br("Email is valid\n\n");
			}
		}
		else {
			echo nl2br("Email isn't valid\n\n");
			$valid = 0;
		}


        //Company Name constraints
		if(strlen($name)>20)
		{
			echo nl2br("Company name too long\n\n");
			$valid = 0;
		}
        else{
            if(strlen($name)<4)
            {
                echo nl2br("Company name needs to be at least 4 characters");
            }
            else{
                //Check if it is unique
                echo nl2br("Company name is valid\n\n");
            }
         }

	    if($pass !== $Cpass)
	    {
            echo nl2br("Passwords don't match\n\n");
			$valid = 0;
            //Back to login page
        }
        else{
            if(strlen($pass)<6)
            {
                echo nl2br("Password must be at least 6 characters\n\n");
                $valid = 0;
            }
            else{
                if(strlen($pass)>20)
                {
                    echo nl2br("Password must be shorter than 20 characters\n\n");
                    $valid = 0;

                }
                else{
                    echo nl2br("Password is valid\n\n");
                }

            }

        }

        //Overall see if there were any errors, if no then save the data
        if($valid == 0)
		{
			echo nl2br("Try Signing up again\n\n");
		}
		else{
			echo nl2br("Log in to complete your signup process\n\n");
            //save info
		}
        $url = "loginPage.php";
        // header("Location: ".$url);

    ?>


    </body>
</html>
