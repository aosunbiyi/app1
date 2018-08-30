<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Configuration[]|\Cake\Collection\CollectionInterface $configurations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Configuration'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="configurations index large-9 medium-8 columns content">
    <h3><?= __('Configurations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_alias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('curr_sign') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('financial_period_from_day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('financial_period_from_month') ?></th>
                <th scope="col"><?= $this->Paginator->sort('financial_period_to_day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('financial_period_to_month') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($configurations as $configuration): ?>
            <tr>
                <td><?= $this->Number->format($configuration->id) ?></td>
                <td><?= h($configuration->start_date) ?></td>
                <td><?= h($configuration->country_name) ?></td>
                <td><?= h($configuration->country_alias) ?></td>
                <td><?= h($configuration->curr_sign) ?></td>
                <td><?= h($configuration->state_name) ?></td>
                <td><?= h($configuration->zip) ?></td>
                <td><?= $this->Number->format($configuration->financial_period_from_day) ?></td>
                <td><?= h($configuration->financial_period_from_month) ?></td>
                <td><?= $this->Number->format($configuration->financial_period_to_day) ?></td>
                <td><?= h($configuration->financial_period_to_month) ?></td>
                <td><?= h($configuration->created) ?></td>
                <td><?= h($configuration->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $configuration->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $configuration->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $configuration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $configuration->id)]) ?>
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
