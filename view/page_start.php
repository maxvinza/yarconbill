<?php include 'view/element_head.php'?>
  <body class="text-center">
    <form class="form-signin" action = "index.php" method = "POST">
      <h1 class="h3 mb-3 font-weight-normal">Пожалуйста, представьтесь</h1>
      <label for="inputEmail" class="sr-only">Логин</label>
      <input id="inputEmail" name = "login" class="form-control" placeholder="Логин" required autofocus>
      <label for="inputPassword" class="sr-only">Пароль</label>
      <input type="password" id="inputPassword" name = "pass" class="form-control" placeholder="Пароль" required>
      <!--<div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>-->
      <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
    </form>
  </body>
<?php include 'view/element_foot.php'?>
