<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Configuration $configuration
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $configuration->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $configuration->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Configurations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="configurations form large-9 medium-8 columns content">
    <?= $this->Form->create($configuration) ?>
    <fieldset>
        <legend><?= __('Edit Configuration') ?></legend>
        <?php
            echo $this->Form->control('start_date', ['empty' => true]);
            echo $this->Form->control('country_name');
            echo $this->Form->control('country_alias');
            echo $this->Form->control('curr_sign');
            echo $this->Form->control('state_name');
            echo $this->Form->control('zip');
            echo $this->Form->control('financial_period_from_day');
            echo $this->Form->control('financial_period_from_month');
            echo $this->Form->control('financial_period_to_day');
            echo $this->Form->control('financial_period_to_month');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
