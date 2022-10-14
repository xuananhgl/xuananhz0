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

<div class="users view large-9 medium-8 columns content">
    <h3><?= h($pour->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($pour->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logo') ?></th>
            <td><?= h($pour->logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notre_engagement') ?></th>
            <td><?= h($pour->Notre_engagement) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('about_notre') ?></th>
            <td><?= h($pour->about_notre) ?></td>
        </tr>

         <tr>
            <th scope="row"><?= __('note') ?></th>
            <td><?= h($pour->note) ?></td>
        </tr>

    </table>
                    <?= $this->Html->link(__('View'), ['controller' => 'Pours', 'action' => 'view', $pour->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pours', 'action' => 'edit', $pour->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pours', 'action' => 'delete', $pour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pour->id)]) ?>
                </td>
            </tr>

        </table>

    </div>
</div>
