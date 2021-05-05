<?php if(isset($current_gallery_images) && is_array($current_gallery_images)){ ?>
	<div id="large_diapo_kamino" class="large-diapo">
<?php	
	}
	//$legende_diapo = '';
?>
    <div class="view_all_articles">
    	<a href="<?php echo $all_diaporama; ?>">{{ __('See all galeries', 'sage') }}</a>
    </div>
	<div class='block_diapo'>
		<div class='visu_block'>
			<?php do_action('before_block_gallery');?> 
			<span class='btn-navs _left p-4 bg-black border-white' data-index='0' data-count='<?php echo $attachments_count; ?>'>&nbsp;</span>
			<span class='btn-navs _right p-4 bg-black border-white' data-index='1' data-count='<?php echo $attachments_count; ?>'>&nbsp;</span>
			<figure>
				<img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src='<?php echo $attachments[0]['full'][0]; ?>' alt='' />
			</figure>


			<div class='list_thumbs'>
				<div class='list_block hidden-xs'>
					<ul class='list-inline'>
					<?php
						$i_gal = 0;
						foreach ($attachments as $attachment) {
							$class_active = ($i_gal == 0) ? " class='active'" : "";
							?>
							<li <?php echo $class_active ; ?> data-src="<?php echo $attachment['full'][0]; ?>" >
							</li>
						<?php
							$i_gal++;
						}
					?>
					</ul>
				</div>
			</div>

		</div>
		<figcaption>
			<?php 
			if( isset($current_gallery_images) && is_array($current_gallery_images)){
				include ( dirname(__FILE__).'/diapo-legend.php');
			}
			?>
		</figcaption>
	</div>
<?php if(isset($current_gallery_images) && is_array($current_gallery_images)){?>
	</div>
<?php } ?>