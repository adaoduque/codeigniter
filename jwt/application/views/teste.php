<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>	
</head>
<body>

<div id="container">
	<h1>Teste de autenticacão</h1>

	<div id="body">
		<p>
			<button id="createToken">Create Token</button>
			<button id="getToken">Get Token</button>
		</p>
		<p id='token'>
			Token: nenhum
		</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
<script type="text/javascript">
//value = JSON.stringify({ "name": "Adão Duque", "id" : 2 })
value = "value=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MiwibmFtZSI6IkFkXHUwMGUzbyBEdXF1ZSJ9.SAsPvO6xwf-wzCYPvjc3pEknOAujyjMTNFYfWdfF6XM";
var createToken  =   function () {

    $.ajax({    

        type: 'GET',

        url: 'http://192.168.1.139/salao_ideal/auth/token',

        dataType: 'json',
        
        success: function (data) {

        	value = data['token'];

        	alert(data);

        },error: function(request, status, error){
        	alert( error );
        }

    });

}
var getToken  =   function ( nData ) {

    $.ajax({
		beforeSend: function(request) {
			request.setRequestHeader("Authorization", nData);
		},
        type: 'POST',

        url: 'http://192.168.1.139/salao_ideal/auth/token',

        dataType: 'json',
        
        success: function (data) {

        	alert(data);

        },error: function(request, status, error){
        	alert( error );
        }

    });

}
	$('#getToken').click( function () {
		getToken( value );
	});
	$('#createToken').click( function () {
		createToken();
	});	
</script>
</body>
</html>