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
	
	// die(print_r($row->_field_data['nid']['entity']));

	if(!empty($row->_field_data['nid']['entity']->field_avatar_project['und'][0]['filename']))
	{
		$imgRef = "/sites/default/files/" . $row->_field_data['nid']['entity']->field_avatar_project['und'][0]['filename'];
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


<div class="panel panel-default" style="width: 830px;">
	<div class="panel-heading" style="background-color:#eee;height:18px;padding:13px;">
		<a href="<?php print $href; ?>" class='label-avpp label'>
			<?php print $title; ?>
		</a>
	</div>
	<div class="panel-body" style="min-height: 0px;">
		<?php
			print $content;
		?>

		<div class="clear"></div>

		<a href="<?php print $href ?>" style="float:right">
			<button class="btn-avpp">Ознакомиться</button>
		</a>
	</div>
</div>

