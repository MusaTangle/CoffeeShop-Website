<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Perfect Cup</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <?php include 'header.php' ?>
        <section class="page-section clearfix">
            <div class="container" style="color: white;">
                <div class="row">
                   
                
                <?php
                    include('connection.php');
                  $query="SELECT * FROM brands";
                    $result=mysqli_query($con,$query);
                    $total=mysqli_num_rows($result);
                    while($row = mysqli_fetch_assoc($result)){
                     ?>
                      <div class="col-md-6">
                        <div class="panel panel-default">  </div>
                        <div class="panel panel-heading"><?php echo $row['name']; ?>   </div>
                        <div class="panel panel-body">
                            <img src="<?php echo $row['image']; ?>" width="80%">
                            <br>
                            <b>Description</b>
                            <p><?php echo $row['description']?></p>
                       </div>
                        
                    </div>
                     <?php
                    }?>
                    </div>
            </div>
        </section>
      
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
