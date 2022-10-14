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
  <?=$this->Html->link(__('Tiengviet'), 'http://localhost:8765/articles/edit/'.$article->id.'/?locale=vi_VN');?><br>
   <?=$this->Html->link(__('Tieng anh'), 'http://localhost:8765/articles/edit/'.$article->id.'/?locale=en_US');?><br>
    <?=$this->Html->link(__('Tieng tay ban nha'), 'http://localhost:8765/articles/edit/'.$article->id.'/?locale=es');?>
      <?php
    echo $this->Form->create(NULL,array('url'=>'/articles/edit/'.$article->id));
                                        echo $this->Form->radio("lang",
                                            [
                                                ['value'=>'en_US','text'=>'English'],
                                                ['value'=>'es','text'=>'spanish'],
                                                ['value'=>'vi','text'=>'VietNam'],


                                            ]
                                        );
                                        echo $this->Form->button('Change Language');
                                        echo $this->Form->end();

   ?>




  <?= $this->Form->create($article) ?>
  <fieldset>
    <legend><?= __('Edit article') ?></legend>

    <?=  $this->Form->create($article);?>


             <legend>Dynamic-content</legend>
<?=  $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);?>
     <?=  $this->Form->control('title_article');?>
     <?=  $this->Form->input('slug');?>
     <?=  $this->Form->input('img');?>
     <?=  $this->Form->input('body');?>
     <?=  $this->Form->input('about_article');?>


</fieldset>




  <?= $this->Form->button(__('Submit')) ?>
  <?= $this->Form->end() ?>
</div>
