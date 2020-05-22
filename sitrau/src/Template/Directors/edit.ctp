<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Director $director
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $director->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $director->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Directors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="directors form large-9 medium-8 columns content">
    <?= $this->Form->create($director) ?>
    <fieldset>
        <legend><?= __('Edit Director') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('f_surname');
            echo $this->Form->control('m_surname');
            echo $this->Form->control('dni');
            echo $this->Form->control('personal_mail');
            echo $this->Form->control('institutional_mail');
            echo $this->Form->control('birth_date', ['empty' => true]);
            echo $this->Form->control('department_id', ['options' => $departments, 'empty' => true]);
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
