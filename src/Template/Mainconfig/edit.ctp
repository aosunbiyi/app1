<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mainconfig $mainconfig
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mainconfig->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mainconfig->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mainconfig'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mainconfig form large-9 medium-8 columns content">
    <?= $this->Form->create($mainconfig) ?>
    <fieldset>
        <legend><?= __('Edit Mainconfig') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
