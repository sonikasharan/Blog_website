<?php
include("../../path.php");
include(ROOT_PATH."/app/controllers/posts.php");
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
<title> admin-section edit Post</title>
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
            <a href="create.php " class="btn btn-big"> Add Post</a>
            <a href="index.php" class="btn btn-big"> Manage Posts</a></div>
    <div class="content">
        <h2 class="page-title"> Edit Post</h2>
        <?php include(ROOT_PATH."/app/helpers/formerrors.php");?>
        <div class="back">
        <form action="edit.php"  method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value ="<?php echo $id ?>">
        <div>
                <label>Title</label>
                <input type="text" name="title" value ="<?php echo $title ?>"class="text-input">
            </div><div>
            <lable>Upload Image</lable>
            <input type="file" name="image" class ="text-input">
            </div>
             <div>
                <label>Body</label>
                <textarea name="body"  id="body"><?php echo $body ?></textarea>
            </div>
            <div>
                <lable>Topics</lable>
                <select name="topic_id" class="text-input">
                <?php foreach ($topics as $key => $topic):?>
                <?php if(!empty($topic_id) && $topic_id== $topic['id']):?>
                    <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                <?php else:?>
                    <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                <?php endif;?>
                <?php endforeach; ?>
                </select>
        </div> 
        <div>
        <?php if (empty($published) && $published==0): ?> 
            <label>
        <input type="checkbox" name="published">
        Publish 
        </label> 
        <?php else: ?>
        <label>
        <input type="checkbox" name="published" checked>
        Publish 
        </label>
        <?php endif; ?>
       
        </div> 
            <div>
                <button type="submit" name="update-post" class="btn btn-big">Update Post</button>
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