<?php

	include_once('header.php');
	include_once('cliente.php');
 ?>
		<div class="row">
	  	<div class="text-center col-xs-12 col-md-12">
	    	<h4>Consulta clientes</h2>
				<?php if (isset($_GET['mensagem'])){
					if ($_GET['mensagem']==TRUE){
						echo '<div class="alert alert-success">Ação concluída com sucesso!</div>';
					}else{
						echo '<div class="alert alert-danger">Ocorreu um erro ao executar a ação.</div>';
					}
				} ?>
				<div class="col-xs-12 col-md-2">
	        <ul class="nav nav-stacked">
	  				<li><a href="inserir-cliente.php">Cadastrar clientes</a></li>
	          <li><a href="index.php">Consultar clientes</a></li>
	  			</ul>
	      </div>
				<div class="main col-xs-12 col-md-8">
					<table class="table">
						<thead>
							<th>ID</th>
							<th>Nome</th>
							<th>Email</th>
							<th>Rua</th>
							<th>Bairro</th>
							<th>Numero</th>
							<th>CEP</th>
							<th>Telefone</th>
						</thead>
						<tbody>
							<?php
								$cliente = new Cliente();
								$clientes = $cliente->lista();



								if ($clientes != FALSE){
									$max =  count($clientes);
									for ($i=0;$i<$max;$i++){
										echo '<tr>';
										echo '	<td>'.$clientes[$i]->id.'</td>';
										echo '	<td>'.$clientes[$i]->nome.'</td>';
										echo '	<td>'.$clientes[$i]->email.'</td>';
										echo '	<td>'.$clientes[$i]->rua.'</td>';
										echo '	<td>'.$clientes[$i]->bairro.'</td>';
										echo '	<td>'.$clientes[$i]->numero.'</td>';
										echo '	<td>'.$clientes[$i]->cep.'</td>';
										echo '	<td>'.$clientes[$i]->telefone.'</td>';
										echo '	<td><a href="remove-cliente.php?id='.$clientes[$i]->id.'"><i class="glyphicon glyphicon-trash"></i></a></td>';
										echo '</tr>';
									}
								}else{
									echo '<p>Não há clientes cadastrados</p>';
								}
						 ?>
						</tbody>
					</table>
				</div>
    	</div>
		</div>
<?php
	include_once('footer.php');
 ?>
