<?php include 'controllers/c_session.php';?>
      <form class="form-signin" action="" method="POST" name="" id="">
        <h2 class="form-signin-heading">Login</h2>
        <label for="email" class="sr-only">RA</label>
        <input type="text" id="email" name="email" class="form-control" placeholder="Ex.: exemplo@dominio.com" required autofocus maxlength="50">
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required maxlength="16">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="Submit">Entrar</button>
        <span>Caso seja o seu primeiro acesso <a href="?r=caduser">click aqui</a></span>
      </form>

