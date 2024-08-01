<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i> <!-- Dashboard icon -->
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        
        <li class="nav-item">
            <a href="{{ route('admin.product.list') }}" class="nav-link">
                <i class="nav-icon fas fa-box"></i> <!-- Product icon -->
                <p>
                    Product
                </p>
            </a>
        </li>
        
        <li class="nav-item">
            <a href="{{ route('admin.logout') }}" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i> <!-- Logout icon -->
                <p>
                    Logout  
                </p>
            </a>
        </li>
        
    </ul>
  </nav>