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
    <h3><?= h($display->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('style') ?></th>
            <td><?= h($display->style) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('backgroun_header') ?></th>
            <td><?= h($display->backgroun_header) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('color_header') ?></th>
            <td><?= h($display->color_header) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('color_prou', ['rows' => '3']) ?></th>
            <td><?= h($display->color_prou) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('image_pour') ?></th>
            <td><?= h($display->image_pour) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('image_header') ?></th>
            <td><?= h($display->image_header) ?></td>
        </tr>
    </table>
                    <?= $this->Html->link(__('View'), ['controller' => 'Interfaces', 'action' => 'view', $display->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Interfaces', 'action' => 'edit', $display->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Interfaces', 'action' => 'delete', $display->id], ['confirm' => __('Are you sure you want to delete # {0}?', $display->id)]) ?>
                </td>
            </tr>

        </table>

    </div>
</div>
