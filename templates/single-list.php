<?php include 'inc/header.php'; ?>
<div>
    <h2 class = "page-header"><?php echo $listing->title; ?><h2>
    <small> Posted By <?php echo $listing->contact_user; ?> on <?php echo $listing->post_date; ?> </small>
    <hr>
    <p class="lead"> <?php echo $listing->description; ?> </p>
    <ul class="list-group">
        <li class="list-group-item small"><strong>Contact Email: </strong><a href="mailto:<?php echo $listing->contact_email; ?>"><?php echo $listing->contact_email; ?></a> </li>

    </ul>
</div>


<?php include 'inc/footer.php'; ?>
