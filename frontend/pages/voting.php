<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/voting.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
<!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
<!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
    rel="stylesheet"/>
</head>
<body>

<?php
  if(isset($_GET['user'])) {
    $user = $_GET['user'];
  }
?> 
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">
                <img src="../assets/votlog.png" alt="Bootstrap Logo" width="50" height="50" class="d-inline-block align-text-top">
                <span class="align-middle" style="position:relative; top: 5px;"><strong>VoteWave</strong></span>
            </a>
            <div class="navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav custom-left"> 
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home &nbsp  &nbsp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Program &nbsp  &nbsp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Help &nbsp  &nbsp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./frontend/pages/contact.html">Contact &nbsp  &nbsp</a>
                    </li>
                </ul>
                <ul class="navbar-nav custom-right"> 
                <?php
                    echo "
                    <li class='nav-item'>
                    <div class='user'>Welcome $user</div>
                    </li>";
                    ?>

                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-primary" href="./frontend/pages/signup.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class ="hero">
        Your Vote is Secure, &nbsp   Your Vote Counts<br>
    </div>
    <div class="extras">You can vote for only one canditate</div>

    <div class="card card-cascade narrower" style="max-width: 250px; margin-left: 68rem; height:250px">
        <div class="view view-cascade overlay">
          <img class="card-img-top" src="../assets/team1.png"
            alt="Card image cap" style="max-width: 73%; max-height: 200px;">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body card-body-cascade" style="padding: 10px;">

          <h4 class="font-weight-bold card-title">TEATM</h4>
          <p class="card-text">TEATM party.</p>
          <a class="vote-btn">Vote</a>
        </div>
      </div>

      <div class="card card-cascade narrower" style="max-width: 250px; margin-left: 45rem; margin-top: -15.5rem; height:250px">
        <div class="view view-cascade overlay">
          <img class="card-img-top" src="../assets/team2.png"
            alt="Card image cap" style="max-width: 73%; max-height: 200px;">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body card-body-cascade" style="padding: 10px;">

          <h4 class="font-weight-bold card-title">NDENV</h4>
          <p class="card-text">NDENV party.</p>
          <a class="vote-btn">Vote</a>
        </div>
      </div>

      <div class="card card-cascade narrower" style="max-width: 250px; margin-left: 68rem; margin-top: 8rem; height:250px">
        <div class="view view-cascade overlay">
          <img class="card-img-top" src="../assets/team3.png"
            alt="Card image cap" style="max-width: 73%; max-height: 200px;">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body card-body-cascade" style="padding: 10px;">

          <h4 class="font-weight-bold card-title">2STAR</h4>
          <p class="card-text">2STAR party.</p>
          <a class="vote-btn">Vote</a>
        </div>
      </div>

      <div class="card card-cascade narrower" style="max-width: 250px; margin-left: 45rem; margin-top:-15.5rem; height:250px">
        <div class="view view-cascade overlay">
          <img class="card-img-top" src="../assets/team4.png"
            alt="Card image cap" style="max-width: 73%; max-height: 200px;">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body card-body-cascade" style="padding: 10px;">

          <h4 class="font-weight-bold card-title">NETE</h4>
          <p class="card-text">NETE party.</p>
          <a class="vote-btn">Vote</a>
        </div>
      </div>



      <div class="card card-cascade" style="max-width: 250px; height:250px; margin-top: -36rem; margin-left: 6rem;">
        <div class="view view-cascade overlay">
          <img class="card-img-top" src="../assets/user.jpg" alt="Card image cap" max-height: 150px;>
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body card-body-cascade text-center">
        <?php
        echo "
          <h4 class='card-title'><strong>$user</strong></h4>";
          ?>
          <h6 class="font-weight-bold indigo-text py-2">Your info will be kept confidential</h6>
          </div> 
      
</body>
</html>
