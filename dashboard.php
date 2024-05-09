<?php
include "head.php";
include "config.php";
session_start();
 $sessionemail = $_SESSION['email'];
 $sql = "select * from user where user_email='$sessionemail'";
 $data = mysqli_query($conn,$sql);
 foreach($data as $row){
   $uname= $row['user_name'];
 }
?>

<section>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="80px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="register.php">register</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="costumer-details.php">costumer details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.onlinesbi.sbi/sbijava/Terms_of_Use.html" target="_blank">Bank-details</a>
        </li>
      </ul>
      <span class="navbar-text">
       <a href="index.php"><input type="button" name="logout" class="logout" value="log-out"></a>
      </span>
    </div>
  </div>
</nav>
</section>

<section>
  <div>
    <h1 class=" mt-5 text-center dash">Welcome to the dashboard <?php echo $uname ;?></h1>
  </div>
</section>