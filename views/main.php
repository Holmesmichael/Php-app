<html>
<head>
		<title>Share Master</title>
		<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css"> 
		<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
	      <a class="navbar-brand" href="#">ShareMaster</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>

	      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
	        <ul class="navbar-nav mr-auto">
	          <li>
	            <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
	          </li>
	          <li>
	            <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
	          </li>
	        </ul>

	        <ul class="navbar-nav navbar-right">
	          <li>
	            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Log In</a>
	          </li>
	          <li>
	            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Sign Up</a>
	          </li>
	        </ul>
	      </div>
    </nav>

    <div class="container">

      <div class="row"
      	<?php require($view); ?>
      </div>

    </div>
</body>
</html>

