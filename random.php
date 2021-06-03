<!DOCTYPE html>
<html>
	<head>
		<title>Random Italian stuff</title>
	        <?php include("utils/header.html"); ?>
		<script type="text/javascript">
			function newSrc() {
				document.getElementById("foot").src= "<?php $s = `python extractballers.py`; echo $s;?>;";
				location.reload()
			}
		</script>
	</head>
	<body>
		<?php	
			$cookie_name = "session";
			
			if(!isset($_COOKIE[$cookie_name])) {
				$cookie_value = "0";
				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
				`python writeballers.py`;
			}
			error_reporting(E_ALL);
			ini_set('display_errors',1);	
			include('utils/navigation.html');
			clearstatcache();
			$src = `python extractballers.py`;
		?>
		<div class="row">
			<div class="col-6">
				<div class="block first">
					<h2>Random Italian Player</h2>
					<iframe
						id="foot"
						src=<?php echo $src; ?>>
					</iframe>
					<button onClick="location.reload(true)">Refresh</button>
				</div>
			</div>
			<div class="col-6">
				<div class="block second" id="map">
					<h2>Random place in Brianza</h2>
					<iframe
						src="https://www.openstreetmap.org/export/embed.html?bbox=9.<?php echo(rand(12000,44650) . "%2C45." . rand(61070,79500) . "&amp;layer=mapnik")?>">
					</iframe>
					<button onClick="window.location.href=window.location.href;">Refresh</button>
				</div>
			</div>	
		</div>
		<div class="row">
                <div class="col-6">
                    <div class="block second">
                        <h2>Random Color</h2>
                        <iframe style="background-color:rgb(<?php echo(rand(0,255) . ", " . rand(0,255) . ", " . rand(0,255))?>);">
                        </iframe>
                        <button onClick="window.location.href=window.location.href;">Refresh</button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="block first">
                        <h2>Random Wolfram Tone</h2>
                        <iframe
                            src="https://tones.wolfram.com/generate">
                        </iframe>
                        <button onClick="window.location.href=window.location.href;">Refresh</button>
                    </div>
                </div>
            </div>
		</div>
		<?php include('utils/footer.php'); ?>
	</body>
</html>
