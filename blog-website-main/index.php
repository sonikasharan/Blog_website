<?php
include("path.php");
include(ROOT_PATH."/app/controllers/topics.php"); 
$posts= array();
$postsTitle ='Recent Posts';
if (isset($_GET['t_id'])) {
    $postsTitle="You Searched for Post under '". $_GET['name']."'";
    $posts=getPostsByTopicId($_GET['t_id']);
}
else if (isset($_POST['search-term'])) {
    $postsTitle="You Searched for '". $_POST['search-term']."'";
    $posts =searchPosts($_POST['search-term']);
}
else{
    $posts = getPublishedPosts();
}
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
<title> blog </title>
</head>
<body>
<!--include header here-->
    <?php include(ROOT_PATH."/app/include/header.php");?>
    <?php include(ROOT_PATH."/app/include/message.php");?>
    
    <div class="page-wrapper">
        <!--post slider-->
        <div class="post-slider">
            <h1 class="slider-title"> Trending Posts  </h1>
            <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i>
            <div class="post-wrapper">
            <?php foreach ($posts as $post): ?>
                <div class="post"><img src="<?php echo BASE_URL.'/assets/images/'.$post['image']; ?>" alt="" class="slider-image">
                <div class="post-info">
                <h4><a href="single.php?id=<?php echo $post['id'];?>"><?php echo $post['title']; ?> </a></h4>
                <i class="fa fa-user"> <?php echo $post['username']; ?></i>
                    &nbsp;
                    <i class="far fa-calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                
                </div></div>
            <?php endforeach;?>
            </div>
         </div><!--postsliderend-->
         <!--contentsection-->
        <div class="content clearfix">
            <!--main content-->
        <div class="main-content">
            <h1 class="recent-post-title"><?php echo $postsTitle ?></h1>
            <?php foreach ($posts as $post): ?>
            <div class="post clearfix">
                <img src="<?php echo BASE_URL.'/assets/images/'.$post['image']; ?>" alt="" class="post-image">
                <div class ="post-preview">
                    <h3><a href="single.php?id=<?php echo $post['id'];?>"> <?php echo $post['title']; ?> </a></h3>
                    <i class="fa fa-user"><?php echo $post['username']; ?></i>
                    &nbsp;
                <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                    <p class="preview-text"> <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...');?>
                    </p>
                <a href="single.php?id=<?php echo $post['id'];?>" class="btn read-more">Read More</a>  
                </div>  </div>
                <?php endforeach;?>
            </div>
            <!--maincontent end-->
    <div class="sidebar">
        <div class="section search">
        <h2 class="section-title">Search</h2>
            <form action="index.php" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="search..">
            </form>
        </div>
            
        <div class="section topic">
             <h2 class="section-title">Topics</h2>
            <ul>
             <?php foreach($topics as $key => $topic):?>
             <li><a href="<?php echo BASE_URL.'/index.php?t_id='.$topic['id'].'&name='.$topic['name']?>"><?php echo $topic['name'];?></a> </li>
              <?php endforeach;?>
          
                </ul>
         </div>
            </div>
        </div>
         <!--endcontent-->
     </div>
    <!--footer-->
    <?php include(ROOT_PATH."/app/include/footer.php");?>
    <!--endfooter-->
      <!--post wrapper end-->
    <!--jquery code-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
    <!--slick cursor-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--custome script-->
     <script src="assets/js/scripts.js"></script>
     <script src="<?php include(ROOT_PATH."/assets/js/main.js");?>"></script>
</body>
</html>