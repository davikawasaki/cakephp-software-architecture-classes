<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Poll[]|\Cake\Collection\CollectionInterface $poll
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Poll'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Poll Answer'), ['controller' => 'PollAnswer', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Poll Answer'), ['controller' => 'PollAnswer', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="poll index large-9 medium-8 columns content">
    <h3><?= __('Poll') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alt1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alt2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alt3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alt4') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($poll as $poll): ?>
            <tr>
                <td><?= $this->Number->format($poll->id) ?></td>
                <td><?= h($poll->title) ?></td>
                <td><?= h($poll->alt1) ?></td>
                <td><?= h($poll->alt2) ?></td>
                <td><?= h($poll->alt3) ?></td>
                <td><?= h($poll->alt4) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $poll->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $poll->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $poll->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poll->id)]) ?>
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
