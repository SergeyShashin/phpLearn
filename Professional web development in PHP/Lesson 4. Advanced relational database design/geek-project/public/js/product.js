
$('#add-product').on('click', function () {
  let id = this.dataset.id;
  // let id = $(this).data('id');
  $.post(
    '/cart.php?action=additem',
    { id: id, quantity: 1 },
    function (response, status) {
      if(response.result=='OK'){
        console.log(`Добавили товар с id ${id} в количестве ${quantity}`);
      }else{
        console.log(`Что-то пошло не так с id ${id} в количестве ${quantity}`);
      }     
    }
  );

});