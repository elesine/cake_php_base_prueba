<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pay Scales'), ['controller' => 'PayScales', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pay Scale'), ['controller' => 'PayScales', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="students view large-9 medium-8 columns content">
    <h3><?= h($student->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($student->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('F Surname') ?></th>
            <td><?= h($student->f_surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('M Surname') ?></th>
            <td><?= h($student->m_surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Personal Mail') ?></th>
            <td><?= h($student->personal_mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Institutional Mail') ?></th>
            <td><?= h($student->institutional_mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('School') ?></th>
            <td><?= $student->has('school') ? $this->Html->link($student->school->name, ['controller' => 'Schools', 'action' => 'view', $student->school->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pay Scale') ?></th>
            <td><?= $student->has('pay_scale') ? $this->Html->link($student->pay_scale->name, ['controller' => 'PayScales', 'action' => 'view', $student->pay_scale->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($student->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dni') ?></th>
            <td><?= $this->Number->format($student->dni) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Date') ?></th>
            <td><?= h($student->birth_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($student->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($student->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $student->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
