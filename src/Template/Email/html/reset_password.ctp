<p><?= __('Hi {0}!', $user->first_name) ?></p>
<p><?= __('This message has been sent because you requested your password to be reseted. Please, follow the link bellow to do this:'); ?></p>
<p><?= $this->Html->link(['_name' => 'recover_password', $user->reset_token, '_full' => true]); ?></p>
<p><?= __('If nothing happens on click, please, copy the link and paste into your browser.'); ?></p>
<p class="small"><?= __('* this is an automated e-mail, please do not reply.'); ?></p>