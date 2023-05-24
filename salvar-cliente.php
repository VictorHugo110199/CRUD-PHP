<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$nome = $_POST["nome"];
			$email = $_POST["email"];

			$sql = "INSERT INTO clientes (nome, email) VALUES ('{$nome}', '{$email}')";

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Cadastrado com sucesso');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else {
				print "<script>alert('Não foi possivel cadastrar cliente');</script>";
				print "<script>location.href=?page=listar;</script>";
			}
			break;

		case 'editar':
			$nome = $_POST["nome"];
			$email = $_POST["email"];

			$sql = "UPDATE clientes SET nome = '{$nome}', email = '{$email}'
					WHERE
						id =".$_REQUEST["id"];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Edição com sucesso');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else {
				print "<script>alert('Não foi possivel editar cliente');</script>";
				print "<script>location.href=?page=listar;</script>";
			}
			break;

		case 'excluir':

			$sql = "DELETE FROM clientes WHERE id=".$_REQUEST["id"];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Excluido com sucesso');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else {
				print "<script>alert('Não foi possivel excluir cliente');</script>";
				print "<script>location.href=?page=listar;</script>";
			}
			break;
	}
