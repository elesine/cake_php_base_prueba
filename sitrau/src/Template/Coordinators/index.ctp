<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordinator[]|\Cake\Collection\CollectionInterface $coordinators
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Coordinator'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coordinators index large-9 medium-8 columns content">
    <h3><?= __('Coordinators') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('f_surname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('m_surname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dni') ?></th>
                <th scope="col"><?= $this->Paginator->sort('personal_mail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('institutional_mail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coordinators as $coordinator): ?>
            <tr>
                <td><?= $this->Number->format($coordinator->id) ?></td>
                <td><?= h($coordinator->name) ?></td>
                <td><?= h($coordinator->f_surname) ?></td>
                <td><?= h($coordinator->m_surname) ?></td>
                <td><?= $this->Number->format($coordinator->dni) ?></td>
                <td><?= h($coordinator->personal_mail) ?></td>
                <td><?= h($coordinator->institutional_mail) ?></td>
                <td><?= h($coordinator->birth_date) ?></td>
                <td><?= $coordinator->has('school') ? $this->Html->link($coordinator->school->name, ['controller' => 'Schools', 'action' => 'view', $coordinator->school->id]) : '' ?></td>
                <td><?= h($coordinator->active) ?></td>
                <td><?= h($coordinator->created) ?></td>
                <td><?= h($coordinator->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coordinator->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coordinator->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coordinator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coordinator->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
