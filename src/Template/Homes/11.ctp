<div class="list_slider">
                <?php endforeach; ?>
            <div class="list_item">
                                <!-- <div class="slide_box1"></div> -->
              <div class="slider_content">
                    <div class="slider_titel"><?= $this->Form->control('title_pres', ['value' =>$pres[0]['title_pres']]);?>
                    <div class="next_pre">
                              <div class="slider_next next" > <i class="fa-solid fa-angle-left"></i></div>
                              <div class="slider_pre prev" ><i class="fa-solid fa-angle-right"></i></div>
                   </div>
                    </div>
                    <div class="slider_h1"><?= $this->Html->image($pres[0]['logo'])?></div>
                    <div class="slider_about"> <?= $this->Form->input('about_pres', ['value' =>$pres[0]['about_pres'], 'rows'=>'3']);?></div>
                    <div class="slider_note">
                        <div class="note"><?= $this->Form->control('author', ['value' =>$pres[0]['author']]);?><?= $this->Form->control('dress', ['value' =>$pres[0]['dress']]);?></div>
                        <div class="cycle"><a href="<?= $pres[0]['link']?>" style="color:#000";><?=__('Lire l’article')  ?>   <i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
                    </div>
                                        <!-- <div class="slide_box2"></div> -->
             </div>
        </div>

        <!-- ============== -->



        <div class="list_item">
          <div class="slider_content">
                 <div class="slider_titel"><?= $this->Form->control('title_pres1', ['value' =>$pres[1]['title_pres']]);?>
                 <div class="next_pre">
                         <div class="slider_next next" ><i class="fa-solid fa-angle-left"></i></div>
                         <div class="slider_pre prev" ><i class="fa-solid fa-angle-right"></i></div>
                 </div>
                 </div>
                 <div class="slider_h1"><?= $this->Html->image($pres[1]['logo'])?></h1></div>
                 <div class="slider_about"><?= $this->Form->input('about_pres1', ['value' =>$pres[1]['about_pres'], 'rows'=>'3'], ['rows'=>'1']);?></div>
                 <div class="slider_note">
                     <div class="note"><?= $this->Form->control('author1', ['value' =>$pres[1]['author']]);?><?= $this->Form->control('dress1', ['value' =>$pres[1]['dress']]);?></div>
                     <div class="cycle"><a href="<?= $pres[2]['link']?>" style="color:#000";><?=__('Lire l’article')?><i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
                  </div>
                  <!-- <div class="slide_box2"></div> -->
         </div>
        </div>
        <div class="list_item">
                 <div class="slider_content">
                        <div class="slider_titel"><?= $this->Form->control('title_pres2', ['value' =>$pres[2]['title_pres']]);?>
                        <div class="next_pre">
                                <div class="slider_next next" ><i class="fa-solid fa-angle-left"></i></div>
                                <div class="slider_pre prev" ><i class="fa-solid fa-angle-right"></i></div>
                        </div>
                        </div>
                        <div class="slider_h1"><?= $this->Html->image($pres[2]['logo'])?></h1></div>
                        <div class="slider_about"><?= $this->Form->input('about_pres2', ['value' =>$pres[2]['about_pres'], 'rows'=>'3'], ['rows'=>'1']);?></div>
                        <div class="slider_note">
                            <div class="note"><?= $this->Form->control('author2', ['value' =>$pres[2]['author']]);?><?= $this->Form->control('dress2', ['value' =>$pres[2]['dress']]);?></div>
                            <div class="cycle"><a href="<?= $pres[2]['link']?>" style="color:#000";><?=__('Lire l’article')?><i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
                         </div>
                         <!-- <div class="slide_box2"></div> -->
                </div>
        </div>
    </div>
        <script>
          $(document).ready(function(){
            $('.list_slider').slick({
              prevArrow: $('.prev'),
              nextArrow: $('.next'),
            });
          });;
        </script>
    </div>
