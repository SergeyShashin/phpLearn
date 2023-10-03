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

})