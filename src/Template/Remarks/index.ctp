<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Remark[]|\Cake\Collection\CollectionInterface $remarks
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Remark'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Remark Categories'), ['controller' => 'RemarkCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Remark Category'), ['controller' => 'RemarkCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="remarks index large-9 medium-8 columns content">
    <h3><?= __('Remarks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('remark_category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sort_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($remarks as $remark): ?>
            <tr>
                <td><?= $this->Number->format($remark->id) ?></td>
                <td><?= $remark->has('remark_category') ? $this->Html->link($remark->remark_category->id, ['controller' => 'RemarkCategories', 'action' => 'view', $remark->remark_category->id]) : '' ?></td>
                <td><?= h($remark->alias) ?></td>
                <td><?= $this->Number->format($remark->sort_key) ?></td>
                <td><?= $this->Number->format($remark->active) ?></td>
                <td><?= h($remark->created) ?></td>
                <td><?= h($remark->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $remark->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $remark->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $remark->id], ['confirm' => __('Are you sure you want to delete # {0}?', $remark->id)]) ?>
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
