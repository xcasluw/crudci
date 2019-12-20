<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"><?= $title ?></h1>
		<div class="btn-group mr-2">
			<a href="<?= base_url() ?>games/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Game</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Price</th>
					<th>Category</th>
					<th>Developer</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($games as $game) : ?>
					<tr>
						<td><?= $game["id"] ?></td>
						<td><?= $game["name"] ?></td>
						<td><?= reais($game["price"]) ?></td>
						<td><?= $game["category"] ?></td>
						<td><?= $game["developer"] ?></td>
						<td>
							<a href="<?= base_url() ?>games/edit/<?= $game["id"] ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
							<a href="javascript:goDelete(<?= $game['id'] ?>)" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</main>
  
<script>
	function goDelete(id) {
		var myUrl = 'games/edit/'+id;
		if(confirm("Deseja apagar este registro?")) {
			window.location.href = 'games/destroy/'+id;
		} else {
			alert("Registro não alterado");
			return false;
		}
	}
</script>
