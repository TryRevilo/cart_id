<style type="text/css">
	.main-iitem-icon {
		width: 100%;
		height: auto;
	}
</style>
<?php 
$room = elgg_extract('entity', $vars, FALSE);
$room_owner = $room -> getOwnerEntity();
$room_owner_guid = $room_owner -> guid;
$room_guid = $room -> guid;

$owner_names = $room_owner -> name;

      // Check if room occupied

$db_prefix = elgg_get_config('dbprefix');

?>

<div class="row">
	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
		<?php echo elgg_view('gallery/item/details', array('entity' => $room)); ?>
	</div>
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
		<?php
		$icon = elgg_view_entity_icon($room, 'large', array(
			'use_hover' => false,
			'use_link' => false,
			'img_class' => 'photo u-photo main-iitem-icon',
			));
		echo $icon;
		?>
		<div class="pics-profile-wrapper">
			<?php
			$container_guid = $room -> guid;
			$db_prefix = elgg_get_config('dbprefix');

			$image_html = elgg_get_entities(array(
				'type' => 'object',
				'subtype' => 'image',
				'joins' => array("join {$db_prefix}entities u on e.container_guid = u.guid"),
				'wheres' => array("e.container_guid = {$container_guid}"),
				'order_by' => "e.time_created desc",
				'limit' => 55,
				));

			$content_array = array(
				'entities' => $image_html,
				'default_picture' => $image_html[0],
				);

			echo elgg_view('albums/list', $content_array);

			?>
		</div>
		<style type="text/css">
			.carousel-control {
				padding-top:10%;
				width:5%;
			}
		</style>
	</div>
</div>
