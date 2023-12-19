<?php
$home = $_SESSION[ 'home' ] ;
$events = $_SESSION[ 'events' ];
$grades = $_SESSION[ 'grades' ] ;
$pages = $_SESSION[ 'pages' ];
$profiles = $_SESSION[ 'profiles' ];
?>
<div class = 'sub-header'>
<div class = 'container'>
<div class = 'row'>
<div class = 'col-lg-8 col-sm-8'>

</div>
<div class = 'col-lg-4 col-sm-4'>
<div class = 'right-icons'>
<ul>
<li><a href = '#'><i class = 'fa fa-facebook'></i></a></li>
<li><a href = '#'><i class = 'fa fa-twitter'></i></a></li>
<li><a href = '#'><i class = 'fa fa-behance'></i></a></li>
<li><a href = '#'><i class = 'fa fa-linkedin'></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<header class = 'header-area header-sticky'>
<div class = 'container'>
<div class = 'row'>
<div class = 'col-12'>
<nav class = 'main-nav'>
<!-- ***** Logo Start ***** -->
<a href = 'index.php'><img src = 'assets/images/logo.png' class = 'navbar-logo'></a>
<!-- ***** Logo End ***** -->
<!-- ***** Menu Start ***** -->
<ul class = 'nav'>
<li><a href = 'index.php' <?php if ( $home ) {
    echo 'class="active"';
}
?>>Home</a></li>

<li><a href = 'shop.php' <?php if ( $events ) {
    echo 'class="active"';
}
?>>MetaShop</a></li>


<li><a href = 'profile.php' <?php if ( $profiles ) {
    echo 'class="active"';
}
?>>Profile</a></li>
<li ><a href = 'index.php#apply' <?php if ( $grades ) {
    echo 'class="active"';
}
?>>Join US</a></li>
</ul>

<a class = 'menu-trigger'>
<span>Menu</span>
</a>
<!-- ***** Menu End ***** -->
</nav>
</div>
</div>
</div>
</header>