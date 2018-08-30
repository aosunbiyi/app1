<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Remark $remark
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Remark'), ['action' => 'edit', $remark->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Remark'), ['action' => 'delete', $remark->id], ['confirm' => __('Are you sure you want to delete # {0}?', $remark->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Remarks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Remark'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Remark Categories'), ['controller' => 'RemarkCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Remark Category'), ['controller' => 'RemarkCategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="remarks view large-9 medium-8 columns content">
    <h3><?= h($remark->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Remark Category') ?></th>
            <td><?= $remark->has('remark_category') ? $this->Html->link($remark->remark_category->id, ['controller' => 'RemarkCategories', 'action' => 'view', $remark->remark_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alias') ?></th>
            <td><?= h($remark->alias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($remark->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sort Key') ?></th>
            <td><?= $this->Number->format($remark->sort_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($remark->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($remark->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($remark->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Reason') ?></h4>
        <?= $this->Text->autoParagraph(h($remark->reason)); ?>
    </div>
</div>
