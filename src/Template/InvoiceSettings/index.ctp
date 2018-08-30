<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InvoiceSetting[]|\Cake\Collection\CollectionInterface $invoiceSettings
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Invoice Setting'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="invoiceSettings index large-9 medium-8 columns content">
    <h3><?= __('Invoice Settings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('invoice_variable_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prefix') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_from') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($invoiceSettings as $invoiceSetting): ?>
            <tr>
                <td><?= $this->Number->format($invoiceSetting->id) ?></td>
                <td><?= h($invoiceSetting->invoice_variable_name) ?></td>
                <td><?= h($invoiceSetting->number_type) ?></td>
                <td><?= h($invoiceSetting->prefix) ?></td>
                <td><?= $this->Number->format($invoiceSetting->start_from) ?></td>
                <td><?= h($invoiceSetting->created) ?></td>
                <td><?= h($invoiceSetting->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $invoiceSetting->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $invoiceSetting->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $invoiceSetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoiceSetting->id)]) ?>
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
