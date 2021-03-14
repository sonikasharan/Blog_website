<?php
include("../../path.php");
include(ROOT_PATH."/app/controllers/topics.php"); 
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
<title> admin-section Edit Topic</title>
</head>
<body>
<!--admin header-->
<?php include(ROOT_PATH ."/app/include/adminheader.php");?>
     <!--admin page wrapper-->
    <div class="admin-wrapper">  
    <!--left sidebar-->
       
    <?php include(ROOT_PATH ."/app/include/adminsidebar.php");?>
     <!--end left sidebar-->   
        <!--admin content-->
        <div class="admin-content">
            <div class="button-group">
            <a href="create.php " class="btn btn-big"> Add Topic</a>
            <a href="index.php" class="btn btn-big"> Manage Topics</a></div>
    <div class="content">
        <h2 class="page-title"> Edit Topic</h2>
        <?php include(ROOT_PATH."/app/helpers/formerrors.php");?>
        <div class="back">
        <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>" >
            <div>
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $name;?>" class="text-input">
            </div>
             <div>
                <label>description</label>
                <textarea name="description" id="body"><?php echo $description; ?></textarea>
            </div>
            <div>
                <button type="submit"name = "update-topic" class="btn btn-big">Update Topic</button>
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