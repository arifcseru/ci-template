<footer class="footer">
		<div class="container-fluid">
			<nav class="float-left">
				<ul>
					<li><a href="<?php echo base_url(); ?>"> Wingbangla </a></li>
					<li><a href="<?php echo base_url(); ?>aboutus"> <?php echo $this->lang->line('footer_menu_aboutUs_label'); ?> </a></li>
					<li><a href="<?php echo base_url(); ?>latest"> <?php echo $this->lang->line('footer_menu_blog_label'); ?> </a></li>
					<li><a href="<?php echo base_url(); ?>license"> <?php echo $this->lang->line('footer_menu_licenses_label'); ?> </a></li>
				</ul>
			</nav>
			<div class="copyright float-right">
				<!--a href="<?php echo base_url(); ?>" target="_blank"><?php echo $activeCompanyId;?></a-->
					<?php echo $this->lang->line('text_copyright_footer'); ?>
			</div>
		</div>
	</footer>