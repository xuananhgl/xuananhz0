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
  <?= $this->Form->create($pre) ?>
  <fieldset>
    <legend><?= __('Add New Fresse') ?></legend>

     <?= $this->Form->create($pre);?>
     <?= $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);?>
     <legend>Display</legend>
     <?= $this->Form->control('title_pres');?>
     <?= $this->Form->control('logo');?>
     <legend>Dynamic-content</legend>
      <?= $this->Form->control('link', ['rows' => '1']);?>
     <?= $this->Form->control('author', ['rows' => '1']);?>
     <?= $this->Form->control('dress', ['rows' => '1']);?>
     <?= $this->Form->control('about_pres', ['rows' => '1']);?>

    <legend class="English">English</legend>
    <?= $this->Form->control('_translations.en_US.about_pres', ['rows' => '1']); ?>
    <?= $this->Form->control('_translations.en_US.author', ['rows' => '1']); ?>
    <?= $this->Form->control('_translations.en_US.dress', ['rows' => '1']); ?>

    <legend>Spanish</legend>
    <?= $this->Form->control('_translations.es.about_pres', ['rows' => '1']); ?>
    <?= $this->Form->control('_translations.es.author', ['rows' => '1']); ?>
    <?= $this->Form->control('_translations.es.dress', ['rows' => '1']); ?>

    <legend>Tieng-VIet</legend>
    <?= $this->Form->control('_translations.vi_VN.about_pres', ['rows' => '1']); ?>
    <?= $this->Form->control('_translations.vi_VN.author', ['rows' => '1']); ?>
    <?= $this->Form->control('_translations.vi_VN.dress', ['rows' => '1']); ?>


</fieldset>

  <?= $this->Form->button(__('Submit')) ?>
  <?= $this->Form->end() ?>
</div>
