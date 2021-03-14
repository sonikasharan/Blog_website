
<header>
    <a href="<?php echo BASE_URL.'/index.php' ?>" class="logo">
    <div class= "logo-text"><span>Someone </span> in the crowd
        </div></a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
    <li><a href="<?php echo BASE_URL.'/index.php' ?>">Home</a></li>
         <li><a href="<?php echo BASE_URL.'/about.php' ?>">Services</a></li>
         <!--<li><a href="<?php echo BASE_URL.'/about.php' ?>">About</a></li>-->
         <?php if (isset($_SESSION['id'])):?>
        <li>
    <a href="#"> 
 <i class= "fa fa-user"></i>
             
             <?php echo $_SESSION['username'];?>
             <i class = "fa fa-chevron-down" style="font-size:.8em"></i></a>
             <ul>
             <?php if ($_SESSION['admin']):?>
                 <li><a href="<?php echo BASE_URL.'/admin/dashboard.php' ?>">Dashboard</a></li>
                 <?php endif; ?>    
         <li><a href="<?php echo BASE_URL.'/logout.php' ?>"class ="logout">Logout</a></li>
             </ul>
        </li> 
         <?php else: ?>
          <li><a href="<?php echo BASE_URL.'/register.php' ?>">Signup</a></li>
         <li> <a href="<?php echo BASE_URL.'/login.php' ?>"> <i class = "fa fa-sign-in" style="font-size:.8em"></i>  Login</a> </li>
        
         <?php endif; ?>        
         
        </ul>
    </header>