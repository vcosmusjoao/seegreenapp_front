<?php require "../_helpers/index.php";
echo siteHeader("Adicionar Empresa");
require("../_config/connection.php");
require("../dao/empresa.php");

$empresaDAO = new Empresa();

$result = false;
$error = false;
if ($_POST) {
    try {
        $nomeEmpresa = $_POST["p_nomeEmpresa"];
        $cnpj = $_POST["p_cnpj"];
        
        $result = $empresaDAO->insert( $nomeEmpresa, $cnpj);
         if ($result) {
            header('Location: index.php?message=Empresa inserida com sucesso!');
            die();
        } 
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

?>

<section class="container mt-5 mb-5">

    <?php if ($_POST && (!$result || $error)) : ?>
        <p>
            Erro ao salvar a empresa.
            <?= $error ? $error : "Erro desconhecido." ?>
        </p>
    <?php endif; ?>

    <div class="row mb-3">
        <div class="col">
            <h1>Adicionar Empresa</h1>
        </div>
    </div>

    <form action="" method="post">
        <div class="row">

           
        </div>
        <div class="row mb-3">
            <div class="col-9">
                <label for="p_nomeEmpresa" class="form-label">Nome</label>
                <input type="text" class="form-control" id="p_nomeEmpresa" name="p_nomeEmpresa" />
            </div>
            <div class="col-3">
                <label for="p_cnpj" class="form-label">CNPJ</label>
                <input type="text" class="form-control" id="p_cnpj" name="p_cnpj" />
            </div>
        </div>
        
        
        <div class="row">
            <div class="col">
                <a href="index.php" class="btn btn-light">Cancelar</a>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>

    </form>
</section>



<?php require "../_partials/footer.php"; ?>