<?php 
	$target = "games";
	include("header.php");
 ?>

<div class="l-page">
	<div class="l-wrapper">
	<div class="home_title-wrapper">
		<div class="l-wrapper">
			<h1 class="home_title">Barney&rsquo;s Hide &amp;&nbsp;Seek Game</h1>
			<h2>Лучшая в мире игра.</h2>

			
		<div id="emulator">
			<p>To play this game, please, download the latest Flash player!</p>
			<br>
			<a href="http://www.adobe.com/go/getflashplayer">
				<img src="//www.adobe.com/images/shared/download_buttons/get_adobe_flash_player.png" alt="Get Adobe Flash player"/>
			</a>
		</div>

<!-- Put this div tag to the place, where the Like block will be -->
<center>
<div id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "mini", height: 24});
</script>
</center>

<!-- Put this div tag to the place, where the Comments block will be -->
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {autoPublish: 0, limit: 10, width: "665", attach: "*"});
</script>
	
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>

<script type="text/javascript">

	var resizeOwnEmulator = function(width, height)
	{
		var emulator = $('#emulator');
		emulator.css('width', width);
		emulator.css('height', height);
	}

	$(function()
	{
		function embed()
		{
			var emulator = $('#emulator');
			if(emulator)
			{
				var flashvars = 
				{
					system : 'sega',
					url : 'roms/barney.gen'
				};
				var params = {};
				var attributes = {};
				
				params.allowscriptaccess = 'sameDomain';
				params.allowFullScreen = 'true';
				params.allowFullScreenInteractive = 'true';
				
				swfobject.embedSWF('flash/Nesbox.swf', 'emulator', '640', '480', '11.2.0', 'flash/expressInstall.swf', flashvars, params, attributes);
			}
		}
		
		embed();
	});
	
</script>
		</div>
	</div>
	</div>
</div>

<?php include("footer.php"); ?>

