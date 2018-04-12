<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Poll $poll
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Poll'), ['action' => 'edit', $poll->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Poll'), ['action' => 'delete', $poll->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poll->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Poll'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Poll'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Poll Answer'), ['controller' => 'PollAnswer', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Poll Answer'), ['controller' => 'PollAnswer', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="poll view large-9 medium-8 columns content">
    <h3><?= h($poll->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($poll->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alt1') ?></th>
            <td><?= h($poll->alt1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alt2') ?></th>
            <td><?= h($poll->alt2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alt3') ?></th>
            <td><?= h($poll->alt3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alt4') ?></th>
            <td><?= h($poll->alt4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($poll->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Poll Answer') ?></h4>
        <?php if (!empty($poll->poll_answer)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Poll Id') ?></th>
                <th scope="col"><?= __('Alt1') ?></th>
                <th scope="col"><?= __('Alt2') ?></th>
                <th scope="col"><?= __('Alt3') ?></th>
                <th scope="col"><?= __('Alt4') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($poll->poll_answer as $pollAnswer): ?>
            <tr>
                <td><?= h($pollAnswer->id) ?></td>
                <td><?= h($pollAnswer->poll_id) ?></td>
                <td><?= h($pollAnswer->alt1) ?></td>
                <td><?= h($pollAnswer->alt2) ?></td>
                <td><?= h($pollAnswer->alt3) ?></td>
                <td><?= h($pollAnswer->alt4) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PollAnswer', 'action' => 'view', $pollAnswer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PollAnswer', 'action' => 'edit', $pollAnswer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PollAnswer', 'action' => 'delete', $pollAnswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pollAnswer->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
