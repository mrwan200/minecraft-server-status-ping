	<?php
          require "MCPing.php"; //Import File
	   $ping = new MCPing(); //New Class 
	   $ping = ($ping->GetStatus( 'l27.0.0.1', 25565 )->Response() ); //Chang IP Server And Port
		
	?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <title>Server Minecraft Status | <?php print $ping["hostname"]; ?></title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    	<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    	<script language="javascript">
   		jQuery(document).ready(function(){
 			$("[rel='tooltip']").tooltip();
     	});
		</script>
    	<style>
    	/*Custom CSS Overrides*/
    	body {
      		font-family: 'Lato', sans-serif !important;
    	}
    	</style>
    </head>
    <body>
	<div class="container">
        <h1>Server Minecraft Status (Reedit) By Sririeak Intakam</h1><hr>       
		<div class="row">
			<div class="col-md-4">
	            <!-- Copy Code And Paste For Nameserver And Inf -->
				<h3><?php print $ping["hostname"]; ?></h3>
				<!-- Copy Code And Paste For Info -->
				<table class="table table-striped">
					<tbody>
						<tr>
							<!-- Ip Server-->
							<td><b>IP</b></td>
							<td><?php print $ping["hostname"]; echo ":";  print $ping["port"]; ?></td>
						</tr>
						<tr>
							<!-- Version -->
							<td><b>Version</b></td>
							<td><?php print $ping["version"]; ?></td>
						</tr>
						<tr>
							<!-- Players -->
							<td><b>Players</b></td>
							<td><?php print $ping["players"]; echo ' / '; print $ping["max_players"]; ?></td>
						</tr>
						<tr>
							<td><b>Status</b></td>
							<td><?php if ( $ping["online"] == 1) { echo '<i class="fa fa-check-circle"></i> Server is online'; } else { echo '<i class="fa fa-times-circle"></i> Server is offline'; } ?></td>
						</tr>
						<tr>
							<!-- Favicon -->
							<td><b>Favicon</b></td>
							<td><img src='<?php print $ping["favicon"]; ?>' width="64px" height="64px" style="float:left;"/></td>
						</tr>
			              </div>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	</body>
</html>
