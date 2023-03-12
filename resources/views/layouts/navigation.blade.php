<!-- SIDEBAR MENU LEFT-->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
        <div class="nav-link">
            <div class="profile-image">
            <img src="/melody/images/faces/face4.jpg" alt="image"/>
            </div>
            <div class="profile-name">
            <p class="name">
                Welcome Gabriel
            </p>
            <p class="designation">
                Super Admin
            </p>
            </div>
        </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.categories.index') }}">
                <i class="fas fa-th menu-icon"></i>
                <span class="menu-title">Categorias</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.providers.index') }}">
                <i class="fas fa-truck menu-icon"></i>
                <span class="menu-title">Proveedores</span>
            </a>
        </li> 
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.products.index') }}">
                <i class="fas fa-cubes menu-icon"></i>
                <span class="menu-title">Productos</span>
            </a>
        </li> 
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.clients.index') }}">
                <i class="fas fa fa-id-badge menu-icon"></i>
                <span class="menu-title">Clientes</span>
            </a>
        </li> 
    </ul>
</nav>


