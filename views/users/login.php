<div class="card" style="width: 18rem; margin-top: 80px;">
  <div class="card-body">
    <h5 class="card-title">Sign In</h5>
    <div class="card-form">
    	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    		<div class="form-group">
    			<label>Email</label>
    			<input type="text" name="email" class="form-control"></input>
    		</div>
    		<div class="form-group">
    			<label>Password</label>
    			<input type="password" name="password" class="form-control" />
    		</div>
    		<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
    	</form>
    </div>
  </div>
</div>
