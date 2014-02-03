<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/normalize.css" rel="stylesheet" media="screen">
	<link href="css/core.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Racing+Sans+One' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js" type="text/javascript"></script>
	<![endif]-->
	<script src="js/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="js/core.js" type="text/javascript"></script>
    <?php if (!empty($meta)) echo $meta; ?>
    <title><?php echo $title; ?> | MikeOram | Web Developer</title>
</head>
<body>
    <div id="content">
        <header>
            <nav>
                <ul>
                    <li<?php echo ($title == 'Home' ? ' class="active"' : ''); ?>><a href="index.php">Home</a></li>
                    <li<?php echo ($title == 'About' ? ' class="active"' : ''); ?>><a href="about.php">About</a></li>
                    <li<?php echo ($title == 'Portfolio' ? ' class="active"' : ''); ?>><a href="portfolio.php">Portfolio</a></li>
                    <li<?php echo ($title == 'Skillset' ? ' class="active"' : ''); ?>><a href="skillset.php">Skillset</a></li>
                    <li<?php echo ($title == 'Contact' ? ' class="active"' : ''); ?>><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <div class="container">
                <h1>MikeOram</h1>
                <h2>Web Developer</h2>