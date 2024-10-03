  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'dashboard') @else collapsed @endif" href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'customers') @else collapsed @endif" href="{{ route('customers') }}">
          <i class="bi bi-person"></i>
          <span>Customeres</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'medicines') @else collapsed @endif" href="{{ route('medicines') }}">
          <i class="bi bi-shop"></i>
          <span>Medicines</span>
        </a>
      </li>

            <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'medicines_stock') @else collapsed @endif" href="{{ route('medicines-stock') }}">
          <i class="bi bi-archive"></i>
          <span>Medicines Stock</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'suppliers') @else collapsed @endif" href="{{ route('suppliers') }}">
          <i class="bi bi-person"></i>
          <span>Suppliers</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'invoices') @else collapsed @endif" href="{{ route('invoices') }}">
          <i class="bi bi-journal-text"></i>
          <span>Invoices</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'purchases') @else collapsed @endif" href="{{ route('purchases') }}">
          <i class="bi bi-currency-dollar"></i>
          <span>Purchases</span>
        </a>
      </li>


    </ul>

  </aside><!-- End Sidebar-->
