<?php $this->assign('title', __('Scientific Resources')); ?>

<?= $this->element('Resources/navbar'); ?>

<section class="jumbo" style="background-image: url(<?= $this->Url->image('489112.jpg'); ?>);">
    <div class="jumbo-content">
        <div class="container">
            <h2><?= __('Behind the avatar'); ?></h2>
            <p class="text-white"><?= __('Get to know about the research behind the creation of AGITO.'); ?></p>
        </div>
    </div>
    <div class="overlay"></div>
</section>

<?= $this->element('Resources/objectives'); ?>

<?= $this->element('Resources/members'); ?>

<?= $this->element('Resources/productions'); ?>

<?= $this->element('Resources/resources'); ?>

<?= $this->element('Resources/supporters'); ?>

<style>
    h3 {
        font-size: xx-large;
    }
</style>
