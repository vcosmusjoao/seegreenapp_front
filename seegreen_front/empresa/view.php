<?php require "../_helpers/index.php";
echo siteHeader("Ver Empresa");
require("../_config/connection.php");

require("../dao/empresa.php");

$empresaDAO = new Empresa();

$empresa = false;
$error = false;

if (!$_GET || !$_GET["id"]) {
    header('Location: index.php?message=Id da Empresa não informado!');
    die();
}

$idEmpresa = $_GET["id"];

try {
    $empresa = $empresaDAO->getById($idEmpresa);
} catch (Exception $e) {
    echo "Id: ".$idEmpresa."<br>";
    $error = $e->getMessage();
}

if (!$empresa || $error) {
    header('Location: index.php?message=Erro ao recuperar dados da empresa!');
    die();
}


?>


    <section class="container mt-5 mb-5">
        <div class="row mb-3">
            <div class="col">
                <h1>Visualizar Empresa</h1>
            </div>
        </div>

        <div class="mb-3">
            <h3>Empresa</h3>
            <p><?= $nomeEmpresa["nomeEmpresa"] ?></p>
        </div>
        
        <div class="mb-3">
            <h3>CNPJ</h3>
            <p><?= $cnpj["cnpj"] ?></p>
        </div>
        <a href="index.php" class="btn btn-primary">Voltar</a>
    </section>

<?php require "../_partials/footer.php"; ?>