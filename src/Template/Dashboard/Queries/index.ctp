<?php $this->assign('title', __('Queries')); ?>
<div class="card">
    <div class="card-content">
        <table class="table">
            <thead>
            <tr>
                <th><?= __('ID') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Creation Date') ?></th>
                <th><?= __('Last Update') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($queries as $query): ?>
                <tr>
                    <td><?= $query->slug; ?></td>
                    <td><?= $query->title; ?></td>
                    <td><?= $query->description; ?></td>
                    <td><?= $query->creation_date; ?></td>
                    <td><?= $query->last_modification_date; ?></td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>