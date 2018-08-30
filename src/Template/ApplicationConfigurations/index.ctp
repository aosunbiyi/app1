<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationConfiguration[]|\Cake\Collection\CollectionInterface $applicationConfigurations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Application Configuration'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="applicationConfigurations index large-9 medium-8 columns content">
    <h3><?= __('Application Configurations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('application_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('application_logo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login_banner') ?></th>
                <th scope="col"><?= $this->Paginator->sort('application_theme') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($applicationConfigurations as $applicationConfiguration): ?>
            <tr>
                <td><?= $this->Number->format($applicationConfiguration->id) ?></td>
                <td><?= h($applicationConfiguration->application_name) ?></td>
                <td><?= h($applicationConfiguration->application_logo) ?></td>
                <td><?= h($applicationConfiguration->login_banner) ?></td>
                <td><?= h($applicationConfiguration->application_theme) ?></td>
                <td><?= h($applicationConfiguration->created) ?></td>
                <td><?= h($applicationConfiguration->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $applicationConfiguration->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $applicationConfiguration->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $applicationConfiguration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $applicationConfiguration->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
