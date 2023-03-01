<!-- SIDEBAR MENU LEFT-->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
        <div class="nav-link">
            <div class="profile-image">
            <img src="melody/images/faces/face4.jpg" alt="image"/>
            </div>
            <div class="profile-name">
            <p class="name">
                Welcome Mai
            </p>
            <p class="designation">
                Super Admin
            </p>
            </div>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="index-2.html">
            <i class="fa fa-home menu-icon"></i>
            <span class="menu-title">Dashboard</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('categories.index') }}">
            <i class="fas fa-th menu-icon"></i>
            <span class="menu-title">Categoria</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
            <i class="fab fa-trello menu-icon"></i>
            <span class="menu-title">Page Layouts</span>
            <i class="menu-arrow"></i>
        </a>            
    </ul>
</nav>