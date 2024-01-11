<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'functions/session.php';
    include 'functions/Conc.php';
    $uname=$_SESSION['username'];
    ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Flower Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#features">Add flower</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#features">View flowers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">view Users</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Hero Section -->
<div class="jumbotron text-center">
  <?php echo "<h1 class='display-4'>Welcome $uname</h1>"; ?>
  <p class="lead">Control Your Shop with amazing features offered.</p>
  <a class="btn btn-primary btn-lg" href="#features" role="button">View Flowers</a>
</div>

<!-- view flower Section -->
<section id="features" class="container mt-5">
  <div class="row">
   
      <h2>View Flowers</h2>
      <table class="table">
    <thead>
      <tr>
        <th scope="col">Fid</th>   
        <th scope="col">Flower Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">FLower Code</th>
        <th scope="col">Option</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $cmd="SELECT * FROM flower";
    $res=mysqli_query($conn,$cmd);
    while($rec=mysqli_fetch_assoc($res)){
        echo "<tr>";
        echo "<td>$rec[fid]</td>";
        echo "<td>$rec[fname]</td>";
        echo "<td>$rec[fqunatity]</td>";
        echo "<td>$rec[fcode]</td>";
        echo "<td><button tooltip='Delete Flower'><a href='./functions/del_flower.php?fid=$rec[fid]'>❌</a></button></td>";
        echo "</tr>";
    }
    ?>
    </tbody>
  </table> 
  </div>
</section>

<!-- view User Section -->
<section id="about" class="bg-light py-5">
  <div class="container">
  <h2>View Users</h2>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Uid</th>   
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Username</th>
        <th scope="col">Is Blocked?</th>
        <th scope="col">Options</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $cmd="SELECT * FROM user";
    $res=mysqli_query($conn,$cmd);
    while($rec=mysqli_fetch_assoc($res)){
        echo "<tr>";
        echo "<td>$rec[uid]</td>";
        echo "<td>$rec[fname]</td>";
        echo "<td>$rec[lname]</td>";
        echo "<td>$rec[email]</td>";
        echo "<td>$rec[username]</td>";
        if($rec['Block']=="0"){echo "<td>No</td>";
          echo "<td><button><a href='./functions/Block_user.php?uid=$rec[uid]'>🚫</a></button></td>";}
        else{echo "<td>Yes</td>";
          echo "<td><button tooltip='Unblock user'><a href='./functions/Unblock_user.php?uid=$rec[uid]'>✔️</a></button></td>";}
        
        echo "<td><button>❌</button></td>";
        echo "</tr>";
    }
    ?>
    </tbody>
  </table>
  </div>
</section>

<!-- add flower Section -->
<section id="contact" class="container mt-5">
  <h2>Add Flowers</h2>
  <form action="./functions/add_flower.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="fname" id="name" placeholder="Enter name of flower" required>
    </div>
    <div class="form-group">
      <label for="email">Quantity</label>
      <input type="text" class="form-control" name="fquant" id="email" placeholder="Enter Quantity" required>
    </div>
    <div class="form-group">
      <label for="exampleSelect">Select Flower Code:</label>
      <select class="selectpicker form-control" name="fcode" data-live-search="true">
        <option>Gen 1</option>
        <option>Gen 2</option>
        <option>Gen 3</option>
        <option>Gen 4</option>
        <option>Gen 5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="file">Image</label>
      <input type="file" class="form-control" name="fimg" id="file" placeholder="Upload your file" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</section>

<!-- Bootstrap JS and Popper.js CDN (required for Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
