<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Propertysetup $propertysetup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Propertysetup'), ['action' => 'edit', $propertysetup->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Propertysetup'), ['action' => 'delete', $propertysetup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $propertysetup->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Propertysetup'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Propertysetup'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="propertysetup view large-9 medium-8 columns content">
    <h3><?= h($propertysetup->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($propertysetup->id) ?></td>
        </tr>
    </table>
</div>
