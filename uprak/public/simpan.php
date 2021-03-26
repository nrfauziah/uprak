<?php
include 'koneksi.php';

//login
if (isset($_POST['Simpan'])) {
	// $id = $_POST['id'];
	$username = $_POST['username'];
	$pw_user = $_POST['pw_user'];
	
    $sql = "INSERT INTO login_user (username, pw_user) VALUES ('$username','$pw_user')";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: dashboard.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }
}

//register
include 'koneksi.php';
    if (isset($_POST['simpan'])) {
        // $id = $_POST['id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pw_user = $_POST['pw_user'];
        $confirm_pw = $_POST['confirm_pw'];
        
        $sql = "INSERT INTO register (first_name, last_name, username, email, pw_user, confirm_pw) VALUES ('$first_name', '$last_name', '$username', '$email', '$pw_user', '$confirm_pw')";
        $query = mysqli_query($connect, $sql);
        if ($query) {
            header('Location: formlogin.php');
        }else{
            header('Location: simpan.php?status=gagal');
        }
    }

//forgot password
include 'koneksi.php';
    if (isset($_POST['SimpaN'])) {
        // $id = $_POST['id'];
        $email = $_POST['email'];
        
        $sql = "INSERT INTO pw_recovery (email) VALUES ('$email')";
        $query = mysqli_query($connect, $sql);
        if ($query) {
            header('Location: formlogin.php');
        }else{
            header('Location: simpan.php?status=gagal');
        }
    }
?>