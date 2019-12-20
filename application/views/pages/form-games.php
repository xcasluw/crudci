    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $title ?></h1>
      </div>

			<div class="col-md-12">

				<?php if(isset($game)) { ?>
					<form action="<?= base_url() ?>games/update/<?= $game["id"] ?>" method="post">
				<?php } else { ?>
					<form action="<?= base_url() ?>games/store" method="post">
				<?php } ?>
				
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?= isset($game["name"]) ? $game["name"] : "" ?>" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="description">Description</label>
							<textarea name="description" id="description" rows="5" class="form-control" required><?= isset($game["description"]) ? $game["description"] : "" ?></textarea>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="category">Category</label>
							<input type="text" class="form-control" name="category" id="category" placeholder="Category" value="<?= isset($game["category"]) ? $game["category"] : "" ?>" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="price">Price</label>
							<input type="text" class="form-control" name="price" id="price" placeholder="Price" value="<?= isset($game["price"]) ? $game["price"] : "" ?>" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="developer">Developer</label>
							<input type="text" class="form-control" name="developer" id="developer" placeholder="Developer" value="<?= isset($game["developer"]) ? $game["developer"] : "" ?>" required>
						</div>
					</div>

					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="<?= base_url() ?>dashboard" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>
