<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Poll $poll
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Poll'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Poll Answer'), ['controller' => 'PollAnswer', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Poll Answer'), ['controller' => 'PollAnswer', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="poll form large-9 medium-8 columns content">
    <?= $this->Form->create($poll) ?>
    <fieldset>
        <legend><?= __('Add Poll') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('alt1');
            echo $this->Form->control('alt2');
            echo $this->Form->control('alt3');
            echo $this->Form->control('alt4');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
