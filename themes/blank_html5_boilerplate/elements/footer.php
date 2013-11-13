    <footer>
    	
        <span class="powered-by"><a href="http://www.concrete5.org" title="<?php echo t('concrete5 - open source content management system for PHP and MySQL')?>"><?php echo t('concrete5 - open source CMS')?></a></span>
			<a href="http://html5boilerplate.com/" >Theme based on HTML5 ★ Boilerplate</a>
            &copy; <?php echo date('Y')?> <a href="<?php echo DIR_REL?>/"><?php echo SITE?></a>.
			&nbsp;&nbsp;
			<?php echo t('All rights reserved.')?>
			<?php 
			$u = new User();
			if ($u->isRegistered()) { ?>
				<?php  
				if (Config::get("ENABLE_USER_PROFILES")) {
					$userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
				} else {
					$userName = $u->getUserName();
				}
				?>
				<span class="sign-in"><?php echo t('Currently logged in as <b>%s</b>.', $userName)?> <a href="<?php echo $this->url('/login', 'logout')?>"><?php echo t('Sign Out')?></a></span>
			<?php  } else { ?>
				<span class="sign-in"><a href="<?php echo $this->url('/login')?>"><?php echo t('Sign In to Edit this Site')?></a></span>
			<?php  } ?>
		<div id="footer-area">
		<?php 			
			$ah = new Area('Footer');
			$ah->display($c);			
		?>	
        </div>
    </footer>
  </div> <!--! end of #container -->
  
  <!-- JavaScript at the bottom for fast page loading -->
  <?php  Loader::element('footer_required'); ?>

  <!-- scripts concatenated and minified via ant build script-->
  <script src="<?=$this->getThemePath()?>/js/plugins.js"></script>
  <script src="<?=$this->getThemePath()?>/js/script.js"></script>
  <!-- end scripts-->


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>