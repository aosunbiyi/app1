<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mastersetup $mastersetup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mastersetup->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mastersetup->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mastersetup'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mastersetup form large-9 medium-8 columns content">
    <?= $this->Form->create($mastersetup) ?>
    <fieldset>
        <legend><?= __('Edit Mastersetup') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
