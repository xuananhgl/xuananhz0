
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<ul class="side-nav">
    </li>
         <li class="heading"><h3><?= $this->Html->link(__('Z0graviry'), ['controller' => 'Headers', 'action' => 'index']) ?></h3></li>
         <li class="heading"><h6><?= __('USERS') ?></h6></li>
        <li><?= $this->Html->link(__('New Users'), ['controller' => 'Users', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('LOGIN'), ['controller' => 'Users', 'action' => 'login']) ?></li>
          <li><?= $this->Html->link(__('LOGOUT'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
          <li class="heading"><h6><?= __('HEADERS') ?></h6></li>
        <li><?= $this->Html->link(__('New Header'), ['controller' => 'Headers', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('list Headers'), ['controller' => 'Headers', 'action' => 'list']) ?></li>
         <li class="heading"><h6><?= __('PRESSE') ?></h6></li>
        <li><?= $this->Html->link(__('New Presses'), ['controller' => 'Pres', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('List Presses'), ['controller' => 'Pres', 'action' => 'index']) ?></li>
         <li class="heading"><h6><?= __('POURS') ?></h6></li>
        <li ><?= $this->Html->link(__('New Pours'), ['controller' => 'Pours', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('List Pours'), ['controller' => 'Pours', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('INTERFACE') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('style') ?></th>
                <th scope="col"><?= $this->Paginator->sort('backgroun_header') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color_header') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_header') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color_prou') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_pour') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($displays as $display): ?>
            <tr>
            <td><?= $this->Number->format($display->id) ?></td>
                <td><?= h($display->style ) ?></td>
                <td><?= h($display->backgroun_header) ?></td>
                <td><?= h($display->color_header) ?></td>
                 <td><?= h($display->image_header) ?></td>
                <td><?= h($display->color_prou) ?></td>
                <td><?= h($display->image_pour) ?></td>



                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $display->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $display->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $display->id], ['confirm' => __('Are you sure you want to delete # {0}?', $display->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
