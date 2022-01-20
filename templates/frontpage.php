<?php include 'inc/header.php'?>

    <?php foreach($listings as $list): ?>
      <div class="row marketing">
        <div class="col-md-10">
          <h4><?php echo $list->title." (".$list->location.")"; ?></h4>
          <p><?php echo $list->description; ?></p>
        </div>
        <div class="col-md-2">
            <a class="btn btn-primary" href="#">View</a>
        </div>
    </div>
    <?php endforeach; ?>
 


<?php include 'inc/footer.php'?>
