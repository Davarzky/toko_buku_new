<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Change Password</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
    background-color: #f8f9fa;
}
.login-container {
    margin-top: 100px;
}
.error-message {
    color: red;
}
</style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 login-container">
            <div class="card">
                <div class="navbar navbar-danger bg-danger ">
                    <p class="mt-2" style="color: white;">RUBAH PASSWORD</p>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_SESSION['error'])) {
                        echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error'] . '</div>';
                        unset($_SESSION['error']); 
                    }
                    if (isset($_SESSION['success'])) {
                        echo '<div class="alert alert-success" role="alert">' . $_SESSION['success'] . '</div>';
                        unset($_SESSION['success']); 
                    }
                    ?>
                    <form action="process_change.php" method="POST">
                        <div class="form-group">
                            <label for="password_lama">Password Lama</label>
                            <input type="password" class="form-control" id="password_lama" name="password_lama" placeholder="Enter old password" required>
                        </div>
                        <div class="form-group">
                            <label for="password_baru">Password Baru</label>
                            <input type="password" class="form-control" id="password_baru" name="password_baru" placeholder="Enter new password" required>
                        </div>
                        <div class="form-group">
                            <label for="konfir_password">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="konfir_password" name="konfir_password" placeholder="Confirm new password" required>
                        </div>
                        <button type="submit" class="btn btn-danger btn-block" name="change_password">CHANGE PASSWORD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
