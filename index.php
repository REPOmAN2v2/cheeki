<!DOCTYPE HTML>
<!--
	Prologue 1.2 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>S.T.A.L.K.E.R. Modding Reference</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
        <script src="js/jquery.custom.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
        <!-- Analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-46865551-1', 'violates.me');
            ga('send', 'pageview');
        </script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header" class="skel-panels-fixed">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<!--<span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>-->
							<h1 id="title">сталкер</h1>
							<span class="byline">welcome to the zone</span>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<!--
							
								Prologue's nav expects links in one of two formats:
								
								1. Hash link (scrolls to a different section within the page)
								
								   <li><a href="#foobar" id="foobar-link" class="skel-panels-ignoreHref"><span class="fa fa-whatever-icon-you-want">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld"><span class="fa fa-whatever-icon-you-want">Foobar</span></a></li>
							
							-->
							<ul>
								<li><a href="#info" id="info-link" class="skel-panels-ignoreHref"><span class="fa">Guides and Resources</span></a></li>
								<li><a href="#tips" id="tîps-link" class="skel-panels-ignoreHref"><span class="fa">General Tips and Tricks</span></a></li>
								<li><a href="#tweaks" id="tweaks-link" class="skel-panels-ignoreHref"><span class="fa">Tweaks and Performance</span></a></li>
                                <li><a href="#trouble" id="trouble-link" class="skel-panels-ignoreHref"><span class="fa">Troubleshooting</span></a></li>
                                <li><a href="#modding" id="modding-link" class="skel-panels-ignoreHref"><span class="fa">Modding 101</span></a></li>
                                <li><a href="#soc" id="soc-link" class="skel-panels-ignoreHref"><span class="fa">Shadow of Chernobyl Mods</span></a></li>
							</ul>
						</nav>
						
				</div>
                
				
				<div class="bottom">
                    
                        <div tabindex="0" class="twitch">
                                <p class="twitch_title">Currently streaming:</p>
                                <?php include 'twitch.php'; ?>
                        </div>

					<!-- Social Icons -->
						<ul class="icons">
							<!--<li><a href="#" class="fa fa-twitter solo"><span>Twitter</span></a></li>
							<li><a href="#" class="fa fa-facebook solo"><span>Facebook</span></a></li>-->
							<li><a href="https://github.com/REPOmAN2v2/cheeki" class="fa fa-github solo"><span>Github</span></a></li>
							<!--<li><a href="#" class="fa fa-dribbble solo"><span>Dribbble</span></a></li>
							<<li><a href="#" class="fa fa-envelope solo"><span>Email</span></a></li>-->
						</ul>
				
				</div>
			
			</div>

		<!-- Main -->
			<div id="main">
			         
                    <section id="head" class="one">
                        <div class="container">
                            <a class="image featured"><img src="images/header.jpg" alt="" /></a>
                            <p>You can navigate this page easier by using the menu on the left side.<br>Remember : Ctrl + F to search keywords on this page!</p>
                        </div>
                    </section>
                    
				<!-- Infographics + links -->
					<section id="info" class="two">
						<div class="container">

							<header>
								<h2>Infographics</h2>
                                <h6>Pictures with text for visual learners</h6>
							</header>
						
							<div class="row">
								<div class="4u">
									<article class="item">
										<a href="images/Starting_guide.jpg" class="image full"><img src="images/Starting_guide.jpg" alt="" /></a>
										<header>
											<h3>Starter Guide</h3>
										</header>
									</article>
									<article class="item">
										<a href="images/HUD_guide.jpg" class="image full"><img src="images/HUD_guide.jpg" alt="" /></a>
										<header>
											<h3>HUD Guide</h3>
										</header>
									</article>
								</div>
								<div class="4u">
									<article class="item">
										<a href="images/downgrade.png" class="image full"><img src="images/downgrade.png" alt="" /></a>
										<header>
											<h3>How to Downgrade</h3>
										</header>
									</article>
									<!--<article class="item">
										<a href="/images/modsv2.jpg" class="image full"><img src="images/modsv2.jpg" alt="" /></a>
										<header>
											<h3>Downgrade</h3>
										</header>
									</article>-->
								</div>
								<div class="4u">
									<article class="item">
										<a href="/images/AMK.jpg" class="image full"><img src="images/AMK.jpg" alt="" /></a>
										<header>
											<h3>AMK Guide</h3>
										</header>
									</article>
									<article class="item">
										<a href="/images/modsv2.jpg" class="image full"><img src="/images/modsv2.jpg" alt="" /></a>
										<header>
											<h3>Mod Overview</h3>
										</header>
									</article>
								</div>
							</div>
                            
                            <header>
                                <h2>Tell all guides + Tips</h2>
                                <h6>New to modding? The following guides are required reading</h6>
                            </header>
                            <a href="http://steamcommunity.com/sharedfiles/filedetails/?id=121125400">The Zone Manual</a><br>
                            <a href="http://pastebin.com/FUPEbLiv">The brilliant FAQ you rookies never want to read</a>
                            <p>&nbsp;</p>
                            <header>
                                <h2>Pages of interest</h2>
                            </header>
                            <ul>
                                <li><a href="https://boards.4chan.org/vg/catalog#s=S.T.A.L.K.E.R.">S.T.A.L.K.E.R. General</a></li>
                                <li><a href="https://mega.co.nz/#F!zEtSxC4J!eRsovn-n098UpRtLDmr5_w">My repository of mods</a></li>
                                <li><a href="http://cheeki.violates.me/repo/">Backup repository (use MEGA if possible)</a></li>
                                <li><a href="https://mega.co.nz/#F!kFtnBTSb!K-RlA1TVxlJGl86yE1c6fw">The S.T.A.L.K.E.R. Build Repository by Ardias</a></li>
                                <li><a href="http://pastebin.com/Z93x5RDR">The poorfag's guide to S.T.A.L.K.E.R.</a></li>
                                <li><a href="http://pastebin.com/u/TheREVIEWER">TheREVIEWER's reviews</a></li>
                                <li><a href="http://www.tweakguides.com/STALKER_1.html">TweakGuides' guide for SoC</a></li>
                                <li><a href="http://www.tweakguides.com/ClearSky_1.html">TweakGuides' guide for Clear Sky</a></li>
                                <li><a href="http://www.metacognix.com/stlkrsoc/CrashesStillInTheGame.html">List of common SoC crashes</a></li>
                                <li><a href="http://www.gsc-game.com/main.php?t=community&amp;s=forums">GSC Forums</a></li>
                                <li><a href="http://stalker.wikia.com/wiki/Main_Page">S.T.A.L.K.E.R. Wiki</a></li>
                                <li><a href="http://zsg.dk/index.php">The Zone Survival Guide - SoC</a></li>
                                <li><a href="http://cop.zsg.dk/">The Zone Survival Guide - Call of Pripyat</a></li>
                                <li><a href="http://www.moddb.com/">ModDB, for all your modding needs</a></li>
                                <li><a href="http://www.moddb.com/members/davidme">david.m.e's ModDB page</a></li>
                                <li><a href="http://www.moddb.com/mods/zone-of-alienation-mod">ZoA's ModDB page</a></li>
                            </ul>

						</div>
					</section>
					
				<!-- General Tips + Tricks -->
					<section id="tips" class="three">
						<div class="container">
					
							<header>
								<h2>General Tips + Tricks</h2>
                                <h6>Miscellaneous tips</h6>
							</header>
							<strong>Where to start</strong>
							<p>Start with SoC (of course!). Try without big mods first. Play the games in the order they came out, Shadow of Chernobyl, Clear Sky and Call of Pripyat</p>
                            <strong>But-but muh mods!</strong>
                            <p>ZRP (Zone Reclamation Project) is a fine mod for 1st timers, as it does not change gameplay or graphics, only fixes errors in the game.<br>It can be found with some recommended graphic mods in the STARTER pack.</p>
                            <strong>Gameplay tips</strong>
                            <p>- Trust the Master Stalkers, play on the highest difficulty. Master is the best as it improves AI and gun-damage, both ways.<br>- Disable the crosshair, you don't need it, you don't want to hip-fire unless targets are just a few meters away from you.<br>- Check your other Options and key-bindings! Read the Manual! These can teach you more than you'd imagine.<br>- In the beginning, choose to get "Brainwashed", this gives you a short tutorial.<br>- Read your in-game PDA often!<br>- In fights, always use cover. Stay low. Aim with your weapons. Set automatic guns to semi or burst-mode for more accuracy.<br>- Aim for the head. From long distance aim to center mass.<br>- Select your ammo-type according the enemy. AP-rounds against most humans, regular ammo against mutants or less armored personnel.<br>- Don't hoard too much stuff with you. Vodka and food weight a ton, so don't have too much with you. Only loot what you need, or what you can sell quickly for some nice cash. Drop extra stuff to some stash to await your return.<br>- Explore! You may find tons of free items, alternative routes and interesting things. Just remember to save often!</p>
                            <strong>Which is the best weapon?</strong>
                            <p>It's hard to tell, speaking of SoC, pistols are weak and you will hardly find anyone using them, but you should not give up on them, they are light weight and as some casual game once said, is faster to change weapon rather than reload, while in AMK some latter ones will put down even the stronger mutant or human, the AS VAL by the statistics should be the best and is actually very good, but more than one Stalker found little problems finishing with just an AK variant or the SIG and the right ammo.</p>
                            <strong>Stick with the game. It gets better, more awesome, and in a way "easier" the further you get! Don't let the beginning discourage you!</strong>
                            <p>...good hunting, stalker...</p>

						</div>
					</section>

				<!-- Tweaks and Performance tips -->
					<section id="tweaks" class="four">
						<div class="container">

							<header>
								<h2>Tweaks and Performance Tips</h2>
                                <h6>Get the most out of your game</h6>
							</header>
                            <strong>Find your user.ltx</strong>
							<p>Sometimes Steam has two user file locations, but it uses the one shown on the first line in fsgame.ltx in your STALKER install folder. That tells the game where to find user files like user.ltx, saves and log files.</p>
                            <strong>Steam players</strong>
                            <p>Disable compatibility mode on the Steam launcher and on the STALKER game. Check to see if your antivirus is being a little too helpful. Turn off Xfire. More info at Steam STALKER sub-forum.</p>
                            <strong>Measuring FPS</strong>
                            <p>You can see a FPS-counter and other stats by typing this in the console: <code>rs_stats 1</code></p>							
                            <strong>VSync</strong>
                            <p><strong>IMPORTANT:</strong> Enable Vsync in your GPU control panel to limit the framerate. The uncapped framerate in the menu can go into the thousands, wasting hardware usage and potentially killing it.</p>
                            <strong>Antialiasing</strong>
                            <p>The AA slider in STALKER SoC does not work, put it all the way down and use <a href="http://mrhaandi.blogspot.it/p/injectsmaa.html">this</a> instead, or force it in your GPU control panel.</p>
                            <strong>Improve your FPS</strong>
                            <p>- Lower the Vision and Lighting distance, plus the Object-Quality bar to around 50%. The quality difference is minimal, but FPS improves. Reducing the Grass Density a point or two also may help stuttering outdoors.<br>- In CS and CoP, if you use the Enhanced Full Dynamic mode, set its three specific settings (SSAO, Sun Quality, Sun-shafts) to LOW. You won't notice quality difference, but your performance will skyrocket!</p>
                            <strong>Increase the grass distance</strong>
                            <p><a href="http://kocayine.ru/2013/05/24/increase-the-grass-draw-distance-in-s-t-a-l-k-e-r/">Kocayine's guide</a></p>
                            <strong>Stuttering issues</strong>
                            <p>Use -noprefetch as a launch parameter or type it into the console (~) in-game. This will also improve your loading times.</p>
                            <strong>Fix your height</strong>
                            <p>In vanilla SoC/ZRP the player's eye-level is too low compared to other humans by default. You can edit this with ZRP's modifier, in the Actor.ltx tab. Increase it from the default 0.85 to 0.94. Most overhaul mods do fix the player's height by default.</p>
                            <strong>Head bobbing</strong>
                            <p>First, edit your FOV using the FOV Switcher to a value of 75. If you still want reduce the head-bobbing, use the cam_inert 0.1 console command. If it applies, you can also use the ZRP modifier or edit effectors.ltx in your gamedata folder.</p>

						</div>
					</section>
                
                <!-- Troubleshooting -->
					<section id="trouble" class="three">
						<div class="container">

							<header>
								<h2>Troubleshooting</h2>
                                <h6>Common problems one might encounter when modding S.T.A.L.K.E.R.</h6>
							</header>
                            <strong>BugTrap, crash to desktop, freeze/lockup?</strong>
							<p>Check your Documents/STALKER-SHOC/logs folder for the SOC crash log, other STALKER games use similar STALKER-folders under Documents. Steam users: the game uses the $app_data_root$ path on first line of fsgame.ltx in your STALKER install folder. Find the last few lines of the text file, and copy-paste those in the thread if you want help.</p>
                            <strong>Updates</strong>
                            <p>MS Update KB2670838 breaks your DX10/11 games including Clear Sky and Call of Pripyat. You can safely uninstall it.</p>
                            <strong>Can't find texture 'ui\ui_nvidia_intro'</strong>
                            <p>Start the game with the command "-nointro"</p>							
                            <strong>Shadows are broken</strong>
                            <p>A common bug with widescreen monitors, where the shadows of the terrain get “sucked” into the borders of your screen. Open your Console (~ \) while in game and type these two lines:<br>r2_sun_near 20<br>r2_sun_near_border 1</p>
                            <strong>There's a weird coloured line on the side of my screen</strong>
                            <p>Disable that fancy AA you tried in the last section.</p>
                            

						</div>
					</section>
                
                <!-- Modding -->
					<section id="modding" class="two">
						<div class="container">

							<header>
								<h2>Modding 101</h2>
                                <h6>You're entering a world of pain</h6>
							</header>
                            <strong>This is not intended as a comprehensive beginner guide!</strong>
							<p><a href="http://steamcommunity.com/sharedfiles/filedetails/?id=121125400#34629">The Zone Manual has got you covered</a></p>
                            <strong>It isn't intended as an advanced guide either!</strong>
                            <p>Google and the GSC forums are probably your best bets.<br><a href="http://sdk.stalker-game.com/en/index.php?title=Category:Articles">S.T.A.L.K.E.R. MOD portal</a><br><a href="http://www.gsc-game.com/main.php?t=community&amp;s=forums&amp;s_game_type=xr&amp;thm_id=5387&amp;sec_id=16">GSC: How to mod STALKER</a></p>
                            <strong>I want to change how fast time goes</strong>
                            <p>S.T.A.L.K.E.R. - Shadow of Chernobyl\gamedata\config\alife.ltx</p>
                            <pre><code>time_factor = x
