<nav class="large-3 medium-4 columns" id="actions-sidebar">

  <div class="infor_admin"><i class="fa-solid fa-user-tie"></i>
  <div class="users">username:<?=$user->username?></div>
  <div class="users">role:<?=$user->role?></div>
  <div class="users">Email:<?=$user->email?></div>
  <span class="material-symbols-outlined">settings</span>
  </div>
<ul class="side-nav">
    </li>
         <div class="admin"><span class="material-symbols-outlined">home</span>
          <?= $this->Html->link(__('Home'), ['controller' => 'Headers', 'action' => 'index']) ?></div>
         <div class="admin"><?= $this->Html->link(__('Presses'), ['controller' => 'Pres', 'action' => 'index']) ?></div>
         <div class="admin"><?= $this->Html->link(__('Pours'), ['controller' => 'Pours', 'action' => 'index']) ?></div>
         <div class="admin"><?= $this->Html->link(__('Headers'), ['controller' => 'Headers', 'action' => 'index']) ?></div>
         <div class="admin"><?= $this->Html->link(__('Users'), ['controller' => 'Users', 'action' => 'index']) ?></div>
          <div class="admin"><?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']) ?></div>

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
