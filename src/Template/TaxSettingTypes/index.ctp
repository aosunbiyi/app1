<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TaxSettingType[]|\Cake\Collection\CollectionInterface $taxSettingTypes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tax Setting Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tax Settings'), ['controller' => 'TaxSettings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tax Setting'), ['controller' => 'TaxSettings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="taxSettingTypes index large-9 medium-8 columns content">
    <h3><?= __('Tax Setting Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tax_setting_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($taxSettingTypes as $taxSettingType): ?>
            <tr>
                <td><?= $this->Number->format($taxSettingType->id) ?></td>
                <td><?= h($taxSettingType->tax_setting_name) ?></td>
                <td><?= h($taxSettingType->created) ?></td>
                <td><?= h($taxSettingType->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $taxSettingType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $taxSettingType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $taxSettingType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $taxSettingType->id)]) ?>
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
