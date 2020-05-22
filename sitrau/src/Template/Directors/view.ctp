<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Director $director
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Director'), ['action' => 'edit', $director->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Director'), ['action' => 'delete', $director->id], ['confirm' => __('Are you sure you want to delete # {0}?', $director->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Directors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Director'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="directors view large-9 medium-8 columns content">
    <h3><?= h($director->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($director->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('F Surname') ?></th>
            <td><?= h($director->f_surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('M Surname') ?></th>
            <td><?= h($director->m_surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Personal Mail') ?></th>
            <td><?= h($director->personal_mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Institutional Mail') ?></th>
            <td><?= h($director->institutional_mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= $director->has('department') ? $this->Html->link($director->department->name, ['controller' => 'Departments', 'action' => 'view', $director->department->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($director->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dni') ?></th>
            <td><?= $this->Number->format($director->dni) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Date') ?></th>
            <td><?= h($director->birth_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($director->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($director->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $director->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
