
<!DOCTYPE html>
<html>
<head>

<title>Generic Account Checker</title>

<style>
	p, h2, h1 {
		font-family: sans-serif; 
	}
	
	html {
		background: #F0F0F0;
		background-image: url('./bkg.png'); /* Background image from subtlepatterns.com */
	}
	
	body {
		width:550px;
		height:500px;
		margin-left:auto;
		margin-right:auto;
		display:block;
		text-align:center;
		background: white;
		border: 2px solid silver;
		padding: 30px;
    	border-radius: 25px;
	}
	
	#search_box {
		width: 300px;
		height: 50px;
		font-size: 25px;
		text-align: center;
	}
	
	.result{
		background: #FFCCCC;
		padding-bottom: 10px;
	}
	
	#warning {
		color: #D60B0B;
	}
	
	#submit{
		background-color:#44c767;
		display:inline-block;
		cursor:pointer;
		color:#ffffff;
		font-family:Trebuchet MS;
		font-size:17px;
		padding:10px 32px;
		text-decoration:none;
	}
	
	#submit:hover {
		background-color:#5cbf2a;
	}
	
	@media only screen and (max-width: 500px) {
		body{
			width: 100%;
			padding: 0px;
		}
		
		#searchbox {
			width: 100%;
		}
	}
</style>

</head>

<body>
	<div id="container">
		<h2>Account Checker</h2>

		<div><!--Description text--> 
			<p>After a large number of requests - and the fact that the situation regarding Dropbox has improved - I have now removed this checker.</p>
			<p>You can however take a look at the source code, which will allow you to make your own checker in the event of another similar leak.</p>
			<a href="">View Open Source Account Checker on Github</a>
		</div>
	</div>

</body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-9002868-8', 'auto');
  ga('send', 'pageview');

</script>
</html>