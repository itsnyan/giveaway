<?php include_once 'config/init.php' ?>

<?php 

$list_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->listing = $listing->getListing($list_id);

echo $template;



