<section class="jumbo" id="resources" style="background-image: url(<?= $this->Url->image('489112.jpg'); ?>);">
    <div class="jumbo-content">
        <div class="container">
            <h2><?= __('Behind the avatar'); ?></h2>
            <p class="text-white"><?= __('Get to know about the research behind the creation of AGITO.'); ?></p>
            <?= $this->Html->link(__('Read the docs'), ['controller' => 'Resources', 'action' => 'index'], [
                'class' => 'btn btn-outline btn-xl'
            ]); ?>
        </div>
    </div>
    <div class="overlay"></div>
</section>