<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rector[]|\Cake\Collection\CollectionInterface $rectors
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rector'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Universities'), ['controller' => 'Universities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New University'), ['controller' => 'Universities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rectors index large-9 medium-8 columns content">
    <h3><?= __('Rectors') ?></h3>
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
                <th scope="col"><?= $this->Paginator->sort('university_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rectors as $rector): ?>
            <tr>
                <td><?= $this->Number->format($rector->id) ?></td>
                <td><?= h($rector->name) ?></td>
                <td><?= h($rector->f_surname) ?></td>
                <td><?= h($rector->m_surname) ?></td>
                <td><?= $this->Number->format($rector->dni) ?></td>
                <td><?= h($rector->personal_mail) ?></td>
                <td><?= h($rector->institutional_mail) ?></td>
                <td><?= h($rector->birth_date) ?></td>
                <td><?= $rector->has('university') ? $this->Html->link($rector->university->name, ['controller' => 'Universities', 'action' => 'view', $rector->university->id]) : '' ?></td>
                <td><?= h($rector->active) ?></td>
                <td><?= h($rector->created) ?></td>
                <td><?= h($rector->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rector->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rector->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rector->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rector->id)]) ?>
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
