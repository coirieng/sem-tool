<nav id="sidebarMenu" class="col-md-3 col-lg-2 col-xl d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mb-1 text-muted">
            <span>TOOLS</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?= $active === 'home' ? 'active' : '' ?>" aria-current="page" href="/">
                    <i class="fa fa-fw fa-tachometer-alt me-1"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $active === 'keyword' ? 'active' : '' ?>" href="keywork_generator.php">
                <i class="fa fa-fw fa-key me-1"></i> Keywords generator
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $active === 'post' ? 'active' : '' ?>" href="post_generator.php">
                <i class="fab fa-fw fa-wordpress-simple me-1"></i> Wordpress posts generator
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $active === 'html' ? 'active' : '' ?>" href="html_validator.php">
                <i class="fas fa-fw fa-code me-1"></i> HTML Validator
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>ADDONS...</span>
        </h6>
        <ul class="nav flex-column mb-2">

            <li class="nav-item">
                <a class="nav-link <?= $active === 'chrome' ? 'active' : '' ?>" href="chrome_extensions.php">
                <i class="fab fa-fw fa-chrome me-1"></i> Chrome extensions
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $active === 'plugins' ? 'active' : '' ?>" href="wp_plugins.php">
                <i class="fas fa-fw fa-archive me-1"></i> Wordpress plugins
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $active === 'plugingen' ? 'active' : '' ?>" href="plugin_generator.php">
                <i class="fas fa-fw fa-archive me-1"></i> Plugin Generator
                </a>
            </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>LOGS...</span>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link <?= $active === 'changelog' ? 'active' : '' ?>" href="change_logs.php">
                <i class="fa fa-fw fa-calendar-alt me-1"></i> Changelog
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $active === 'roadmap' ? 'active' : '' ?>" href="road_map.php">
                <i class="fa fa-fw fa-sort-amount-up-alt me-1"></i> Roadmap
                </a>
            </li>
        </ul>
    </div>
</nav>