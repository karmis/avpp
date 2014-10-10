<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
<?php
	if(!empty($row->_field_data['nid']['entity']->field_avatar['und'][0]['filename']))
	{
		$imgRef = "/sites/default/files/" . $row->_field_data['nid']['entity']->field_avatar['und'][0]['filename'];
	}
	else
	{
		$imgRef = "http://www.duila.org/Assets/InformationForBusiness/bannedsign.png.png";
	}

	$title = $row->_field_data['nid']['entity']->title;
	$content = $row->_field_data['nid']['entity']->body['und']['0']['safe_summary'];
	$href = $row->_field_data['nid']['entity']->nid;
	// (print_r($row->_field_data['nid']['entity']));
?>

	
		<div class="panel panel-default">
		  <div class="panel-heading">
			<?php if (!empty($title)) : ?>
				<h3>
					<a href="<?php print $href ?>" style='color:#244594'>
						<?php print $title; ?>
					</a>
					
				</h3>
			<?php endif; ?>
		  </div>
		  <div class="panel-body">
		    <div style="float:left; width:260px;">
		    	<img src="<?php print $imgRef; ?>" style="width:250px;" />
		    </div>

		    <div style="float:left; width:450px;min-height: 50px;" class="panel panel-body panel-default">
		    	<?php print $content; ?>
		    </div>
		    <div class="clearfix"></div>
		    	<a href="<?php print $href ?>" style="float:right">
		    		<button class="btn-avpp">Подробнее</button>
		    	</a>
		  </div>
		</div>




