<?php
$properties = get_object_vars($content['body']['#object']);
?>
	<div id="wrap-event">

		<div class="title-event">
			<h1 class="title" <?php print $title_attributes; ?>><?php print $title; ?></h1>
		</div>


		<div class="panel panel-default">
			<div class="avatar-event">
				<?php
					if(!empty($properties['field_avatar_project']['und'][0]['filename']))
					{
				?>
					<img src=<?php print "/sites/default/files/" . $properties['field_avatar_project']['und'][0]['filename'] ?> />
				<?php
					}
				?>
				
			</div>

	      <div class="clear"></div>
	      <div class="content-event" <?php print $content_attributes; ?>>
		        <?php
		          // Hide comments and links now so that we can render them later.
		          // print render($content['comments']);
		          // hide($content['links']);
		          
		          print $properties['body']['und'][0]['value'];

		          // print render($content);
		        // print_r();
		        ?>
		        
	      </div>

	      <div class="clear"></div>

	      <div class="comments-event">
	      	<?php
	      		print render($content['comments']);
	      	?>
	      </div>
		</div>
	</div>