normal_time_factor = x</code></pre><br>
                            <p>Higher value = faster. Lower value = slower.</p>						
                            <strong>I want to go prone when low-crouching</strong>
                            <p>Edit your config\creatures\actor.ltx file with these values:</p>
                            <pre><code>ph_box0_center = 0.0, 0.9, 0.0
ph_box0_size = 0.35, 0.9, 0.35
ph_box1_center = 0.0, 0.65, 0.0
ph_box1_size = 0.35, 0.65, 0.35
ph_box2_center = 0.0, 0.2, 0.0
ph_box2_size = 0.35, 0.2, 0.35</code></pre><br>
                            <strong>I want to change my carrying weight</strong>
                            <p>In config/misc you'll find the actor.ltx, and in the config root you'll find system.ltx, and in both config files you'll pretty easily find the variables responsible for weight limit "max_weight".<br>AMK separates the [inventory] section into a separate file, inventory_sect.ltx.</p>
                            <strong>I'm sick of the inventory scrolling when dropping stuff</strong>
                            <p>Open inventory_new.xml, overwite with this:</p>
                            <pre><code>dragdrop_bag x="22" y="33" width="340" height="442"
cell_width = "25" cell_height="25" rows_num="17" cols_num="12"<br>unlimited="1" group_similar="1"/></code></pre><br>
                            <strong>I want moar artifacts</strong>
                            <p>Open inventory_new.xml, overwite with this:</p>
                            <pre><code>dragdrop_belt x="590" y="118" width="410" height="104"
