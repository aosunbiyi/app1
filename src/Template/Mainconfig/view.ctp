<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mainconfig $mainconfig
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mainconfig'), ['action' => 'edit', $mainconfig->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mainconfig'), ['action' => 'delete', $mainconfig->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mainconfig->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mainconfig'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mainconfig'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mainconfig view large-9 medium-8 columns content">
    <h3><?= h($mainconfig->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mainconfig->id) ?></td>
        </tr>
    </table>
</div>
