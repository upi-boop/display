<?php

// session_start();

// if (isset($_SESSION["login_user"])){
//     header("Location:administrator.php");
//     exit;
    
// }

// require 'proses/koneksi.php';


// if(isset($_POST["login"])){

//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     $result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username' " );

//     // cek username
//     if(mysqli_num_rows($result) === 1 ){

//         // cwek password

//         $row = mysqli_fetch_assoc($result);
//         if(password_verify($password,$row["password"])){

//                 // set session 
//                 $_SESSION["login_user"] = true;


//             header("Location: administrator.php");
//             exit;
//         }
//     }

//     $error= true;

// }


?>
<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>login</h1>

    <?php if(isset($error)) : ?>
    <p style="color: red; font-style: italic;">username/password salah brad</p>
    <?php endif;  ?>

    <form action="" method="post">
    
    <ul>
      <li>
            <label for="">username</label>
            <input type="text" name="username">
     </li>
      <li>
            <label for="">password</label>
            <input type="text" name="password">
     </li>
     <li>
             <input type="submit" name="login" value="login">
     </li>
    </ul>

    </form>

</body>
</html> -->