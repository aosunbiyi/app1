<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Advancesetting $advancesetting
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Advancesetting'), ['action' => 'edit', $advancesetting->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Advancesetting'), ['action' => 'delete', $advancesetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $advancesetting->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Advancesetting'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Advancesetting'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="advancesetting view large-9 medium-8 columns content">
    <h3><?= h($advancesetting->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($advancesetting->id) ?></td>
        </tr>
    </table>
</div>
