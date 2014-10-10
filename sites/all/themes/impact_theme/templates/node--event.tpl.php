<?php
$properties = get_object_vars($content['body']['#object']);
$startEventDate = $properties['field_event_date']['und'][0]['value'];
$endEventDate = $properties['field_event_date']['und'][0]['value2'];

$weekdays = array();
$weekdays[] = 'Воскресенье';
$weekdays[] = 'Понедельник';
$weekdays[] = 'Вторник';
$weekdays[] = 'Среда';
$weekdays[] = 'Четверг';
$weekdays[] = 'Пятница';
$weekdays[] = 'Суббота';

$months = array();
$months[] = 'Январь';
$months[] = 'Февраль';
$months[] = 'Март';
$months[] = 'Апрель';
$months[] = 'Май';
$months[] = 'Июнь';
$months[] = 'Июль';
$months[] = 'Август';
$months[] = 'Сентябрь';
$months[] = 'Октябрь';
$months[] = 'Ноябрь';
$months[] = 'Декабрь';

$weekdayStart = $weekdays[date('w',strtotime($startEventDate))];
$monthStart = $months[date('n', strtotime($startEventDate))];
$dayStart = date('j', strtotime($startEventDate));
$yearStart = date('Y', strtotime($startEventDate));


if (strtotime($endEventDate) !== strtotime($startEventDate)) {
$weekdayEnd = $weekdays[date('w',strtotime($endEventDate))];
$monthEnd = $months[date('n', strtotime($endEventDate))];
$dayEnd = date('j', strtotime($endEventDate));
$yearEnd = date('Y', strtotime($endEventDate));
}

?>


	<div id="wrap-event">

		<div class="title-event">
			<h1 class="title" <?php print $title_attributes; ?>><?php print $title; ?></h1>
		</div>


		<div class="panel panel-default">
			<div class="avatar-event">
				<?php
					if(!empty($properties['field_avatar']['und'][0]['filename']))
					{
				?>
					<img src=<?php print "/sites/default/files/" . $properties['field_avatar']['und'][0]['filename'] ?> />
				<?php
					}
				?>
				
			</div>

			<div class="date-event">
				<time datetime="2014-09-24" class="date-as-calendar position-em size2x">
					<span class="weekday"><?php print $weekdayStart ?></span>
					<span class="day"><?php print $dayStart ?></span>
					<span class="month green"><?php print $monthStart ?></span>
					<span class="year"><?php print $yearStart ?></span>
				</time>
			</div>

			<?php
				if (strtotime($endEventDate) !== strtotime($startEventDate)) {
			?>
			<div class="date-event">
				<time datetime="2014-09-24" class="date-as-calendar position-em size2x">
					<span class="weekday"><?php print $weekdayEnd ?></span>
					<span class="day"><?php print $dayEnd ?></span>
					<span class="month red"><?php print $monthEnd ?></span>
					<span class="year"><?php print $yearEnd ?></span>
				</time>
			</div>
			<?php
				}
			?>

	      <div class="clearfix"></div>
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
	      
	      <div class="clearfix"></div>
	      
	      <div class="tags-event">
			<ul class="tags">
			<?php 
				$items = field_get_items('node', $node, 'field_tags_field');
				if (!empty($items))
				{
					foreach ($items as $item)
					{
						if(!empty($item)){
							$fc = field_collection_field_get_entity($item);
							$fcInfo = get_object_vars($fc);
							print "<li><a href='#'>".$fcInfo['field_tags_field_item']['und'][0]['value']."</a></li>";
						}
					}
				}

			?>
			</ul>

	      </div>

	      <div class="clearfix"></div>

	      <div class="comments-event">
	      	<?php
	      		print render($content['comments']);
	      	?>
	      </div>
		</div>
	</div>