<?php
  session_start();

  if(isset($_SESSION['email']))
  {
    session_destroy();
  }
 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title>[Insert Company Name]-Home Page</title>
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
                <li><a href="#">Home</a></li>
            </ul>
        </div>
    </nav>

    <!-- learned clickable tags from
        https://www.w3schools.com/howto/howto_js_tabs.asp -->
    <!-- The Links to the Tabs -->
    <div id="Login/signup" class="tab">
        <button class="tablinks" onclick="openTab(event, 'Login')">Login</button>
        <button class="tablinks" onclick="openTab(event, 'SignUp')">Sign Up</button>
    </div>


    <!-- Tab Content -->
    <form id="Login" class="tabcontent" method="POST" action="login.php">
        <!-- Begin Text Fields -->
        <label for="Email"><b>Email</b></label>
        <input type="text" name="email" placeholder="Enter Email" contenteditable="true" required>
        <br>

        <label for="Password"><b>Password</b></label>
        <input type="password" name="Password" placeholder="Enter Password" contenteditable="true" required>
        <br>

        <button type="submit">Login</button>
    </form>

    <form id="SignUp" class="tabcontent" method="POST">
        <!--  -->
        <label for="Email"><b>Email</b></label>
        <input type="text" name="newEmail" placeholder="Enter Email" contenteditable="true" required>
        <br>

        <!-- Company Name-->
        <label for="companyName"><b>Your Company's Name</b></label>
        <input type="text" name="company" placeholder="Enter your Company's Name" contenteditable="true" required>
        <br>

        <label for="Password"><b>Password</b></label>
        <input type="password" name="newPassword" placeholder="Enter Password" contenteditable="true" required>
        <br>

        <label for="Password"><b>Confirm Password</b></label>
        <input type="password" name="ConfirmPassword" placeholder="Enter Password Again" contenteditable="true" required>
        <br>

        <button type="submit">Sign Up</button>
    </form>


    <script>
        function openTab(evt, action) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            document.getElementById(action).style.display = "block";
            evt.currentTarget.className += " active";
        }

    </script>

    <br />

    <div class = "mainfooter">
        <footer>Copyright &copy; 2019 Software Design Project</footer>
    </div>
</body>
</html>
