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
<div class="articles form large-9 medium-8 columns content">
<?php
    echo $this->Form->create($pre);
    echo $this->Form->control('title_pres');
    echo $this->Form->control('logo');
    echo $this->Form->control('author');
    echo $this->Form->control('dress');
    echo $this->Form->control('link');
    echo $this->Form->input('about_pres');
    echo $this->Form->button(__('Save pre'));
    echo $this->Form->end();
?>


            <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $pre->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $pre->id)])
            ?>
</div>
