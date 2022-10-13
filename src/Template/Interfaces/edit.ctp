<nav class="large-3 medium-4 columns" id="actions-sidebar">
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

    <div>

   </div>
    <script type="text/javascript">

    var articleAPi ='<?= h($post->article2)?>';

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
        <div style ="  width: 600px;
                      height: 200px;
                      border: 1px solid #000;
                      margin: auto;
                      text-overflow: ellipsis;
                      border-radius: 4px;">
        <input type="checkbox" id="develop" name="article1" value=${course.id}>
        <p>title: ${course.title}</p>
        <p>body: ${course.body}</p>
        </div>
        `;

      });
  }
    </script>
</div>
