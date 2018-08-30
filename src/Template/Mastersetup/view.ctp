<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mastersetup $mastersetup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mastersetup'), ['action' => 'edit', $mastersetup->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mastersetup'), ['action' => 'delete', $mastersetup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mastersetup->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mastersetup'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mastersetup'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mastersetup view large-9 medium-8 columns content">
    <h3><?= h($mastersetup->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mastersetup->id) ?></td>
        </tr>
    </table>
</div>
