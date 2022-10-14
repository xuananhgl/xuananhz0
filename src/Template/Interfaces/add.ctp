


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
<div class="article">
<div class="">
  <?= $this->Html->link(__('BACK'), ['controller' => 'interfaces', 'action' => 'edit']) ?>
</div>


<div class="articles form large-5 medium-4 columns content">
  <?= $this->Form->create($article) ?>
  <fieldset>
    <legend><?= __(' New article') ?></legend>
      <?=  $this->Form->create($article);?>
             <legend>Dynamic-content</legend>
             <div><p id="id_article"></p></div>
             <div><p id="about"></p></div>
             <div><p id="title"></p></div>
             <div><p id="body"></p></div>
             <div><p id="link"></p></div>
             <div><p id="img"></p></div>
 </div>
 
<div class="articles form large-5 medium-4 columns content">
           <legend class="English">English</legend>
      <?= $this->Form->control('_translations.en_US.title'); ?>
      <?= $this->Form->control('_translations.en_US.body'); ?>
      <?= $this->Form->control('_translations.en_US.about'); ?>


                      <legend>Spanish</legend>
      <?= $this->Form->control('_translations.es.title'); ?>
      <?= $this->Form->control('_translations.es.body'); ?>
      <?= $this->Form->control('_translations.es.about'); ?>


                <legend legend>Tieng-VIet</legend>
    <?= $this->Form->control('_translations.vi_VN.title'); ?>
      <?= $this->Form->control('_translations.vi_VN.body'); ?>
      <?= $this->Form->control('_translations.vi_VN.about'); ?>


</fieldset>
  <?= $this->Form->button(__('Save')) ?>
  <?= $this->Form->end() ?>

</div>
</div>
        <div class="form3">
           <?php foreach ($posts as $post): ?>
            <p id="a"><?= h($post->article1) ?></p>
            <p id="b"><?= h($post->article2) ?></p>

               <?php endforeach; ?>

        <script type="text/javascript">

        var index =  document.getElementById('a').innerHTML -1;
        console.log(index);
        var index1 =  document.getElementById('b').innerHTML;
        console.log(index1);


        var articleAPi = index1;

        function start(){
              getPosts(renderPosts);
        }
        start();

        function getPosts(callback){
              fetch(articleAPi)
              .then(function(response){
                  return response.json();

              })
              .then(callback);
        }

        function renderPosts(courses){

                      document.getElementById("id_article").innerHTML = '<label for= id></lable> <textarea id="number" name="id_article" placeholder="number-article">'+ courses[index].id + '</textarea>';
                      document.getElementById("about").innerHTML =  '<label>about</lable> <textarea  id="aboutArticle" name="about" placeholder="about"></textarea>';
                      document.getElementById("title").innerHTML =  '<label>title</lable> <textarea  id="titleArticle" name="title" placeholder="title">' + courses[index].name + '</textarea>';
                      document.getElementById("body").innerHTML =  '<label>body</lable> <textarea   style="height:150px;" name="body" placeholder="body">' + courses[index].description + '</textarea>';
                      document.getElementById("img").innerHTML =  '<label>img</lable> <input type="text"  name="img" placeholder="link-url" value="">';
                      document.getElementById("link").innerHTML = '<label>link</lable> <input type="text"  name="link" placeholder="link-url" value="'+ courses[index].link + '">';
        }
        </script>



<!-- <div class="form5">


        <form >
         <input class="input" type="text"  name="id_posts" placeholder="id" style=""><br>
         <input class="input" type="text"  name="article1"  placeholder="article1"><br>
         <input class="input" type="text"  name="article2"  placeholder="article2"><br>
         <input class="input" type="text"  name="article3"  placeholder="article3"><br>
         <input class="input" type="text"  name="article4"  placeholder="article4"><br>



         <button id="post">edit</button>
         <button onclick ="deletePosts()" style="  display: none;">delete</button>
        </form >


        </div>

                                        <script>

                                        var postApi ='http://localhost:8765/posts.json';
                                        function start(){
                                              getPosts(renderPosts);
                                              editPosts();

                                        }
                                        start();
                                        function getPosts(callback){
                                              fetch(postApi)
                                              .then(function(response){
                                                  return response.json();

                                              })
                                              .then(callback);
                                        }
                                        function renderPosts(courses){

                                        }
                                        async function deletePosts(id) {
                                              var id =  document.getElementById('aa').innerHTML;
                                              console.log(id);
                                              var url1 = 'http://localhost:8765/posts/'+ id +'.json';
                                              console.log(url1);

                                              const response = await fetch(url1, {
                                              method: 'DELETE',
                                              headers: {
                                                'Content-Type': 'application/json'
                                              },
                                        });
                                               return response.json();

                                          }
                                        function editPosts(){
                                        var postBtn = document.querySelector('#post');
                                        postBtn.onclick =function(){

                                          var article1 = document.querySelector('input[name ="article1"]').value;
                                          var article2 = document.querySelector('input[name ="article2"]').value;
                                          var article3 = document.querySelector('input[name="article3"]').value;
                                          var article4 = document.querySelector('input[name ="article4"]').value;
                                          var id_posts = document.querySelector('input[name="id_posts"]').value;
                                          var data = {
                                              article1:article1,
                                              article2:article2,
                                              article3:article3,
                                              article4:article4,
                                              id_posts:id_posts,


                                          };


                                              var url = 'http://localhost:8765/posts/'+ 1 +'.json';
                                          postsEdit(url, data);
                                        }
                                        }
                                        async function postsEdit(url, data) {
                                        const response = await fetch(url, {
                                              method: 'PUT',
                                              headers: {
                                                'Content-Type': 'application/json'
                                              },
                                              body: JSON.stringify(data)
                                        });
                                        return response.json();
                                        }

                                        </script>

                 </div> -->




</body>
</html>
