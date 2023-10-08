<!DOCTYPE html>
<html lang="en">

<head>
   <title>Quantum Able Bootstrap 4 Admin Dashboard Template</title>
   <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <!-- Favicon icon -->
   <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

   <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/css/bootstrap.min.css">

   <!-- Chartlist chart css -->
   <link rel="stylesheet" href="assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- Weather css -->
   <link href="assets/css/svg-weather.css" rel="stylesheet">


   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="assets/css/main.css">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<style>
   .col-lg-2 {
    float: left;
    width: 19.666667% !important;
}
</style>
</head>

<body class="sidebar-mini fixed">
   <div class="loader-bg">
      <div class="loader-bar">
      </div>
   </div>
   <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header-top hidden-print">
         <a href="index.html" class="logo"><img class="img-fluid able-logo" src="assets/images/logo.png"
               alt="Theme-logo"></a>
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
            <ul class="top-nav lft-nav">


               <li class="dropdown pc-rheader-submenu message-notification search-toggle">
                  <a href="#!" id="morphsearch-search" class="drop icon-circle txt-white">
                     <i class="ti-search"></i>
                  </a>
               </li>
            </ul>
            <!-- Navbar Right Menu-->


            <ul class="top-nav">
               <!--Notification Menu-->

               <li class="dropdown notification-menu">
                  <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                     <i class="icon-bell"></i>
                     <span class="badge badge-danger header-badge">9</span>
                  </a>
                  <ul class="dropdown-menu">
                     <li class="not-head">You have <b class="text-primary">4</b> new notifications.</li>
                     <li class="bell-notification">
                        <a href="javascript:;" class="media">
                           <span class="media-left media-icon">
                              <img class="img-circle" src="assets/images/avatar-1.png" alt="User Image">
                           </span>
                           <div class="media-body"><span class="block">Lisa sent you a mail</span><span
                                 class="text-muted block-time">2min ago</span></div>
                        </a>
                     </li>
                     <li class="bell-notification">
                        <a href="javascript:;" class="media">
                           <span class="media-left media-icon">
                              <img class="img-circle" src="assets/images/avatar-2.png" alt="User Image">
                           </span>
                           <div class="media-body"><span class="block">Server Not Working</span><span
                                 class="text-muted block-time">20min ago</span></div>
                        </a>
                     </li>
                     <li class="bell-notification">
                        <a href="javascript:;" class="media"><span class="media-left media-icon">
                              <img class="img-circle" src="assets/images/avatar-3.png" alt="User Image">
                           </span>
                           <div class="media-body"><span class="block">Transaction xyz complete</span><span
                                 class="text-muted block-time">3 hours ago</span></div>
                        </a>
                     </li>
                     <li class="not-footer">
                        <a href="#!">See all notifications.</a>
                     </li>
                  </ul>
               </li>
               <!-- chat dropdown -->
               <li class="pc-rheader-submenu ">
                  <a href="#!" class="drop icon-circle displayChatbox">
                     <i class="icon-bubbles"></i>
                     <span class="badge badge-danger header-badge">5</span>
                  </a>

               </li>
               <!-- window screen -->
               <li class="pc-rheader-submenu">
                  <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                     <i class="icon-size-fullscreen"></i>
                  </a>

               </li>
               <!-- User Menu-->
               <li class="dropdown">
                  <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
                     class="dropdown-toggle drop icon-circle drop-image">
                     <span><img class="img-circle " src="assets/images/avatar-1.png" style="width:40px;"
                           alt="User Image"></span>
                     <span>John <b>Doe</b> <i class=" icofont icofont-simple-down"></i></span>

                  </a>
                  <ul class="dropdown-menu settings-menu">
                     <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                     <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                     <li><a href="#"><i class="icon-envelope-open"></i> My Messages</a></li>
                     <li class="p-0">
                        <div class="dropdown-divider m-0"></div>
                     </li>
                     <li><a href="#"><i class="icon-lock"></i> Lock Screen</a></li>
                     <li><a href="login1.html"><i class="icon-logout"></i> Logout</a></li>

                  </ul>
               </li>
            </ul>

            <!-- search -->
            <div id="morphsearch" class="morphsearch">
               <form class="morphsearch-form">

                  <input class="morphsearch-input" type="search" placeholder="Search..." />

                  <button class="morphsearch-submit" type="submit">Search</button>

               </form>
               <div class="morphsearch-content">
                  <div class="dummy-column">
                     <h2>People</h2>
                     <a class="dummy-media-object" href="#!">
                        <img class="round"
                           src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G"
                           alt="Sara Soueidan" />
                        <h3>Sara Soueidan</h3>
                     </a>

                     <a class="dummy-media-object" href="#!">
                        <img class="round"
                           src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G"
                           alt="Shaun Dona" />
                        <h3>Shaun Dona</h3>
                     </a>
                  </div>
                  <div class="dummy-column">
                     <h2>Popular</h2>
                     <a class="dummy-media-object" href="#!">
                        <img src="assets/images/avatar-1.png" alt="PagePreloadingEffect" />
                        <h3>Page Preloading Effect</h3>
                     </a>

                     <a class="dummy-media-object" href="#!">
                        <img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
                        <h3>Draggable Dual-View Slideshow</h3>
                     </a>
                  </div>
                  <div class="dummy-column">
                     <h2>Recent</h2>
                     <a class="dummy-media-object" href="#!">
                        <img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
                        <h3>Tooltip Styles Inspiration</h3>
                     </a>
                     <a class="dummy-media-object" href="#!">
                        <img src="assets/images/avatar-1.png" alt="NotificationStyles" />
                        <h3>Notification Styles Inspiration</h3>
                     </a>
                  </div>
               </div>
               <!-- /morphsearch-content -->
               <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
            </div>
            <!-- search end -->
   </div>
   </nav>
   </header>
   <!-- Side-Nav-->
   <aside class="main-sidebar hidden-print ">
      <section class="sidebar" id="sidebar-scroll">
         <!-- Sidebar Menu-->
         <ul class="sidebar-menu">

            <li class="active treeview">
               <a class="waves-effect waves-dark" href="index.html">
                  <i class="fa-solid fa-house"></i></i><span>Dashboard</span>
               </a>
            </li>

           
            <li class="treeview"><a class="waves-effect waves-dark" href="#!">
               <i class="fa-solid fa-users"></i><span> All User</span><i class="icon-arrow-down"></i></a>
               <ul class="treeview-menu">
                   <li><a class="waves-effect waves-dark" href="electrican-all-user.html"><i class="icon-arrow-right"></i>Electrican</a></li>
                   <li><a class="waves-effect waves-dark" href="dealer-all-user.html"><i class="icon-arrow-right"></i> Dealer</a></li>
                   <li><a class="waves-effect waves-dark" href="partner-all-user.html"><i class="icon-arrow-right"></i> Partner</a></li>
                  
                  
               </ul>
           </li>

           <li class="treeview"><a class="waves-effect waves-dark" href="#!">
            <i class="fa-solid fa-user"></i><span>User Status</span><i class="icon-arrow-down"></i></a>
            <ul class="treeview-menu">
                <li><a class="waves-effect waves-dark" href="panding-user-status.html"><i class="icon-arrow-right"></i>Pending</a></li>
                <li><a class="waves-effect waves-dark" href="approved-user-status.html"><i class="icon-arrow-right"></i> Approved</a></li>
                <li><a class="waves-effect waves-dark" href="suspended-user-status.html"><i class="icon-arrow-right"></i> Suspended</a></li>
                <li><a class="waves-effect waves-dark" href="block-user-status.html"><i class="icon-arrow-right"></i>Block</a></li>
               
               
            </ul>
        </li>



        <li class="treeview"><a class="waves-effect waves-dark" href="#!">
         <i class="fa-solid fa-id-card"></i><span>User Profile</span><i class="icon-arrow-down"></i></a>
         <ul class="treeview-menu">
             <li><a class="waves-effect waves-dark" href="electrican-user-profile.html"><i class="icon-arrow-right"></i>Electrican</a></li>
             <li><a class="waves-effect waves-dark" href="dealer-user-profile.html"><i class="icon-arrow-right"></i> Dealer</a></li>
             <li><a class="waves-effect waves-dark" href="partner-user-profile.html"><i class="icon-arrow-right"></i> Partner</a></li>
            
            
         </ul>
     </li>  
            


     <li class="treeview"><a class="waves-effect waves-dark" href="#!">
      <i class="fa-solid fa-cart-shopping"></i><span>My Product</span><i class="icon-arrow-down"></i></a>
      <ul class="treeview-menu">
          <li><a class="waves-effect waves-dark" href="Series-product.html"><i class="icon-arrow-right"></i>Series</a></li>
          <li><a class="waves-effect waves-dark" href="categories-product.html"><i class="icon-arrow-right"></i> Categories</a></li>
          <li><a class="waves-effect waves-dark" href="all-product.html"><i class="icon-arrow-right"></i> All Product</a></li>
         
         
      </ul>
  </li> 

          

  <li class="treeview"><a class="waves-effect waves-dark" href="#!">
   <i class="fa-solid fa-truck-monster"></i><span>Scheme / Offer</span><i class="icon-arrow-down"></i></a>
   <ul class="treeview-menu">
       <li><a class="waves-effect waves-dark" href="offer.html"><i class="icon-arrow-right"></i>Offer</a></li>
       <li><a class="waves-effect waves-dark" href="scheme.html"><i class="icon-arrow-right"></i> Scheme</a></li>
       
   </ul>
