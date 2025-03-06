<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AU Account Management</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        session_start();
        if (!isset($_SESSION['username'])) {
            header("Location: login.php");
            exit();
        }
    ?>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4 w-100">
            <!-- HEADER -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <h2 class="fw-bold text-uppercase text-primary mb-1">Welcome, 
                        <span class="text-dark"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                    </h2>
                    <p class="fw-bold text-dark mb-0">Account Type:
                        <span class="fw-semibold text-uppercase text-primary"><?php echo htmlspecialchars($_SESSION['usertype']); ?></span>
                    </p>
                </div>
                <a href="https://arellano.edu.ph" target="_blank" rel="noopener noreferrer">
                    <img src="img/logo.png" alt="Arellano University Logo" class="img-fluid logo">
                </a>
            </div>

            <hr>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="d-flex mb-3">
                <input type="text" name="search_query" class="form-control me-2 search-input" placeholder="Search Account">
                <button type="submit" name="btnsearch" class="btn btn-primary fw-semibold">Search</button>
            </form>

            <div class="mt-auto d-flex justify-content-between align-items-center">
             <a href="dashboard.php" class="btn btn-secondary fw-semibold">Back to Dashboard</a>
    
            <div class="d-flex gap-2">
             <a href="create-account.php" class="btn btn-success fw-semibold">Create Account</a>
             <a href="logout.php" class="btn btn-danger fw-semibold">Logout</a>
            </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
