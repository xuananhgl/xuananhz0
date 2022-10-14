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
<?php foreach ($posts as $post): ?>
 <?= h($post->article1) ?>
<p id="a"><?= h($post->article2) ?></p>

    <?php endforeach; ?>

        <?= $this->Form->create($post)?>;
          <p id="list"></p>
        <?= $this->Form->button(__('Next'))?>;;
        <?= $this->Form->end()?>;
<style>
  button{
    position: fixed;
    top: 0px;
    right: 10px;
  }
</style>
    <div>

   </div>
    <script type="text/javascript">

    var articleAPi ='<?= h($post->article2)?>';
    console.log(articleAPi);

    function start(){
            getPosts(listPosts);
    }
    start();

    function getPosts(callback){
          fetch(articleAPi)
          .then(function(response){
              return response.json();

          })
          .then(callback);
    }
    function listPosts(courses){
      console.log(courses);
    document.getElementById("list").innerHTML = courses.map(function(course){
        return`

        <div>
        <div style ="  width: 1000px;
                      height: 200px;
                      border: 1px solid #000;
                      margin: auto;
                      overflow: hidden;
                      border-radius: 4px;">
        <input type="radio" id="develop" name="article1" value=${course.id}>
        <div class="list_article"><p>name: ${course.name}</p></div>
        <div class="list_article"><p>description: ${course.description}</p></div>
        <div class="list_article"><p>link: ${course.link}</p></div>
        </div>
        `;

      });
  }
    </script>
</div>