cell_width = "40" cell_height="40" rows_num="2" cols_num="10"/></code></pre><br>
                            <strong>I want to pick up items from x meters away</strong>
                            <p>Edit take_dist = x in system.ltx</p>
                            <strong>I want to detect items from x meters away</strong>
                            <p>Edit pickup_info_radius = x in actor.ltx</p>
                            <strong>I'm afraid of the dark</strong>
                            <p>Edit light_night.ltx:</p>
                            <pre><code>range = 90
range_r2= 90
color = 0.9,0.9,0.9,0.5
color_r2 = 0.9,0.9,0.9,0.5
omni_range = 0.5
omni_range_r2 = 0.5
omni_color = 1.0,1.0,1.0,0.5
omni_color_r2 = 1.0,1.0,1.0,0.5
spot_angle = 90
glow_radius = 0.3</code></pre><br>
                            <strong>I want to run at sanic speeds</strong>
                            <p>Edit actor.ltx:</p>
                            <pre><code>jump_speed = 13.0
crouch_coef = 0.65
climb_coef = 1.0
run_coef = 2.5
sprint_koef = 3.0
run_back_coef = 3.0
walk_back_coef = 3.0

ph_crash_speed_min = 50
ph_crash_speed_max = 150
ph_collision_damage_factor = 0.0

