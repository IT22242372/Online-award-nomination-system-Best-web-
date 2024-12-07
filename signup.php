<!DOCTYPE html>
<html lang="en" class="no-js">

<?php 

include('includes/header.php');

?>

<body>

<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm_password'];
    $img = $_FILES['img']['name'];
    $img_temp = $_FILES['img']['tmp_name'];
  
    move_uploaded_file($img_temp, "images/user/$img");

    if ($fname == "" || $lname == "" || $email == "" || $password == "" || $cpassword == ""||$img=="") {
        $msg = "Fields cannot be empty";
        echo "<script type='text/javascript'>alert('$msg');</script>";
    } else if ($cpassword !== $password) {
        $error = "Passwords do not match";
        echo "<script type='text/javascript'>alert('$error');</script>";
    } else {
        $password = md5($password);

        $query = "INSERT INTO users (firstname, lastname, email, password, image_path) ";
        $query .= "VALUES ('$fname', '$lname', '$email', '$password', '$img')";

        $msg = "Registration successful";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        echo "<script type='text/javascript'>
                setTimeout(function () {
                    window.location.href = 'signup.php'; 
                }, 1000); 
              </script>";
        
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die('Query Failed' . mysqli_error($conn));
        }
    }
}

?>
    
        <section class="vh-150" style="background: linear-gradient(to bottom, #229fff, #030c29);">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="login_page bg-white shadow rounded p-4">
                                    <div class="text-center">
                                        <h4 class="mb-4">Signup</h4>  
                                    </div>
                                    <form class="login-form" action="#" method="post" enctype="multipart/form-data">
                                            <div class="image-upload-container">
                                            <label for="profile-image" class="image-upload-label">
                                                <div class="image-preview">
                                                <img src="images/profile.png" alt="Profile Image" id="image-preview">
                                                </div>
                                                <div class="image-overlay">
                                                <div class="overlay-text">Add Image</div>
                                                </div>
                                                <input type="file" name="img"  id="profile-image" accept="image/*" class="image-upload-input" onchange="previewImage(event)" />
                                            </label>
                                            <br>
                                            <button type="button" class="btn btn-primary w-20" onclick="clearImage()">Clear Image</button>
                                            <br>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">
                                                <label for="firstname">First name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="First Name" id="firstname" name="firstname" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group position-relative">
                                                <label for="lastname">Last name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Last Name" id="lastname" name="lastname" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                <label for="email">Your Email <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                <label for="password">Password <span class="text-danger">*</span></label>
                                                <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                <label for="confirm_password">Confirm Password <span class="text-danger">*</span></label>
                                                <input type="password" class="form-control" placeholder="Confirm Password" id="confirm_password" name="confirm_password" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <div class="custom-control m-0 custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" name="submit" class="btn btn-primary w-100" id="registerButton">Register</button>
                                            </div>
                                            <div class="mx-auto">
                                                <p class="mb-0 mt-3"><small class="text-dark mr-2">Already have an account ?</small> <a href="Login.php" class="text-dark font-weight-bold">Sign in</a></p>
                                            </div>
                                            </div>
                                        </form>  

                                </div>
                            </div> <!--end col-->
                        </div><!--end row-->
                    </div> <!--end container-->
                </div>
            </div>
        </section><!--end section-->


        <!-- javascript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/plugins.js"></script>

        <!-- selectize js -->
        <script src="js/selectize.min.js"></script>

        <script src="js/jquery.nice-select.min.js"></script>

        <script src="js/app.js"></script>

        <script src="js/profileimage.js"></script>

    </body>

</html>