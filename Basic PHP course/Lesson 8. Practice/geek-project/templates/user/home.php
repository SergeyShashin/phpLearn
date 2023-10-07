<h1>"Добро пожаловать"<?php echo 'Логин пользователя' ?></h1>

<h2></h2>
<p>
  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure unde optio ea ducimus recusandae neque,
  magnam tempore dolore illum maxime obcaecati accusantium eos sapiente nostrum rem perspiciatis veniam eius culpa.
</p>
<div class="container col-3">
  <form method="post">
    <div class="mb-3">
      <label for="login" class="form-label">Логин</label>
      <input type="text" class="form-control" id="login" name='login' placeholder="Вывести текущий ЛОГИН из БД">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label" require>Пароль</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name='password' placeholder="ВЫВЕСТИ текущий ПАРОЛЬ из БД">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Имя</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name='first_name' placeholder="Вывести Имя пользователя из БД или ничего, если в БД нет">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Фамилия</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name='last_name' placeholder="Фамилию пользователя из БД или ничего, если в БД нет">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Отчество</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name='middle_name' placeholder="Отчество пользователя из БД или ничего, если в БД нет">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Возраст</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name='age' placeholder="Возраст пользователя из БД или ничего, если в БД нет">
    </div>
    <a href="/user.php?action=approve&id=<?php echo 'взять из БД' ?>" type="submit" class="btn btn-primary">Утвердить</button>
  </form>
</div>