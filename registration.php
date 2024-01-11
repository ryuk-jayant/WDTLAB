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
          <h4>Registration Form</h4>
        </div>
        <div class="card-body">
          <form action="functions/register.php" method="POST">
            <div class="form-group">
              <label for="firstName">First Name:</label>
              <input name="fname" type="text" class="form-control" id="fname" placeholder="Enter your first name" required>
            </div>
            <div class="form-group">
              <label for="lastName">Last Name:</label>
              <input name="lname"  type="text" class="form-control" id="lastName" placeholder="Enter your last name" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label for="DOB">Date of Birth:</label>
              <input name="DOB" type="date" class="form-control" id="DOB" placeholder="" required>
            </div>
            <div class="form-group">
              <label for="username">Username:</label>
              <input name="uname" type="text" class="form-control" id="username" placeholder="Enter your Username" required>
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input name="pwd" type="password" class="form-control" id="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
          </form>
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
