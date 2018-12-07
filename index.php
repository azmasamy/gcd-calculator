<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>GCD Calculator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <div class="d-flex justify-content-center align-items-center" style="height:600px;">
    <div class="container">
      <form role="form"  action="index.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="form-group col-lg-4">
            <label for="code">Enter first number:</label>
            <input type="number" name="a" class="form-control" />
          </div>
        </div>
        <div class="row">
          <div class="form-group col-lg-4 ">
            <label for="code">Enter second number:</label>
            <input type="number" name="b" class="form-control" />
          </div>
        </div>
        <div class="row">
          <div class="form-group col-lg-1 ">
            <input class="btn btn-primary"  type="submit" name="submit" value="Calculate GCD">
          </div>
        </div>


        <?php

        function GCD($num1, $num2) {
          /* finds the greatest common factor between two numbers */
          while ($num2 != 0){
            $t = $num1 % $num2;
            $num1 = $num2;
            $num2 = $t;
          }
          return $num1;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $a = $_POST['a'];
          $b = $_POST['b'];
          $gcd = GCD($a, $b);
          echo "<h2> GCD = " . $gcd . "</h2>";
        }

        ?>
      </div>
    </div>
  </body>
  </html>
