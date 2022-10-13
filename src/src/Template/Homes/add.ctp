
<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (title) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (title) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'zogravity';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('zogravity.css') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="/img/">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
   
            

   <form >
                    <div><p id="id_article"></p></div>
                    <div><p id="about"></p></div>
                    <div><p id="title"></p></div>
                    <div><p id="body"></p></div>
                    <div><p id="link"></p></div>
                    <div><p id="img"></p></div>
                    <button id="articles">add</button>

    </form>
                        
                    <div class="conten_nos2"><p id="id_article1"></p>
                      
                      
                            <div class="conten_nos2_caption"><p id="about1"></p></div>

                           
                                <div class="conten_nos2_note"><p id="title1"></p></div>10 min
                          
                            <div class="conten_nos2_about"><p id="body1"></p></div>
                          
                       
                  
                    
                        <div class="conten_nos4_img"><p id="id_article2"></div>
                        <div class="conten_nos4_caption"><p id="about2"></p></div>

                       
                            <div class="conten_nos4_note"><p id="title2"></p></div>8 min

                      
                        <div class="conten_nos4_about"><p id="body2"></p></p></div>
                

                    <div class="conten_nos3"><p id="id_article3"></p>




                     
                        <div class="conten_nos3_caption"><p id="about3"></p></div>

                       
                            <div class="conten_nos3_note"><p id="title3"></p></div>
                   
                        <div class="conten_nos3_about"><p id="body3"></p></div>
                      
                 
             

             

        <div class="form3">
           <?php foreach ($posts as $post): ?>
            <p id="a"><?= h($post->article1) ?></p>
             <p id="b"><?= h($post->article2) ?></p>
              <p id="c"><?= h($post->article3) ?></p>
               <p id="d"><?= h($post->article4) ?></p>
               <?php endforeach; ?>
               <div style ="  width: 450px;
                             height: 450px;
                             border: 1px solid #000;
                             overflow: scroll;
                             position: relative;
top: -1830px;
left: 772px;
                             margin: auto;" class="list">
                             <p id="e"></p>
              </div>
             </div>
        <script type="text/javascript">

        var index =  document.getElementById('a').innerHTML -1;
        console.log(index);
        var index1 =  document.getElementById('b').innerHTML-1;
        console.log(index1);
        var index2 =  document.getElementById('c').innerHTML-1;
        console.log(index2);
        var index3 =  document.getElementById('d').innerHTML-1;
        console.log(index3);

        var articleAPi ='https://jsonplaceholder.typicode.com/posts';

        function start(){
              getPosts(renderPosts);
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
        document.getElementById("e").innerHTML = courses.map(function(course){
            return`
            <div>
            <div style ="  width: 400px;
                          height: 150px;
                          border: 1px solid #000;
                          margin: auto;
                          overflow: scroll;
                          border-radius: 4px;">
            <h4>article: ${course.id}</h4>
            <h4>title: ${course.title}</h4>
            <p>body: ${course.body}</p>
            </div>
            `;

          });
      }
        function renderPosts(courses){
                      document.getElementById("id_article").innerHTML = '<label>id</lable> <input type="text"  name="id_article" placeholder="id" value="' + courses[index].id + '">';
                      document.getElementById("about").innerHTML =  '<label>about</lable> <input type="text"  name="about" placeholder="about" value="">';
                      document.getElementById("title").innerHTML =  '<label>title</lable> <input type="text"  name="title" placeholder="title" value="' + courses[index].title + '">';
                      document.getElementById("body").innerHTML =  '<label>body</lable> <input type="text"  name="body" placeholder="body" value="' + courses[index].body + '">';
                      document.getElementById("img").innerHTML =  '<label>img</lable> <input type="text"  name="img" placeholder="img" value="">';
                      document.getElementById("link").innerHTML = '<label>link</lable> <input type="text"  name="link" placeholder="link" value="">';
        //
                          document.getElementById("id_article1").innerHTML = courses[index1].id;
                      document.getElementById("about1").innerHTML = courses[index1].title;
                      document.getElementById("title1").innerHTML = 'bbb';
                          document.getElementById("body1").innerHTML = courses[index1].body;
        //                   // document.getElementById("l").innerHTML = courses.articles[1].img;
        //                   // document.getElementById("n").innerHTML = courses.articles[1].link;

                          document.getElementById("id_article2").innerHTML = courses[index2].id;
                      document.getElementById("about2").innerHTML = courses[index2].title;
                      document.getElementById("title2").innerHTML = 'ccc';
                          document.getElementById("body2").innerHTML = courses[index2].body;
        //                   // document.getElementById("u").innerHTML = courses.articles[2].img;
        //                   // document.getElementById("i").innerHTML = courses.articles[2].link;
                          document.getElementById("id_article3").innerHTML = courses[index3].id;
                      document.getElementById("about3").innerHTML = courses[index3].title;
                      document.getElementById("title3").innerHTML = 'ccc';
                          document.getElementById("body3").innerHTML = courses[index3].body;
                          // document.getElementById("a").innerHTML = courses.articles[3].img;
                          // document.getElementById("b").innerHTML = courses.articles[3].link;
        }


        </script>
        <h2>From POST</h2>
        <style>
