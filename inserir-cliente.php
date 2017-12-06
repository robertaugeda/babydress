<?php
	include_once('header.php');
	include_once('cliente.php');
 ?>
		<div class="row">
	  	<div class="text-center col-xs-12 col-md-12">
	    	<h4>Cadastro de clientes</h2>
					<div class="text-center col-xs-12 col-md-2">
		        <ul class="nav nav-stacked">
		  				<li><a href="inserir-cliente.php">Cadastrar clientes</a></li>
		          <li><a href="index.php">Consultar clientes</a></li>
		  			</ul>
		      </div>
					<div class="main col-xs-12  col-md-8">
		        <form class="form" action="inclui-cliente.php" method="POST">
		          <div class="row">
								<div class="input-group col-xs-12 col-md-4">
							    <div class="input-group-addon">
							      <i class="glyphicon glyphicon-user"></i>
							    </div>
									<input class="form-control" name="nome" type="text" placeholder="Nome" required>
		            </div>
							</br>
								<div class="input-group col-xs-12 col-md-8">
							    <div class="input-group-addon">
							      <i class="glyphicon glyphicon-envelope"></i>
							    </div>
									<input class="form-control" name="email" type="email" placeholder="Email" required>
									<div class="input-group-addon">
										<i class="glyphicon glyphicon-lock"></i>
									</div>
										<input class="form-control" name="senha" type="password" placeholder="Senha" required>
		            </div>
							</br>
								<div class="input-group col-xs-12 col-md-8">
									<div class="input-group-addon">
										<i class="glyphicon glyphicon-tags"></i>
									</div>
									<input class="form-control" name="rua" type="text" placeholder="Rua" required>
									<div class="input-group-addon">
										<i class="glyphicon glyphicon-tags"></i>
									</div>
										<input class="form-control" name="numero" type="number" placeholder="Número" required>
								</div>
							</br>
								<div class="input-group col-xs-12 col-md-8">
									<div class="input-group-addon">
										<i class="glyphicon glyphicon-tags"></i>
									</div>
									<input class="form-control" name="complemento" type="text" placeholder="Complemento" required>
									<div class="input-group-addon">
										<i class="glyphicon glyphicon-tags"></i>
									</div>
										<input class="form-control" name="bairro" type="text" placeholder="Bairro" required>
								</div>
							</br>
								<div class="input-group col-xs-12 col-md-4">
									<div class="input-group-addon">
										<i class="glyphicon glyphicon-map-marker"></i>
									</div>
									<input class="form-control" name="cep" type="number" placeholder="CEP" required>
								</div>
							</br>
								<div class="input-group col-xs-12 col-md-4">
									<div class="input-group-addon">
										<i class="glyphicon glyphicon-earphone"></i>
									</div>
									<input class="form-control" name="telefone" type="number" placeholder="Telefone" required>
								</div>
							</br>
									<input class="btn btn-danger" type="reset" value="Limpar">
				          <input class="btn btn-primary" type="submit" value="Salvar">
		          </div>
		        </form>
		      </div>
				</div>
    	</div>
<?php
  include_once('footer.php');
?>
