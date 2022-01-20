<?php include 'inc/header.php'?>

    <div class="jumbotron">
        <h2>Find a post by category </h2>
        <form method="GET" action="index.php">
            <select name="category" class="form-control">
                <option value="0"> Choose Category </option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <input type="submit" class="btn btn-sm btn-primary" value="find"> 
        </form>
    </div>
    <h3 class="text-muted"> <?php echo $title ?> </h3> 
    <?php foreach($listings as $list): ?>
      <div class="row marketing">
        <div class="col-md-10">
          <h4><?php echo $list->title." (".$list->location.")"; ?></h4>
          <p><?php echo $list->description; ?></p>
        </div>
        <div class="col-md-2">
            <a class="btn btn-primary" href="list.php?id=<?php echo $list->id; ?> ">View</a>
        </div>
    </div>
    <?php endforeach; ?>
 


<?php include 'inc/footer.php'?>
