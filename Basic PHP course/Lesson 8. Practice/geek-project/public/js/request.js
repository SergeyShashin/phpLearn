$(document).ready(function () {
  console.log('Request.js [LOADED]');

  $('#btn-simple').on('click', function () {
    $.get(
      '/ajax.php',
      function (response, status) {
        console.log(status);
        console.log(response);
      }
    );

  });

  $('#btn-jsonitem').on('click', function () {
    $.get(
      '/ajax.php?action=jsonitem',
      function (response, status) {
        console.log(status);
        console.log(response);
      }
    );

  });

  $('#btn-input').on('click', function () {
    $.post(
      '/ajax.php?action=input',
      { message: 'hello-from-ajax' },
      function (response, status) {
        console.log(status);
        console.log(response);
      }
    );

  });
  $('#btn-object').on('click', function () {
    let user = {
      login: 'Ivan',
      password: 123123
    }
    
    $.post(
      '/ajax.php?action=object',
      { user: user },
      function (response, status) {
        console.log(status);
        console.log(response);
      }
    );

  });

})