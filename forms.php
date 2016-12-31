<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta name="description" content="Bootstrap Demo">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>Bootstrap Demo</title>
	<link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" href="style/mystyle.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,700|Droid+Sans' rel='stylesheet' type='text/css'>
	<script src="jquery-1.8.3.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>
	<!--div.editable-->
	<script>	tinymce.init({
				selector: '',
				inline: true,
				plugins: [
				    'advlist autolink lists link image charmap print preview anchor',
				    'searchreplace visualblocks code fullscreen',
				    'insertdatetime media table contextmenu paste', 'save code'
				],
				toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | save code charmap'
});
  	</script>
</head>

<body>
	<div class="hero cf">
		<img class="img-responsive" src="photos/hero.jpg" alt="">
	
		<div class="tagLine bot"><p></p></div>
		<div class="tagLine right1"><p></p></div>
		<div class="tagLine right2"><p></p></div>
	</div>

	<div id class="logo cf"><a href="/">
		<img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=300%C3%97175&w=300&h=175"></a>
	</div>
<nav role="navigation" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        	 <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">About Me</a></li>
                <li><a href="#">Themes</a></li>
                <li><a href="#">Map + Directions</a></li>
                <li><a href="#">Gallery</a></li>
            </ul>
        </div>
    </div>
</nav>
		
		
		<div class="cta">
				<h3><a href="forms.php">Contact Me</a><a href="themes.html">Visit Themes</a></h3>
			</div>	
</header>
<div class="container-fluid">			
	
		<div class="row odd content">
			<div class="col-lg-12 editable">
			<h1>Forms <strong>Forms </strong>Forms.<strong>.</strong>.</h1>
			</div>
		</div>
			<div class="row odd content">
			
			</div>
				<div class="row even content">
				</div>





		<footer>
		<div class="row">

			<div class="col-lg-12">
			<p>Footer</p>
			</div>

		</div>
		</footer>
		
		
</div>
</body>
</html>
