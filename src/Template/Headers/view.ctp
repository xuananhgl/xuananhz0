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
    <h3><?= h($header->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($header->title) ?></td>
        </tr>


            <th scope="row"><?= __('about') ?></th>
            <td><?= h($header->about) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('title') ?></th>
            <td><?= h($header->title) ?></td>
        </tr>

         <tr>
            <th scope="row"><?= __('bnt') ?></th>
            <td><?= h($header->bnt) ?></td>
        </tr>



    </table>
                    <?= $this->Html->link(__('View'), ['controller' => 'Headers', 'action' => 'view', $header->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Headers', 'action' => 'edit', $header->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Headers', 'action' => 'delete', $header->id], ['confirm' => __('Are you sure you want to delete # {0}?', $header->id)]) ?>
                </td>
            </tr>

        </table>

    </div>
</div>
