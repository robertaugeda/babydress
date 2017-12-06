<?php
	include_once('header.php');
	include_once('cliente.php');

	$cliente = new Cliente();

	if (!isset($_GET['id'])){
		header("Location: http://localhost/index.php?mensagem=FALSE");
		die();
	}else {
	$cliente = $cliente->procurar($_GET['id']);
	}
	if ($cliente == FALSE){
		header("Location: http://localhost/index.php?mensagem=FALSE");
		die();
	} else{
 ?>
		<div class="row">
	  	<div class="text-center col-xs-12 col-md-12">
	    	<h4>Atualização de clientes</h2>
					<div class="text-center col-xs-12 col-md-2">
		        <ul class="nav nav-stacked">
		  				<li><a href="inserir-cliente.php">Cadastrar clientes</a></li>
		          <li><a href="index.php">Consultar clientes</a></li>
		  			</ul>
		      </div>
					<div class="main col-xs-12  col-md-8">
		        <form class="form" action="altera-cliente.php" method="POST">
		          <div class="row">
								<div class="input-group col-xs-12 col-md-4">
							    <div class="input-group-addon">
							      <i class="glyphicon glyphicon-user"></i>
							    </div>
									<input class="form-control" name="id" type="hidden" value="<?php echo $cliente['id']; ?>">
									<input class="form-control" name="nome" type="text" value="<?php echo $cliente['nome']; ?>" required>
		            </div>
							</br>
								<div class="input-group col-xs-12 col-md-8">
							    <div class="input-group-addon">
							      <i class="glyphicon glyphicon-envelope"></i>
							    </div>
									<input class="form-control" name="email" type="email" value="<?php echo $cliente['email']; ?>" required>
									<div class="input-group-addon">
										<i class="glyphicon glyphicon-lock"></i>
									</div>
										<input class="form-control" name="senha" type="password" value="<?php echo $cliente['senha']; ?>" required>
		            </div>
							</br>
								<div class="input-group col-xs-12 col-md-8">
									<div class="input-group-addon">
										<i class="glyphicon glyphicon-tags"></i>
									</div>
									<input class="form-control" name="rua" type="text" value="<?php echo $cliente['rua']; ?>" required>
									<div class="input-group-addon">
										<i class="glyphicon glyphicon-tags"></i>
									</div>
										<input class="form-control" name="numero" type="number" value="<?php echo $cliente['numero']; ?>" required>
								</div>
							</br>
								<div class="input-group col-xs-12 col-md-8">
									<div class="input-group-addon">
										<i class="glyphicon glyphicon-tags"></i>
									</div>
									<input class="form-control" name="complemento" type="text" value="<?php echo $cliente['complemento']; ?>" required>
									<div class="input-group-addon">
										<i class="glyphicon glyphicon-tags"></i>
									</div>
										<input class="form-control" name="bairro" type="text" value="<?php echo $cliente['bairro']; ?>" required>
								</div>
							</br>
								<div class="input-group col-xs-12 col-md-4">
									<div class="input-group-addon">
										<i class="glyphicon glyphicon-map-marker"></i>
									</div>
									<input class="form-control" name="cep" type="number" value="<?php echo $cliente['cep']; ?>" required>
								</div>
							</br>
								<div class="input-group col-xs-12 col-md-4">
									<div class="input-group-addon">
										<i class="glyphicon glyphicon-earphone"></i>
									</div>
									<input class="form-control" name="telefone" type="number" value="<?php echo $cliente['telefone']; ?>" required>
								</div>
							</br>
									<a class="btn btn-danger" href="index.php">Cancelar</a>
				          <input class="btn btn-primary" type="submit" value="Salvar">
		          </div>
		        </form>
		      </div>
				</div>
    	</div>
<?php
	}
  include_once('footer.php');
?>
