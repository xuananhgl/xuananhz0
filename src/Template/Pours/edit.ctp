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
<div class="users form large-9 medium-8 columns content">
  <h1>Edit pour</h1>
<?php
    echo $this->Form->create($pour);
    echo $this->Form->control('title');
    echo $this->Form->control('logo');
    echo $this->Form->control('Notre_engagement');
    echo $this->Form->control('about_notre');
    echo $this->Form->control('note');
    echo $this->Form->button(__('Save Pours'));
    echo $this->Form->end();
?>
    <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $pour->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $pour->id)])
    ?>
</div>
