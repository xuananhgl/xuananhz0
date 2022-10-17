
<?php foreach ($displays as $display): ?>
<?php foreach ($bars as $bar): ?>
<?php foreach ($pours as $pour): ?>
<?php foreach ($headers as $header): ?>
<?php
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
    <?= $this->Html->css('edit.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="/img/">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>


              <div class="back"><i class="fa-solid fa-backward"></i>
                <?= $this->Html->link(__('BACK'), ['controller' => 'Homes', 'action' => 'list']) ?>
              </div>
              <div id="icon3"><span class="material-symbols-outlined my_style">settings</span>customize</div>
            <?= $this->Form->create($header);?>
                <div class="down app">
                <div class="customize">
                  Customize theme
                  <i class="fa-regular fa-circle-xmark" id="icon4"></i>
                 </div>
                 <div class="container_color">
                 <div class="color">
                   <i class="fa-solid fa-paint-roller"></i>   color
                 </div>
                  <div class="color_item">backgroun

                <input type="color" id="head" name="backgroun_header" value="<?= $display['backgroun_header'] ?>">

                  </div>
                  <div class="color_item">text

                <input type="color" id="head" name="color_header" value="<?= $display['color_header'] ?>">
                  </div>
                 </div>
                 <div class="container_image">
                   <div class="customize_image"> <i class="fa-solid fa-image"></i> Image </div>



                  <div class="image_item">image-headers
                      <textarea  name="image_header"><?= $display['image_header'] ?></textarea>
                  </div>
                  <div class="image_item">image pour
                      <textarea  name="image_pour"><?= $display['image_pour'] ?></textarea>
                  </div>

                         </div>
                  <!-- <script>
                  function inputChange(event){
                      console.log(event.currentTarget.value);
                  }

                  let text = document.getElementById('nametext');
                  text.addEventListener('change', inputChange);

                  let address = document.getElementById('address');
                  address.addEventListener('change', inputChange);

                  let radiosales = document.getElementById('sales');
                  radiosales.addEventListener('change', inputChange);

                  let radiodevelop = document.getElementById('develop');
                  radiodevelop.addEventListener('change', inputChange);

                  let radiohuman = document.getElementById('human');
                  radiohuman.addEventListener('change', inputChange);
                  </script> -->

                  <script type="text/javascript">
                  const iconOpen1 = document.getElementById('icon3');
                  const settingApp1 = document.querySelector('.app');
                  const iconClose1 = document.getElementById('icon4');

                  function showApp1(){
                      settingApp1.classList.add('open')
                  }
                  function hideApp1(){
                      settingApp1.classList.remove('open')
                  }

                  iconOpen1.addEventListener('click', showApp1)
                  iconClose1.addEventListener('click', hideApp1)
                  </script>



            </div>
  <div id="main">

                        <div id ="header">
                            <div class="header_menu">
                                <div class="zg_logo"><?= $this->Html->image('logo1.png') ?>
                                    </div>
                                   <div class="bar_mobile">




                                                    <div class="list_menu js-bar">
                                                        <img src="/img/logo/z0_Gravity_Logo_Couleur.png" alt="" class="none">
                                                        <div class="l">
                                                            <div class="dropdown"><?= $this->Form->control('ENTREPRISES', ['value' => $bar->ENTREPRISES])?>
                                                                <div class="dropdown-content">  <input type="text" placeholder="<?=$bar->ENTREPRISES?>" name="link_ENTREPRISES" value="<?=$bar->link_ENTREPRISES?>">
                                                                </div>
                                                            </div>
                                                      </div>
                                                      <div class="l">
                                                          <div class="dropdown"><?= $this->Form->control('SECTEUR', ['value' => $bar->SECTEUR])?>
                                                              <div class="dropdown-content"><input type="text" placeholder="<?=$bar->SECTEUR?>" name="link_SECTEUR" value="<?=$bar->link_SECTEUR?>">
                                                              </div>
                                                          </div>
                                                    </div>
                                                    <div class="l">
                                                        <div class="dropdown"><?= $this->Form->control('PROPOS', ['value' => $bar->PROPOS])?>
                                                            <div class="dropdown-content"><input type="text" placeholder="<?=$bar->PROPOS?>" name="link_PROPOS" value="<?=$bar->link_PROPOS?>">
                                                            </div>
                                                        </div>
                                                  </div>
                                                  <div class="l">
                                                      <div class="dropdown"><?= $this->Form->control('CONTACT', ['value' => $bar->CONTACT])?>
                                                          <div class="dropdown-content"><input type="text" placeholder="<?=$bar->CONTACT?>" name="link_CONTACT" value="<?=$bar->link_CONTACT?>">
                                                          </div>
                                                      </div>
                                                </div>
                                                <div class="l">
                                                    <div class="dropdown"><?= $this->Form->control('BLOG', ['value' => $bar->BLOG])?>
                                                        <div class="dropdown-content"><input type="text" placeholder="<?=$bar->BLOG?>" name="link_BLOG" value="<?=$bar->link_BLOG?>">
                                                        </div>
                                                    </div>
                                              </div>
                                            </div>
                                            <script>
                                            const imageOpen = document.getElementById('image2');
                                            const settingImage = document.querySelector('.image');
                                            const imageClose = document.getElementById('image3');

                                            function showImage(){
                                              settingImage.classList.add('open')
                                            }
                                            function hideImage(){
                                              settingImage.classList.remove('open')
                                            }
                                            console.log(imageOpen);
                                              console.log(settingImage);
                                                console.log(imageClose);

                                            imageOpen.addEventListener('click', showImage)
                                            imageClose.addEventListener('click', hideImage)





                                            </script>

                                        </div>
                            </div>
                            <?= $this->Html->script('slider.js') ?>

                        </div>



<style>
  #title, #about, #video{
    color:<?= $display['color_header'] ?>;

}
</style>
                <!-- ====================================================================================================================== -->
                    <div id="lider" style="background-color:<?= $display['backgroun_header'] ?>">


                                                <div class="video js-video">
                                                    <button class="bnt_video js-close-video">  <i class="fa-solid fa-xmark " style="cursor: pointer;"></i> </i></button>
                                                            <div class="set_video">
                                               <iframe src="https://www.youtube.com/embed/JP9IIlOKafs"
                                                 title="Nhạc Lofi 2022 - Những Bản Lofi Việt Nhẹ Nhàng Cực Chill - Nhạc Lofi Chill Buồn Hay Nhất 2022" frameborder="0"
                                                 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </div>


                                    </div>
                                <div class="top">
                                     <div class="header_container" >

                                            <?= $this->Html->image($display->image_header) ?>
                                            <?= $this->Form->control('id_headers');?>
                                                <div class="container_title">
                                                        <h1 class="font_blue" style="color: <?= $display['color_header'] ?>;"><?= $this->Form->control('title', ['rows'=>'3', 'color'=> $display['color_header']]);?></h1>


                                                <div class="container_about" style="color: <?= $display['color_header'] ?>;">
                                                    <?= $this->Form->control('about', ['rows'=>'3']);?>
                                                </div>
                                                <div class="container_button" style="color: <?= $display['color_header'] ?>;">
                                                     <?= $this->Form->control('button');?>
                                                </div>
                                                <div class="container_item" style="color: <?= $display['color_header'] ?>;">
                                                     <button class="js-open-video"><i class="fa-solid fa-circle-play"></i>
                                                            <?= $this->Form->control('video');?>
                                                    </button>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                                     <?= $this->Html->script('open_video.js') ?>

            <div class="list_slider">

                        <div class="list_item">
                                            <!-- <div class="slide_box1"></div> -->
                          <div class="slider_content">
                                <div class="slider_titel"><?= $this->Form->control('title_pres', ['value' =>$pres[0]['title_pres']]);?>
                                <div class="next_pre">
                                          <div class="slider_next next" id="next1"> <i class="fa-solid fa-angle-left" ></i></div>
                                          <div class="slider_pre prev" id="prev1"><i class="fa-solid fa-angle-right" ></i></div>
                               </div>
                                </div>
                                <div class="logo1">
                                    <div class="dropdown"><?= $this->Html->image($pres[0]['logo'])?>
                                        <div class="dropdown-content"><?= $this->Form->control('logo', ['value' =>$pres[0]['logo']]);?>
                                        </div>
                                    </div>
                              </div>

                                <div class="slider_about"> <?= $this->Form->input('about_pres', ['value' =>$pres[0]['about_pres'], 'rows'=>'3']);?></div>
                                <div class="slider_note">
                                    <div class="note"><?= $this->Form->control('author', ['value' =>$pres[0]['author']]);?><?= $this->Form->control('dress', ['value' =>$pres[0]['dress']]);?></div>
                                    <div class="cycle">
                                        <div class="sliderdrop"><a href="<?= $pres[0]['link']?>" style="color:#000";><?=__('Lire l’article')  ?>   <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                            <div class="sliderdrop-content"><?= $this->Form->control('link', ['value' =>$pres[0]['link']]);?>
                                            </div>
                                        </div>
                                  </div>

                                </div>
                                                    <!-- <div class="slide_box2"></div> -->
                         </div>
                    </div>
                    <div class="slider1">
                                        <!-- <div class="slide_box1"></div> -->
                      <div class="slider_content">
                            <div class="slider_titel"><?= $this->Form->control('title_pres1', ['value' =>$pres[1]['title_pres']]);?>
                            <div class="next_pre">
                                      <div class="slider_next next " id ="next2"> <i class="fa-solid fa-angle-left"></i></div>
                                      <div class="slider_pre prev" id="prev2"><i class="fa-solid fa-angle-right"></i></div>
                           </div>
                            </div>
                            <div class="logo1">
                                <div class="dropdown"><?= $this->Html->image($pres[1]['logo'])?>
                                    <div class="dropdown-content"><?= $this->Form->control('logo1', ['value' =>$pres[1]['logo']]);?>
                                    </div>
                                </div>
                          </div>
                            <div class="slider_about"> <?= $this->Form->input('about_pres1', ['value' =>$pres[1]['about_pres'], 'rows'=>'3']);?></div>
                            <div class="slider_note">
                                <div class="note"><?= $this->Form->control('author1', ['value' =>$pres[1]['author']]);?><?= $this->Form->control('dress1', ['value' =>$pres[1]['dress']]);?></div>
                                <div class="cycle">
                                    <div class="sliderdrop"><a href="<?= $pres[1]['link']?>" style="color:#000";><?=__('Lire l’article')  ?>   <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                        <div class="sliderdrop-content"><?= $this->Form->control('link1', ['value' =>$pres[1]['link']]);?>
                                        </div>
                                    </div>
                              </div>
                            </div>

                                                <!-- <div class="slide_box2"></div> -->
                     </div>
                </div>
                <div class="slider2">
                                    <!-- <div class="slide_box1"></div> -->
                  <div class="slider_content">
                        <div class="slider_titel"><?= $this->Form->control('title_pres2', ['value' =>$pres[2]['title_pres']]);?>
                        <div class="next_pre">
                                  <div class="slider_next next " id ="next3"> <i class="fa-solid fa-angle-left"></i></div>
                                  <div class="slider_pre prev" id="prev3"><i class="fa-solid fa-angle-right"></i></div>
                       </div>
                        </div>
                        <div class="logo1">
                            <div class="dropdown"><?= $this->Html->image($pres[2]['logo'])?>
                                <div class="dropdown-content"><?= $this->Form->control('logo2', ['value' =>$pres[2]['logo']]);?>
                                </div>
                            </div>
                      </div>
                        <div class="slider_about"> <?= $this->Form->input('about_pres2', ['value' =>$pres[2]['about_pres'], 'rows'=>'3']);?></div>
                        <div class="slider_note">
                            <div class="note"><?= $this->Form->control('author2', ['value' =>$pres[2]['author']]);?><?= $this->Form->control('dress2', ['value' =>$pres[2]['dress']]);?></div>
                            <div class="cycle">
                                <div class="sliderdrop"><a href="<?= $pres[2]['link']?>" style="color:#000";><?=__('Lire l’article')  ?>   <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                    <div class="sliderdrop-content"><?= $this->Form->control('link2', ['value' =>$pres[2]['link']]);?>
                                    </div>
                                </div>
                          </div>
                        </div>
                                            <!-- <div class="slide_box2"></div> -->
                 </div>
            </div>

                    <!-- ============== -->

                </div>
                <script type="text/javascript">
                const iconNext = document.getElementById('next1');
                const slider = document.querySelector('.slider1');
                const icon5 = document.getElementById('prev2');
                const slider2 = document.querySelector('.list_item');
                const iconNext2 = document.getElementById('next2');
                const icon6 = document.getElementById('prev1');
                const iconNext3 = document.getElementById('next3');
                const icon7 = document.getElementById('prev3');
                const slider3 = document.querySelector('.slider2');


                function next1(){
                    slider.classList.add('open')
                    slider2.classList.add('close')
                    slider3.classList.remove('open')


                }
                function pre1(){
                    slider.classList.remove('open')
                    slider2.classList.remove('close')
                    slider3.classList.remove('open')

                }
                function pre2(){
                    slider.classList.remove('open')
                    slider2.classList.add('close')
                    slider3.classList.add('open')
                }
                function pre3(){
                    slider.classList.add('open')
                    slider2.classList.add('close')
                    slider3.classList.remove('open')
                }
                console.log(next1);
                  console.log(pre1);
                  console.log(slider3);
                console.log(icon7);
                console.log(iconNext2);
                iconNext.addEventListener('click', next1)
                iconNext2.addEventListener('click', pre2)
                iconNext3.addEventListener('click', pre1)
                icon6.addEventListener('click', pre2)
                icon5.addEventListener('click', pre1)
                icon7.addEventListener('click', pre3)

                </script>

                </div>

                     <!-- ========================================================================================================================================    -->

                        <div id="content">
                            <div class="content_pfc">
                                <div class="content_pfc_titel"><?= $pour['logo'] ?></div>
                                <div class="content_pfc_text">
                                <h4 style="color:#fff";> <?= $pour['title'] ?>  </h4></div>
                            </div>
                            <div class="content_layout">
                                <div class="content_layot_text">
                                    <div class="fr"><h1 style="color:#fff"><?= $pour['Notre_engagement'] ?></h1></div>
                                    <div class="p"><p><?= $pour['about_notre'] ?></p></div>
                                    <div class="last"><h1><?= $pour['note'] ?></h1></div>
                                </div>
                                <div class="content_layout_inset"><?= $this->Html->image('mo.png') ?></div>
                                <div class="content_layot_img"><?= $this->Html->image($display['image_pour']) ?></div>
                            </div>
                            <div class="content_about">
                                <div class="content_about_title"><?=__('Découvrez l’univers z0 Gravity')  ?></div>
                                <div class="content_about_text"><?=__('Plannings, budgets, calendriers…En un clin dœil, vous avez une vision globale et stratégique de lavancée de vos projets en temps réel !') ?>
                                </div>
                                <div class="conteant_about_button"><i class="fa-solid fa-play"></i> <a href="<?= $pour['link'] ?>"><?=__('Présentation')?> vidéo </a></div>
                            </div>
                            <div class="content_app">
                            <?= $this->Html->image('app.jpg') ?>
                            </div>

                        </div>
                        <div id="news">
                            <div class="news1">
                                <div class="news_vous_title"><?= __('Vous êtes…') ?></div>
                                <div class="news_vous">

                                    <div class="news_vous_go">
                                        <div class="vous_go_item"><i class="fa-solid fa-file-signature" style="color:#049BF7 ;"></i></div>
                                        <div class="vous_go_about"><h2><?= __('Une entreprise') ?></h2><p> <?= __('Jouez collectif fédérez vos équipes autour dun objectif commun.') ?></p></div>
                                        <div class="vous_go_button"><a href="" style="color: #fff; text-decoration: none;"><?= __('3,2,1… Go !') ?></a></div>
                                    </div>
                                    <div class="news_vous_comment">
                                        <div class="vous_comment_item"><i class="fa-solid fa-hospital" style="color:#FF7D66 ;"></i></div>
                                        <div class="vous_comment_about"><h2><?= __('Une collectivité') ?></h2><p><?= __('Rassemblez les acteurs de <br>votre projet via un logiciel commun !') ?></p></div>
                                        <div class="vous_comment_button"><a href="" style="color: #fff; text-decoration: none;"><?= __('Découvrez comment') ?></a></div>
                                    </div>
                                    <div class="news_vous_commemcons">
                                        <div class="vous_commemcons_item"><i class="fa-solid fa-map-location-dot" style="color:#FFD051 ;"></i></div>
                                        <div class="vous_commemcons_about"><h2><?= __('Un promeneur') ?></h2><p><?= __('égaré Bienvenue !<br> Installez-vous et laissez-vous guider.') ?></p></div>
                                        <div class="vous_commemcons_button"><a href="" style="color: #fff; text-decoration: none;"><?= __('Commençons par ici') ?></a></div>
                                    </div>
                                </div>
                            </div>


                            <div class="news_nos">
                                <div class="nos_title"><h1><?= __('Nos articles') ?></h1></div>
                                <div class="new">
                                  <div class="customize_articles">
                                    <i class="fa-solid fa-gear"></i> <?= $this->Html->link(__('articles'), ['controller' => 'Interfaces', 'action' => 'edit']) ?>
                                  </div>
                                </div>
                                <div class="nos_content">
                                    <div class="conten_nos1">
                                        <div class="conten_nos1_img"><?= $this->Html->image($article[0]['img']) ?></div>
                                        <div class="conten_nos1_caption"><?= $this->Form->control('title1', ['value' => $article[0]['title'], 'rows'=>'1']);?></div>
                                        <div class="conten_nos1_time">
                                            <div class="conten_nos1_note">
                                                <?= $this->Form->control('about1', ['value' => $article[0]['about']]);?></div>15 min
                                        </div>
                                        <div class="conten_nos1_about"><?= $this->Form->control('body1', ['value' => $article[0]['body'], 'rows'=>'1']);?></div>
                                        <div class="conten1 nos_btn"><a href="<?= $article[1]['link'] ?>"><?= __('Lire l’article') ?></a></div>
                                        <div  style="display:none"><?= $this->Form->control('link1', ['value' => $article[0]['link']]);?></div>
                                    </div>
                                    <div class="conten_nos2">
                                        <div class="conten_nos2_img"><?= $this->Html->image( $article[1]['img'] ) ?></div>
                                        <div class="conten_nos2_char">
                                            <div class="conten_nos2_caption"><?= $this->Form->control('title2', ['value' => $article[3]['title'], 'rows'=>'1']);?></div>


                                            <div class="conten_nos2_time">
                                                <div class="conten_nos2_note">
                                                <?= $this->Form->control('about2', ['value' => $article[1]['about']]);?></div>10 min
                                            </div>
                                            <div class="conten_nos2_about">  <?= $this->Form->control('body2', ['value' => $article[1]['body'], 'rows'=>'3']);?></div>
                                            <div class="conten2 nos_btn"><a href="<?= $article[1]['link'] ?>"><?= __('Lire l’article') ?></a></div>
                                          <div style="display:none">  <?= $this->Form->control('link2', ['value' => $article[1]['link']]);?></div>
                                        </div>
                                    </div>
                                    <div class="conten_nos4">
                                        <div class="conten_nos4_img"></div>
                                        <div class="conten_nos4_caption"><?= $this->Form->control('title3', ['value' => $article[2]['title'], 'rows'=>'1']);?></div>


                                        <div class="conten_nos4_time">
                                            <div class="conten_nos4_note">
                                        <?= $this->Form->control('about3', ['value' => $article[2]['about']]);?></div>8 min

                                        </div>
                                        <div class="conten_nos4_about"><?= $this->Form->control('body3', ['value' => $article[2]['body'], 'rows'=>'2']);?></div>
                                        <div class="conten4 nos_btn"><a href="<?= $article[1]['link'] ?>"><?= __('Lire l’article') ?></a></div>
                                        <div style="display:none"><?= $this->Form->control('link3', ['value' => $article[2]['link']]);?></div>
                                    </div>

                                    <div class="conten_nos3">
                                        <div class="conten_nos3_img"></div>
                                        <div class="conten_nos3_caption"><?= $this->Form->control('title4', ['value' => $article[3]['title'], 'rows'=>'1']);?></div>




                                        <div class="conten_nos3_time">
                                            <div class="conten_nos3_note">
                                              <?= $this->Form->control('about4', ['value' => $article[3]['about']]);?></div>12 min
                                        </div>
                                        <div class="conten_nos3_about"><?= $this->Form->control('body4', ['value' => $article[3]['body'], 'rows'=>'2']);?></div>
                                        <div class="conten3 nos_btn"><a href="<?= $article[1]['link'] ?>"><?= __('Lire l’article') ?></a></div>
                                      <div style="display:none"><?= $this->Form->control('link4', ['value' => $article[3]['link']]);?></div>
                                    </div>
                                </div>
                                <div class="button_content1 button"><a href=""><?= __('Voir tous les articles') ?></a></div>
                                <div class="conten_titlel_last">
                                    <h1><?= __('Assez parlé de nous.') ?></h1>
                                      <p><?= __('Parlez-nous de vous !') ?></p>
                                </div>
                                <div class="button_content2 button"><a ><?= __('On discute !') ?></a></div>
                            </div>
                        </div>
                    <div id="footer">
                        <div class="bottom"
                            <div class="footer_menu">
                                <div class="footer_logo">
                                    <div class="logo_img"><img src="https://www.z0gravity.com/storage-z0G/2019/05/z0_Gravity_Logo_BlancBleu-1.svg" alt=""></div>
                                    <div class="logo_slogan"><?= __('Ensemble, on va plus loin.') ?></div>
                                </div>
                                <div class="footer_list">
                                    <ul>
                                        <li><?= __('Entreprises') ?></li>
                                        <li><?= __('Collectivités') ?></li>
                                        <li><?= __('À PROPOS') ?></li>
                                        <li><?= __('CONTACT') ?></li>
                                        <li><?= __('BLOG') ?></li>
                                    </ul>
                                </div>
                                <div class="footr_infor">
                                    <div class="infor_img">
                                        <div class="information"><?= __('SUIVEZ-NOUS') ?></div>
                                        <div class="img_info">
                                          <i class="fa-brands fa-facebook-f"></i>
                                          <i class="fa-brands fa-twitter"></i>
                                          <i class="fa-brands fa-vimeo-v"></i>
                                        </div>
                                    </div>
                                    <div class="js-open-model" > <i class="fa-solid fa-earth-asia"> </i><?= __('changer de région') ?></div>
                                </div>
                            </div>
                            <div class="footer_last">
                                    <a><?= __('© 2019 Globalsi SAS') ?></a>
                                     <a><?= __('Plan du site') ?></a>
                                    <a><?= __('Contactez-nous') ?></a>
                                    <a><?= __('Mentions légale') ?></a>
                            </div>
                        </div>
                    </div>

                        <div class="model js-model">
                            <div class="set_changer">
                                <div class="chenger_tille">
                                    <h2><?= __('Change Language') ?></h2>
                                    <i class="fa-solid fa-xmark js-close-model" style="cursor: pointer;"></i>
                                </div>
                                <div class="chenger_about">
                                    <?= __('Si vous sélectionnez une autre région, la langue et le contenu de z0gravity.com changeront.') ?>
                                </div>
                                <div class="langue">
                                    <ul>
                                    <div class="ul">
                                        <li> <a href="http://localhost:8765/interfaces/home/?locale=es">Français </a> </li>
                                      <li><a href="http://localhost:8765/interfaces/home/?locale=en_US">English </a> </li>
                                         <li><a href="http://localhost:8765/interfaces/home/?locale=vi_VN">tiengviet</a> </li>
                                    </div>
                                    <div class="ul">
                                        <li> Deutsch</li>
                                        <li>Nederlands</li>
                                        <li>Polski </li>
                                    </div>
                                    <div class="ul">
                                        <li>Русский</li>
                                        <li>Bokmål</li>
                                        <li>Ελληνικά </li>
                                    </div>
                                    <div class="ul">
                                        <li>Português </li>
                                        <li>日本語</li>
                                        <li>繁體中文</li>
                                    </div>
                                    </ul>
                                </div>
                            </div>
                          </div>


                        <div>

                          <?= $this->Form->button(__('Save '), ['id'=>'save']);?>
                          <?= $this->Form->end();?>
        <?= $this->Html->script('changer.js') ?>
        <div id="main">

                              <div id ="header">
                                  <div class="header_menu">
                                      <div class="zg_logo"><?= $this->Html->image('logo1.png') ?>
                                          </div>
                                         <div class="bar_mobile">




                                                          <div class="list_menu js-bar">
                                                              <img src="/img/logo/z0_Gravity_Logo_Couleur.png" alt="" class="none">
                                                              <div class="l">
                                                                  <div class="dropdown"><?= $this->Form->control('ENTREPRISES', ['value' => $bar->ENTREPRISES])?>
                                                                      <div class="dropdown-content">  <input type="text" placeholder="<?=$bar->ENTREPRISES?>" name="link_ENTREPRISES" value="<?=$bar->link_ENTREPRISES?>">
                                                                      </div>
                                                                  </div>
                                                            </div>
                                                            <div class="l">
                                                                <div class="dropdown"><?= $this->Form->control('SECTEUR', ['value' => $bar->SECTEUR])?>
                                                                    <div class="dropdown-content"><input type="text" placeholder="<?=$bar->SECTEUR?>" name="link_SECTEUR" value="<?=$bar->link_SECTEUR?>">
                                                                    </div>
                                                                </div>
                                                          </div>
                                                          <div class="l">
                                                              <div class="dropdown"><?= $this->Form->control('PROPOS', ['value' => $bar->PROPOS])?>
                                                                  <div class="dropdown-content"><input type="text" placeholder="<?=$bar->PROPOS?>" name="link_PROPOS" value="<?=$bar->link_PROPOS?>">
                                                                  </div>
                                                              </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="dropdown"><?= $this->Form->control('CONTACT', ['value' => $bar->CONTACT])?>
                                                                <div class="dropdown-content"><input type="text" placeholder="<?=$bar->CONTACT?>" name="link_CONTACT" value="<?=$bar->link_CONTACT?>">
                                                                </div>
                                                            </div>
                                                      </div>
                                                      <div class="l">
                                                          <div class="dropdown"><?= $this->Form->control('BLOG', ['value' => $bar->BLOG])?>
                                                              <div class="dropdown-content"><input type="text" placeholder="<?=$bar->BLOG?>" name="link_BLOG" value="<?=$bar->link_BLOG?>">
                                                              </div>
                                                          </div>
                                                    </div>
                                                  </div>
                                                  <script>
                                                  const imageOpen = document.getElementById('image2');
                                                  const settingImage = document.querySelector('.image');
                                                  const imageClose = document.getElementById('image3');

                                                  function showImage(){
                                                    settingImage.classList.add('open')
                                                  }
                                                  function hideImage(){
                                                    settingImage.classList.remove('open')
                                                  }
                                                  console.log(imageOpen);
                                                    console.log(settingImage);
                                                      console.log(imageClose);

                                                  imageOpen.addEventListener('click', showImage)
                                                  imageClose.addEventListener('click', hideImage)





                                                  </script>

                                              </div>
                                  </div>
                                  <?= $this->Html->script('slider.js') ?>

                              </div>



      <style>
        #title, #about, #video{
          color:<?= $display['color_header'] ?>;

      }
      </style>
                      <!-- ====================================================================================================================== -->
                          <div id="lider" style="background-color:<?= $display['backgroun_header'] ?>">


                                                      <div class="video js-video">
                                                          <button class="bnt_video js-close-video">  <i class="fa-solid fa-xmark " style="cursor: pointer;"></i> </i></button>
                                                                  <div class="set_video">
                                                     <iframe src="https://www.youtube.com/embed/JP9IIlOKafs"
                                                       title="Nhạc Lofi 2022 - Những Bản Lofi Việt Nhẹ Nhàng Cực Chill - Nhạc Lofi Chill Buồn Hay Nhất 2022" frameborder="0"
                                                       allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                          </div>


                                          </div>
                                      <div class="top">
                                           <div class="header_container" >

                                                  <?= $this->Html->image($display->image_header) ?>
                                                  <?= $this->Form->control('id_headers');?>
                                                      <div class="container_title">
                                                              <h1 class="font_blue" style="color: <?= $display['color_header'] ?>;"><?= $this->Form->control('title', ['rows'=>'3', 'color'=> $display['color_header']]);?></h1>


                                                      <div class="container_about" style="color: <?= $display['color_header'] ?>;">
                                                          <?= $this->Form->control('about', ['rows'=>'3']);?>
                                                      </div>
                                                      <div class="container_button" style="color: <?= $display['color_header'] ?>;">
                                                           <?= $this->Form->control('button');?>
                                                      </div>
                                                      <div class="container_item" style="color: <?= $display['color_header'] ?>;">
                                                           <button class="js-open-video"><i class="fa-solid fa-circle-play"></i>
                                                                  <?= $this->Form->control('video');?>
                                                          </button>
                                                      </div>
                                                  </div>

                                          </div>
                                      </div>
                                           <?= $this->Html->script('open_video.js') ?>

                  <div class="list_slider">

                              <div class="list_item">
                                                  <!-- <div class="slide_box1"></div> -->
                                <div class="slider_content">
                                      <div class="slider_titel"><?= $this->Form->control('title_pres', ['value' =>$pres[0]['title_pres']]);?>
                                      <div class="next_pre">
                                                <div class="slider_next next" id="next1"> <i class="fa-solid fa-angle-left" ></i></div>
                                                <div class="slider_pre prev" id="prev1"><i class="fa-solid fa-angle-right" ></i></div>
                                     </div>
                                      </div>
                                      <div class="logo1">
                                          <div class="dropdown"><?= $this->Html->image($pres[0]['logo'])?>
                                              <div class="dropdown-content"><?= $this->Form->control('logo', ['value' =>$pres[0]['logo']]);?>
                                              </div>
                                          </div>
                                    </div>

                                      <div class="slider_about"> <?= $this->Form->input('about_pres', ['value' =>$pres[0]['about_pres'], 'rows'=>'3']);?></div>
                                      <div class="slider_note">
                                          <div class="note"><?= $this->Form->control('author', ['value' =>$pres[0]['author']]);?><?= $this->Form->control('dress', ['value' =>$pres[0]['dress']]);?></div>
                                          <div class="cycle">
                                              <div class="sliderdrop"><a href="<?= $pres[0]['link']?>" style="color:#000";><?=__('Lire l’article')  ?>   <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                                  <div class="sliderdrop-content"><?= $this->Form->control('link', ['value' =>$pres[0]['link']]);?>
                                                  </div>
                                              </div>
                                        </div>

                                      </div>
                                                          <!-- <div class="slide_box2"></div> -->
                               </div>
                          </div>
                          <div class="slider1">
                                              <!-- <div class="slide_box1"></div> -->
                            <div class="slider_content">
                                  <div class="slider_titel"><?= $this->Form->control('title_pres1', ['value' =>$pres[1]['title_pres']]);?>
                                  <div class="next_pre">
                                            <div class="slider_next next " id ="next2"> <i class="fa-solid fa-angle-left"></i></div>
                                            <div class="slider_pre prev" id="prev2"><i class="fa-solid fa-angle-right"></i></div>
                                 </div>
                                  </div>
                                  <div class="logo1">
                                      <div class="dropdown"><?= $this->Html->image($pres[1]['logo'])?>
                                          <div class="dropdown-content"><?= $this->Form->control('logo1', ['value' =>$pres[1]['logo']]);?>
                                          </div>
                                      </div>
                                </div>
                                  <div class="slider_about"> <?= $this->Form->input('about_pres1', ['value' =>$pres[1]['about_pres'], 'rows'=>'3']);?></div>
                                  <div class="slider_note">
                                      <div class="note"><?= $this->Form->control('author1', ['value' =>$pres[1]['author']]);?><?= $this->Form->control('dress1', ['value' =>$pres[1]['dress']]);?></div>
                                      <div class="cycle">
                                          <div class="sliderdrop"><a href="<?= $pres[1]['link']?>" style="color:#000";><?=__('Lire l’article')  ?>   <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                              <div class="sliderdrop-content"><?= $this->Form->control('link1', ['value' =>$pres[1]['link']]);?>
                                              </div>
                                          </div>
                                    </div>
                                  </div>

                                                      <!-- <div class="slide_box2"></div> -->
                           </div>
                      </div>
                      <div class="slider2">
                                          <!-- <div class="slide_box1"></div> -->
                        <div class="slider_content">
                              <div class="slider_titel"><?= $this->Form->control('title_pres2', ['value' =>$pres[2]['title_pres']]);?>
                              <div class="next_pre">
                                        <div class="slider_next next " id ="next3"> <i class="fa-solid fa-angle-left"></i></div>
                                        <div class="slider_pre prev" id="prev3"><i class="fa-solid fa-angle-right"></i></div>
                             </div>
                              </div>
                              <div class="logo1">
                                  <div class="dropdown"><?= $this->Html->image($pres[2]['logo'])?>
                                      <div class="dropdown-content"><?= $this->Form->control('logo2', ['value' =>$pres[2]['logo']]);?>
                                      </div>
                                  </div>
                            </div>
                              <div class="slider_about"> <?= $this->Form->input('about_pres2', ['value' =>$pres[2]['about_pres'], 'rows'=>'3']);?></div>
                              <div class="slider_note">
                                  <div class="note"><?= $this->Form->control('author2', ['value' =>$pres[2]['author']]);?><?= $this->Form->control('dress2', ['value' =>$pres[2]['dress']]);?></div>
                                  <div class="cycle">
                                      <div class="sliderdrop"><a href="<?= $pres[2]['link']?>" style="color:#000";><?=__('Lire l’article')  ?>   <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                          <div class="sliderdrop-content"><?= $this->Form->control('link2', ['value' =>$pres[2]['link']]);?>
                                          </div>
                                      </div>
                                </div>
                              </div>
                                                  <!-- <div class="slide_box2"></div> -->
                       </div>
                  </div>

                          <!-- ============== -->

                      </div>
                      <script type="text/javascript">
                      const iconNext = document.getElementById('next1');
                      const slider = document.querySelector('.slider1');
                      const icon5 = document.getElementById('prev2');
                      const slider2 = document.querySelector('.list_item');
                      const iconNext2 = document.getElementById('next2');
                      const icon6 = document.getElementById('prev1');
                      const iconNext3 = document.getElementById('next3');
                      const icon7 = document.getElementById('prev3');
                      const slider3 = document.querySelector('.slider2');


                      function next1(){
                          slider.classList.add('open')
                          slider2.classList.add('close')
                          slider3.classList.remove('open')


                      }
                      function pre1(){
                          slider.classList.remove('open')
                          slider2.classList.remove('close')
                          slider3.classList.remove('open')

                      }
                      function pre2(){
                          slider.classList.remove('open')
                          slider2.classList.add('close')
                          slider3.classList.add('open')
                      }
                      function pre3(){
                          slider.classList.add('open')
                          slider2.classList.add('close')
                          slider3.classList.remove('open')
                      }
                      console.log(next1);
                        console.log(pre1);
                        console.log(slider3);
                      console.log(icon7);
                      console.log(iconNext2);
                      iconNext.addEventListener('click', next1)
                      iconNext2.addEventListener('click', pre2)
                      iconNext3.addEventListener('click', pre1)
                      icon6.addEventListener('click', pre2)
                      icon5.addEventListener('click', pre1)
                      icon7.addEventListener('click', pre3)

                      </script>

                      </div>

                           <!-- ========================================================================================================================================    -->

                              <div id="content">
                                  <div class="content_pfc">
                                      <div class="content_pfc_titel"><?= $pour['logo'] ?></div>
                                      <div class="content_pfc_text">
                                      <h4 style="color:#fff";> <?= $pour['title'] ?>  </h4></div>
                                  </div>
                                  <div class="content_layout">
                                      <div class="content_layot_text">
                                          <div class="fr"><h1 style="color:#fff"><?= $pour['Notre_engagement'] ?></h1></div>
                                          <div class="p"><p><?= $pour['about_notre'] ?></p></div>
                                          <div class="last"><h1><?= $pour['note'] ?></h1></div>
                                      </div>
                                      <div class="content_layout_inset"><?= $this->Html->image('mo.png') ?></div>
                                      <div class="content_layot_img"><?= $this->Html->image($display['image_pour']) ?></div>
                                  </div>
                                  <div class="content_about">
                                      <div class="content_about_title"><?=__('Découvrez l’univers z0 Gravity')  ?></div>
                                      <div class="content_about_text"><?=__('Plannings, budgets, calendriers…En un clin dœil, vous avez une vision globale et stratégique de lavancée de vos projets en temps réel !') ?>
                                      </div>
                                      <div class="conteant_about_button"><i class="fa-solid fa-play"></i> <a href="<?= $pour['link'] ?>"><?=__('Présentation')?> vidéo </a></div>
                                  </div>
                                  <div class="content_app">
                                  <?= $this->Html->image('app.jpg') ?>
                                  </div>

                              </div>
                              <div id="news">
                                  <div class="news1">
                                      <div class="news_vous_title"><?= __('Vous êtes…') ?></div>
                                      <div class="news_vous">

                                          <div class="news_vous_go">
                                              <div class="vous_go_item"><i class="fa-solid fa-file-signature" style="color:#049BF7 ;"></i></div>
                                              <div class="vous_go_about"><h2><?= __('Une entreprise') ?></h2><p> <?= __('Jouez collectif fédérez vos équipes autour dun objectif commun.') ?></p></div>
                                              <div class="vous_go_button"><a href="" style="color: #fff; text-decoration: none;"><?= __('3,2,1… Go !') ?></a></div>
                                          </div>
                                          <div class="news_vous_comment">
                                              <div class="vous_comment_item"><i class="fa-solid fa-hospital" style="color:#FF7D66 ;"></i></div>
                                              <div class="vous_comment_about"><h2><?= __('Une collectivité') ?></h2><p><?= __('Rassemblez les acteurs de <br>votre projet via un logiciel commun !') ?></p></div>
                                              <div class="vous_comment_button"><a href="" style="color: #fff; text-decoration: none;"><?= __('Découvrez comment') ?></a></div>
                                          </div>
                                          <div class="news_vous_commemcons">
                                              <div class="vous_commemcons_item"><i class="fa-solid fa-map-location-dot" style="color:#FFD051 ;"></i></div>
                                              <div class="vous_commemcons_about"><h2><?= __('Un promeneur') ?></h2><p><?= __('égaré Bienvenue !<br> Installez-vous et laissez-vous guider.') ?></p></div>
                                              <div class="vous_commemcons_button"><a href="" style="color: #fff; text-decoration: none;"><?= __('Commençons par ici') ?></a></div>
                                          </div>
                                      </div>
                                  </div>


                                  <div class="news_nos">
                                      <div class="nos_title"><h1><?= __('Nos articles') ?></h1></div>
                                      <div class="new">
                                        <div class="customize_articles">
                                          <i class="fa-solid fa-gear"></i> <?= $this->Html->link(__('articles'), ['controller' => 'Interfaces', 'action' => 'edit']) ?>
                                        </div>
                                      </div>
                                      <div class="nos_content">
                                          <div class="conten_nos1">
                                              <div class="conten_nos1_img"><?= $this->Html->image($article[0]['img']) ?></div>
                                              <div class="conten_nos1_caption"><?= $this->Form->control('title1', ['value' => $article[0]['title'], 'rows'=>'1']);?></div>
                                              <div class="conten_nos1_time">
                                                  <div class="conten_nos1_note">
                                                      <?= $this->Form->control('about1', ['value' => $article[0]['about']]);?></div>15 min
                                              </div>
                                              <div class="conten_nos1_about"><?= $this->Form->control('body1', ['value' => $article[0]['body'], 'rows'=>'1']);?></div>
                                              <div class="conten1 nos_btn"><a href="<?= $article[1]['link'] ?>"><?= __('Lire l’article') ?></a></div>
                                              <div  style="display:none"><?= $this->Form->control('link1', ['value' => $article[0]['link']]);?></div>
                                          </div>
                                          <div class="conten_nos2">
                                              <div class="conten_nos2_img"><?= $this->Html->image( $article[1]['img'] ) ?></div>
                                              <div class="conten_nos2_char">
                                                  <div class="conten_nos2_caption"><?= $this->Form->control('title2', ['value' => $article[3]['title'], 'rows'=>'1']);?></div>


                                                  <div class="conten_nos2_time">
                                                      <div class="conten_nos2_note">
                                                      <?= $this->Form->control('about2', ['value' => $article[1]['about']]);?></div>10 min
                                                  </div>
                                                  <div class="conten_nos2_about">  <?= $this->Form->control('body2', ['value' => $article[1]['body'], 'rows'=>'3']);?></div>
                                                  <div class="conten2 nos_btn"><a href="<?= $article[1]['link'] ?>"><?= __('Lire l’article') ?></a></div>
                                                <div style="display:none">  <?= $this->Form->control('link2', ['value' => $article[1]['link']]);?></div>
                                              </div>
                                          </div>
                                          <div class="conten_nos4">
                                              <div class="conten_nos4_img"></div>
                                              <div class="conten_nos4_caption"><?= $this->Form->control('title3', ['value' => $article[2]['title'], 'rows'=>'1']);?></div>


                                              <div class="conten_nos4_time">
                                                  <div class="conten_nos4_note">
                                              <?= $this->Form->control('about3', ['value' => $article[2]['about']]);?></div>8 min

                                              </div>
                                              <div class="conten_nos4_about"><?= $this->Form->control('body3', ['value' => $article[2]['body'], 'rows'=>'2']);?></div>
                                              <div class="conten4 nos_btn"><a href="<?= $article[1]['link'] ?>"><?= __('Lire l’article') ?></a></div>
                                              <div style="display:none"><?= $this->Form->control('link3', ['value' => $article[2]['link']]);?></div>
                                          </div>

                                          <div class="conten_nos3">
                                              <div class="conten_nos3_img"></div>
                                              <div class="conten_nos3_caption"><?= $this->Form->control('title4', ['value' => $article[3]['title'], 'rows'=>'1']);?></div>




                                              <div class="conten_nos3_time">
                                                  <div class="conten_nos3_note">
                                                    <?= $this->Form->control('about4', ['value' => $article[3]['about']]);?></div>12 min
                                              </div>
                                              <div class="conten_nos3_about"><?= $this->Form->control('body4', ['value' => $article[3]['body'], 'rows'=>'2']);?></div>
                                              <div class="conten3 nos_btn"><a href="<?= $article[1]['link'] ?>"><?= __('Lire l’article') ?></a></div>
                                            <div style="display:none"><?= $this->Form->control('link4', ['value' => $article[3]['link']]);?></div>
                                          </div>
                                      </div>
                                      <div class="button_content1 button"><a href=""><?= __('Voir tous les articles') ?></a></div>
                                      <div class="conten_titlel_last">
                                          <h1><?= __('Assez parlé de nous.') ?></h1>
                                            <p><?= __('Parlez-nous de vous !') ?></p>
                                      </div>
                                      <div class="button_content2 button"><a ><?= __('On discute !') ?></a></div>
                                  </div>
                              </div>
                          <div id="footer">
                              <div class="bottom"
                                  <div class="footer_menu">
                                      <div class="footer_logo">
                                          <div class="logo_img"><img src="https://www.z0gravity.com/storage-z0G/2019/05/z0_Gravity_Logo_BlancBleu-1.svg" alt=""></div>
                                          <div class="logo_slogan"><?= __('Ensemble, on va plus loin.') ?></div>
                                      </div>
                                      <div class="footer_list">
                                          <ul>
                                              <li><?= __('Entreprises') ?></li>
                                              <li><?= __('Collectivités') ?></li>
                                              <li><?= __('À PROPOS') ?></li>
                                              <li><?= __('CONTACT') ?></li>
                                              <li><?= __('BLOG') ?></li>
                                          </ul>
                                      </div>
                                      <div class="footr_infor">
                                          <div class="infor_img">
                                              <div class="information"><?= __('SUIVEZ-NOUS') ?></div>
                                              <div class="img_info">
                                                <i class="fa-brands fa-facebook-f"></i>
                                                <i class="fa-brands fa-twitter"></i>
                                                <i class="fa-brands fa-vimeo-v"></i>
                                              </div>
                                          </div>
                                          <div class="js-open-model" > <i class="fa-solid fa-earth-asia"> </i><?= __('changer de région') ?></div>
                                      </div>
                                  </div>
                                  <div class="footer_last">
                                          <a><?= __('© 2019 Globalsi SAS') ?></a>
                                           <a><?= __('Plan du site') ?></a>
                                          <a><?= __('Contactez-nous') ?></a>
                                          <a><?= __('Mentions légale') ?></a>
                                  </div>
                              </div>
                          </div>

                              <div class="model js-model">
                                  <div class="set_changer">
                                      <div class="chenger_tille">
                                          <h2><?= __('Change Language') ?></h2>
                                          <i class="fa-solid fa-xmark js-close-model" style="cursor: pointer;"></i>
                                      </div>
                                      <div class="chenger_about">
                                          <?= __('Si vous sélectionnez une autre région, la langue et le contenu de z0gravity.com changeront.') ?>
                                      </div>
                                      <div class="langue">
                                          <ul>
                                          <div class="ul">
                                              <li> <a href="http://localhost:8765/interfaces/home/?locale=es">Français </a> </li>
                                            <li><a href="http://localhost:8765/interfaces/home/?locale=en_US">English </a> </li>
                                               <li><a href="http://localhost:8765/interfaces/home/?locale=vi_VN">tiengviet</a> </li>
                                          </div>
                                          <div class="ul">
                                              <li> Deutsch</li>
                                              <li>Nederlands</li>
                                              <li>Polski </li>
                                          </div>
                                          <div class="ul">
                                              <li>Русский</li>
                                              <li>Bokmål</li>
                                              <li>Ελληνικά </li>
                                          </div>
                                          <div class="ul">
                                              <li>Português </li>
                                              <li>日本語</li>
                                              <li>繁體中文</li>
                                          </div>
                                          </ul>
                                      </div>
                                  </div>
                                </div>


                              <div>

                                <?= $this->Form->button(__('Save '), ['id'=>'save']);?>
                                <?= $this->Form->end();?>
              <?= $this->Html->script('changer.js') ?>
</body>
</html>
<?php endforeach; ?>
<?php endforeach; ?>
<?php endforeach; ?>
<?php endforeach; ?>
