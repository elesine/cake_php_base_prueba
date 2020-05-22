<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dean[]|\Cake\Collection\CollectionInterface $deans
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dean'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Faculties'), ['controller' => 'Faculties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Faculty'), ['controller' => 'Faculties', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="deans index large-9 medium-8 columns content">
    <h3><?= __('Deans') ?></h3>
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
                <th scope="col"><?= $this->Paginator->sort('faculty_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($deans as $dean): ?>
            <tr>
                <td><?= $this->Number->format($dean->id) ?></td>
                <td><?= h($dean->name) ?></td>
                <td><?= h($dean->f_surname) ?></td>
                <td><?= h($dean->m_surname) ?></td>
                <td><?= $this->Number->format($dean->dni) ?></td>
                <td><?= h($dean->personal_mail) ?></td>
                <td><?= h($dean->institutional_mail) ?></td>
                <td><?= h($dean->birth_date) ?></td>
                <td><?= $dean->has('faculty') ? $this->Html->link($dean->faculty->name, ['controller' => 'Faculties', 'action' => 'view', $dean->faculty->id]) : '' ?></td>
                <td><?= h($dean->active) ?></td>
                <td><?= h($dean->created) ?></td>
                <td><?= h($dean->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dean->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dean->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dean->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dean->id)]) ?>
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
