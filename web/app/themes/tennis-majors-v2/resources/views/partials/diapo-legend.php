<aside class="widget widgetLegende">
	<div class="masc_legende">
		<ul class="lists_legend">
			<?php $i=1;
			foreach ($current_gallery_images as $attachement ){
				?>
				<li>
					<div class="slide_nb"><?php echo $i; ?>/<?php echo $attachments_count; ?></div>
				  	<?php if($attachement->post_title!=""){ ?>
						<div class="legend_title"><?php echo stripslashes(str_replace('&quot;', '"', $attachement->post_title)) ?>
						</div>
					<?php } ?>
					<?php $post_excerpt = stripslashes(str_replace('&quot;', '"', $attachement->post_excerpt));
						if($post_excerpt!=""){ ?>
						<div class="legend_excert">
							<p><?php echo $post_excerpt ;?></p>
						</div>
					<?php } ?>

				</li>
			<?php	
				$i++;
			}?>
		</ul>
	</div>
</aside>
