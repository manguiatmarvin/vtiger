<?php 
session_start();

if(!isset( $_SESSION["authenticated_user_id"])){
	die("<h3>Please login</h3>");
	exit;
}


if(isset($_SESSION['smtp'])){
	$smtp =  $_SESSION['smtp'];
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Add SMTP Server</title>
<meta
	content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'
	name='viewport'>
<link href="css/custom.css" rel="stylesheet" type="text/css" />
<!-- bootstrap 3.0.2 -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- font Awesome -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Ionicons -->
<link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
<!-- Morris chart -->
<link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
	type="text/css" />
<!-- Date Picker -->
<link href="css/datepicker/datepicker3.css" rel="stylesheet"
	type="text/css" />
<!-- Daterange picker -->
<link href="css/daterangepicker/daterangepicker-bs3.css"
	rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"
	rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
<!-- jQuery 2.0.2 -->
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- jQuery UI 1.10.3 -->
<script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<script>
          $(document).ready(function(){
              /*btn submit*/ 
              $("#send").click(function(e) {
                  //prevent Default functionality
                  e.preventDefault();

                  if($('#serverselect-server').val()=="0"){
                     alert("select a server");
                     $(this).focus();
                      return;
                     
                   }else if($('#smtp_username').val()==""){
                	   alert("username required");
                       $(this).focus();
                       return;
                       
                    }else if($('#smtp_password').val()==""){
                	   alert("password required");
                       $(this).focus();
                       return;
                    }
                  
                  /*get the server value from textbox*/
                  var server = $("#smtp-server").val();

                  /*if not on textbox server was set using presents*/
                  if(server==""){
                	  server = $('#hidden-smtp-server').val();
                   }

                  /* fist load server no value use the default value google*/
                  if(server==""){
                      server = $("select option:selected").val();
                   }
                  
                  
                  $.ajax({
                	  type: "POST",
                	  url: "process_smtp.php",
                	  data: {"server":server, 
                    	      "username":$('#smtp_username').val(), 
                    	      "password":$('#smtp_password').val()},
                	  dataType: 'json',
                	  success: function(data){
                              console.log(data);
                              window.opener['Users_editView_fieldName_email1'].value = data.username;
                              window.close();
                        }
                	});
                	
           });

              /*radio buttons*/
          	  $("#serverselect-server").change(function(){

                  if($(this).val()==""){
                       $("#smtp-server").fadeIn('fast');
                       $('#smtp-server').val('');
                       $('#hidden-smtp-server').val('');
                       $('#smtp-server').focus();
                       
                  }else{
                      /*Presets */
                	  $("#smtp-server").val("");
                	  $('#hidden-smtp-server').val($(this).val());
                	  $("#smtp-server").fadeOut('fast');
                    
                      }
              });
              
          });
        </script>
</head>
<body class="skin-blue">
	<div class="row well" style="margin: 20px">
		<div class="box-body" id="smtp-form-body">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>"
				id="smtp-form">

				<h4>
					<i class="fa fa-envelope"></i> SMTP Setup
				</h4>
				<small>The Outgoing Server settings, also referred as SMTP servers,
					are used to route vtiger CRM with the email server to send out
					emails; more specifically, whether emails are sent with or without
					first authenticating your user information.</small> <br>
				<div class="form-group">
					<label>SMTP Username*</label> <small>(your complete email address,
						this will be your sendout email)</small> <input type="text"
						class="form-control" name="username" id="smtp_username"
						value="<?php echo htmlspecialchars($smtp['username'])?>">

				</div>
				<div class="form-group">
					<label>SMTP Password *</label><small>(this is your email password)</small>
					<input type="text" class="form-control" name="password"
						id="smtp_password"
						value="<?php echo htmlspecialchars($smtp['password'])?>">
				</div>

				<div class="form-group">
					<label>Choose SMTP Mail Server * </label> <br> <small>(your
						designated SMTP server for sending your emails)</small> <br> <select
						name="serverselect" id="serverselect-server" class="form-control">
						<option value="0" selected="selected">--Select SMTP--</option>
						<option value="ssl://smtp.gmail.com:465">Google</option>
						<option value="ssl://smtp.mail.yahoo.com:465">Yahoo</option>
						<option value="tsl://smtp.live.com:587">Outlook</option>
						<option value="ssl://smtp.att.yahoo.com:465">AT&T</option>
						<option value="ssl://smtp.live.com:465">Hotmail</option>
						<option value="">Others</option>
					</select> <input type="hidden" name="hidden-smtp-server"
						id="hidden-smtp-server"
						value="<?php echo htmlspecialchars($smtp['server'])?>"> <br> <input
						type="text" class="form-control" name="server" id="smtp-server"
						value="<?php echo htmlspecialchars($smtp['server'])?>"
						style="display: none">
				</div>
				<div class="input-group">


					<button id="send" class="btn btn-primary edt-profile-btn"
						style="margin-right: 10px">
						<i class="fa  fa-save"></i> Save
					</button>

					<button onclick="javascript:window.close();"
						class="btn btn-primary edt-profile-btn">
						<i class="fa fa-times"></i> close
					</button>


				</div>

			</form>
		</div>
	</div>
</body>
</html>