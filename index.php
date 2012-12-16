<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
<link rel="stylesheet" href="http://www.impressivewebs.com/demo-files/styles.css?v=1.1.6">
<style>
* { margin: 0px; padding: 0px; }
  
	body { 
		margin: 0 auto; 
		background: #f5f5f5; 	
		color: #555;	 
		width: 800px; 
	}
	
	form { 
		float: left;
		border: 1px solid #ddd; 
		padding: 30px 40px 20px 40px; 
		margin: 75px 0 0 0;
		width: 715px;
		background: #fff;
				
		/* -- CSS3 - define rounded corners for the form -- */	
		-webkit-border-radius: 10px;
		-moz-border-radius: 10px;
		border-radius: 10px; 		
		
		/* -- CSS3 - create a background graident -- */
		background: -webkit-gradient(linear, 0% 0%, 0% 40%, from(#EEE), to(#FFFFFF)); 
		background: -moz-linear-gradient(0% 40% 90deg,#FFF, #EEE); 
		
		/* -- CSS3 - add a drop shadow -- */
		-webkit-box-shadow:0px 0 50px #ccc;
		-moz-box-shadow:0px 0 50px #ccc; 
		box-shadow:0px 0 50px #ccc;		 		
	}	
	fieldset { border: none; }
	input, textarea { 		
		padding: 8px; 
		margin: 4px 0 20px 0; 
		background: #fff; 
		width: 220px; 
		font-size: 14px; 
		color: #555; 
		border: 1px #ddd solid;
		
		/* -- CSS3 Shadow - create a shadow around each input element -- */ 
		-webkit-box-shadow: 0px 0px 4px #aaa;
		-moz-box-shadow: 0px 0px 4px #aaa; 
		box-shadow: 0px 0px 4px #aaa;
		
		/* -- CSS3 Transition - define what the transition will be applied to (i.e. the background) -- */		
		-webkit-transition: background 0.3s linear;							
	}
	
	textarea {		
		width: 390px; 
		height: 175px; 		 		
	}
		.textareax {		
		width: 390px; 
		height: 50px; 		 		
	}
	input:hover, textarea:hover { 
		background: #eee; 
	}
	
	input.submit { 	
		width: 150px; 
		color: #eee; 
		text-transform: uppercase; 
		margin-top: 10px;
		background-color: #18a5cc;
		border: none;
		
		/* -- CSS3 Transition - define which property to animate (i.e. the shadow)  -- */
		-webkit-transition: -webkit-box-shadow 0.3s linear;
		
		/* -- CSS3 - Rounded Corners -- */
		-moz-border-radius: 4px; 
		-webkit-border-radius: 4px;
		border-radius: 4px; 
						
		/* -- CSS3 Shadow - create a shadow around each input element -- */ 
		background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#18a5cc), to(#0a85a8)); 
		background: -moz-linear-gradient(25% 75% 90deg,#0a85a8, #18a5cc);		
	} 
	
	input.submit:hover { 		
		-webkit-box-shadow: 0px 0px 20px #555;
		-moz-box-shadow: 0px 0px 20px #aaa; 
		box-shadow: 0px 0px 20px #555;	

}
.common {
    width: 650px;
    min-height: 200px;
    font-family: Arial, sans-serif;
    font-size: 15px;
    overflow: hidden;
}
.rar {
width: 70%;
		height: 400px; 
		}

</style>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Post Prefix Tool</title>
 </head>

<body>
<input type="text" name="ip" ></input>
<?php
if(isset($_POST) && array_key_exists('submit',$_POST)){
//process form!
}else{
//show form, don't process yet!  You can break out of php here and render your form
}
?>
<a onclick="window.open('http://networktools.nl/reverseip/actionhandler&toolAction=toolReverseIP&toolInput=<?php echo $_POST ['ip']; ?>','POPUP','width=900 0,height=500,scrollbars=10');return false;" href="http://networktools.nl/reverseip/actionhandler&toolAction=toolReverseIP&toolInput=<?php echo $_POST ['ip']; ?>" font color="green"><b>Site list</b> </a></td>
<center><h2 class="demo-header">Input Prepost Tool_by<a href="fb.me/life.is.code"> Maruf </a></h2></center>
 <form id="form1" name="form1" method="post" action="">
 <br>
<label><b>BoX </b><br>
  <textarea name="msg" id="comments" class="common"></textarea>></textarea>
 </label>

 <p>
 <input type="submit" name="submit" id="submit" value="Submit" class="submit" />
 </label>
 </p>


 <?php
    $msg = $_POST["msg"];
    $name = $_POST["name"];
    $posts = "$line$msg\n";
    file_put_contents("list.txt", $posts);
	$posts = implode("<br>http://", preg_split("/[\s]+/", $posts));
	
 ?>
 <h1> Result: </h1>
 <?php
     echo "$posts";
	 ?>
	 </form>
 
</body>
 </html>