</li> 

               
     <li class="treeview"><a class="waves-effect waves-dark" href="#!">
      <i class="fa fa-history" aria-hidden="true"></i><span>History</span><i class="icon-arrow-down"></i></a>
      <ul class="treeview-menu">
          <li><a class="waves-effect waves-dark" href="point-history.html"><i class="icon-arrow-right"></i>Point History</a></li>
          <li><a class="waves-effect waves-dark" href="transaction-history.html"><i class="icon-arrow-right"></i> Transaction History</a></li>
          <li><a class="waves-effect waves-dark" href="order-history.html"><i class="icon-arrow-right"></i> Order History</a></li>
         
         
      </ul>
  </li> 



  <li class="treeview"><a class="waves-effect waves-dark" href="#!">
   <i class="fab fa-first-order"></i><span>Order</span><i class="icon-arrow-down"></i></a>
   <ul class="treeview-menu">
       <li><a class="waves-effect waves-dark" href="dealer-order.html"><i class="icon-arrow-right"></i>Delear Order</a></li>
       
   </ul>
</li> 
         

<li class="treeview"><a class="waves-effect waves-dark" href="#!">
   <i class="fa-solid fa-ranking-star"></i><span>Ranking</span><i class="icon-arrow-down"></i></a>
   <ul class="treeview-menu">
       <li><a class="waves-effect waves-dark" href="electrican-ranking.html"><i class="icon-arrow-right"></i>Electrican Ranking</a></li>
       <li><a class="waves-effect waves-dark" href="transaction-ranking.html"><i class="icon-arrow-right"></i> Transaction Ranking</a></li>
       <li><a class="waves-effect waves-dark" href="order-ranking.html"><i class="icon-arrow-right"></i> Order Ranking</a></li>
      
      
   </ul>
