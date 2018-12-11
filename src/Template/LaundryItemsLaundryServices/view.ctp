<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LaundryItemsLaundryService $laundryItemsLaundryService
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Laundry Items Laundry Service'), ['action' => 'edit', $laundryItemsLaundryService->laundry_item_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Laundry Items Laundry Service'), ['action' => 'delete', $laundryItemsLaundryService->laundry_item_id], ['confirm' => __('Are you sure you want to delete # {0}?', $laundryItemsLaundryService->laundry_item_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Laundry Items Laundry Services'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Laundry Items Laundry Service'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Laundry Items'), ['controller' => 'LaundryItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Laundry Item'), ['controller' => 'LaundryItems', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Laundry Services'), ['controller' => 'LaundryServices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Laundry Service'), ['controller' => 'LaundryServices', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="laundryItemsLaundryServices view large-9 medium-8 columns content">
    <h3><?= h($laundryItemsLaundryService->laundry_item_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Laundry Item') ?></th>
            <td><?= $laundryItemsLaundryService->has('laundry_item') ? $this->Html->link($laundryItemsLaundryService->laundry_item->id, ['controller' => 'LaundryItems', 'action' => 'view', $laundryItemsLaundryService->laundry_item->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Laundry Service') ?></th>
            <td><?= $laundryItemsLaundryService->has('laundry_service') ? $this->Html->link($laundryItemsLaundryService->laundry_service->id, ['controller' => 'LaundryServices', 'action' => 'view', $laundryItemsLaundryService->laundry_service->id]) : '' ?></td>
        </tr>
    </table>
</div>
