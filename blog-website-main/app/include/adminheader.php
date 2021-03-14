<header>
    <a href="<?php echo BASE_URL.'/index.php' ?>" class="logo">
        <div class= "logo-text"><span>Someone </span> in the crowd</div>
    </div></a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
<?php if(isset($_SESSION['username'])):?>
<li>
<a href="#"> 
<i class= "fa fa-user"></i>
 <?php echo $_SESSION['username'];?>
<i class = "fa fa-chevron-down" style="font-size:.8em"></i></a>
             <ul>
   <li><a href="<?php echo BASE_URL.'/login.php'; ?>"class ="logout">Logout</a></li>
             </ul>
        </li>
<?php endif;?>
     </ul>
    </header>