</li> 
          

<li class="treeview"><a class="waves-effect waves-dark" href="#!">
   <i class="fa-solid fa-money-bill"></i><span>Cash Transaction</span><i class="icon-arrow-down"></i></a>
   <ul class="treeview-menu">
       <li><a class="waves-effect waves-dark" href="pending-transaction.html"><i class="icon-arrow-right"></i>Pending Transaction</a></li>
       <li><a class="waves-effect waves-dark" href="success-transaction.html"><i class="icon-arrow-right"></i> Success Transaction</a></li>
       <li><a class="waves-effect waves-dark" href="failed-transaction.html"><i class="icon-arrow-right"></i> Failed Transaction</a></li>
       <li><a class="waves-effect waves-dark" href="tds-transaction.html"><i class="icon-arrow-right"></i>TDS</a></li>
      
      
   </ul>
</li> 


<li class="treeview"><a class="waves-effect waves-dark" href="#!">
   <i class="fas fa-shipping-fast"></i><span>Scheme Deliver</span><i class="icon-arrow-down"></i></a>
   <ul class="treeview-menu">
       <li><a class="waves-effect waves-dark" href="pending-scheme-deliver.html"><i class="icon-arrow-right"></i>Pending</a></li>
       <li><a class="waves-effect waves-dark" href="success-scheme-deliver.html"><i class="icon-arrow-right"></i> Success</a></li>
       <li><a class="waves-effect waves-dark" href="failed-scheme-deliver.html"><i class="icon-arrow-right"></i> Failed</a></li>
      
      
   </ul>
