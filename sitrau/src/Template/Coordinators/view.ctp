<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordinator $coordinator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Coordinator'), ['action' => 'edit', $coordinator->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Coordinator'), ['action' => 'delete', $coordinator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coordinator->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Coordinators'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coordinator'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coordinators view large-9 medium-8 columns content">
    <h3><?= h($coordinator->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($coordinator->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('F Surname') ?></th>
            <td><?= h($coordinator->f_surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('M Surname') ?></th>
            <td><?= h($coordinator->m_surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Personal Mail') ?></th>
            <td><?= h($coordinator->personal_mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Institutional Mail') ?></th>
            <td><?= h($coordinator->institutional_mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('School') ?></th>
            <td><?= $coordinator->has('school') ? $this->Html->link($coordinator->school->name, ['controller' => 'Schools', 'action' => 'view', $coordinator->school->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($coordinator->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dni') ?></th>
            <td><?= $this->Number->format($coordinator->dni) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Date') ?></th>
            <td><?= h($coordinator->birth_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($coordinator->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($coordinator->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $coordinator->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
