<?php
	include_once('header.php');
	include_once('cliente.php');
 ?>
		<div class="row">
	  	<div class="text-center col-xs-6 col-md-12">
	    	<h4>Cadastro de clientes</h2>
			</div>
		</div>
    <div class="row">
			<div class="col-xs-12 col-md-offset-2 col-md-8">
        <form class="form" action="inclui-cliente.php" method="POST">
          <div class="row">
						<div class="input-group col-xs-12 col-md-offset-2 col-md-4">
					    <div class="input-group-addon">
					      <i class="glyphicon glyphicon-user"></i>
					    </div>
							<input class="form-control" name="nome" type="text" placeholder="Nome" required>
            </div>
          </div>
				</br>
          <div class="row">
						<div class="input-group col-xs-12 col-md-offset-2 col-md-3">
					    <div class="input-group-addon">
					      <i class="glyphicon glyphicon-envelope"></i>
					    </div>
							<input class="form-control" name="email" type="email" placeholder="Email" required>
            </div>
          </div>
				</br>
          <div class="row">
						<div class="input-group col-xs-12 col-md-offset-2 col-md-3">
							<div class="input-group-addon">
								<i class="glyphicon glyphicon-lock"></i>
							</div>
								<input class="form-control" name="senha" type="password" placeholder="Senha" required>
						</div>
          </div>
				</br>
					<div class="row">
						<div class="input-group col-xs-8 col-md-offset-2 col-md-6">
							<div class="input-group-addon">
								<i class="glyphicon glyphicon-tags"></i>
							</div>
								<input class="form-control" name="rua" type="text" placeholder="Rua" required>
						</div>
            <div class="col-xs-2 col-md-offset-8 col-md-2">
              <input class="form-control" name="numero" type="number" placeholder="Número" required>
            </div>
						<div class="col-xs-8 col-md-offset-2 col-md-6">
							<input class="form-control" name="complemento" type="text" placeholder="Complemento" required>
						</div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-offset-2 col-md-4">
              <input class="form-control" name="bairro" type="text" placeholder="Bairro" required>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-offset-2 col-md-4">
              <input class="form-control" name="cep" type="number" placeholder="CEP" required>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-offset-2 col-md-4">
              <input class="form-control" name="telefone" type="number" placeholder="Telefone" required>
            </div>
          </div>
					<div class="row">
            <div class="col-xs-12 col-md-offset-2 col-md-4">
						</br>
							<input class="btn btn-danger" type="reset" value="Limpar">
		          <input class="btn btn-primary" type="submit" value="Salvar">
            </div>
          </div>

        </form>
      </div>
    </div>
<?php
  include_once('footer.php');
?>
