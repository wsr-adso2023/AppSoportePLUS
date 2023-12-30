<nav>
      <aside class="menu">
        <p class="menu-label">
          General
        </p>
        <ul class="menu-list">
          <li><a class="is-active" href='{{route("dashboard")}}'>Inicio</a></li>
        </ul>

        @canany(['create-user', 'edit-user', 'delete-user','create-role', 'edit-role', 'delete-role'])
        <p class="menu-label">
          Usuarios
        </p>
        
        <ul class="menu-list">
          <li>
            <ul class="ml-0">
                 <li><a class="nav-link" href="{{ route('users.index') }}">Administrar Usuarios</a></li>
                 <li><a class="nav-link" href="{{ route('roles.index') }}">Administrar Roles</a></li>
            </ul>
          </li>
        </ul>
        @endcanany

        @canany(['create-customer', 'edit-customer', 'delete-customer'])
        <p class="menu-label">
          Clientes
        </p>
        <ul class="menu-list">
                 <li><a class="nav-link" href="{{ route('customers.index') }}">Administrar Clientes</a></li>
        </ul>
        @endcanany

        @canany(['create-product', 'edit-product', 'delete-product'])
        <p class="menu-label">
          Productos
        </p>
        <ul class="menu-list">
                 <li><a class="nav-link" href="{{ route('products.index') }}">Administrar Productos</a></li>
        </ul>
        @endcanany

        @canany(['create-supplier', 'edit-supplier', 'delete-supplier'])
        <p class="menu-label">
          Proveedores
        </p>
        <ul class="menu-list">
                 <li><a class="nav-link" href="{{ route('suppliers.index') }}">Administrar Proveedores</a></li> 
        </ul>
        @endcanany

        
        @canany(['create-support', 'edit-support', 'delete-support','create-diagnosticreports', 'edit-diagnosticreports', 'delete-diagnosticreports'])
        <p class="menu-label">
          Soporte técnico
        </p>
          <ul class="menu-list">
                 <li><a class="nav-link" href="{{ route('support.index') }}">Adminstrar Solicitudes</a></li>
                 <li><a class="nav-link" href="{{ route('reports.index') }}">Reporte de Diagnóstico</a></li>
          </ul>
        @endcanany
        
      </aside>
</nav>

