<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LaundryHotelService $laundryHotelService
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $laundryHotelService->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $laundryHotelService->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Laundry Hotel Services'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Laundry Guest Laundry Transactions'), ['controller' => 'LaundryGuestLaundryTransactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Laundry Guest Laundry Transaction'), ['controller' => 'LaundryGuestLaundryTransactions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Laundry Hotel Laundry Transactions'), ['controller' => 'LaundryHotelLaundryTransactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Laundry Hotel Laundry Transaction'), ['controller' => 'LaundryHotelLaundryTransactions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="laundryHotelServices form large-9 medium-8 columns content">
    <?= $this->Form->create($laundryHotelService) ?>
    <fieldset>
        <legend><?= __('Edit Laundry Hotel Service') ?></legend>
        <?php
            echo $this->Form->control('service_name');
            echo $this->Form->control('description');
            echo $this->Form->control('extra_charges');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
