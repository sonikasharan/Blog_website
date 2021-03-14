<?php include("path.php") ?>
<?php  include(ROOT_PATH."/app/controllers/users.php");
 guestsOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- font awasome -->
    <script src="https://kit.fontawesome.com/a230773f21.js" crossorigin="anonymous"></script>
    <!--googlefont-->
   <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:wght@500&display=swap" rel="stylesheet">
    <!-- custome styling-->
    <link rel ="stylesheet" href="assets/css/style.css">
<title> Login </title>
</head>
<body>
<?php include(ROOT_PATH."/app/include/header.php");?>

   <div class="auth-content">
    <form action="login.php" method="post">
       <h2 class="form-title">Login</h2>
       <?php include(ROOT_PATH."/app/helpers/formerrors.php");?>
         <div>
        <lable>Username</lable>
            <input type="text" name=" username" value="<?php echo $username;?>" class="text-input">
             </div>
       <div>
        <lable>Password</lable>
            <input type="password" name="password" value="<?php echo $password;?>" class="text-input">
             </div>
        <div>
        <button type="submit" name="login-btn" class="btn btn-big">Login</button>
        </div>
        <p>Or <a href="<?php echo BASE_URL.'/register.php' ?>">Sign up</a></p>
       </form>
    
    </div>
    <!--jquery code-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
   
    <!--custome script-->
     <script src="assets/js/scripts.js"></script>

</body>
</html>