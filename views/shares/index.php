
  <div class="container">
  <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
       <div class="shares">
        <?php if(isset($_SESSION['is_logged_in'])) : ?>
        <a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share it up</a>
      <?php endif; ?>
        <?php foreach($viewmodel as $item) : ?>
            <div class="well">
              <h3><?php echo $item['title']; ?></h3>
              <small><?php echo $item['create_date']; ?></small>
              <hr />
              <p><?php echo $item['body']; ?></p>
              <br />
              <a class="btn btn-info" href="<?php echo $item['link']; ?>" target="_blank">Go to Website</a>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
        </div>
        <div class="col-md-3">
        </div>
      </div>
    </div>
