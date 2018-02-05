<?php 
	$skills = [
		"html" => "HTML",
		"css" => "CSS",
		"bootstrap" => "Bootstrap",
		"sass" => "SASS",
		"javascript" => "JavaScript",
		"angular" => "Angular",
		"jquery" => "jQuery",
		"react" => "React",
		"php" => "PHP",
		"sql" => "SQL",
		"wordpress" => "WordPress",
		"git" => "Git",
		"photoshop" => "PhotoShop"
	];
	$skill = null;
	if (isset($_GET["skill"]) && array_key_exists($_GET["skill"], $skills)) {
		$skill = $_GET["skill"];
	}
?>