<?php $this->assign('title', __('Users')); ?>
<div class="card">
    <div class="card-content">
        <table class="table">
            <thead>
            <tr>
                <th><?= __('Name') ?></th>
                <th><?= __('E-mail'); ?></th>
                <th><?= __('Username'); ?></th>
                <th><?= __('Birth Date') ?></th>
                <th><?= __('Gender') ?></th>
                <th><?= __('Last Login') ?></th>
                <th><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user->full_name ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->username ?></td>
                    <td><?= $user->birth_date ?></td>
                    <td><?= $user->gender_identity ?></td>
                    <td><?= $user->last_login ?></td>
                    <td>
                        <?= $this->Html->link(__('Reset Password'), ['action' => 'resetPassword', $user->id], ['class' => 'btn btn-warning']); ?>
                    </td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>