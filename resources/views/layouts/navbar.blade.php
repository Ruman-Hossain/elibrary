<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>E-Library | Manage Contents</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="{{asset('public/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="{{asset('public/assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="{{asset('public/assets/js/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-image: url('public/assets/img/bg.jpg');">

<div class="navbar navbar-inverse set-radius-zero" >
    <div class="container">
        <div class="navbar-header">
            <a href="{{Route('dashboard')}}" class="navbar-brand">
                <img src="{{asset('public/assets/img/eLibrary_logo_web.png')}}" />
            </a>
        </div>
        <div class="right-div">
            <h4 class="bg-info text-white" style="padding:5px;border-radius:5px;">Admin</h4>
        </div>
    </div>
</div>
<!-- LOGO HEADER END-->
<section class="menu-section" style="background-color:cyan;">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <a href="https://brur.ac.bd/" target="_blank" style="float:left;">
                        <img src="{{('public/assets/img/brur_logo.png')}}" />
                    </a>
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <li><a href="{{Route('dashboard')}}" class="menu-top-active">Home</a></li>

                        <li>
                            <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Categories <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="add-category.php">Add Category</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="add-sub-category.php">Add Sub Category</a></li> -->
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{Route('category.index')}}">Manage Categories</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{Route('subcategory.index')}}">Manage Sub Categories</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{Route('content.index')}}">E-Library</a>
                            <!-- <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> E-Seminar <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="add-content.php">Add Content</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-contents.php">Manage Contents</a></li>
                            </ul> -->
                        </li>

                        <li><a href="{{Route('student.index')}}">Registered Students</a></li>
                        <li>
                            <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Account Setting <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php">Change Password</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('logout') }}" class="btn btn-danger">Logout</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>


<!--############################################################################# -->

@yield('content')

<!--############################################################################# -->
 <section class="footer-section" style="background-color:cyan;">
      <div class="container">
         <div class="row">
            <!-- Grid column -->
            <div class="col-md-12 py-5">
              <div class="mb-5 flex-center">

                <!-- Facebook -->
                <a class="fb-ic" style="color:#4267B2;"  href="https://www.facebook.com/groups/csebrur/">
                  <i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-4x"> </i>
               </a>
               <!-- Twitter -->
               <a class="tw-ic" style="color:#1DA1F2;" href="#">
                  <i class="fa fa-twitter fa-lg white-text mr-md-2 mr-3 fa-4x"> </i>
               </a>
               <!-- Google +-->
               <a class="gplus-ic" style="color:#F4F4F4;" href="#">
                  <i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-4x"> </i>
               </a>
               <!--Linkedin -->
               <a class="li-ic" style="color:#006295;" href="#">
                  <i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-4x"> </i>
               </a>
               <!--Instagram-->
               <a class="ins-ic" style="color:#F783AC;" href="#">
                  <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-4x"> </i>
               </a>
               <!--Pinterest-->
               <a class="pin-ic" style="color:#4C6EF5;" href="#">
                  <i class="fa fa-pinterest fa-lg white-text fa-4x"> </i>
               </a>
            </div>
         </div>
         <!-- Grid column -->

      </div>
   </div>
   <div class="footer-copyright text-center py-3"><big>
     &copy; 2019 CSE BRUR E-Library | Designed and Developed by : <span title="Saroar Mahmud,Ruman Hossain,Mostafa Kamal"><a href="https://www.facebook.com/ruman.hossain.988/" target="_blank" style="color:blue;">Team Elite</a></span></big>
  </div>
</section>
<!-- CORE JQUERY  -->
<script src="{{asset('public/assets/js/jquery-1.10.2.js')}}"></script>
<!-- BOOTSTRAP SCRIPTS  -->
<script src="{{asset('public/assets/js/bootstrap.js')}}"></script>
<!-- DATATABLE SCRIPTS  -->
<script src="{{asset('public/assets/js/dataTables/jquery.dataTables.js')}}"></script>
<script src="{{asset('public/assets/js/dataTables/dataTables.bootstrap.js')}}"></script>
<!-- CUSTOM SCRIPTS  -->
<script src="{{asset('public/assets/js/custom.js')}}"></script>
<script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
</body>
</html>