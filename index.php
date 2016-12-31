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
                <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#">Parts<b class="caret"></b></a>
                	<ul role="menu" class="dropdown-menu">
                		<li><a href="#">Navs</li></a>
                		<li><a href="#">Photo Galleries</li></a>
                		<li><a href="#">Directions</li></a>
                	</ul></li>
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
			<h1>Bootstrap  <strong>Classes</strong></h1>
			</div>
		</div>
			<div class="row odd content">
					<div class="col-md-4 editable">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
					</div>

					<div class="col-md-4 editable">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
					<img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=325×225&w=325&h=225">
					</div>

					<div class="col-md-4 editable">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
					</div>
			</div>
				<div class="row even content">

					<div class="col-md-4 editable">
					<h1>Title-h1</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
						<ul>
							<li>quis nostrud exercitation ullamco</li>
							<li>laboris nisi ut aliquip ex ea commodo</li>
							<li>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</li>
							<li>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</li>
							<li>	proident, sunt in culp</li>
							<li>a qui officia deserunt mollit anim id est laborum.</li>
						</ul>
						<p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>	
					</div>

					<div class="col-md-4 editable">
					<h2>Title-h2</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
					eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad  </p>
					</div>

					<div class="col-md-4 editable">
					<h3>H3</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
					eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad  </p>
					</div>
				</div>	


				<div class="row content odd ">
					<div class="col-md-6">
						<h2>Hello</h2>
						<img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=325×225&w=825&h=425">
					</div>

					<div class="col-md-6">
						<h3>Hello</h3>
						<p>Hello</p>
						<p>Hello</p>
						<p>Hello</p>
						<p>Hello</p>
						<p>Hello</p>
						<p>Hello</p>
						<p>Hello</p>
						<p>Hello</p>
						<p>Hello</p>
						<p>Hello</p>

					</div>
				</div>	



		<footer>
		<div class="row">
			<div class="col-lg-12">
			<p>Footer</p>

			</div>
		</div>
				<!--<script>
					$('#small-nav-container').click(function(){
						$('nav ul, #small-nav-container p').toggleClass('close-close');
					});
				</script>-->
		</footer>
		
		
</div>
</body>
</html>
