<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\University $university
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $university->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $university->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Universities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Faculties'), ['controller' => 'Faculties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Faculty'), ['controller' => 'Faculties', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rectors'), ['controller' => 'Rectors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rector'), ['controller' => 'Rectors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="universities form large-9 medium-8 columns content">
    <?= $this->Form->create($university) ?>
    <fieldset>
        <legend><?= __('Edit University') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('address');
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
