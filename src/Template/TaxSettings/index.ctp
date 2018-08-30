<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TaxSetting[]|\Cake\Collection\CollectionInterface $taxSettings
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tax Setting'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tax Setting Types'), ['controller' => 'TaxSettingTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tax Setting Type'), ['controller' => 'TaxSettingTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="taxSettings index large-9 medium-8 columns content">
    <h3><?= __('Tax Settings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tax_setting_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($taxSettings as $taxSetting): ?>
            <tr>
                <td><?= $this->Number->format($taxSetting->id) ?></td>
                <td><?= $taxSetting->has('tax_setting_type') ? $this->Html->link($taxSetting->tax_setting_type->id, ['controller' => 'TaxSettingTypes', 'action' => 'view', $taxSetting->tax_setting_type->id]) : '' ?></td>
                <td><?= $this->Number->format($taxSetting->amount) ?></td>
                <td><?= h($taxSetting->created) ?></td>
                <td><?= h($taxSetting->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $taxSetting->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $taxSetting->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $taxSetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $taxSetting->id)]) ?>
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
