<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('admin-assets/plugins/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/dist/css/adminlte.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="index3.html" class="brand-link">
            <img src="{{asset('admin-assets/dist/img/AdminLTELogo.png')}}" alt="Admin"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Admin</span>
        </a>

        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('admin-assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                         alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="{{route('admin')}}" class="nav-link {{request()->is('admin') ? 'active' : ""}}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Home
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview {{request()->is('admin/news','admin/news-add') ? 'menu-open' : ' '}}">
                        <a href="" class="nav-link ">
                            <i class="nav-icon fab fa-blogger-b"></i>
                            <p>
                                News
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('news')}}"
                                   class="nav-link {{request()->is('admin/news') ? 'active' : ""}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>News</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('news.add')}}"
                                   class="nav-link {{request()->is('admin/news-add') ? 'active' : ""}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>News Add</p>
                                </a>
                            </li>


                        </ul>
                    </li>

                    <li class="nav-item has-treeview {{request()->is('admin/category','admin/category-add') ? 'menu-open' : ' '}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fab fa-blogger-b"></i>
                            <p>
                                Category
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('category')}}"
                                   class="nav-link {{request()->is('admin/category') ? 'active' : ""}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('category.add')}}"
                                   class="nav-link {{request()->is('admin/category-add') ? 'active' : ""}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Category Add</p>
                                </a>
                            </li>


                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{request()->is('admin/author','admin/author-add') ? 'menu-open' : ' '}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fab fa-blogger-b"></i>
                            <p>
                                Author
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('author')}}"
                                   class="nav-link {{request()->is('admin/author') ? 'active' : ""}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Author</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('author.add')}}"
                                   class="nav-link {{request()->is('admin/author-add') ? 'active' : ""}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Author Add</p>
                                </a>
                            </li>


                        </ul>
                    </li>
                    <li class="nav-item has-treeview   {{request()->is('admin/contact','admin/about') ? 'menu-open' : ' '}} ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-pager"></i>
                            <p>
                                Pages
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" >
                            <li class="nav-item">
                                <a href="{{route('admin.contact')}}"
                                   class="nav-link {{request()->is('admin/contact') ? 'active' : ""}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Contact</p>
                                </a>
                            </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.about')}}"
                                       class="nav-link {{request()->is('admin/about') ? 'active' : ""}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>About</p>
                                    </a>
                                </li>



                        </ul>
                    </li>

                    <li class="nav-item has-treeview {{request()->is('admin/slider','admin/slider-add') ? 'menu-open' : ' '}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-images"></i>
                            <p>
                                Slider
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('slider')}}"
                                   class="nav-link {{request()->is('admin/slider') ? 'active' : ""}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Slider</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('slider.add')}}"
                                   class="nav-link {{request()->is('admin/slider-add') ? 'active' : ""}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Slider Add</p>
                                </a>
                            </li>

                        </ul>
                    </li>


                    <li class="nav-item has-treeview {{request()->is('admin/users','admin/user-add') ? 'menu-open' : ' '}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                               Users
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('users')}}"
                                   class="nav-link {{request()->is('admin/users') ? 'active' : ""}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Users</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('user.add')}}"
                                   class="nav-link {{request()->is('admin/user-add') ? 'active' : ""}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>User Add</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('settings')}}"
                           class="nav-link {{request()->is('admin/settings') ? 'active' : ""}} ">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Site Settings
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('logout')}}" class="nav-link ">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                               Logout
                            </p>
                        </a>
                    </li>

    </aside>

    @yield('content')

    <footer class="main-footer">
        <strong>Copyright &copy; 2022 <a href="">Murad Gafaroff</a>.</strong>
        All rights reserved.
    </footer>
</div>

<script src="{{asset('admin-assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin-assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{asset('admin-assets/dist/js/adminlte.js')}}"></script>
<script src="{{asset('admin-assets/dist/js/demo.js')}}"></script>
<script src="{{asset('admin-assets/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('admin-assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('admin-assets/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('admin-assets/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<script src="{{asset('admin-assets/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('admin-assets/dist/js/pages/dashboard2.js')}}"></script>
<script src="{{asset('admin-assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(function () {
        // Summernote
        $('.textarea').summernote()
    })


</script>
</body>
</html>
