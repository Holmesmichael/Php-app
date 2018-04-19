<div class="card" style="width: 18rem; margin-top: 80px;">
  <div class="card-body">
    <h5 class="card-title">Something to share</h5>
    <div class="card-form">
    	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    		<div class="form-group">
    			<label>Share Title</label>
    			<input type="text" name="title" class="form-control" />
    		</div>
    		<div class="form-group">
    			<label>Body</label>
    			<textarea name="body" class="form-control"></textarea>
    		</div>
    		<div class="form-group">
    			<label>Link</label>
    			<input type="text" name="link" class="form-control" />
    		</div>
    		<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
   			<a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
    	</form>
    </div>
  </div>
</div>

