<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordinator $coordinator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $coordinator->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $coordinator->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Coordinators'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coordinators form large-9 medium-8 columns content">
    <?= $this->Form->create($coordinator) ?>
    <fieldset>
        <legend><?= __('Edit Coordinator') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('f_surname');
            echo $this->Form->control('m_surname');
            echo $this->Form->control('dni');
            echo $this->Form->control('personal_mail');
            echo $this->Form->control('institutional_mail');
            echo $this->Form->control('birth_date', ['empty' => true]);
            echo $this->Form->control('school_id', ['options' => $schools, 'empty' => true]);
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
