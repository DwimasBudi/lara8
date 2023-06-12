{{-- <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary ">
    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto vh-100">
        <ul class="navbar-nav flex-column mx-3">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                <i class="bi bi-house-door"></i> Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                <i class="bi bi-file-post"></i> My Posts
              </a>
            </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-muted">
          <span>ADMINISTRATOR</span>
        </h6>
        <ul class="navbar-nav flex-column mx-3">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" href="/dashboard">
                <i class="bi bi-tags"></i> Categories
              </a>
        </ul>
    </div>
</div> --}}

    <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-lg offcanvas-end bg-body-tertiary vh-100" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel">Enryuu Web</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="navbar-nav flex-column mx-3">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard"><i class="bi bi-house-door"></i> Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                 <i class="bi bi-file-post"></i> My Posts
              </a>
            </li>
          </ul>
        @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-muted">
          <span>ADMINISTRATOR</span>
        </h6>
        <ul class="navbar-nav flex-column mx-3">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
                <i class="bi bi-tags"></i> Post Categories
              </a>
        </ul>  
        @endcan
          <hr class="my-3">

          <ul class="navbar-nav mx-3 flex-column mb-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">
               <i class="bi bi-gear"></i> Settings
              </a>
            </li>
            <li class="nav-item">
              <div class="navbar-nav">
                  <div class="nav-item text-nowrap ">
                      <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="nav-link">
                              <li><i class="bi bi-box-arrow-right"></i> Logout</li>
                            </button>
                        </form>
                  </div>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </div>