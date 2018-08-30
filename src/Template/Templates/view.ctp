<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Template $template
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Template'), ['action' => 'edit', $template->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Template'), ['action' => 'delete', $template->id], ['confirm' => __('Are you sure you want to delete # {0}?', $template->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Templates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Template'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="templates view large-9 medium-8 columns content">
    <h3><?= h($template->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Alias') ?></th>
            <td><?= h($template->alias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Template Code') ?></th>
            <td><?= h($template->template_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Template Title') ?></th>
            <td><?= h($template->template_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($template->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($template->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($template->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Template Body') ?></h4>
        <?= $this->Text->autoParagraph(h($template->template_body)); ?>
    </div>
    <div class="row">
        <h4><?= __('Default Template Body') ?></h4>
        <?= $this->Text->autoParagraph(h($template->default_template_body)); ?>
    </div>
</div>
