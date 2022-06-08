<?php require "../_helpers/index.php";
echo siteHeader("Gerenciar Empresas");
require("../_config/connection.php");
require("../dao/empresa.php");


$message = false;
if ($_GET && $_GET["message"]) {
	$message = $_GET["message"];
}
$empresa = new Empresa();
?>
<section class="container mt-5 mb-5">

	<?php if ($message) : ?>
		<div class="alert alert-primary alert-dismissible fade show" role="alert">
			<?= $message ?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	<?php endif; ?>

	<div class="row mb-3">
		<div class="col">
			<h1>Empresas</h1>
		</div>
		<div class="col d-flex justify-content-end align-items-center">
			<a class="btn btn-success" href="add.php">Adicionar</a>
		</div>
	</div>

	<table class="table table-striped table-bordered text-center">
		<thead class="table-dark">
			<tr>
				<th>ID</th>
				<th>Empresa</th>
				<th>Cnpj</th>				
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($empresa->getAll() AS $empresa) : ?>
				<tr>
					<td>
						<?= "#".$empresa->id?>
					</td>
					
					<td>
						<?= $empresa->nomeEmpresa ?>
					</td>
					
					<td>
						<?= $empresa->cnpj ?>
					</td>					
					<td>
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-outline-primary" onclick="confirmDelete(<?= $empresa->id ?>)">
								Excluir
							</button>
							<a href="edit.php?id=<?= $empresa->id ?>" class="btn btn-outline-primary">
								Editar
							</a>
							<a href="view.php?id=<?= $empresa->id ?>" class="btn btn-outline-primary">
								Ver
							</a>
						</div>
					</td>
				</tr>

			<?php endforeach; ?>
		</tbody>
		<tfooter class="table-dark">
			<tr>
				<th>ID</th>
				<th>Empresa</th>
				<th>Cnpj</th>				
				<th>Ações</th>
			</tr>
		</tfooter>
	</table>
</section>

<script>
	const confirmDelete = (idEmpresa) => {
		const response = confirm("Deseja realmente excluir o empresa?")
		if (response) {
			window.location.href = "delete.php?id=" + idEmrpesa
		}
	}
</script>

<?php require("../_partials/footer.php"); ?>