<?php
include "head.php";
include "config.php";
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
       <input type="button" class="logout" name="logout" value="log-out"></a>
      </span>
    </div>
  </div>
</nav>
</section>


<div class=" container position-absolute top-50 start-50 translate-middle">
    
    <div class="row">
        <div class="col-md-6 text-white">
            <h3>Deduct Amount</h3>
            <form action="withdrawl.php" method="post">
                <div class="form-group">
                    <label for="amount">Amount to Deduct:</label>
                    <input type="number" class="form-control mb-3" id="amount" name="amount" placeholder="Enter amount">
                </div>
                <button type="submit" class="btn btn-primary">Deduct</button>
            </form>
        </div>
      
</div>
<?php



if(isset($_POST['amount'])) {
    

    
    session_start();

   
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT user_amount FROM user WHERE user_id = $user_id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $balance = $row['user_amount'];
    } else {
        echo "Error: Unable to fetch balance.";
        exit;
    }

    $amount = $_POST['amount'];
    if ($amount <= $balance) {
        $balance -= $amount;


        $sql = "UPDATE user SET user_amount = $balance WHERE user_id = $user_id";
        if (mysqli_query($conn, $sql)) {
           echo "Amount deducted successfully.'<br>' New balance: $balance";
        } else {
            echo "Error updating balance:" . mysqli_error($conn);
        }
    } else {
        echo "Insufficient balance.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>