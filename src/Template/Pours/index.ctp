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
    <h3><?= __('Pours') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logo') ?></th>

                <th scope="col"><?= $this->Paginator->sort('Notre_engagement') ?></th>
                <th scope="col"><?= $this->Paginator->sort('about_notre') ?></th>

                <th scope="col"><?= $this->Paginator->sort('note') ?></th>


                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pours as $pour): ?>
            <tr>
                <td><?= $this->Number->format($pour->id) ?></td>
                <td><?= h($pour->title) ?></td>
                <td><?= h($pour->logo) ?></td>
                <td><?= h($pour->Notre_engagement) ?></td>
                <td><?= h($pour->about_notre) ?></td>

                <td><?= h($pour->note) ?></td>







                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pour->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pour->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pour->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
