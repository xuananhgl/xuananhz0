
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<?=$user->role?>:<?= $this->Html->link(__(($user->email)), ['controller' => 'Users', 'action' => 'view', $user->id])?>
</nav>

<div class="users view large-9 medium-8 columns content">


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
          <li><div>add</div></li>
          <li><div>edit</div></li>
        </ul>
      </li>
      <li><div>Artices</div>
        <ul>
          <li><div class="edit"><?= $this->Html->link(__('Index'), ['controller' => 'Articles', 'action' => 'index']) ?></div></li>
          <li><div>add</div></li>
          <li><div>edit</div></li>
        </ul>
      </li>
      <li><div>Headers</div>
        <ul>
          <li><div class="edit"><?= $this->Html->link(__('Index'), ['controller' => 'Headers', 'action' => 'index']) ?></div></li>
          <li><div>add</div></li>
          <li><div>edit</div></li>
        </ul>
      </li>
      <li><div>PRESS</div>
        <ul>
          <li>  <div class="edit"><?= $this->Html->link(__('Index'), ['controller' => 'Pres', 'action' => 'index']) ?></div></li>
          <li><div>edit</div></li>
          <li><div>add</div></li>
        </ul>
      </li>
</ul>
</div>
<br>
<h5 class="">
<?= $this->Html->link(__('interface'), ['controller' => 'Interfaces', 'action' => 'home']) ?>
</h5>

</div>
