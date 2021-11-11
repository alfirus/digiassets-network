<!doctype html>
<html lang="en" class="h-100" prefix="og: http://ogp.me/ns#">

<head>
	<?php
	echo MetaHeaders($title, $description);
	echo GoogleAnalytics($pageName);
	?>

	<link href="/assets/vendor/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="/assets/css/style.css" rel="stylesheet">

	<link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico" />
	<title><?php echo $title ?></title>
</head>

<body class="d-flex flex-column h-100">
	<?php require __VIEW__ . "/.parts/page/header.php"; ?>

	<main class="container my-3">
		<div class="my-5">
			<div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<h3>Asset Information:</h3>
						<table class="table table-borderless">
							<tbody>
								<tr>
									<th>
										<h5 class="fw-bold">DigiAsset ID:</h5>
									</th>
									<td>
										<h5 class="text-break"><?php echo $digiAsset->AssetID ?></h5>
									</td>
								</tr>
								<tr>
									<th>
										<h5 class="fw-bold">IPFS CIDs:</h5>
									</th>
									<td>
										<h5><?php echo sizeof($cids) ?></h5>
									</td>
								</tr>
								<tr>
									<th>
										<h5 class="fw-bold">Holders:</h5>
									</th>
									<td>
										<h5 id="asset-n-holders"></h5>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-3 text-center">
						<img src="/assets/img/logo.png" class="img-thumbnail" id="asset-img">
					</div>
				</div>
			</div>
			<div class="mb-3">
				<h3>Asset Metadata:</h3>
				<div class="row justify-content-center" id="asset-meta">
				</div>
			</div>
			<div class="mb-3">
				<h3>Asset Holders:</h3>
				<div class="row justify-content-center">
					<div class="col-md-10">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">Address</th>
									<th scope="col">Quantity</th>
								</tr>
							</thead>
							<tbody id="asset-holders">
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</main>

	<?php require __VIEW__ . "/.parts/page/footer.php"; ?>

	<script src="/assets/vendor/jquery/jquery.js"></script>
	<script src="/assets/vendor/bootstrap/bootstrap.js"></script>
	<script>
		var assetID = '<?php echo $digiAsset->AssetID ?>';
		var ipfs = [
			<?php foreach ($cids as $ipfs) : ?> '<?php echo $ipfs->CID ?>',
			<?php endforeach ?>
		];
	</script>
	<script src="/assets/js/asset.js"></script>
</body>

</html>