<?php

defined( '_JEXEC' ) or die( 'Restricted access' );

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;

JHtml::_('bootstrap.framework');

HTMLHelper::_('bootstrap.loadCss', true, $this->direction);

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
	<head>
		<jdoc:include type="metas" />
		<jdoc:include type="styles" />
		<jdoc:include type="scripts" />
		<!-- Declarations of Scripts and Stylesheets to be used -->
		<?php

		$document = JFactory::getDocument();

		$document->addScript('/media/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
	</head>
	<body>
		<nav class="navbar navbar-expand-md navbar-light bg-light mb-4">
			<a class="navbar-brand" href="#"><img class="img-thumbnail" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/1.jpg" alt="Profile Image" id="navbar-img"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSmallContent" aria-controls="navbarSmallContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
		<div class="container-fluid mb-3">
			<div class="row">
				<div class="col-md-2 pt-4">
					<!-- Left Sidebar -->
					<jdoc:include type="modules" name="breadcrumbs" style="default" />
				</div>
				<div class="col-md-8 comment-content" custom-param="<?php echo htmlspecialchars(Factory::getApplication()->get('sitename'), ENT_QUOTES, 'UTF-8') ?>">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
					<!-- Designing a comment section -->
					<div class="media p-3">
						<!-- Make sure profile image at top-left of the comment, because it looks cool :) -->
						<!-- img-thumbnail class to give it the border which looks kind of nice with the theme of comments -->
						<img class="align-self-start mr-3 img-thumbnail profile-img" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/1.jpg" alt="Profile Image">
						<div class="media-body">
							<h5>Comment Author 1</h5>
							<p>Comment Content, More content, just endless content. Now for some lorem ipsum text. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<!-- Bring in a nested comment -->
							<div class="media mt-4 p-3">
								<img class="align-self-start mr-3 img-thumbnail profile-img" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/2.jpeg" alt="Profile Image">
								<div class="media-body">
									<h5>Comment Author 2</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>
							<!-- Another nest comment -->
							<div class="media mt-4 p-3">
								<img class="align-self-start mr-3 img-thumbnail profile-img" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/3.jpeg" alt="Profile Image">
								<div class="media-body">
									<h5>Comment Author 3</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>
						</div>
					</div>
					<!-- New comment -->
					<div class="media p-3">
						<img class="align-self-start mr-3 img-thumbnail profile-img" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/4.jpg" alt="Profile Image">
						<div class="media-body">
							<h5>Comment Author 4</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
				</div>
				<div class="col-md-2 pt-4">
					<jdoc:include type="modules" name="sidebar-right" style="default" />
				</div>
			</div>
		</div>
		<!-- Footer -->
		<section id="footer">
			<div class="container">
				<div class="row text-center text-xs-center text-sm-left text-md-left pt-5">
					<div class="col-xs-12 col-sm-4 col-md-4">
						<h5>Quick links</h5>
						<ul class="list-unstyled quick-links">
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<h5>Quick links</h5>
						<ul class="list-unstyled quick-links">
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<h5>Quick links</h5>
						<ul class="list-unstyled quick-links">
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer -->
	</body>
</html>