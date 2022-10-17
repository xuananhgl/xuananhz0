<?= $this->Html->css('bar.css') ?>
<nav class="large-4 medium-4 columns" id="actions-sidebar" style="background: #F1F6FA;">
  <div class="profile">


<img src="https://static.vecteezy.com/system/resources/previews/002/318/271/original/user-profile-icon-free-vector.jpg" alt="">
<div class="username"><?=$user->username?></div>
<div class="email"><?=$user->email?></div>
</div>
  <div class="account"><p style="color:#ccc;">ACCOUNT</p>
      <p class="item"> <i class="fa-regular fa-user my_style"></i> <?= $this->Html->link(__('Overview'), ['controller' => 'Users', 'action' => 'index', $user->id]) ?></p>
      <p class="item"> <span class="material-symbols-outlined my_style">settings</span> <?= $this->Html->link(__('Setting'), ['controller' => 'Users', 'action' => 'edit', $user->id]) ?></p>

  </div>
  <div class="dashboard"><p style="color:#ccc;">DASHBOARD</p>
    <p><span class="material-symbols-outlined my_style">file_open</span> <?= $this->Html->link(__('Headers'), ['controller' => 'Headers', 'action' => 'index']) ?></p>
    <p><span class="material-symbols-outlined my_style">file_open</span> <?= $this->Html->link(__('Press'), ['controller' => 'Pres', 'action' => 'index']) ?></p>
    <p><span class="material-symbols-outlined my_style">file_open</span> <?= $this->Html->link(__('Pours'), ['controller' => 'Pours', 'action' => 'index']) ?></p>
    <p><span class="material-symbols-outlined my_style">file_open</span> <?= $this->Html->link(__('Article'), ['controller' => 'Articles', 'action' => 'index']) ?></p>
    <p><span class="material-symbols-outlined my_style">file_open</span> <?= $this->Html->link(__('Displays'), ['controller' => 'Displays', 'action' => 'index']) ?></p>

  </div>
  <div class="logout">
    <p><span class="material-symbols-outlined my_style">exit_to_app</span> <?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']) ?></p>

  </div>
</nav>
<div class="articles form large-8 medium-8 columns content">
  <div class="back"><i class="fa-solid fa-backward"></i>
    <?= $this->Html->link(__('BACK'), ['controller' => 'Pours', 'action' => 'index']) ?>
  </div>
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
