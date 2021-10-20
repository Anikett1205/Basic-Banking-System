<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color :#FDE0DA;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                <h2 style = "color :black; margin-bottom:40px; ">Basic Banking System </h2>
                  <h3>Welcome to</h3>
                  <h1 style = "color :#FD3656; ">SPARK BANK</h1>
                 <!--<img src="img/s.png" class="img-fluid pt-2" style ="height : 150px;">-->
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="bank.jpg" class="img-fluid pt-2"  style ="height : 300px;">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center" style="background-color : ;">
                  <div class="col-md act">
                    <img src="user.jpg" class="img-fluid" style ="height : 200px; margin-top: 50px;">
                    <br>
                    <a href="createuser.php"><button style="background-color : #FD3656 ; margin-top: 50px;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="atm.jpg" class="img-fluid" style ="height : 200px; margin-top: 50px;">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #FD3656 ; margin-top: 50px; ">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="history.jpg" class="img-fluid" style ="height : 200px; margin-top: 50px;">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #FD3656 ; margin-top: 50px;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>ANIKET BAGADE</b> <br> The Spark Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>