Leap buildings in a single bound?

jump_speed = 50.0</code></pre>
                            <p>NOTE: notice "walk_back_coef = 3.0"?<br>This means when you drag a body, if you walk backwards you can drag it at running speed!!!!.... just don't run your arse into a sprinboard.</p>
                            <strong>Remove the ironsights zoom</strong>
                            <p>Edit all the w_*.ltx files and set scope_zoom_factor = 60 for no zoom.</p>
                            <strong>Edit blowout frequency (CS and CoP)</strong>
                            <p>The relevant file is gamedata\config\blowout.ltx which should look like<br>[blowout_period] enabled = X time = Y shift = Z<br>Enabled is on (1) off (0)<br>"Time" is the mean time period measured in (in-game) minutes, for example you want a blowout four times per week then set it to 2520.0<br>"Shift" is the uncertainty about the average period between blowouts. Using in-game minutes, so if you want the period to be a day then it should be 1440, or 720 for half a day</p>
                            <strong>Remove the <a href="http://i.imgur.com/bZj3e.jpg">hit probability</a></strong>
                            <p>In weapons.ltx under [bullet_manager] change hit_probability_max_dist from 10 to something like 1000001<br>This increases the distance at which dice rolls takes effect to one that exceeds the distance for any sort of engagement in the game, thus eliminating it.<br>Also, you shouldn't forget to modify the k_dist of each bullet type, and the fire_distance of each weapon to their real world equivalents.<br>Once this is done, none of the bullets will disappear mid-flight. -- FatalFunnel</p>
                            <strong>Autumn Aurora 2 style crosshair</strong>
                            <img class="image left" src="images/aa2_crosshair.png" width="122" height="122"/>
                            <p>In gamedata\config\system.ltx under [hud_cursor], change cross_length from 0.015 to 0.0015 for the AA2 minimal crosshair.</p>
                            
						</div>
					</section>
                
                <!-- SoC Modding -->
					<section id="soc" class="one">
						<div class="container">
                            <a class="image featured"><img src="images/plsnomore.jpg" alt="" /></a>

							<header>                           
								<h2>S.T.A.L.K.E.R.: Shadow of Chernobyl</h2>
                                <h6>Не понимаю... ничего не понимаю</h6>
							</header>
                            <strong>Patching instructions</strong>
							<p>Mods for SoC usually require either 1.0004 or 1.0005/6. This is why reading readmes is a really good idea, as well as any other information you can find. The Steam version is now patched to 1.0006. You'll find the 1.0004 patches in the repository.<br> <a href="images/downgrade.png">How to downgrade.</a></p>
                            <strong>The STARTER pack</strong>
                            <p>It contains ZRP, a <a href="http://www.metacognix.com/stlkrsoc/BugsInSTALKER.html">bug-fixing</a> mod with a powerful modifier for the game files, as well a bunch of graphical mods (Textures, shaders and weather overhaul).<br>You can find it in the repo. Refer to the <a href="http://steamcommunity.com/sharedfiles/filedetails/?id=121125400#10895">Zone Manual</a> for installation instructions.</p>
                            <strong>AMK</strong>
                            <p>Done with vanilla/ZRP ? Want some extra challenge and features? Then try out the "defining" Stalker mod, <a href="http://www.amk-team.ru/forum/index.php?showtopic=480">AMK1.4.</a><br><br>This mod changes almost every aspect of the game, from the gameplay to the design, and also adds a lot of new features (blowout, dynamic anomalies, random weather, complex sleep system, artefact modification, stalker IM network, dynamic HUD, detectors, new weapons, quests and a lot of more) as well as improves the game balance.<br><br>Downgrade to 1.0004, then run Amk 1.4 setup, then AMK EN patch final. Install AMK Retranslated last.</p>							
                            <strong>AMK - Troubleshooting</strong>
                            <p><strong>Steam/1.0005 patch:</strong> you also need to do couple manual tweaks:<br>-First, locate a file called "xrs_grenade.script" in the gamedata/scripts, and delete it.<br>-Next, you need to add a sound-file names "groza_silenced.ogg" into gamedata/sounds/weapons. Either rip it from any other mod, or simply copy ANY soundfile and rename it.<br><br><strong>Graphics:</strong> You can use same graphical mods found in STARTER PACK with AMK. In case of SWO2.2, remember to apply its own AMK-patch last, or your game will crash!<br>[#FDL] = Full Dynamic Lighting, [#SL] = Static Lighting.<br><br><strong>dBodystate CTD:</strong> Use <a href="http://pastebin.com/81sNfVfq">one</a> of these <a href="http://pastebin.com/9iZmEfym">two</a> fixes.<br><br><strong>Save corruption:</strong> Follow <a href="http://pastebin.com/DjnG3gFv">these instructions</a> to fix your saves.</p>
                            <strong>ZoA - Zone of Alienation</strong>
                            <p>The <a href="http://www.moddb.com/mods/zone-of-alienation-mod/">AMK-based mod</a> by our very own FatalFunnel and TKGP, play this when you're ready to completely embrace the Zone. It introduces new weapons and ballistics, with a magazine system, improved AI, increased difficulty and offers a more hardcore and realistic gameplay overall. Don't forget to read the <a href="http://pastebin.com/pKBibDLS">FAQ!</a></p>
                            

						</div>
					</section>
			
			
			</div>

		<!-- Footer -->
			<div id="footer">
				
				<!-- Copyright -->
					<div class="credits">
						<p>Inspired by /w/'s <a href="http://nanami-tan.info">Nanami-tan</a></p>
						<!--<ul class="menu">-->
                        <p>4chan.org <a href="http://4chan.org/vg/">/vg/</a> - Particularly our beloved S.T.A.L.K.E.R. general</p>
                        <p><strong>Special Thanks:</strong> the hard working anons in charge of the pasta, the knowledgeable ones sticking around and contributing over the years</p>
                        <p><strong>Thanks:</strong> Ardias for his build repository, every single mod author especially FatalFunnel and TKGP, OVH for their Cheapsufis</p>
                        <ul class="menu">
                            <li><strong>Original Inspirations:</strong> xDemonessx, yttrium</li>
                            <li><strong>Designers:</strong> <a href="http://html5up.net">HTML5 UP</a> &amp; <a href="http://neizu.deviantart.com/">neizu</a></li>
							<li><strong>Contributors:</strong> Anonymous</li>
							<li><strong>DOGE:</strong> DS4CWXSZKVw15zk4ffhb3VgNGAVb97jTz7</li>
						</ul>
					</div>
				
			</div>

	</body>
</html>
