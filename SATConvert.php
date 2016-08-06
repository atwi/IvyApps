
<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->  <title>SAT Score Converter: New to Old SAT Calculator</title>
<body>
<style>
.nav > li > a:hover{
    background-color:#FCC;
}
</style>
<nav class="navbar navbar-default navbar-fixed-top" style="color: #316E5A; border-width: 0 0 0;
    background-color: #FFFFFF;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img src="/images/Ivy_League_logo_v11.svg" style="max-height:100%" draggable="false"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
                <li><a href="/masthead.php">About IvyApps</a></li>
            </ul>
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success" style="color: #FFFFFF; /*background-color: #115740;*/ ">Sign in</button>
          </form>
          </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="background-image: url(/images/IvyApps_Background.jpg); background-size: cover;">
      <div class="container">
      	<br>
        <center><h1 style="color:white">SAT Score Converter</h1></center>
        <center><h2 style="color:white">Convert your new SAT score to its old SAT equivalent.</h2></center>      
      </div>
    </div>

<div class="container">
<hr>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">SAT Score Converter (New SAT to Old SAT Score)</h3>
  </div>
  <div class="panel-body">
    <table width="100%" border="0">
  <tr>
    <th>New SAT Score</th>
    <th>Old SAT Equivalent</th>
  </tr>
  <tr>
    <td><input id="box1" type="text" placeholder="(Out of 1600)" style="width:40%" class="form-control" oninput="calculate()" /></td>
    <td><input class="form-control" placeholder="(Out of 2400)" type="text" style="width:40%" id="result"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
</div>


<hr>
<p class="lead">
In early 2016, the College Board revamped and converted the SAT to a completely new format, changing not only the content of the test but the scoring system as well. 
</p>
<p class="lead">
Because the content and focus of the test questions was changed along with the scoring system, the conversion chart below isn’t an exact number. Despite that, the chart below gives a good idea of what a score on the new SAT means in context of the old SAT, and is useful for students looking for an idea of what new SAT score they need to get into top universities. 
</p>
<p class="lead">
While your SAT score is a significant factor in the admissions process, it doesn’t tell the whole story. 
</p>
<p class="lead">
To compare your application to other applications that got into Ivy League colleges, check out <a href="http://ivyapps.org">IvyApps full university applications that got in</a>. IvyApps features full accepted applications from Harvard, Stanford, Yale, and Princeton, and shows you the full picture of the student’s application, from SAT scores to GPA to extracurriculars. 
</p>
<hr>
</body>
</html>
  </div>
</div>
<br>
<!-- Example row of columns -->


<footer class="footer">
	<div class="container">
	<b><p class="text-muted">&copy <a href="http://ivyapps.org">IvyApps</a> 2016. Currently in development.</p><b>
	</div>
</footer></div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<script>
function calculate() {
		var newSAT = document.getElementById('box1').value;
		var oldSAT = document.getElementById('result');	
  		var multiply = 3/2;
		var myResult = newSAT * multiply;
		oldSAT.value = Math.round(myResult/10)*10;
}
</script>
