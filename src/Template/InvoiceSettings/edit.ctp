<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InvoiceSetting $invoiceSetting
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $invoiceSetting->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $invoiceSetting->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Invoice Settings'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="invoiceSettings form large-9 medium-8 columns content">
    <?= $this->Form->create($invoiceSetting) ?>
    <fieldset>
        <legend><?= __('Edit Invoice Setting') ?></legend>
        <?php
            echo $this->Form->control('invoice_variable_name');
            echo $this->Form->control('number_type');
            echo $this->Form->control('prefix');
            echo $this->Form->control('start_from');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
