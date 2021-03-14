<?php
include("../../path.php");?>
<?php include(ROOT_PATH."/app/controllers/users.php");
adminOnly();
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
<link rel ="stylesheet" href="../../assets/css/style.css">
    <!-- admin styling-->
    <link rel ="stylesheet" href="../../assets/css/admin.css">
<title> admin-section Add Users</title>
</head>
<body><!--admin header-->
<?php include(ROOT_PATH ."/app/include/adminheader.php");?>
     <!--admin page wrapper-->
    <div class="admin-wrapper">  
    <!--left sidebar-->
        
    <?php include(ROOT_PATH ."/app/include/adminsidebar.php");?>
     <!--end left sidebar-->   
        <!--admin content-->
        <div class="admin-content">
            <div class="button-group">
            <a href="create.php " class="btn btn-big"> Add User</a>
            <a href="index.php" class="btn btn-big"> Manage User</a></div>
    <div class="content">
        <h2 class="page-title"> Add User</h2>
        <?php include(ROOT_PATH.'/app/helpers/formerrors.php') ?>
        <div class="back">
        <form action="create.php" method="post">
             
        <div>
        <lable>Username</lable>
            <input type="text" name=" username" id="" value="<?php echo $username; ?>"class="text-input">
             </div>
       <div>
        <lable>E-mail</lable>
            <input type="email" name=" email" id="" value="<?php echo $email; ?>" class="text-input">
             </div><div>
        <lable>Password</lable>
            <input type="password" name="password" id="" value="<?php echo $password; ?>" class="text-input">
             </div><div>
        <lable>password confirmation</lable>
            <input type="password" name="passwordconf" id="" class="text-input">
             </div>
        <div><div>
        <?php if (isset($admin)&& $admin==1 ): ?>
            <lable><input type="checkbox" name="admin"checked >
                Admin</lable>
            <?php else: ?>
                <lable><input type="checkbox" name="admin">
                Admin</lable>
                <?php endif; ?>
            </div> </div>
            <div>
                <button type="submit" name="create-admin" class="btn btn-big">Add User</button>
            </div>
        </form>
            </div>
        
            </div> </div></div>
    <!--endadmin content-->
    
    <!--post wrapper end-->
    <!--jquery code-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--ckeditor-->
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <!--custome script-->
     <script src="../../assets/js/scripts.js"></script>

</body>
</html>