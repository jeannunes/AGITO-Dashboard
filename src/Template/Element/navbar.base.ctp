<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <?= $this->Html->link('AGITO', ['controller' => 'Pages', 'action' => 'view', 'index'], ['class' => 'navbar-brand js-scroll-trigger']); ?>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item">
                    <?= $this->Html->link(__('Scientific Resources'), '#resources', ['class' => 'nav-link js-scroll-trigger']); ?>
                </li> -->
            </ul>
        </div>
    </div>
</nav>