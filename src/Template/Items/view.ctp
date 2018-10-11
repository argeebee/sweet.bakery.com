<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="items view large-9 medium-8 columns content">
    <h3><?= h($item->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($item->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Itm Name') ?></th>
            <td><?= h($item->itm_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= h($item->category) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($item->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Meta Keywords') ?></th>
            <td><?= h($item->meta_keywords) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Meta Description') ?></th>
            <td><?= h($item->meta_description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $item->has('user') ? $this->Html->link($item->user->id, ['controller' => 'Users', 'action' => 'view', $item->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($item->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($item->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($item->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Itm Desc') ?></h4>
        <?= $this->Text->autoParagraph(h($item->itm_desc)); ?>
    </div>
</div>
