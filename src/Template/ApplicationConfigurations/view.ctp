<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationConfiguration $applicationConfiguration
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Application Configuration'), ['action' => 'edit', $applicationConfiguration->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Application Configuration'), ['action' => 'delete', $applicationConfiguration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $applicationConfiguration->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Application Configurations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application Configuration'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="applicationConfigurations view large-9 medium-8 columns content">
    <h3><?= h($applicationConfiguration->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Application Name') ?></th>
            <td><?= h($applicationConfiguration->application_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Application Logo') ?></th>
            <td><?= h($applicationConfiguration->application_logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Login Banner') ?></th>
            <td><?= h($applicationConfiguration->login_banner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Application Theme') ?></th>
            <td><?= h($applicationConfiguration->application_theme) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($applicationConfiguration->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($applicationConfiguration->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($applicationConfiguration->modified) ?></td>
        </tr>
    </table>
</div>
