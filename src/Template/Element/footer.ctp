<footer>
    <div class="container">
        <p>&copy; <?= __('{0} {1}. All Rights Reserved.', ['AGITO', 2018]); ?></p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <?= $this->Html->link(__('Privacy Policy'), ['controller' => 'Pages', 'action' => 'view', 'privacy-policy']); ?>
            </li>
            <li class="list-inline-item">
                <?= $this->Html->link(__('FAQ'), ['controller' => 'Pages', 'action' => 'view', 'faq']); ?>
            </li>
            <li class="list-inline-item small">
                <?= __('Language'); ?>
            </li>
            <li class="list-inline-item">
                <?= $this->Html->link("<span class='flag-icon flag-icon-br'></span> " . __('PT'), ['lang' => 'pt_BR'], ['escape' => false]); ?>
            </li>
            <li class="list-inline-item">
                <?= $this->Html->link("<span class='flag-icon flag-icon-us'></span> " . __('EN'), ['lang' => 'en_US'], ['escape' => false]); ?>
            </li>
        </ul>
    </div>
</footer>