<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RemarkCategory[]|\Cake\Collection\CollectionInterface $remarkCategories
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Remark Category'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Remarks'), ['controller' => 'Remarks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Remark'), ['controller' => 'Remarks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="remarkCategories index large-9 medium-8 columns content">
    <h3><?= __('Remark Categories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sort_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($remarkCategories as $remarkCategory): ?>
            <tr>
                <td><?= $this->Number->format($remarkCategory->id) ?></td>
                <td><?= h($remarkCategory->alias) ?></td>
                <td><?= $this->Number->format($remarkCategory->sort_key) ?></td>
                <td><?= h($remarkCategory->category_name) ?></td>
                <td><?= h($remarkCategory->created) ?></td>
                <td><?= h($remarkCategory->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $remarkCategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $remarkCategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $remarkCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $remarkCategory->id)]) ?>
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
