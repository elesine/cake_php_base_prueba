<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CourseType[]|\Cake\Collection\CollectionInterface $courseTypes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Course Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="courseTypes index large-9 medium-8 columns content">
    <h3><?= __('Course Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($courseTypes as $courseType): ?>
            <tr>
                <td><?= $this->Number->format($courseType->id) ?></td>
                <td><?= h($courseType->name) ?></td>
                <td><?= h($courseType->active) ?></td>
                <td><?= h($courseType->created) ?></td>
                <td><?= h($courseType->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $courseType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $courseType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $courseType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courseType->id)]) ?>
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
