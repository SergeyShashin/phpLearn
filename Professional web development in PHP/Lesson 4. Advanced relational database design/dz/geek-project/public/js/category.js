$('#btn-get-more').on('click', function () {
  console.log('Как-то вывести ещё 25 товаров.');
  $.get(
    '/category.php?action=view&id=1',
    function (response, status) {
      console.log(status);
      console.log(response);
    }
  );

});