<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Tanner's Totes Admin</title>
  <meta name="description" content="HTML5">
  <meta name="author" content="PayWeb">
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.2.1/pure-min.css">
  <link rel="stylesheet" href="http://localhost/tanners_totes/css/admin.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>

<div class="wrapper">
  <?php $this->load->view('admin_sidebar'); //selection here ?>
  <div id="content">
    <?php $this->load->view($main_content); ?>
  </div>
</div>
	
  <script src="http://localhost/tanners_totes/js/scripts.js"></script>
</body>
</html>