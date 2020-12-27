
<!DOCTYPE html>
<html>
<head>
    @include('layouts.backend._head')
</head>

<body class="theme-red">

<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #Float icon -->
<ul id="f-menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
    <li class="mfb-component__wrap"> <a href="#" class="mfb-component__button--main"> <i class="mfb-component__main-icon--resting zmdi zmdi-plus"></i> <i class="mfb-component__main-icon--active zmdi zmdi-close"></i> </a>
        <ul class="mfb-component__list">
            <li> <a href="mail-inbox.html" data-mfb-label="Inbox" class="mfb-component__button--child bg-blue"> <i class="zmdi zmdi-email mfb-component__child-icon"></i> </a> </li>
            <li> <a href="chat.html" data-mfb-label="Chat App" class="mfb-component__button--child bg-orange"> <i class="zmdi zmdi-comments mfb-component__child-icon"></i> </a> </li>
            <li> <a href="blog.html" data-mfb-label="Blogger" class="mfb-component__button--child bg-purple"> <i class="zmdi zmdi-blogger mfb-component__child-icon"></i> </a> </li>
        </ul>
    </li>
</ul>
<!-- Search  -->
<div class="search-bar">
    <div class="search-icon"> <i class="zmdi zmdi-search"></i> </div>
    <input type="text" placeholder="Search...">
    <div class="close-search"> <i class="zmdi zmdi-close"></i> </div>
</div>
<!-- Top Bar -->
<nav class="navbar">
    @include('layouts.backend._topNav')
</nav>
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
     @include('layouts.backend._leftSideNav')
<!-- #Menu -->
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
     @include('layouts.backend._rightSideNav')
</aside>

<!-- Main Content -->
<section class="content home profile-page">
    <div class="container-fluid">
        @yield('content')
    </div>
</section>
<section class="content">
    <div class="container-fluid">

        @include('layouts.backend._footer')
    </div>
</section>
<!-- Jquery Core Js -->
      @include('layouts.backend._scripts')
</body>
</html>


