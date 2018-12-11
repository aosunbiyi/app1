<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LaundryHotelService $laundryHotelService
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Laundry Hotel Service'), ['action' => 'edit', $laundryHotelService->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Laundry Hotel Service'), ['action' => 'delete', $laundryHotelService->id], ['confirm' => __('Are you sure you want to delete # {0}?', $laundryHotelService->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Laundry Hotel Services'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Laundry Hotel Service'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Laundry Guest Laundry Transactions'), ['controller' => 'LaundryGuestLaundryTransactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Laundry Guest Laundry Transaction'), ['controller' => 'LaundryGuestLaundryTransactions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Laundry Hotel Laundry Transactions'), ['controller' => 'LaundryHotelLaundryTransactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Laundry Hotel Laundry Transaction'), ['controller' => 'LaundryHotelLaundryTransactions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="laundryHotelServices view large-9 medium-8 columns content">
    <h3><?= h($laundryHotelService->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Service Name') ?></th>
            <td><?= h($laundryHotelService->service_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($laundryHotelService->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Extra Charges') ?></th>
            <td><?= $this->Number->format($laundryHotelService->extra_charges) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($laundryHotelService->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($laundryHotelService->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($laundryHotelService->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Laundry Guest Laundry Transactions') ?></h4>
        <?php if (!empty($laundryHotelService->laundry_guest_laundry_transactions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Room Id') ?></th>
                <th scope="col"><?= __('Account Id') ?></th>
                <th scope="col"><?= __('Transaction Date') ?></th>
                <th scope="col"><?= __('Transaction Time') ?></th>
                <th scope="col"><?= __('Delivery Date') ?></th>
                <th scope="col"><?= __('Delivery Time') ?></th>
                <th scope="col"><?= __('Laundry Packaging Type Id') ?></th>
                <th scope="col"><?= __('Laundry Service Id') ?></th>
                <th scope="col"><?= __('Laundry Hotel Service Id') ?></th>
                <th scope="col"><?= __('Total Charges') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($laundryHotelService->laundry_guest_laundry_transactions as $laundryGuestLaundryTransactions): ?>
            <tr>
                <td><?= h($laundryGuestLaundryTransactions->id) ?></td>
                <td><?= h($laundryGuestLaundryTransactions->code) ?></td>
                <td><?= h($laundryGuestLaundryTransactions->room_id) ?></td>
                <td><?= h($laundryGuestLaundryTransactions->account_id) ?></td>
                <td><?= h($laundryGuestLaundryTransactions->transaction_date) ?></td>
                <td><?= h($laundryGuestLaundryTransactions->transaction_time) ?></td>
                <td><?= h($laundryGuestLaundryTransactions->delivery_date) ?></td>
                <td><?= h($laundryGuestLaundryTransactions->delivery_time) ?></td>
                <td><?= h($laundryGuestLaundryTransactions->laundry_packaging_type_id) ?></td>
                <td><?= h($laundryGuestLaundryTransactions->laundry_service_id) ?></td>
                <td><?= h($laundryGuestLaundryTransactions->laundry_hotel_service_id) ?></td>
                <td><?= h($laundryGuestLaundryTransactions->total_charges) ?></td>
                <td><?= h($laundryGuestLaundryTransactions->status) ?></td>
                <td><?= h($laundryGuestLaundryTransactions->created) ?></td>
                <td><?= h($laundryGuestLaundryTransactions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'LaundryGuestLaundryTransactions', 'action' => 'view', $laundryGuestLaundryTransactions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'LaundryGuestLaundryTransactions', 'action' => 'edit', $laundryGuestLaundryTransactions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'LaundryGuestLaundryTransactions', 'action' => 'delete', $laundryGuestLaundryTransactions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $laundryGuestLaundryTransactions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Laundry Hotel Laundry Transactions') ?></h4>
        <?php if (!empty($laundryHotelService->laundry_hotel_laundry_transactions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Transaction Date') ?></th>
                <th scope="col"><?= __('Transaction Time') ?></th>
                <th scope="col"><?= __('Delivery Date') ?></th>
                <th scope="col"><?= __('Delivery Time') ?></th>
                <th scope="col"><?= __('Laundry Packaging Type Id') ?></th>
                <th scope="col"><?= __('Laundry Service Id') ?></th>
                <th scope="col"><?= __('Laundry Hotel Service Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($laundryHotelService->laundry_hotel_laundry_transactions as $laundryHotelLaundryTransactions): ?>
            <tr>
                <td><?= h($laundryHotelLaundryTransactions->id) ?></td>
                <td><?= h($laundryHotelLaundryTransactions->code) ?></td>
                <td><?= h($laundryHotelLaundryTransactions->transaction_date) ?></td>
                <td><?= h($laundryHotelLaundryTransactions->transaction_time) ?></td>
                <td><?= h($laundryHotelLaundryTransactions->delivery_date) ?></td>
                <td><?= h($laundryHotelLaundryTransactions->delivery_time) ?></td>
                <td><?= h($laundryHotelLaundryTransactions->laundry_packaging_type_id) ?></td>
                <td><?= h($laundryHotelLaundryTransactions->laundry_service_id) ?></td>
                <td><?= h($laundryHotelLaundryTransactions->laundry_hotel_service_id) ?></td>
                <td><?= h($laundryHotelLaundryTransactions->status) ?></td>
                <td><?= h($laundryHotelLaundryTransactions->created) ?></td>
                <td><?= h($laundryHotelLaundryTransactions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'LaundryHotelLaundryTransactions', 'action' => 'view', $laundryHotelLaundryTransactions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'LaundryHotelLaundryTransactions', 'action' => 'edit', $laundryHotelLaundryTransactions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'LaundryHotelLaundryTransactions', 'action' => 'delete', $laundryHotelLaundryTransactions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $laundryHotelLaundryTransactions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
