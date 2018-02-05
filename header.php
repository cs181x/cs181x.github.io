<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?ver=4.9.2">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/style.css">
	<title>Web Skill Reference</title>
</head>
<body>
<div class="container-fluid">
	<header class="page-header fixed-top">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<button class="nav-item btn btn-outline-light" type="button" data-toggle="collapse" data-target="#index-<?php echo $skill; ?>" aria-expanded="false" aria-controls="index-<?php echo $skill; ?>"><i class="fa fa-bars" aria-hidden="true"></i></button>
			<div class="navbar-brand dropdown">
				<div class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php echo ($skill == null ? "Reference" : $skills[$skill]); ?>
				</div>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<?php foreach ($skills as $key => $val) { ?>
					<a class="dropdown-item" href="?skill=<?php echo $key; ?>"><?php echo $val; ?></a>
					<?php } ?>
				</div>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</nav>
	</header>
	<div class="page-content row flex-xl-nowrap">
		<div class="collapse col-12 col-md-3 col-xl-3 sidebar" id="index-<?php echo $skill; ?>">
		<?php
			if (is_array($index)) {
				echo '<ul class="index-list">';
				foreach ($index as $key => $val) {
					if (is_array($index[$key])) {
						echo '<ul>';
						foreach ($index[$key] as $key2 => $val2) {
							echo "<li data-file='$val2'>$key2</li>";
						}
						echo '</ul>';
					} else {
						echo "<li data-file='$val'>$key</li>";
					}
				}
				echo '</ul>';
			}
		?>
		</div>
		<div id="note" class="col-12 col-md-9 col-xl-9 py-md-3 pl-md-5"></div>