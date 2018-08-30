<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InvoiceSetting $invoiceSetting
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Invoice Setting'), ['action' => 'edit', $invoiceSetting->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Invoice Setting'), ['action' => 'delete', $invoiceSetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoiceSetting->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Invoice Settings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice Setting'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="invoiceSettings view large-9 medium-8 columns content">
    <h3><?= h($invoiceSetting->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Invoice Variable Name') ?></th>
            <td><?= h($invoiceSetting->invoice_variable_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number Type') ?></th>
            <td><?= h($invoiceSetting->number_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prefix') ?></th>
            <td><?= h($invoiceSetting->prefix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($invoiceSetting->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start From') ?></th>
            <td><?= $this->Number->format($invoiceSetting->start_from) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($invoiceSetting->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($invoiceSetting->modified) ?></td>
        </tr>
    </table>
</div>
