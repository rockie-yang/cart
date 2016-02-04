<html>
 <head>
  <title>PHP Test</title>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
 </head>
 <body>
 <div class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <!-- <div class="navbar navbar-default navbar-static-bottom"> -->
            <a href="#" class="navbar-brand">Snow River</a>
            <!-- data-target=".navHeaderCollapse" is correlated with class name in the following div-->
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse navHeaderCollapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social Media<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">twitter</a></li>
                            <li><a href="#">facebook</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        {{catalog}}
    <?php
		//Variables for connecting to your database.
		//These variable values come from your hosting account.
		$hostname = "packit.db.12382201.hostedresource.com";
		$username = "packit";
		$dbname = "packit";

		//These variable values need to be changed by you before deploying
		$password = "StSoNoOt!17";

		//Connecting to your database
		$link = mysql_connect($hostname, $username, $password);
		mysql_set_charset('utf8', $link);
		mysql_select_db($dbname);

		//Fetching from your database table.
		$query = "SELECT * FROM items";
		$result = mysql_query($query);

		if ($result) {
		    while($row = mysql_fetch_array($result)) {
		        $name = $row["name"];
		        $description = $row["description"];
		        echo '<div class="col-lg-3 col-md-3 col-xs-4 thumb">';
		        echo '<a class="thumbnail" href="#">';
		        echo '<img class="img-responsive" src="img/'.$name.'" width="320" height="240" alt="" style="display:block;">';
		        echo '<p>'.$description.'</p>';
                echo '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>';
		        echo '</a></div>';
		    }
		}
	?>

</div>
    
            
         
        
    <div class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            <div class="navbar-text pull-left">Powered by</div>
            <a class="btn btn-danger navbar-btn pull-right">Subscriber</a>
        </div>
    </div>


 </body>
</html>
