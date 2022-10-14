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
    <h3><?= __('Articles') ?></h3>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>

                <th scope="col"><?= $this->Paginator->sort('about') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('img') ?></th>
                <th scope="col"><?= $this->Paginator->sort('body') ?></th>
<th scope="col"><?= $this->Paginator->sort('links') ?></th>

                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= $this->Number->format($article->id_article) ?></td>
                <td><?= h($article->about ) ?></td>
                <td><?= h($article->title ) ?></td>
                <td><?= h($article->img) ?></td>
                <td><?= h($article->body) ?></td>
                <td><?= h($article->link) ?></td>

                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $article->id_article]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->id_article]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $article->id_article], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id_article)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
