<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rector $rector
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rector->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rector->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rectors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Universities'), ['controller' => 'Universities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New University'), ['controller' => 'Universities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rectors form large-9 medium-8 columns content">
    <?= $this->Form->create($rector) ?>
    <fieldset>
        <legend><?= __('Edit Rector') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('f_surname');
            echo $this->Form->control('m_surname');
            echo $this->Form->control('dni');
            echo $this->Form->control('personal_mail');
            echo $this->Form->control('institutional_mail');
            echo $this->Form->control('birth_date', ['empty' => true]);
            echo $this->Form->control('university_id', ['options' => $universities, 'empty' => true]);
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
