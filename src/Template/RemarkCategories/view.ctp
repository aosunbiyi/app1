<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RemarkCategory $remarkCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Remark Category'), ['action' => 'edit', $remarkCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Remark Category'), ['action' => 'delete', $remarkCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $remarkCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Remark Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Remark Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Remarks'), ['controller' => 'Remarks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Remark'), ['controller' => 'Remarks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="remarkCategories view large-9 medium-8 columns content">
    <h3><?= h($remarkCategory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Alias') ?></th>
            <td><?= h($remarkCategory->alias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category Name') ?></th>
            <td><?= h($remarkCategory->category_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($remarkCategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sort Key') ?></th>
            <td><?= $this->Number->format($remarkCategory->sort_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($remarkCategory->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($remarkCategory->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Remarks') ?></h4>
        <?php if (!empty($remarkCategory->remarks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Remark Category Id') ?></th>
                <th scope="col"><?= __('Alias') ?></th>
                <th scope="col"><?= __('Sort Key') ?></th>
                <th scope="col"><?= __('Reason') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($remarkCategory->remarks as $remarks): ?>
            <tr>
                <td><?= h($remarks->id) ?></td>
                <td><?= h($remarks->remark_category_id) ?></td>
                <td><?= h($remarks->alias) ?></td>
                <td><?= h($remarks->sort_key) ?></td>
                <td><?= h($remarks->reason) ?></td>
                <td><?= h($remarks->active) ?></td>
                <td><?= h($remarks->created) ?></td>
                <td><?= h($remarks->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Remarks', 'action' => 'view', $remarks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Remarks', 'action' => 'edit', $remarks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Remarks', 'action' => 'delete', $remarks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $remarks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
