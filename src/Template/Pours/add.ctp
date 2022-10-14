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
  <?= $this->Form->create($pour) ?>
  <fieldset>
    <legend><?= __('Add New pours') ?></legend>
    <?php
    echo $this->Form->create($pour);
    echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
    echo $this->Form->control('title');
    echo $this->Form->control('logo');

     echo $this->Form->control('Notre_engagement');
      echo $this->Form->control('about_notre', ['rows' => '3']);
     echo $this->Form->control('note');
     ?>
               <legend class="English">English</legend>

      <?= $this->Form->control('_translations.en_US.logo', ['rows' => '1']); ?>
      <?= $this->Form->control('_translations.en_US.title', ['rows' => '1']); ?>
       <?= $this->Form->control('_translations.en_US.Notre_engagement', ['rows' => '1']); ?>
      <?= $this->Form->control('_translations.en_US.about_notre', ['rows' => '1']); ?>
       <?= $this->Form->control('_translations.en_US.note', ['rows' => '1']); ?>
                      <legend>Spanish</legend>

      <?= $this->Form->control('_translations.es.logo', ['rows' => '1']); ?>
      <?= $this->Form->control('_translations.es.title', ['rows' => '1']); ?>
        <?= $this->Form->control('_translations.es.Notre_engagement', ['rows' => '1']); ?>
      <?= $this->Form->control('_translations.es.about_notre', ['rows' => '1']); ?>
       <?= $this->Form->control('_translations.es.note', ['rows' => '1']); ?>


                <legend legend>Tieng-VIet</legend>

      <?= $this->Form->control('_translations.vi_VN.logo', ['rows' => '1']); ?>
      <?= $this->Form->control('_translations.vi_VN.title', ['rows' => '1']); ?>
       <?= $this->Form->control('_translations.vi_VN.Notre_engagement', ['rows' => '1']); ?>
      <?= $this->Form->control('_translations.vi_VN.about_notre', ['rows' => '1']); ?>
       <?= $this->Form->control('_translations.vi_VN.note', ['rows' => '1']); ?>
  </fieldset>
  <?= $this->Form->button(__('Submit')) ?>
  <?= $this->Form->end() ?>
</div>
