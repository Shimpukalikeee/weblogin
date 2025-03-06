<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - AU Technical Support</title>
    <link rel="icon" type="image/png" href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        session_start();
        if (isset($_POST['btnsubmit'])) {
            require_once "config.php";

            $sql = "SELECT * FROM tblaccounts WHERE username = ? AND password = ? AND status = 'ACTIVE'";
            
            if ($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "ss", $_POST['txtusername'], $_POST['txtpassword']);

                if (mysqli_stmt_execute($stmt)) {
                    $result = mysqli_stmt_get_result($stmt);

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['usertype'] = $row['usertype'];
                        header("Location: dashboard.php");
                        exit();
                    } else {
                        $error = "Incorrect login details or account is inactive.";
                    }
                } else {
                    $error = "Error executing login query.";
                }
            } else {
                $error = "ERROR on LOGIN SQL statement.";
            }
        }                              
    ?>

    <div class="login-container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-lg">
            <div class="text-center">
                <a href="https://www.arellano.edu.ph/" target="_blank">
                    <img src="img/logo.png" alt="AU Logo" class="login-logo mb-3">
                </a>
            </div>
            <h2 class="text-center text-primary fw-bold">Arellano University</h2>
            <h6 class="text-center fw-bold text-uppercase text-dark">Login to Your Account</h6> 
            <br>

            <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
            
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="mb-3">
                    <label class="form-label fw-semibold text-dark">Username</label>
                    <input type="text" name="txtusername" class="form-control login-input" placeholder="Enter your username" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold text-dark">Password</label>
                    <input type="password" name="txtpassword" class="form-control login-input" placeholder="Enter your password" required>
                </div>
                <div class="text-center">
                    <input type="submit" name="btnsubmit" value="Login" class="btn btn-primary w-100 fw-bold">
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
