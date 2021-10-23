
<?php
  define('CSSPATH', ''); //define css path
  $cssItem = 'admin_style.css'; //css item to display
?>  
<!DOCTYPE html>
<html>
  <head>
    <title>admin panel</title>
    <link rel="stylesheet" href="<?php echo (CSSPATH . "$cssItem"); ?>" type="text/css"
      href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <!-- preloader start -->
    <div id="preloader">
      <div class="wrapper">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="shadow"></div>
        <div class="shadow"></div>
        <div class="shadow"></div>
        <span >در حال انتقال</span>
      </div>
  </div>
  <!-- /.end preloader -->
    <nav class="main-menu">
      <ul>
        <li>
          <a href="#">
            <i class="fa fa-home fa-2x"></i>
            <span class="nav-text"> داشبورد </span>
          </a>
        </li>
        <li class="has-subnav">
          <a href="#">
            <i class="fa fa-list fa-2x"></i>
            <span class="nav-text"> فرم‌ها </span>
          </a>
        </li>
        <li class="has-subnav">
          <a href="#">
            <i class="fa fa-folder-open fa-2x"></i>
            <span class="nav-text"> صفحات </span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-bar-chart-o fa-2x"></i>
            <span class="nav-text"> آمار </span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class="fa fa-table fa-2x"></i>
            <span class="nav-text"> جداول </span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-info fa-2x"></i>
            <span class="nav-text"> اسناد </span>
          </a>
        </li>
      </ul>
      <ul class="logout">
        <li>
          <a href="#">
            <i class="fa fa-power-off fa-2x"></i>
            <span class="nav-text"> خروج </span>
          </a>
        </li>
      </ul>
    </nav>
    <div class="area"></div>
  </body>
  <script type="text/javascript">
    setTimeout(hide, 3000);
        
    function hide(){
        document.getElementById('preloader').style.display = "none";
    }
</script>
</html>
<?php
 $cookie_name = "user";
 
if(count($_COOKIE) > 0) {
    //echo "Cookies are enabled.";
  } else {
    //cho "Cookies are disabled.";
  }

  if(!isset($_COOKIE[$cookie_name])) {
    //echo "Cookie named '" . $cookie_name . "' is not set!";
  } else {
    //echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo  "wellcome ".$_COOKIE[$cookie_name] ;
  }
?>