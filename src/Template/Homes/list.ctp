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
  <style>





  </style>
  <div class="container">
      <div class="select">list-Edit</div>
      <div class="options">
          <p class="item"><?= $this->Html->link(__('headers'), ['controller' => 'Headers', 'action' => 'index']) ?></p>
          <p class="item"><?= $this->Html->link(__('Pres'), ['controller' => 'Pres', 'action' => 'index']) ?></p>
          <p class="item"><?= $this->Html->link(__('Pours'), ['controller' => 'Pours', 'action' => 'index']) ?></p>
          <p class="item"><?= $this->Html->link(__('Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></p>
      </div>
  </div>
  <div class="op">Interfaces</div>
  <script type="text/javascript">
const select = document.querySelector('.select');
const optionBox = document.querySelector('.options');
const options = [...document.querySelectorAll('.options .item')];

// let activeOption = 0; // default should be 0

window.onclick = (e) => {
  if(!e.target.className.includes('select')){
      select.classList.remove('active');
      optionBox.classList.remove('active');
  } else{
      select.classList.toggle('active');
      optionBox.classList.toggle('active');
  }
}

// options.forEach((item, i) => {
//   item.onmousemove = () => {
//       hoverOptions(i);
//   }
// })

// const hoverOptions = (i) => {
//   options[activeOption].classList.remove('active');
//   options[i].classList.add('active');
//   activeOption = i;
//   setValue();
// }

// window.onkeydown = (e) => {
//   if(select.className.includes('active')){
//       e.preventDefault();
//       if(e.key === 'ArrowDown' && activeOption < options.length - 1){
//           hoverOptions(activeOption + 1);
//       } else if(e.key === 'ArrowUp' && activeOption > 0){
//           hoverOptions(activeOption - 1);
//       } else if(e.key === 'Enter'){
//           select.classList.remove('active');
//           optionBox.classList.remove('active');
//       }
//   }
// }

const setValue = () => {
  select.innerHTML = select.value = options[activeOption].innerHTML;
}

setValue();
  </script>

<!--
  <div id="listEdit">






 </div>
 <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#menu" ).menu();
  } );
  </script>
  <style>
  .ui-menu { width: 150px; }
  li{
    list-style-type: none;
  }
  </style>
</head>
<body>
<div class="">


<ul id="menu"><h5>LIST EDIT</h5>

      <li><div>DISLAY</div>
        <ul>
          <li><div>index</div></li>
          <li><div>add</div></li>
          <li><div>edit</div></li>
        </ul>
      </li>
      <li><div>POURS</div>
        <ul>
          <li><div class="edit"><?= $this->Html->link(__('Index'), ['controller' => 'Pours', 'action' => 'index']) ?></div></li>
          <li><div class="edit"><?= $this->Html->link(__('Add'), ['controller' => 'Pours', 'action' => 'add']) ?></div></li>
          <li><div class="edit"><?= $this->Html->link(__('Edit'), ['controller' => 'Pours', 'action' => 'edit']) ?></div></li>
        </ul>
      </li>
      <li><div>Artices</div>
        <ul>
          <li><div class="edit"><?= $this->Html->link(__('Index'), ['controller' => 'Pres', 'action' => 'index']) ?></div></li>
          <li><div class="edit"><?= $this->Html->link(__('Add'), ['controller' => 'Pres', 'action' => 'add']) ?></div></li>
          <li><div class="edit"><?= $this->Html->link(__('Edit'), ['controller' => 'Pres', 'action' => 'edit']) ?></div></li>
        </ul>
      </li>
      <li><div>Headers</div>
        <ul>
          <li><div class="edit"><?= $this->Html->link(__('Index'), ['controller' => 'Headers', 'action' => 'index']) ?></div></li>
          <li><div class="edit"><?= $this->Html->link(__('Add'), ['controller' => 'Headers', 'action' => 'add']) ?></div></li>
          <li><div class="edit"><?= $this->Html->link(__('Edit'), ['controller' => 'Headers', 'action' => 'edit']) ?></div></li>
        </ul>
      </li>
      <li><div>PRESS</div>
        <ul>
          <li><div class="edit"><?= $this->Html->link(__('Index'), ['controller' => 'Articles', 'action' => 'index']) ?></div></li>
          <li><div class="edit"><?= $this->Html->link(__('Add'), ['controller' => 'Articles', 'action' => 'add']) ?></div></li>
          <li><div class="edit"><?= $this->Html->link(__('Edit'), ['controller' => 'Articles', 'action' => 'edit']) ?></div></li>
        </ul>
      </li>
</ul>
</div>
<br>
<h5 class="">
<?= $this->Html->link(__('interface'), ['controller' => 'Interfaces', 'action' => 'home']) ?>
</h5> -->

<!-- </div> -->
