<!DOCTYPE html>
<html lang="en">
<head>
    <title>Attendee Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Register as Attendee</h1>
        <form action="register_attendee.php" method="post">
            <div class="form-group mb-3">
                <input type="text" class="form-control" name="att_name" placeholder="Name" required>
            </div>
            <div class="form-group mb-3">
                <input type="email" class="form-control" name="att_email" placeholder="Email" required>
            </div>
            <div class="form-group mb-3">
                <div class="input-group">
                    <input type="password" class="form-control" name="att_password" id="att-password" placeholder="Password" required>
                    <button type="button" class="btn btn-outline-secondary" id="toggle-att-password">Show</button>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Register as Attendee">
            </div>
        </form>
    </div>
    <div id="login-modal" class="modal">
    <div class="modal-content">
        <span class="modal-close">&times;</span>
        <h3 class="modal-header">Login</h3>
        <form action="login.php" method="post">
            <div class="form-group mb-3">
                <label for="username">Username:</label>
                <input type="text" id="username" class="form-control" name="username" placeholder="Enter Username" required>
            </div>
            <div class="form-group mb-3">
                <label for="password">Password:</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>
</div>

</body>
</html>
