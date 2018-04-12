<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PollAnswer $pollAnswer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pollAnswer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pollAnswer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Poll Answer'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Poll'), ['controller' => 'Poll', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Poll'), ['controller' => 'Poll', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pollAnswer form large-9 medium-8 columns content">
    <?= $this->Form->create($pollAnswer) ?>
    <fieldset>
        <legend><?= __('Edit Poll Answer') ?></legend>
        <?php
            echo $this->Form->control('poll_id', ['options' => $poll]);
            echo $this->Form->control('alt1');
            echo $this->Form->control('alt2');
            echo $this->Form->control('alt3');
            echo $this->Form->control('alt4');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
