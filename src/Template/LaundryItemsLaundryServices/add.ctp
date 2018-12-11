<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LaundryItemsLaundryService $laundryItemsLaundryService
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Laundry Items Laundry Services'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Laundry Items'), ['controller' => 'LaundryItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Laundry Item'), ['controller' => 'LaundryItems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Laundry Services'), ['controller' => 'LaundryServices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Laundry Service'), ['controller' => 'LaundryServices', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="laundryItemsLaundryServices form large-9 medium-8 columns content">
    <?= $this->Form->create($laundryItemsLaundryService) ?>
    <fieldset>
        <legend><?= __('Add Laundry Items Laundry Service') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
