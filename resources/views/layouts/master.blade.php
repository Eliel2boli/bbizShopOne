
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BbizShop | Page d'acceuil</title>

<link rel="stylesheet" href="{{asset("css/app.css")}}" >

@livewireStyles

</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

    
    <!-- Navbar-->

    <x-topnav />    
        

            <!-- Left Navbar-->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:#141c19">

            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text text-uppercase" style =" font-size: 1em;"><b>Bbiz</b>Shop</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('images/user.png')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{userFullName()}}</a>
                    </div>
                </div>

    <x-menu/>

            </div>

        </aside>

        <div class="content-wrapper">

        <!--Main content-->
        <div class="content">
            <div class="container-fluid">
                        
                @yield('contenu')
                            
            </div>

        </div>

    <x-sidebar/>

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-block">
        Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2021 <a href="https://adminlte.io">bbiz.com</a>.</strong> All rights reserved.
    </footer>
</div>



    <script src="{{mix("js/app.js")}}"></script>

    @livewireScripts


</body>
</html>