input[type=text], select {
  width: 400px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button{
  width: 100px;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}

</style>
<div class="form5">


        <form >
         <input class="input" type="text"  name="id_posts" placeholder="id" style=""><br>
         <input class="input" type="text"  name="article1"  placeholder="article1"><br>
         <input class="input" type="text"  name="article2"  placeholder="article2"><br>
         <input class="input" type="text"  name="article3"  placeholder="article3"><br>
         <input class="input" type="text"  name="article4"  placeholder="article4"><br>


         <button id="posts" style="  display: none;">add</button>
         <button id="post">edit</button>
         <button onclick ="deletePosts()" style="  display: none;">delete</button>
        </form >


        </div>

                                        <script>

                                        var postApi ='http://localhost:8765/posts.json';
                                        function start(){
                                              getPosts(renderPosts);
                                              createPosts();
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


                                        // for (const [key, value] of formData) {

                                        //   var output = `${key}: ${value}, \n `;
                                        //   console.log(output);

                                        }
                                        function createPosts(){
                                        var postsBtn = document.querySelector('#posts');
                                        postsBtn.onclick =function(){

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
                                              var url = 'http://localhost:8765/posts.json';
                                          postData(url, data);
                                        }
                                        }
                                        async function postData(url, data) {
                                        const response = await fetch(url, {
                                              method: 'POST',
                                              headers: {
                                                'Content-Type': 'application/json'
                                              },
                                              body: JSON.stringify(data)
                                        });
                                        return response.json();
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
                                        
                <form >
                   <input type="text"  name="id_article" placeholder="id"><br>
                   <input type="text"  name="title"  placeholder="title"><br>
                   <input type="text"  name="about"  placeholder="about"><br>
                   <input type="text"  name="body"  placeholder="body"><br>
                   <input type="text"  name="img"  placeholder="img"><br>
                   <input type="text"  name="link"  placeholder="link"><br>

                   
                   <button id="article">edit</button>
                   <button onclick ="deleteArticles()">delete</button>
                 </form >


                 </div>



                  <script>
                 var index =  document.getElementById('a').innerHTML;
                 console.log(index);

                var articleAPi ='http://localhost:8765/articlesapi/'+ index +'.json';
                var articleAPi2 ='http://localhost:8765/articlesapi/7.json';
                var articleAPi3 ='http://localhost:8765/articlesapi/11.json';
                var articleAPi4 ='http://localhost:8765/articlesapi/12.json';
                function start(){
                        // getArticles(renderArticles);
                       
                        createArticles();
                        editArticles();

                }
                start();

                function getArticles(callback){
                        fetch(articleAPi)
                        .then(function(response){
                            return response.json();

                        })
                        .then(callback);
                }
                function renderArticles(courses){

                                // document.getElementById("id_article").innerHTML = courses.article.id_article;
                                // document.getElementById("about").innerHTML = courses.article.about;
                                // document.getElementById("title").innerHTML = courses.article.title;
                                //     document.getElementById("body").innerHTML = courses.article.body;
                                //     document.getElementById("img").innerHTML = courses.article.img;
                                //     document.getElementById("link").innerHTML = courses.article.link;

                                //     document.getElementById("id_article1").innerHTML = courses.articles.id_article;
                                // document.getElementById("about1").innerHTML = courses.articles[1].about;
                                // document.getElementById("title1").innerHTML = courses.articles[1].title;
                                //     document.getElementById("body1").innerHTML = courses.articles[1].body;
                                //     document.getElementById("l").innerHTML = courses.articles[1].img;
                                //     document.getElementById("n").innerHTML = courses.articles[1].link;

                                //     document.getElementById("id_article2").innerHTML = courses.articles[2].id_article;
                                // document.getElementById("about2").innerHTML = courses.articles[2].about;
                                // document.getElementById("title2").innerHTML = courses.articles[2].title;
                                //     document.getElementById("body2").innerHTML = courses.articles[2].body;
                                //     document.getElementById("u").innerHTML = courses.articles[2].img;
                                //     document.getElementById("i").innerHTML = courses.articles[2].link;
                                //     document.getElementById("id_article3").innerHTML = courses.articles[3].id_article;
                                // document.getElementById("about3").innerHTML = courses.articles[3].about;
                                // document.getElementById("title3").innerHTML = courses.articles[3].title;
                                //     document.getElementById("body3").innerHTML = courses.articles[3].body;
                                //     document.getElementById("a").innerHTML = courses.articles[3].img;
                                //     document.getElementById("b").innerHTML = courses.articles[3].link;
                }
               
                function createArticles(){
                var articlesBtn = document.querySelector('#articles');
                articlesBtn.onclick =function(){

                    var body = document.querySelector('input[name ="body"]').value;
                    var img = document.querySelector('input[name ="img"]').value;
                    var link = document.querySelector('input[name ="link"]').value;
                    var title = document.querySelector('input[name="title"]').value;
                    var about = document.querySelector('input[name ="about"]').value;
                    var id_article = document.querySelector('input[name="id_article"]').value;
                    var data = {
                        about:about,
                        title:title,
                        id_article:id_article,
                        body:body,
                        img:img,
                        link:link,
                    };
                        var url = 'http://localhost:8765/articlesapi.json';
                        console.log(data);
                        console.log(url);
                    postArticles(url, data);
                }
                }
                async function postArticles(url, data) {
                  const response = await fetch(url, {
                        method: 'POST',
                        headers: {
                          'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(data)
                  });
                  return response.json();
                  }
                  async function deleteArticles(id) {
                        var id =  document.getElementById('id_article').innerHTML;
                        console.log(id);
                        var url1 = 'http://localhost:8765/articlesapi/'+ id +'.json';
                        console.log(url1);

                        const response = await fetch(url1, {
                        method: 'DELETE',
                        headers: {
                          'Content-Type': 'application/json'
                        },
                  });
                         return response.json();

                    }
                  function editArticles(){
                var articleBtn = document.querySelector('#article');
                articleBtn.onclick =function(){

                    var body = document.querySelector('input[name ="body"]').value;
                    var img = document.querySelector('input[name ="img"]').value;
                    var link = document.querySelector('input[name ="link"]').value;
                    var title = document.querySelector('input[name="title"]').value;
                    var about = document.querySelector('input[name ="about"]').value;
                    var id_article = document.querySelector('input[name="id_article"]').value;
                    var data = {
                        about:about,
                        title:title,
                        id_article:id_article,
                        body:body,
                        img:img,
                        link:link,
                    };

                          var id = id_article;
                        var url = 'http://localhost:8765/articlesapi/'+ id +'.json';
                    articleData(url, data);
                }
                }
                async function articleData(url, data) {
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


</body>
</html>
