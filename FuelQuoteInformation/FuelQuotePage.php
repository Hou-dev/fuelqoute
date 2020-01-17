<?php
  require_once('../mysql-connect.php');

  $query = "SELECT * FROM profile";

  $response = @mysqli_query($dbc,$query);

  if($response)
  {
    echo"WE GOT A RESPONSE";
  }

  while($row = mysqli_fetch_array($response))
  {
    echo $row['Email'].'<br>'.$row['FName'].'<br>'.$row['LName'].'<br>'.$row['Address'].'<br>'.$row['City'].'<br>'.$row['ID_State'].'<br>'.$row['Zipcode'].'<br>';
  }

  mysqli_close($dbc);

  session_start();

  if(!isset($_SESSION['email']))
  {
    header("Location: ../Login-SignUp/loginPage.php");
    exit();
  }

  $email = $_SESSION['email'];

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/fuelStyle.css">
    <title>Fuel Quote Page</title>
  </head>
  <body>
    <header id="MainHeader">
      <div class="container">
        <h1>Fuel Quote Information</h1>
      </div>
    </header>
    <nav class="navbar">
      <div class="container">
        <ul>
          <li><a href="../ProfilePage/profile.php">Profile</a></li>
          <li><a href="#">Fuel Quote Information</a></li>
          <li><a href="../Login-SignUp/logout.php">Log Out</a></li>
        </ul>
      </div>
    </nav>
    <section id="FuelQuoteFormDiv">
      <div class="containerForm">
        <header>
          <h2>Fuel Quote Form</h2>
        </header>
        <form class="FuelQuoteForm" action="fuelquote.php" method="post">
          <label for="FuelQuoteForm">Gallons Requesting:</label>
          <input type="number" name="GRequesting" min="1" max="999" required>
          <br>
          <label for="FuelQuoteForm">Delivery Date:</label>
          <input type="date" name="DDate" value="" required>
          <br>
          <label for="FuelQuoteForm">Delivery Address:</label>
          <label for="FuelQuoteForm">Taken from Client Profile</label>
          <br>
          <label for="FuelQuoteForm">Suggested Price:</label>
          <label for="FuelQuoteForm">
            <?php
              if(!isset($_SESSION['GRequesting']))
              {
                echo "Calculated by pricing module";
              }
              else if(isset($_SESSION['GRequesting']))
              {
                echo "100$";
              }
             ?>
            </label>
          <br>
          <label for="FuelQuoteForm">Total Amount Due:</label>
          <label for="FuelQuoteForm">Caclculated (Gallons * Price)</label>
          <br>
          <input type="submit" name="" value="Submit">
        </form>
      </div>
    </section>
    <section id="FuelQuoteHistoryDiv">
      <div class="headerContainer">
        <header>
          <h2>Fuel Quote History</h2>
        </header>
      </div>
      <div class="containerFormHistory">
        <table id="Table">
          <thead>
            <tr>
              <th>Index</th>
              <th>Gallons Requested</th>
              <th>Delivery Date</th>
              <th>Delivery Address</th>
              <th>Suggested Price</th>
              <th>Total Amount Due</th>
            </tr>
          </thead>
          <!-- <tbody>
            <tr>
              <td>1</td>
              <td>14</td>
              <td>12/24/1998</td>
              <td>11203 Bexley Dr</td>
              <td>$13.77</td>
              <td>$14.00</td>
            </tr>
            <tr>
              <td>2</td>
              <td>28</td>
              <td>12/24/1998</td>
              <td>11203 Bexley Dr</td>
              <td>$30.00</td>
              <td>$33.21</td>
            </tr>
            <tr>
              <td>3</td>
              <td>32</td>
              <td>12/24/1998</td>
              <td>11203 Bexley Dr</td>
              <td>$35.00</td>
              <td>$37.25</td>
            </tr>
            <tr>
              <td>4</td>
              <td>5</td>
              <td>12/24/1998</td>
              <td>11203 Bexley Dr</td>
              <td>$7.25</td>
              <td>$8.00</td>
            </tr>
            <tr>
              <td>5</td>
              <td>10</td>
              <td>12/24/1998</td>
              <td>11203 Bexley Dr</td>
              <td>$12.37</td>
              <td>$15.00</td>
            </tr>
            <tr>
              <td>6</td>
              <td>10</td>
              <td>12/24/1998</td>
              <td>11203 Bexley Dr</td>
              <td>$12.37</td>
              <td>$15.00</td>
            </tr>
            <tr>
              <td>7</td>
              <td>10</td>
              <td>12/24/1998</td>
              <td>11203 Bexley Dr</td>
              <td>$12.37</td>
              <td>$15.00</td>
            </tr>
            <tr>
              <td>8</td>
              <td>10</td>
              <td>12/24/1998</td>
              <td>11203 Bexley Dr</td>
              <td>$12.37</td>
              <td>$15.00</td>
            </tr>
          </tbody> -->
        </table>
        <?php
        echo '<p style="text-align:center;margin-top:45px;margin-bottom:50px;font-size:18px;font-family:Tahoma,Helvetica,sans-serif;">No Fuel Quote History</p>'
         ?>
      </div>
    </section>
    <footer class="mainFooter">
      <p>Copyright &copy; 2019 Software Design Project</p>
    </footer>
    <script type="text/javascript" src="scripts/main.js"></script>
  </body>
</html>
