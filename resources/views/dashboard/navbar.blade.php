@extends('dashboard.app')
@section('content')

        <div class="container-fluid meun" >
            <ul class="nav flex-column bg-dark w-50">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                </ul>
        </div>

   
@endsection








<nav class="navbar info-nav text-center  navbar-light main_navigation ">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse info-div-nav navbar-collapse " id="navbarNavDropdown">
        <div class="employee_info">
        <div class="profile_picture">
            <img class="" src="/mvcapp/public/img/user.png" alt="User Profile Picture"/>

        </div>


            <span class="name">udrr </span>
            <span class="privilege">group</span>
        </div>

        <ul class="navbar-nav list-unstyled text-right  app_navigation">
           
            <li class="nav-item dropdown">
                <a class="nav-link " href="/mvcapp/public/index.php/store" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">store </i>  <?= $text_store ?>
                </a>
                <div class="dropdown-menu info-dropdown" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/mvcapp/public/index.php/productcategories">categories</a>
                    <a class="dropdown-item" href="/mvcapp/public/index.php/productlist"><products</a>
                </div>
            </li>
            <li> <a href="/mvcapp/public/index.php/clients"><i class="material-icons">contacts </i></a></li>

            <li class="nav-item dropdown">
                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">store </i> hbffffgggg
                </a>
                <div class="dropdown-menu info-dropdown" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/mvcapp/public/index.php/users">user</a>
                    <a class="dropdown-item" href="/mvcapp/public/index.php/usersgroups">yese2 </a>
                    <a class="dropdown-item" href="/mvcapp/public/index.php/privileges">hgg </a>
                </div>
            </li>

            <li> <a href="/mvcapp/public/index.php/reports "><i class="fa fa-bar-chart"> </a></li>
          

        </ul>


    </div>

</nav>
