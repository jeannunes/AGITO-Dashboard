<!doctype html>
<html lang="en">
<head>
    <?= $this->element('head'); ?>
</head>

<body>
<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?= $this->Html->link(__('AGITO'), ['controller' => 'Pages', 'action' => 'index'], ['class' => 'navbar-brand']); ?>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?= $this->Html->link(__('Login'), ['controller' => 'Monitors', 'action' => 'login'], ['class' => 'btn']); ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Register'), ['controller' => 'Monitors', 'action' => 'add'], ['class' => 'btn']); ?>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper wrapper-full-page">

    <?= $this->Flash->render(); ?>

    <?= $this->fetch('content'); ?>
    <footer class="footer footer-transparent">
        <div class="container">
            <div class="copyright">
                &copy;
                <script>document.write(new Date().getFullYear())</script>
                , made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative
                    Tim</a>
            </div>
        </div>
    </footer>
</div>
</body>

<?= $this->element('scripts'); ?>

</html>