<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PollAnswer $pollAnswer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Poll Answer'), ['action' => 'edit', $pollAnswer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Poll Answer'), ['action' => 'delete', $pollAnswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pollAnswer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Poll Answer'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Poll Answer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Poll'), ['controller' => 'Poll', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Poll'), ['controller' => 'Poll', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pollAnswer view large-9 medium-8 columns content">
    <h3><?= h($pollAnswer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Poll') ?></th>
            <td><?= $pollAnswer->has('poll') ? $this->Html->link($pollAnswer->poll->title, ['controller' => 'Poll', 'action' => 'view', $pollAnswer->poll->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pollAnswer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alt1') ?></th>
            <td><?= $pollAnswer->alt1 ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alt2') ?></th>
            <td><?= $pollAnswer->alt2 ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alt3') ?></th>
            <td><?= $pollAnswer->alt3 ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alt4') ?></th>
            <td><?= $pollAnswer->alt4 ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
