<div class="container col-3">
  <form method="post">
    <div class="mb-3">
      <label for="login" class="form-label">Login</label>
      <input type="text" class="form-control" id="login" name='login' require>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label" require>Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name='password'>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name='remember'>
      <label class="form-check-label" for="exampleCheck1">Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary" name="signIn">Sign In</button>
  </form>
</div>