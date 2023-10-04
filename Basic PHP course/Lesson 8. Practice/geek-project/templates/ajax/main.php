<?php
?>

<div class="container">

  <section>
    <h2>Пример Get</h2>
    <ul>
      <li>URL: /ajax.php</li>
      <li>Method: GET</li>
      <li>Data: null</li>
      <button id='btn-simple' class="btn btn-primary">Execute</button>
    </ul>
  </section>
  <section>
    <h2>Пример GET</h2>
    <ul>
      <li>URL: /ajax.php?action=jsonitem</li>
      <li>Method: GET</li>
      <li>Data: {action: 'jsonitem'}</li>
      <button id='btn-jsonitem' class="btn btn-primary">Execute</button>
    </ul>
  </section>
  <hr>
  <section>
    <h2>Пример POST</h2>
    <ul>
      <li>URL: /ajax.php?action=input</li>
      <li>Method: POST</li>
      <li>Data: {message: 'helo-from-ajax!'}</li>
      <button id='btn-input' class="btn btn-primary">Execute</button>
    </ul>
  </section>
  <section>
    <h2>Пример POST</h2>
    <ul>
      <li>URL: /ajax.php?action=object</li>
      <li>Method: POST</li>
      <li>Data: {user: {login:'John', password:'123123'}}</li>
      <button id='btn-object' class="btn btn-primary">Execute</button>
    </ul>
  </section>

</div>