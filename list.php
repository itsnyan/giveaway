<?php include_once 'config/init.php' ?>

<?php 

$listing = new Listing;
$template = new Template('templates/single-list.php');

//if there's a category param in the URL set to the var, if not set to null
$list_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->listing = $listing->getListing($list_id);

echo $template;



