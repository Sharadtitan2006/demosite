<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PHP Contact Form Style Demo</title>

<style type="text/css">
body{
	font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif; 
	font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
	margin:0 auto;
	width:400px;
	padding:14px;
}
	/* ----------- basic ----------- */
	#basic{
		border:solid 2px #DEDEDE;	
	}
	#basic h1 {
		font-size:14px;
		font-weight:bold;
		margin-bottom:8px;
	}
	#basic p{
		font-size:11px;
		color:#666666;
		margin-bottom:20px;
		border-bottom:solid 1px #dedede;
		padding-bottom:10px;
	}
	#basic label{
		display:block;
		font-weight:bold;
		text-align:right;
		width:140px;
		float:left;
	}
	#basic .small{
		color:#666666;
		display:block;
		font-size:11px;
		font-weight:normal;
		text-align:right;
		width:140px;
	}
	#basic input{
		float:left;
		width:200px;
		margin:2px 0 30px 10px;
	}
	#basic button{ 
		clear:both;
		margin-left:150px;
		background:#888888;
		color:#FFFFFF;
		border:solid 1px #666666;
		font-size:11px;
		font-weight:bold;
		padding:4px 6px;
	}


	/* ----------- stylized ----------- */
	#stylized{
		border:solid 2px #b7ddf2;
		background:#ebf4fb;

	}
	#stylized h1 {
		font-size:14px;
		font-weight:bold;
		margin-bottom:8px;
	}
	#stylized p{
		font-size:11px;
		color:#666666;
		margin-bottom:20px;
		border-bottom:solid 1px #b7ddf2;
		padding-bottom:10px;
	}
	#stylized label{
		display:block;
		font-weight:bold;
		text-align:right;
		width:140px;
		float:left;
	}
	#stylized .small{
		color:#666666;
		display:block;
		font-size:11px;
		font-weight:normal;
		text-align:right;
		width:140px;
	}
	#stylized input{
		float:left;
		font-size:12px;
		padding:4px 2px;
		border:solid 1px #aacfe4;
		width:200px;
		margin:2px 0 20px 10px;
	}
	#stylized button{ 
		clear:both;
		margin-left:160px;
		width:125px;
		height:31px;
		background:#444;
		text-align:center;
		line-height:31px;
		color:#FFFFFF;
		font-size:11px;
		font-weight:bold;
	}
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
  text-align: center;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #4CAF50;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}	
</style>
</head>
<body>
<div id="stylized" class="myform">
    <div class="alert info">
          <span class="closebtn">&times;</span>
          <strong>Basic Information Entered</strong>
    </div>
    <label>Name</label><input type="text" name="name" readOnly="true" value="<?php echo $_POST["name"]?>" style="background-color:#ebf4fb">
    <label>Email</label><input type="text" name="email" value="<?php echo $_POST["email"]?>" style="background-color:#ebf4fb">
    <label>Phone</label><input type="text" name="phone" value="<?php echo $_POST["phone"]?>" style="background-color:#ebf4fb">
<br />
<br />
<div class="spacer"></div>
</div> <!-- end of form class -->
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
</body>
</html>
