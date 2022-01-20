<?php include_once 'config/init.php' ?>

<?php 

$listing = new Listing;
$template = new Template('templates/frontpage.php');

//if there's a category in the URL set to the var, if not set to null
$category = isset($_GET['category']) ? $_GET['category'] : null;

//if category query listings only with that category
if($category){
    $template->listings = $listing->getByCategory($category);
} 

// if not querly all listings 
else {
    $template->title = 'Latest Listings';
    $template->listings = $listing->getAllListings();
}

$template->categories = $listing->getCategories();
echo $template;

