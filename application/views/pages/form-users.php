    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

			<div class="col-md-12">
				<form action="<?= base_url() ?>users/update/<?= $game["id"] ?>" method="post">
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?= $game["name"] ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="description">Description</label>
							<textarea name="description" id="description" rows="5" class="form-control"><?= $game["description"] ?></textarea>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="category">Category</label>
							<input type="text" class="form-control" name="category" id="category" placeholder="Category" value="<?= $game["category"] ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="price">Price</label>
							<input type="text" class="form-control" name="price" id="price" placeholder="Price" value="<?= $game["price"] ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="developer">Developer</label>
							<input type="text" class="form-control" name="developer" id="developer" placeholder="Developer" value="<?= $game["developer"] ?>">
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
