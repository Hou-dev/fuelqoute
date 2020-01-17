<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
    echo "Data Processed<br/>";
    if(isset($_POST['GRequesting']))
    {
      if(isset($_POST['DDate']))
      {
        $gallonsRequested = $_POST['GRequesting'];
        $deliveryDate = $_POST['DDate'];
        $_SESSION['GRequesting'] = $gallonsRequested;
        $_SESSION['DDate'] = $deliveryDate;
        echo "Gallons Requested: ".$gallonsRequested."<br/>";
        echo "Want delivered by: ".$deliveryDate."<br/>";

        function priceModule($gRequested)
        {
          return $gRequested + 100;//just a dummy function to show where the actual code will be for the pricing module.
        }

        echo "Pricing Module: ".priceModule($gallonsRequested);

        $url = "FuelQuotePage.php";
        header("Location: ".$url);
        exit();
      }
    }
     ?>
  </body>
</html>
