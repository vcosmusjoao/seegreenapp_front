<?php  
	require("../_config/connection.php");
    require("../dao/empresa.php");
    $empresaDAO = new Empresa();
    $error = false;

    if(!$_GET || !$_GET["id"]){
        header('Location: index.php?message=Id do empresa não informado!');
        die();
    }

    $idEmpresa = $_GET["id"];

    try {
        $result = $empresaDAO->delete($idEmpresa);
    } catch (Exception $e) {
        $error = $e->getMessage();
    }

    $message = ($result && !$error) ? "Empresa excluida com sucesso." : "Erro ao excluir a empresa.";
    header("Location: index.php?message=$message");
    die();

