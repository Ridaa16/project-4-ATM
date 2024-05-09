<?php 
include "head.php";

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/logo.png" width="80px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.onlinesbi.sbi/sbijava/Terms_of_Use.html"target="_blank">Bank-details</a>
        </li>
        
          
      </ul>
      <span class="navbar-text">
      <a class="nav-link" href="index.php">
            <input type="button" class="user-button"value="User-login">
          </a>
      </span>
    </div>
  </div>
</nav>

<div class="position-absolute top-50 start-50 translate-middle">
    <h1 class="text-center p-3 text-light">ADMIN LOG-IN </h1>
    <form action="script.php" method="post">
      <input type="hidden" name="status" id="" value='1'>
      
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
  <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary " name="adm-login">Login</button>
</form>
</div>