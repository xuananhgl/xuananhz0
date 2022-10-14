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
  <?= $this->Form->create($header) ?>
  <fieldset>
    <legend><?= __('Add New header') ?></legend>

    <?=  $this->Form->create($header);?>
              <legend>Display</legend>
      <?=  $this->Form->control('button');?>
        <?=  $this->Form->control('video');?>
             <legend>Dynamic-content</legend>

     <?=  $this->Form->control('title', ['rows' => '1']);?>
     <?=  $this->Form->input('about', ['rows' => '1']);?>


             <legend class="English">English</legend>
      <?= $this->Form->control('_translations.en_US.about', ['rows' => '1']); ?>
      <?= $this->Form->control('_translations.en_US.title', ['rows' => '1']); ?>

                      <legend>Spanish</legend>
      <?= $this->Form->control('_translations.es.about', ['rows' => '1']); ?>
      <?= $this->Form->control('_translations.es.title', ['rows' => '1']); ?>

                <legend legend>Tieng-VIet</legend>
      <?= $this->Form->control('_translations.vi_VN.about', ['rows' => '1']); ?>
      <?= $this->Form->control('_translations.vi_VN.title', ['rows' => '1']); ?>

</fieldset>




  <?= $this->Form->button(__('Submit')) ?>
  <?= $this->Form->end() ?>
</div>
