<?php include("path.php");
include(ROOT_PATH."/app/controllers/posts.php");
if (isset($_GET['id'])) {
    $post= selectOne('posts',['id'=>$_GET['id']]);
}
$topics=selectAll('topics');
$posts = selectAll('posts',['published'=>1]);
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
<title> <?php echo $post['title'];?>|Someone in the crowd </title>
</head>
<body> 
    <!--facebookpagepluginSDK-->
    
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="D0zfAKqm"></script>
<?php include(ROOT_PATH."/app/include/header.php");?>
    <div class="page-wrapper">
         <!--contentsection-->
        <div class="content clearfix">
            <!--main content-->
            <!--main content wrapper-->
            <div class ="main-content-wrapper">
        <div class="main-content single">
            <div class="post-title"><?php echo $post['title'];?></div>
            <div class="post-content">
             <img src="<?php echo BASE_URL.'/assets/images/'.$post['image']; ?>" alt="" class="image">
             <?php echo html_entity_decode($post['body']);?>
            </div>
            
            </div>
            </div>
            <!--maincontent end-->
            <!--sidebar-->
    <div class="sidebar single">
<div class="fb-page" data-href="https://www.facebook.com/sharansonika93" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/sharansonika93" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sharansonika93">My blog</a></blockquote></div>   
        <div class="section popular">
        <h2 class="section-title">Popular</h2>
            <?php foreach($posts as $p): ?>
                <div class="post clearfix">
            <img src="<?php echo BASE_URL.'/assets/images/'.$p['image']; ?>" alt="">
                <a href="single.php?id=<?php echo $p['id'];?>"class="title"><h4><?php echo $p['title'];?></h4></a> 
            </div>
            <?php endforeach; ?>  
        </div>
        <div class="section topic">
                <h2 class="section-title">Topics</h2>
                <ul>
                <?php foreach($topics as $topic):?>
             <li><a href="<?php echo BASE_URL.'/index.php?t_id='.$topic['id'].'&name='.$topic['name']?>"><?php echo $topic['name'];?></a> </li>
              <?php endforeach;?>
                </ul>
         </div>
            </div><!--sidebarend-->
        </div></div>
         <!--endcontent-->
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

</body>
</html>