<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="#">
            <i class="fa fa-bug" aria-hidden="true"> <?php echo TITULO_APP ?></i>
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-bell-55"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="https://scontent.fgdl5-2.fna.fbcdn.net/v/t1.0-9/66502409_334518250764473_6286267005196566528_n.jpg?_nc_cat=111&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeG5_gTQ9_3tdREtT7NH12htZui7St_ja2xm6LtK3-NrbJAlCBvSIlDVvlldKWoHuoB6uLsEiCEuXmKEZNH3fghu&_nc_ohc=X9kwdKe7-5AAX-4IlXW&_nc_ht=scontent.fgdl5-2.fna&oh=0c488d55beff593e43ee12441966851f&oe=60069256">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                    <a href="./examples/profile.html" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>My profile</span>
                    </a>
                    <a href="./examples/profile.html" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>Settings</span>
                    </a>
                    <a href="./examples/profile.html" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>Activity</span>
                    </a>
                    <a href="./examples/profile.html" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>Support</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#!" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="#">
                        <i class="fa fa-bug" aria-hidden="true"> TITULO_APP</i>
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item  active ">
                    <a class="nav-link  active " href="./index.html">
                        <i class="ni ni-tv-2 text-primary"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./examples/icons.html">
                        <i class="ni ni-planet text-blue"></i> Icons
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./examples/maps.html">
                        <i class="ni ni-pin-3 text-orange"></i> Maps
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./examples/profile.html">
                        <i class="ni ni-single-02 text-yellow"></i> User profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./examples/tables.html">
                        <i class="ni ni-bullet-list-67 text-red"></i> Tables
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./examples/login.html">
                        <i class="ni ni-key-25 text-info"></i> Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./examples/register.html">
                        <i class="ni ni-circle-08 text-pink"></i> Register
                    </a>
                </li>
            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">Documentation</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
                        <i class="ni ni-spaceship"></i> Getting started
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
                        <i class="ni ni-palette"></i> Foundation
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
                        <i class="ni ni-ui-04"></i> Components
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active active-pro">
                    <a class="nav-link" href="./examples/upgrade.html">
                        <i class="ni ni-send text-dark"></i> Upgrade to PRO
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>