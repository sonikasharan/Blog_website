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
<title> admin-section manage topic</title>
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
            <a href="index.php" class="btn btn-big"> Manage topic</a></div>
    <div class="content">
        <h2 class="page-title"> Manage Topics</h2>
        <?php include(ROOT_PATH."/app/include/message.php");?>
        <table>
            <thead>
                <th>Sno.</th>
                <th> Title</th>
                <th colspan="2">Action</th>
            </thead>
            <tbody>
                <?php foreach($topics as $key => $topic):?>
                    <tr>
                    <td> <?php echo $key +1;?></td>
                    <td>  <?php echo $topic['name'];?></td>
                    <td> <a href ="edit.php?id= <?php echo $topic['id'];?>" class="edit">Edit</a></td>
                     <td> <a href ="index.php?del_id= <?php echo $topic['id'];?>" class="delete">Delete</a></td>
                     
                </tr> 
                 
                <?php endforeach;?>
            </tbody>
        </table>
        
    </div> 
    <!--endadmin content-->
    
    <!--post wrapper end-->
    <!--jquery code-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
    <!--custome script-->
     <script src="../../assets/js/scripts.js"></script>

</body>
</html>