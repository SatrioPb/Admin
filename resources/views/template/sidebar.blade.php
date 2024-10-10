<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); border-right: 1px solid #e3e6f0;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3" style="font-weight: bold;">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/dashboard" style="transition: all 0.3s ease-in-out;">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading" style="font-size: 14px; font-weight: bold; color: #fff;">
        Addons
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}" style="transition: all 0.3s ease-in-out;">
            <i class="fas fa-users"></i>
            <span>User</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages3" aria-expanded="true"
            aria-controls="collapsePages3" style="transition: all 0.3s ease-in-out;">
            <i class="fas fa-fw fa-dollar-sign"></i>
            <span>Payment</span>
        </a>
        <div id="collapsePages3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Page Menu:</h6>
                <a class="collapse-item" href="{{ route('payment.index') }}">Payment</a>
                <a class="collapse-item" href="{{ route('payment.filter') }}">Payment success</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('articles.index') }}" style="transition: all 0.3s ease-in-out;">
            <i class="fas fa-newspaper"></i>
            <span>Article</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('post.index') }}" style="transition: all 0.3s ease-in-out;">
            <i class="fas fa-upload"></i>
            <span>Posts</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading" style="font-size: 14px; font-weight: bold; color: #fff;">
        More Pages
    </div>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages1" aria-expanded="true"
            aria-controls="collapsePages1" style="transition: all 0.3s ease-in-out;">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Page Menu:</h6>
                <a class="collapse-item" href="{{ route('articles.index') }}">Article</a>
                <a class="collapse-item" href="{{ route('ayhs.index') }}">Ayahs</a>
                <a class="collapse-item" href="{{ route('event.index') }}">Event</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true"
            aria-controls="collapsePages2" style="transition: all 0.3s ease-in-out;">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages 2</span>
        </a>
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Page Menu:</h6>
                <a class="collapse-item" href="{{ route('departement.index') }}">Departemen</a>
                <a class="collapse-item" href="{{ route('books.index') }}">Books</a>
                <a class="collapse-item" href="{{ route('payment.index') }}">Payment</a>
            </div>
        </div>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle" style="background-color: #4e73df; color: white;"></button>
    </div>

</ul>