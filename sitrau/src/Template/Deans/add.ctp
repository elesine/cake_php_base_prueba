<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dean $dean
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Deans'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Faculties'), ['controller' => 'Faculties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Faculty'), ['controller' => 'Faculties', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="deans form large-9 medium-8 columns content">
    <?= $this->Form->create($dean) ?>
    <fieldset>
        <legend><?= __('Add Dean') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('f_surname');
            echo $this->Form->control('m_surname');
            echo $this->Form->control('dni');
            echo $this->Form->control('personal_mail');
            echo $this->Form->control('institutional_mail');
            echo $this->Form->control('birth_date', ['empty' => true]);
            echo $this->Form->control('faculty_id', ['options' => $faculties, 'empty' => true]);
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
