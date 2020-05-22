<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rector $rector
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rector'), ['action' => 'edit', $rector->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rector'), ['action' => 'delete', $rector->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rector->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rectors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rector'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Universities'), ['controller' => 'Universities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New University'), ['controller' => 'Universities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rectors view large-9 medium-8 columns content">
    <h3><?= h($rector->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($rector->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('F Surname') ?></th>
            <td><?= h($rector->f_surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('M Surname') ?></th>
            <td><?= h($rector->m_surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Personal Mail') ?></th>
            <td><?= h($rector->personal_mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Institutional Mail') ?></th>
            <td><?= h($rector->institutional_mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('University') ?></th>
            <td><?= $rector->has('university') ? $this->Html->link($rector->university->name, ['controller' => 'Universities', 'action' => 'view', $rector->university->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($rector->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dni') ?></th>
            <td><?= $this->Number->format($rector->dni) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Date') ?></th>
            <td><?= h($rector->birth_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($rector->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($rector->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $rector->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
