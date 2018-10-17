<!doctype html>
<html lang="en">
<head>
    <?= $this->element('head'); ?>
</head>

<body>
<div class="wrapper">
    <div class="sidebar" data-background-color="brown" data-active-color="danger">
        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                CT
            </a>
            <?= $this->Html->link(__('AGITO'), ['controller' => 'Pages', 'action' => 'index'], ['class' => 'simple-text logo-normal']); ?>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li>
                    <?= $this->Html->link('<i class="ti-panel"></i><p>' . __('Dashboard') . '</p>', [
                        'controller' => 'Pages', 'action' => 'index'
                    ], ['escape' => false]); ?>
                </li>
                <li>
                    <?= $this->Html->link('<i class="ti-pie-chart"></i><p>' . __('Queries') . '</p>', [
                        'controller' => 'Queries', 'action' => 'index'
                    ], ['escape' => false]); ?>
                </li>
                <li>
                    <?= $this->Html->link('<i class="ti-user"></i><p>' . __('Users') . '</p>', [
                        'controller' => 'Users', 'action' => 'index'
                    ], ['escape' => false]); ?>
                </li>
                <li>
                    <?= $this->Html->link('<i class="ti-user"></i><p>' . __('Monitors') . '</p>', [
                        'controller' => 'Monitors', 'action' => 'index'
                    ], ['escape' => false]); ?>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <?= $this->Html->link($this->fetch('title'), $this->request->here(), ['class' => 'navbar-brand']); ?>
                </div>
                <div class="collapse navbar-collapse">
                    <!-- <form class="navbar-form navbar-left navbar-search-form" role="search">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" value="" class="form-control" placeholder="Search...">
                        </div>
                    </form> -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li>
                            <a href="#stats" class="dropdown-toggle btn-magnify" data-toggle="dropdown">
                                <i class="ti-panel"></i>
                                <p>Stats</p>
                            </a>
                        </li> -->
                        <!-- <li class="dropdown">
                            <a href="#notifications" class="dropdown-toggle btn-rotate" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <span class="notification">5</span>
                                <p class="hidden-md hidden-lg">
                                    Notifications
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#not1">Notification 1</a></li>
                                <li><a href="#not2">Notification 2</a></li>
                                <li><a href="#not3">Notification 3</a></li>
                                <li><a href="#not4">Notification 4</a></li>
                                <li><a href="#another">Another notification</a></li>
                            </ul>
                        </li> -->
                        <li>
                            <?= $this->Html->link('<i class="ti-close"></i><p class="hidden-md hidden-lg">' . __('Logout') . ' </p > ', ['controller' => 'Monitors', 'action' => 'logout '], ['class' => 'btn-rotate', 'escape' => false]); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <?= $this->Flash->render(); ?>

                    <p>
                        <?php
                        try {
                            $file = $this->request->getParam('controller');
                            echo $this->element($file);
                        } catch (\Exception $ignore) {
                        }
                        ?>
                    </p>

                    <?= $this->fetch('content'); ?>

                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    , made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative
                        Tim</a>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>

<?= $this->element('scripts'); ?>

</html>