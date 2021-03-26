<?php
include 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Forgot Password</title>
    <style>
        body {
            background-color:  rgba(241, 241, 241, 0.479);
            text-decoration-color: white;
        }
        .container{
            width: 500px;
        }
        .card {
            width: 500px;
            height: 320px;
        }
        .card-header {
            width: 500px;
        }
        .form-check a{
            margin-left: -20px;
        }
        .form-check button{
            margin-left: 150px;
        }
        .row h2{
            color: blue;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <form action="simpan.php" method="POST" name="formlforgotpw">
        <div class="container">
            <div class="row text-center" style="margin-top: 80px; margin-bottom: 50px;">
                <div class="col-md-12">
                    <h2> Chatime : Password Recovery</h2>
                    <h6>( Login yourself to get access )</h6>
                </div>
            </div>
            <div class="card">
                <form action="simpan.php" method="POST">
                    <h6 class="card-header bg-light">Enter your email address and we will send you <br> a link to reset your password.</h6>
                        <div class="form-group row">
                            <div class="card-body">
                            <section class="base">
                                <div class="form-group row justify-content-center mt-3">
                                    <!-- Email -->
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>

                                    <!-- Button -->

                                    <div class="form-check mt-4 mb-4">
                                        <a href="formlogin.php">Return to login</a>
                                        <button type="submit" class="btn btn-primary" name="SimpaN" value="SimpaN">
                                            Reset Password
                                        </button>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group row justify-content-center">
                                        <div class="col">
                                            <hr>
                                            Need an account ? <a href="formregister.php">Sign up!</a> 
                                        </div>
                                    </div>

                                </div>
                            </section>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>
</html>
