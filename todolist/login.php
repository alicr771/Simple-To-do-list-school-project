<?php
 
include_once('koneksi.php');
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"]== "POST") {
     
    $adminname = test_input($_POST["username"]);
    $password = test_input($_POST["pass"]);
    $stmt = $conn->prepare("SELECT * FROM tb_login");
    $stmt->execute();
    $users = $stmt->fetchAll();
     
    foreach($users as $user) {
         
        if(($user['username'] == $adminname) &&
            ($user['pass'] == $password)) {
                header("Location: indexadmin.php");
        }
        else {
            echo "<script>alert('Username atau Password Salah !');document.location='index.php'</script>";
            die();
        }
    }
}

?>