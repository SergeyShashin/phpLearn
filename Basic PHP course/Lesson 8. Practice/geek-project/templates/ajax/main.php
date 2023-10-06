<?php
?>

<div class="row">

  <section class="col-6">
    <h2>Пример Get</h2>
    <ul>
      <li>URL: <code>/ajax.php</code></li>
      <li>Method: <code>GET</code></li>
      <li>Data: <code>null</code></li>
      <button id='btn-simple' class="btn btn-primary">Execute</button>
    </ul>
  </section>
  <section class="col-6">
    <h2>Пример GET</h2>
    <ul>
      <li>URL: <code>/ajax.php?action=jsonitem</code></li>
      <li>Method: <code>GET</code></li>
      <li>Data: <code>{action: 'jsonitem'}</code></li>
      <button id='btn-jsonitem' class="btn btn-primary">Execute</button>
    </ul>
  </section>
  <hr>
  <section class="col-6">
    <h2>Пример POST</h2>
    <ul>
      <li>URL: <code>/ajax.php?action=input</code></li>
      <li>Method: <code>POST</code></li>
      <li>Data: <code>{message: 'helo-from-ajax!'}</code></li>
      <button id='btn-input' class="btn btn-primary">Execute</button>
    </ul>
  </section>
  <section class="col-6">
    <h2>Пример POST</h2>
    <ul>
      <li>URL: <code>/ajax.php?action=object</code></li>
      <li>Method: <code>POST</code></li>
      <li>Data: <code>{user: {login:'John', password:'123123'}}</code></li>
      <button id='btn-object' class="btn btn-primary">Execute</button>
    </ul>
  </section>

</div>



<script defer src='/js/request.js'></script>