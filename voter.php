<!DOCTYPE html>
<html lang="en" class="no-js">
<?php
include('includes/header.php');
?>

<body>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">User Login</h4>
                        <br>
                        <p class="text-muted para-desc mx-auto mb-1">Please log in to access Voting page.</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="login-process.php" method="post"> <!-- Replace "login-process.php" with your login processing script -->
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php
    include('includes/footer.php');
    ?>
</body>
</html>