</li>

            
            <li class="treeview">
               <a class="waves-effect waves-dark" href="notification.html">
                  <i class="ti-bell" ></i></i><span>Notification</span>
               </a>
            </li>

           
            <li class="treeview">
                  <a class="waves-effect waves-dark" href="catalog.html">
                  <i class="fa-solid fa-book"></i><span>Catalog</span>
               </a>
            </li>

            <li class="treeview">
               <a class="waves-effect waves-dark" href="feedback-complaints.html">
                  <i class="fa fa-comments" aria-hidden="true"></i><span>Feedback & Complaints</span>
               </a>
            </li>
            <li class="treeview">
               <a class="waves-effect waves-dark" href="logout.html">
                  <i class="fa fa-sign-out" aria-hidden="true"></i><span>Logout</span>
               </a>
            </li>



         </ul>
      </section>
   </aside>
   <!-- Sidebar chat start -->
   <div id="sidebar" class="p-fixed header-users showChat">
      <div class="had-container">
         <div class="card card_main header-users-main">
            <div class="card-content user-box">
               <div class="md-group-add-on p-20">
                  <span class="md-add-on">
                     <i class="icofont icofont-search-alt-2 chat-search"></i>
                  </span>
                  <div class="md-input-wrapper">
                     <input type="text" class="md-form-control" name="username" id="search-friends">
                     <label>Search</label>
                  </div>

               </div>
               <div class="media friendlist-main">

                  <h6>Friend List</h6>

               </div>
               <div class="main-friend-list">
                  <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
                     data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                     <a class="media-left" href="#!">
                        <img class="media-object img-circle" src="assets/images/avatar-1.png"
                           alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                     </a>
                     <div class="media-body">
                        <div class="friend-header">Josephin Doe</div>
                        <span>20min ago</span>
                     </div>
                  </div>
                  <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"
                     data-toggle="tooltip" data-placement="left" title="Alice">
                     <a class="media-left" href="#!">
                        <img class="media-object img-circle" src="assets/images/avatar-2.png"
                           alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                     </a>
                     <div class="media-body">
                        <div class="friend-header">Alice</div>
                        <span>1 hour ago</span>
                     </div>
                  </div>
                  <div class="media friendlist-box" data-id="7" data-status="offline" data-username="Michael Scofield"
                     data-toggle="tooltip" data-placement="left" title="Michael Scofield">
                     <a class="media-left" href="#!">
                        <img class="media-object img-circle" src="assets/images/avatar-3.png"
                           alt="Generic placeholder image">
                        <div class="live-status bg-danger"></div>
                     </a>
                     <div class="media-body">
                        <div class="friend-header">Michael Scofield</div>
                        <span>3 hours ago</span>
                     </div>
                  </div>
                  <div class="media friendlist-box" data-id="5" data-status="online" data-username="Irina Shayk"
                     data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                     <a class="media-left" href="#!">
                        <img class="media-object img-circle" src="assets/images/avatar-4.png"
                           alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                     </a>
                     <div class="media-body">
                        <div class="friend-header">Irina Shayk</div>
                        <span>1 day ago</span>
                     </div>
                  </div>
                  <div class="media friendlist-box" data-id="6" data-status="offline" data-username="Sara Tancredi"
                     data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                     <a class="media-left" href="#!">
                        <img class="media-object img-circle" src="assets/images/avatar-5.png"
                           alt="Generic placeholder image">
                        <div class="live-status bg-danger"></div>
                     </a>
                     <div class="media-body">
                        <div class="friend-header">Sara Tancredi</div>
                        <span>2 days ago</span>
                     </div>
                  </div>
                  <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
                     data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                     <a class="media-left" href="#!">
                        <img class="media-object img-circle" src="assets/images/avatar-1.png"
                           alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                     </a>
                     <div class="media-body">
                        <div class="friend-header">Josephin Doe</div>
                        <span>20min ago</span>
                     </div>
                  </div>
                  <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"
                     data-toggle="tooltip" data-placement="left" title="Alice">
                     <a class="media-left" href="#!">
                        <img class="media-object img-circle" src="assets/images/avatar-2.png"
                           alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                     </a>
                     <div class="media-body">
                        <div class="friend-header">Alice</div>
                        <span>1 hour ago</span>
                     </div>
                  </div>
                  <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
                     data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                     <a class="media-left" href="#!">
                        <img class="media-object img-circle" src="assets/images/avatar-1.png"
                           alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                     </a>
                     <div class="media-body">
                        <div class="friend-header">Josephin Doe</div>
                        <span>20min ago</span>
                     </div>
                  </div>
                  <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"
                     data-toggle="tooltip" data-placement="left" title="Alice">
                     <a class="media-left" href="#!">
                        <img class="media-object img-circle" src="assets/images/avatar-2.png"
                           alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                     </a>
                     <div class="media-body">
                        <div class="friend-header">Alice</div>
                        <span>1 hour ago</span>
                     </div>
                  </div>
                  <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
                     data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                     <a class="media-left" href="#!">
                        <img class="media-object img-circle" src="assets/images/avatar-1.png"
                           alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                     </a>
                     <div class="media-body">
                        <div class="friend-header">Josephin Doe</div>
                        <span>20min ago</span>
                     </div>
                  </div>
                  <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"
                     data-toggle="tooltip" data-placement="left" title="Alice">
                     <a class="media-left" href="#!">
                        <img class="media-object img-circle" src="assets/images/avatar-2.png"
                           alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                     </a>
                     <div class="media-body">
                        <div class="friend-header">Alice</div>
                        <span>1 hour ago</span>
                     </div>
                  </div>
                  <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
                     data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                     <a class="media-left" href="#!">
                        <img class="media-object img-circle" src="assets/images/avatar-1.png"
                           alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                     </a>
                     <div class="media-body">
                        <div class="friend-header">Josephin Doe</div>
                        <span>20min ago</span>
                     </div>
                  </div>
                  <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
                     data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                     <a class="media-left" href="#!">
                        <img class="media-object img-circle" src="assets/images/avatar-1.png"
                           alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                     </a>
                     <div class="media-body">
                        <div class="friend-header">Josephin Doe</div>
                        <span>20min ago</span>
                     </div>
                  </div>
                  <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
                     data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                     <a class="media-left" href="#!">
                        <img class="media-object img-circle" src="assets/images/avatar-1.png"
                           alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                     </a>
                     <div class="media-body">
                        <div class="friend-header">Josephin Doe</div>
                        <span>20min ago</span>
                     </div>
                  </div>
                  <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe"
                     data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                     <a class="media-left" href="#!">
                        <img class="media-object img-circle" src="assets/images/avatar-1.png"
                           alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                     </a>
                     <div class="media-body">
                        <div class="friend-header">Josephin Doe</div>
                        <span>20min ago</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </div>
   <div class="showChat_inner">
      <div class="media chat-inner-header">
         <a class="back_chatBox">
            <i class="icofont icofont-rounded-left"></i> Josephin Doe
         </a>
      </div>
      <div class="media chat-messages">
         <a class="media-left photo-table" href="#!">
            <img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
            <div class="live-status bg-success"></div>
         </a>
         <div class="media-body chat-menu-content">
            <div class="">
               <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
               <p class="chat-time">8:20 a.m.</p>
            </div>
         </div>
      </div>
      <div class="media chat-messages">
         <div class="media-body chat-menu-reply">
            <div class="">
               <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
               <p class="chat-time">8:20 a.m.</p>
            </div>
         </div>
         <div class="media-right photo-table">
            <a href="#!">
               <img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png"
                  alt="Generic placeholder image">
               <div class="live-status bg-success"></div>
            </a>
         </div>
      </div>
      <div class="media chat-reply-box">
         <div class="md-input-wrapper">
            <input type="text" class="md-form-control" id="inputEmail" name="inputEmail">
            <label>Share your thoughts</label>
            <span class="highlight"></span>
            <span class="bar"></span> <button type="button" class="chat-send waves-effect waves-light">
               <i class="icofont icofont-location-arrow f-20 "></i>
            </button>

            <button type="button" class="chat-send waves-effect waves-light">
               <i class="icofont icofont-location-arrow f-20 "></i>
            </button>
         </div>

      </div>
   </div>
   <!-- Sidebar chat end-->
   <div class="content-wrapper">
      <!-- Container-fluid starts -->
      <!-- Main content starts -->
      <div class="container-fluid">
         <div class="row">
            <div class="main-header">
               <h4>Dashboard</h4>
            </div>
         </div>
         <!-- 4-blocks row start -->
         <div class="row dashboard-header">
            <div class="col-lg-2 col-md-6">
               <div class="card dashboard-product">
                  <span>All User</span>
                  <h2 class="dashboard-total-products">4500</h2>
                  <span class="label label-warning">Sales</span>Arriving Today
                  <div class="side-box">
                     <i class="fa-solid fa-users text-warning-color"></i>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-6">
               <div class="card dashboard-product">
                  <span>User Status</span>
                  <h2 class="dashboard-total-products">37,500</h2>
                  <span class="label label-primary">Views</span>View Today
                  <div class="side-box ">
                     <i class="fa-solid fa-user text-primary-color"></i>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-6">
               <div class="card dashboard-product">
                  <span>User Profile</span>
                  <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                  <span class="label label-success">Sales</span>Reviews
                  <div class="side-box">

                     <i class="fa-solid fa-id-card text-success-color"></i>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-6">
               <div class="card dashboard-product">
                  <span>My Product</span>
                  <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                  <span class="label label-danger">Sales</span>Reviews
                  <div class="side-box">
                     <i class="fa-solid fa-cart-shopping text-success-color"></i>
                  </div>
               </div>
            </div>
             <div class="col-lg-2 col-md-6">
               <div class="card dashboard-product">
                  <span>Scheme / Offer</span>
                  <h2 class="dashboard-total-products">4500</h2>
                  <span class="label label-warning">Sales</span>Arriving Today
                  <div class="side-box">
                     <i class="fa-solid fa-truck-monster text-warning-color"></i>
                  </div>
               </div>
            </div>
         </div>
          <!-- 4-blocks row end -->


          <!-- 5-blocks row start -->
         <div class="row dashboard-header">
            
            <div class="col-lg-2 col-md-6">
               <div class="card dashboard-product">
                  <span>History</span>
                  <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                  <span class="label label-success">Sales</span>Reviews
                  <div class="side-box">

                     <i class="fa fa-history text-success-color"></i>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-6">
               <div class="card dashboard-product">
                  <span>Order</span>
                  <h2 class="dashboard-total-products">37,500</h2>
                  <span class="label label-primary">Views</span>View Today
                  <div class="side-box ">
                     
                     <i class="fab fa-first-order text-primary-color"></i>
                  </div>
               </div>
            </div>
           
            <div class="col-lg-2 col-md-6">
               <div class="card dashboard-product">
                  <span>Ranking</span>
                  <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                  <span class="label label-danger">Sales</span>Reviews
                  <div class="side-box">
                     <i class="fa-solid fa-ranking-star text-success-color"></i>
                  </div>
               </div>
            </div>
        
         <div class="col-lg-2 col-md-6">
            <div class="card dashboard-product">
               <span>Cash Transaction</span>
               <h2 class="dashboard-total-products">4500</h2>
               <span class="label label-warning">Sales</span>Arriving Today
               <div class="side-box">
                  <i class="fa-solid fa-money-bill text-warning-color"></i>
               </div>
            </div>
         </div>
         <div class="col-lg-2 col-md-6">
            <div class="card dashboard-product">
               <span>Scheme Deliver</span>
               <h2 class="dashboard-total-products">37,500</h2>
               <span class="label label-primary">Views</span>View Today
               <div class="side-box ">
                  <i class="fas fa-shipping-fast text-primary-color"></i>
               </div>
            </div>
         </div>
         </div>
         <!-- 5-blocks row end -->

         <!-- 6-blocks row start -->
         <div class="row dashboard-header">
          
            <div class="col-lg-3 col-md-6">
               <div class="card dashboard-product">
                  <span>Notification</span>
                  <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                  <span class="label label-success">Sales</span>Reviews
                  <div class="side-box">
                     <i class="fa-solid fa-bell text-success-color"></i>
                  </div>
               </div>
            </div>
           
            <div class="col-lg-3 col-md-6">
               <div class="card dashboard-product">
                  <span>Catalog</span>
                  <h2 class="dashboard-total-products">4500</h2>
                  <span class="label label-warning">Sales</span>Arriving Today
                  <div class="side-box">
                     <i class="fa-solid fa-book text-warning-color"></i>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="card dashboard-product">
                  <span>Feedback & Complaints</span>
                  <h2 class="dashboard-total-products">37,500</h2>
                  <span class="label label-primary">Views</span>View Today
                  <div class="side-box ">
                     <i class="fa fa-comments text-primary-color"></i>
                  </div>
               </div>
            </div>

         </div>
 <!-- 6-blocks row end -->

     

      </div>
      <!-- Main content ends -->
      <!-- Container-fluid ends -->

   </div>
   </div>




   <!-- Required Jqurey -->
   <script src="assets/plugins/Jquery/dist/jquery.min.js"></script>
   <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="assets/plugins/tether/dist/js/tether.min.js"></script>

   <!-- Required Fremwork -->
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

   <!-- Scrollbar JS-->
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

   <!--classic JS-->
   <script src="assets/plugins/classie/classie.js"></script>

   <!-- notification -->
   <script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

   <!-- Sparkline charts -->
   <script src="assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

   <!-- Counter js  -->
   <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
   <script src="assets/plugins/countdown/js/jquery.counterup.js"></script>

   <!-- Echart js -->
   <script src="assets/plugins/charts/echarts/js/echarts-all.js"></script>

   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/highcharts-3d.js"></script>

   <!-- custom js -->
   <script type="text/javascript" src="assets/js/main.min.js"></script>
   <script type="text/javascript" src="assets/pages/dashboard.js"></script>
   <script type="text/javascript" src="assets/pages/elements.js"></script>
   <script src="assets/js/menu.min.js"></script>
   <script>
      var $window = $(window);
      var nav = $('.fixed-button');
      $window.scroll(function () {
         if ($window.scrollTop() >= 200) {
            nav.addClass('active');
         }
         else {
            nav.removeClass('active');
         }
      });
   </script>

</body>

</html>