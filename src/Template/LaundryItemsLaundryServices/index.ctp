<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LaundryItemsLaundryService[]|\Cake\Collection\CollectionInterface $laundryItemsLaundryServices
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Laundry Items Laundry Service'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Laundry Items'), ['controller' => 'LaundryItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Laundry Item'), ['controller' => 'LaundryItems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Laundry Services'), ['controller' => 'LaundryServices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Laundry Service'), ['controller' => 'LaundryServices', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="laundryItemsLaundryServices index large-9 medium-8 columns content">
    <h3><?= __('Laundry Items Laundry Services') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('laundry_item_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('laundry_service_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($laundryItemsLaundryServices as $laundryItemsLaundryService): ?>
            <tr>
                <td><?= $laundryItemsLaundryService->has('laundry_item') ? $this->Html->link($laundryItemsLaundryService->laundry_item->id, ['controller' => 'LaundryItems', 'action' => 'view', $laundryItemsLaundryService->laundry_item->id]) : '' ?></td>
                <td><?= $laundryItemsLaundryService->has('laundry_service') ? $this->Html->link($laundryItemsLaundryService->laundry_service->id, ['controller' => 'LaundryServices', 'action' => 'view', $laundryItemsLaundryService->laundry_service->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $laundryItemsLaundryService->laundry_item_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $laundryItemsLaundryService->laundry_item_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $laundryItemsLaundryService->laundry_item_id], ['confirm' => __('Are you sure you want to delete # {0}?', $laundryItemsLaundryService->laundry_item_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
