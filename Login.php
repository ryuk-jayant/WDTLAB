<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4>Login to Flower Shop</h4>
        </div>
        <div class="card-body">
          <form action="functions/login.php" method="POST">
            <div class="form-group">
              <label for="username">Username:</label>
              <input name="uname" type="text" class="form-control" id="username" placeholder="Enter your Username" required>
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input name="pwd" type="password" class="form-control" id="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary">LogIn</button>
          </form>
          <p>New here then <a href="./registration.php">register</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS and Popper.js CDN (required for Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
