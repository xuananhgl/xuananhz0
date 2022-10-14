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

  <fieldset>
    <legend><?= __('NEW INTERFACE') ?></legend>

     <?= $this->Form->create($display);?>

     <legend>Display</legend>
     <?= $this->Form->control('style');?>
     <?= $this->Form->control('backgroun_header');?>
      <?= $this->Form->control('color_header');?>
       <?= $this->Form->control('image_header');?>
       <?= $this->Form->control('color_prou');?>
      <?= $this->Form->control('image_pour');?>




</fieldset>

  <?= $this->Form->button(__('Submit')) ?>
  <?= $this->Form->end() ?>
</div>
