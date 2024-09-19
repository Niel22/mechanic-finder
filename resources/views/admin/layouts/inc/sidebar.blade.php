<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('admin.home') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.mechanics') }}">
            <i class="bi bi-wrench"></i>
            <span>Mechanics</span>
        </a>
    </li><!-- End Mechanics Nav -->

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.users') }}">
            <i class="bi bi-people"></i>
            <span>Users</span>
        </a>
    </li><!-- End Users Nav -->

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.reviews') }}">
            <i class="bi bi-chat-square-dots"></i>
            <span>Reviews</span>
        </a>
    </li><!-- End Reviews Nav -->


    </ul>

  </aside><!-- End Sidebar-->
