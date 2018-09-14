<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agito API</title>

    <!-- Bootstrap core CSS -->
    <?= $this->Html->css('../vendor/bootstrap/css/bootstrap.min.css'); ?>

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
          rel="stylesheet">
    <?= $this->Html->css('../vendor/font-awesome/css/font-awesome.min.css'); ?>
    <?= $this->Html->css('../vendor/devicons/css/devicons.min.css'); ?>
    <?= $this->Html->css('../vendor/simple-line-icons/css/simple-line-icons.css'); ?>

    <!-- Custom styles for this template -->
    <?= $this->Html->css('resume.min.css'); ?>

</head>

<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Start Bootstrap</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
        </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <?= $this->Html->link(__('Info'), '#info', ['class' => 'nav-link js-scroll-trigger']); ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link(__('User'), '#user', ['class' => 'nav-link js-scroll-trigger']); ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link(__('Glucose'), '#glucose', ['class' => 'nav-link js-scroll-trigger']); ?>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="info">
        <div class="my-auto">
            <h1 class="mb-0">Agito
                <span class="text-primary">API</span>
            </h1>
            <div class="subheading mb-5">Pontifícia Universidade Católica do Paraná
                <a href="mailto:name@email.com">contato@email.com</a>
            </div>
            <p class="mb-5"><?= __('Check on this pages how to get data related to our app.') ?></p>
            <ul class="list-inline list-social-icons mb-0">
                <li class="list-inline-item">
                    <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="user">
        <div class="my-auto">
            <h2 class="mb-5"><?= __('User Data'); ?></h2>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">Get register counts</h3>
                    <div class="subheading mb-3">/public_api/users/count</div>
                    <p>This method returns the count of registered user given the date range.</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">POST, PATCH</span>
                </div>
            </div>

        </div>

    </section>

    <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="glucose">
        <div class="my-auto">
            <h2 class="mb-5">Education</h2>

            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">University of Colorado Boulder</h3>
                    <div class="subheading mb-3">Bachelor of Science</div>
                    <div>Computer Science - Web Development Track</div>
                    <p>GPA: 3.23</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">August 2006 - May 2010</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row">
                <div class="resume-content mr-auto">
                    <h3 class="mb-0">James Buchanan High School</h3>
                    <div class="subheading mb-3">Technology Magnet Program</div>
                    <p>GPA: 3.56</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">August 2002 - May 2006</span>
                </div>
            </div>

        </div>
    </section>

</div>

<!-- Bootstrap core JavaScript -->
<?= $this->Html->script('../vendor/jquery/jquery.min.js'); ?>
<?= $this->Html->script('../vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>

<!-- Plugin JavaScript -->
<?= $this->Html->script('../vendor/jquery-easing/jquery.easing.min.js'); ?>

<!-- Custom scripts for this template -->
<?= $this->Html->script('resume.min.js'); ?>

</body>

</html>
