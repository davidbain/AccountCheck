<!-- 
	Account checker tool created by David Bain - http://davidba.in
 	This tool is an open source and quick way to produce an account checker based on leaked credentials. Using a simple text file, users can check their details against the leak database and reassure themselves. 
 	Open sourced to help produce a fast and simple security tool.
 	Please leave this comment in tact, it's all I ask for in return!  
 -->
 <?php

if(isset($_POST['submit'])) {
	$search = $_POST['search'];
	$text = file_get_contents('accounts.txt'); //The text list of account names
	$lines = explode("\n", $text);
	if(in_array($_POST['search'], $lines)){ //checks if account name in text list, displays output below when found
		echo '<div class="result">
				<h1 id="warning"><strong>Account found</strong></h1>
				<p id="warning">It is recommended that you change you password immediately</p>
			  </div>';
	}else{ // The result if the account is not found in the list
		echo '<div class="result">
				<h1 id="warning"><strong>Account not found</strong></h1>
				<p id="warning">Even though you are not in the list at this moment, it is recommended that you change your password anyway</p>
			  </div>';
	}
}
?>

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

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<script type="text/javascript">
	$(function() {
	    $(".search_button").click(function() {
	        // getting the value that user typed
	        var searchString = $("#search_box").val();
	        // forming the queryString
	        var data = 'search='+ searchString;
	
	        // if searchString is not empty
	        if(searchString) {
	            // ajax call
	            $.ajax({
	                type: "POST",
	                url: "find_in_file_ajax.php",
	                data: data,
	                beforeSend: function(html) { // this happens before actual call
	                    $("#results").html(''); 
	                    $("#searchresults").show();
	                    $(".word").html(searchString);
	               },
	               success: function(html){ // this happens after we get results
	                    $("#results").show();
	                    $("#results").append(html);
	              }
	            });    
	        }
	        return false;
	    });
	});
</script>
</head>

<body>
	<div id="container">
		<h2>Generic Account Checker</h2>
		<div><!--Submit form-->
			<form method="post" action="">
			    <input type="text" name="search" id="search_box" class='search_box' placeholder="example@website.com"/>
			    <p><input type="submit" value="Check" name="submit" id="submit"/></p><br />
			</form>
		</div>      
		<div><!--Description text--> 
			<p>Please note that this is reading from a text file containing only the email addresses from the leak, not including the passwords.</p>
			<p>The list will be maintained as best as possible whilst this develops.</p>
			<p>You can <a href="http://example.com">read more about the leak here</a>.</p>
			<p>This tool was created to bring awareness to this leak, and is in no way associated with the parties concerned.</p>
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