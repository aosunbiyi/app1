<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationConfiguration $applicationConfiguration
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $applicationConfiguration->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $applicationConfiguration->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Application Configurations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="applicationConfigurations form large-9 medium-8 columns content">
    <?= $this->Form->create($applicationConfiguration) ?>
    <fieldset>
        <legend><?= __('Edit Application Configuration') ?></legend>
        <?php
            echo $this->Form->control('application_name');
            echo $this->Form->control('application_logo');
            echo $this->Form->control('login_banner');
            echo $this->Form->control('application_theme');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
