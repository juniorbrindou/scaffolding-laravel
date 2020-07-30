<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <i class="nav-icon icon-speedometer"></i> Dashboard
                </a>
            </li>

            @can('read-users','read-roles')
            <li class="nav-title">Settings</li>
            @endcan
            @can('read-users')
            <li class="nav-item">
                <a class="nav-link" href="/users">
                    <i class="nav-icon icon-people"></i> Users
                </a>
            </li>
            @endcan
            @can('read-roles')
            <li class="nav-item">
                <a class="nav-link" href="/roles">
                    <i class="nav-icon icon-key"></i> Roles
                </a>
            </li>
            @endcan

            {{--  my add  --}}
            @can('create-roles')
            <li  data-toggle="collapse" data-target="#products" class="collapsed nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon icon-note"></i> Ressources <span class="icon-arrow-down"></span>
                </a>
                <ul class="sub-menu collapse" id="products">
                    <li class="nav-item"><a class="nav-link" href="/villes">Villes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Communes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Quartiers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Domaines</a></li>
                </ul>
            </li>
            @endcan
        </ul>
    </nav>
    <sidebar></sidebar>
</div>
