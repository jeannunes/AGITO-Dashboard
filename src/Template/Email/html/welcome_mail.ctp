<p><?= __('Hi {0}!', $user->first_name) ?></p>
<p>
    <?= __('You have been registered to Agito with the username {0}.', $user->username); ?>
    <?= __('To start using it, please, download the app from '); ?>
    <?= $this->Html->link('Play Store', 'https://play.google.com/apps/testing/br.com.pucpr.politecnica.lasin.agito '); ?>
    <?= __(' Play Store and click the following link to set your password:'); ?></p>
<p><?= $this->Html->link(['_name' => 'recover_password', $user->reset_token, '_full' => true]); ?></p>
<p><?= __('If nothing happens on click, please, copy the link and paste into your browser.'); ?></p>
<?php if (env('DEBUG', false)): ?>
    <p style="background-color: #ECECEC;padding: 5px;border-radius: 5px;">
        <?= __('If you are part of the Alpha Testers Group, click the following link to accept the invitation:'); ?>
        <?= $this->Html->link('https://play.google.com/apps/testing/br.com.pucpr.politecnica.lasin.agito',
            'https://play.google.com/apps/testing/br.com.pucpr.politecnica.lasin.agito',
            ['target' => '_blank']); ?>
    </p>
<?php endif; ?>
<p class="small"><?= __('* this is an automated e-mail, please do not reply.'); ?></p>