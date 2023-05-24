<h1>Listar Clientes</h1>
<?php
	$sql = "SELECT * FROM clientes";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<table class='table table-hover table-striped table-bordered'>";
			print "<tr>";
			print "<th>Nome</th>";
			print "<th>E-mail</th>";
			print "<th>Ações</th>";
			print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->nome."</td>";
			print "<td>".$row->email."</td>";
			print "<td>
					<button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>

					<button onclick=\"if(confirm('Tem certeza?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Exluir</button>
					</td>";
			print "</tr>";
		}
		print "</table>";
	}else {
		print "<p class='alert alert-danger'> Não encontrou nenhum cliente!</p>";
	}
?>