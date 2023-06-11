<!DOCTYPE html>
<?php 
    include('connection.php');
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $query = "INSERT INTO `contactus` (`name`, `email`, `message`) VALUES ( '$name', '$email', '$message')";
        $result = mysqli_query($con,$query);
        if (!$result) {
            echo mysqli_error($con);
        }
        else{
         header("location:contact.php");
        }
    }
?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Business Casual - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
<style>
.on{
    color:white;

}
</style>

    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">A Free Bootstrap Business Theme</span>
                <span class="site-heading-lower">Business Casual</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="About.php">About</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="product.php">Products</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.php">Store</a></li>
						<li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="contact.php">Contact</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="login.php">Login</a></li>
						
                        
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section clearfix">
            <div class="container">
                <div class="row">
<div class="box">
<div class="col-lg-12">
<hr>
<h2 class="intro-text text-center" style="color:white" ><strong>Contact</stong> <strong>Form</strong></h2>
<hr>
<form  method="post" >
<class="row">
<div class="form-group col-lg-4">

<label class="on"><B><i>Name</B></i></label>
<input type="text" id="fname" maxlength="25" class="form-control" required="" name="name">
<span id="name" class="text-danger"></span>
</div>
<div class="form-group col-lg-4">
<label class="on"><i><b>Email Address</b></i></label>
<input type="Email" id="Email" maxlength="25" class="form-control" required="" name="email">
</div>
<div class="clearfix"></div>
<div class="form-group col-lg-12">
<label class="on"><B><i>Message</B></i></label>
<br>
<textarea class="form-group" rows="6" maxlength="500" required="" name="message"></textarea>
</div>
<div class="form-group col-lg-12">
<input type="hidden" name="save" value="contact">
<button type="submit" class="btn btn-info" name="submit"><B><i>Submit</B></i></button>
</form>
</div>
</div>

            </div>
        </section>
        <section class="bg-secondary">
        
        <p class="text-white text-center display-7">if you want to best service contact us now.</p>
        </section>
        <section class="bg-secondary">
        <h1 class="text-white text-center">Contact Us</h1>
        <h2 class="text-white text-center display-7">f2020027041@umt.edu.pk</h2>
        <h2 class="text-white text-center display-7" >aounr3292@gmail.com</h2>
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

