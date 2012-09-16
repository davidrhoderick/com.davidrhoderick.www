<!-- <?= $this->load->view('home/promo'); ?> -->

<section class="main">
	<div class="frame cfx">

		<section class="left_column">
			<?= $this->load->view('modules/about'); ?> <!-- Why isn't this displaying -->
			<?= $this->load->view('modules/pieces'); ?>
		</section>
		<section class="sidebar">
			<?= $this->load->view('modules/mediaplayer'); ?>
		</section>
	</div>
</section><!-- end main section -->