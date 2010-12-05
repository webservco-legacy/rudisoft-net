				<div class="row-1">
					<div class="indent"><a href="home.html"><img alt="" src="img/logo.jpg" /></a><img alt="" src="img/slogan.jpg" /></div>
				</div>
				<div class="row-2">
					<ul class="nav">
						<li><a id="nav_home" title="Home" href="<?php echo $cfg['site_url']; ?>" class="first">Home</a></li>
						<li><a id="nav_playlist" title="Playlist" href="<?php echo $cfg['site_url']; ?>?page=playlist">Playlist</a></li>
						<li><a id="nav_rudisoft" title="" href="http://www.rudisoft.net">Rudisoft.Net</a></li>
					</ul>
					<!-- 
					<ul class="extra-nav">
						<li><a href="home.html"><img alt="" src="img/icon-home.gif" /></a></li>
						<li><a href="contact_us.html"><img alt="" src="img/icon-mail.gif" /></a></li>
						<li><a href="site_map.html"><img alt="" src="img/icon-map.gif" /></a></li>
					</ul>
					-->
				</div>
				<div class="row-3">
					<div class="extra-slogan"><img alt="" src="img/extra-slogan.jpg" /></div>
					<?php require $cfg['site_path'] . 'tpl/player.tpl.php'; ?>
				</div>