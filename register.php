<?php include "head.php"; 
?>
<section>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/logo.png" width="80px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
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
       <a href="index.php"><input type="button" value="log-out"></a>
      </span>
    </div>
  </div>
</nav>
</section>


<div class="position-absolute top-50 start-50 translate-middle">
<form action="script.php" method="post">
<h2 class="mt-5 text-light text-center">COSTUMER register </h2>
<div class="container px-4 text-center">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3"><div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="r-email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text text-light mb-3">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" name="r-name" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">contact no.</label>
    <input type="text" name="r-contact" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">Pan card no.</label>
    <input type="text" name="r-pan" class="form-control" id="exampleInputPassword1">
  </div>
  </div>
    </div>
    <div class="col">
      <div class="p-3"><div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">ATM no.</label>
    <input type="text"name="r-atm" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text"name="r-address" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">Amount</label>
    <input type="text"name="r-amount" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">password</label>
    <input type="password"name="r-password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-1">
    <label for="exampleInputPassword1" class="form-label">confirm password</label>
    <input type="password"name="confirmpassword" class="form-control" id="exampleInputPassword1">
  </div> <button type="submit" name="create" class="btn btn-primary">create</button>
</form>
</div></div>
    </div>
  </div>
</div>  

  
  
  
</div>