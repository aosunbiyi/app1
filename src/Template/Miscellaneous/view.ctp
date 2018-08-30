<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Miscellaneous $miscellaneous
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Miscellaneous'), ['action' => 'edit', $miscellaneous->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Miscellaneous'), ['action' => 'delete', $miscellaneous->id], ['confirm' => __('Are you sure you want to delete # {0}?', $miscellaneous->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Miscellaneous'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Miscellaneous'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="miscellaneous view large-9 medium-8 columns content">
    <h3><?= h($miscellaneous->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($miscellaneous->id) ?></td>
        </tr>
    </table>
</div>
