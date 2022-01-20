<?php include 'inc/header.php'?>

    <div class="jumbotron">
        <h1>Find a listing: </h1>
        <form>
            <select name="category" class="form-control">
                <option value="0"> Choose Category </option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </form>
    </div>

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
