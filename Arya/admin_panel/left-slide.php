<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="dist/img/logo3.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Trando</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/govind.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">GOVIND</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
            <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          
            </ul>
          </li>
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="graphs.php" class="nav-link">
              <i class="nav-icon fas fa-chart-area"></i>
              <p>
                Performance
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="category" class="nav-link">
              <i class="nav-icon fas fa-info"></i>
              <p>
               Add Category
                <span class="badge badge-info right"><?php TotalCategory(); ?></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="slide_image" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Slider Image
                <span class="badge badge-info right"><?php TotalSlideImages(); ?></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="main_marque" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Heighlights
                <span class="badge badge-info right"><?php TotalHeighlights(); ?></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="News" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                News
                <span class="badge badge-info right"><?php TotalNewsPosts(); ?></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="videos" class="nav-link">
              <i class="nav-icon fas fa-video"></i>
              <p>
                Videos Gallery
                <span class="badge badge-info right"><?php TotalNewsPosts(); ?></span>
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="Gallery" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-video-slash"></i>
              <p>
                Go to live
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="calender.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
         
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>