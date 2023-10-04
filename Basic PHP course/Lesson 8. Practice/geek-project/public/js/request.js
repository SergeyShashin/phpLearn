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
    $.get(
      '/ajax.php?action=input',
      function (response, status) {
        console.log(status);
        console.log(response);
      }
    );

  });
  $('#btn-object').on('click', function () {
    $.get(
      '/ajax.php?action=object',
      function (response, status) {
        console.log(status);
        console.log(response);
      }
    );

  });

})