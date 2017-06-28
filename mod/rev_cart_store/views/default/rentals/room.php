<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style type="text/css">
	.container {
		border-top: 22px solid #687073;
	}
	
	.main-iitem-icon {
		width: 100%;
		height: auto;
	}

	.edit-profile-options {
		margin-top: 12px;
		font-size: 90%;
	}

	.pll, .phl {
		padding-left: 0 !important;
	}

	.extras-content-title-text {
		font-size: 90%;
		font-weight: bold;
	}

	.pics-profile-wrapper > .elgg-list > li {
		padding-right: 0;
		border: none;
	}

	.room-details-profile-wrapper {
		padding-top: 12px;
		margin-left: 7px;
	}
	
	.elgg-photo {
		border: 1px solid #dff0d8 !important;
		padding: 5px;
		background-color: #FFF;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		max-width: 100% !important;
		height: auto;
	}

	.elgg-module-tidypics-album, .elgg-module-tidypics-image {
		width: 100% !important;
		text-align: left;
		margin: 5px 5px;
	}

	.tidypics-gallery-widget > li {
		width: auto !important;
	}
	
	.elgg-photo {
		border: 1px solid #dff0d8 !important;
		padding: 5px;
		background-color: #FFF;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		max-width: 100% !important;
		height: auto;
	}

	.tidypics-gallery-widget > li {
		width: 86px !important;
		margin: 3px;
	}

	.profile-options-container {
		margin-top: 48px;
	}

	.user-stats {
		padding: 5px;
		padding-bottom: 10px;
		margin-top: 5px;
		min-height: 123px;
		border: 1px solid #dff0d8;
		border-right: none;
		background-color: #F7F7F7;
	}

	.anchor-view {
		margin-top: 2px;
	}

	.anchor-view-icon {
		font-size: 100%;
	}

	.pointing-text {
		font-size: 90%;
		color: #666 !important;
		font-weight: bold;
	}

	.pointing-text-tell {
		font-size: 87%;
		color: #666 !important;
	}

	.a-cast-wrapper {
		float: left;
	}

	.check-out-wrapper {
		margin-left: 4px;
	}

	.a-cast {
		font-size: 37px;
		color: blue !important
		float: left;
	}

	.a-cast-point-txt {
		font-size: 17px;
		color: blue !important;
		margin-left: -8px;
	}

	.a-cast-add-minus {
		font-size: 19px;
	}

	.pointer-options .fa-thumbs-o-up {
		color: blue !important;
	}

	.pointer-options .fa-bookmark-o {
		color: blue !important;
	}

	.pointer-options .fa-plus-square-o {
		color: #31DE0D !important;
	}

	.pointer-options .fa-minus-square-o {
		color: #FF4F90 !important;
	}

	.reserve-button {
		font-size: 100%;
		font-weight: 500;
		color: #FFF;
		cursor: pointer;
		text-align: center;
		padding: 4px 10px;
		margin-left: 4px;
		width: 172px;
		border: 1px solid #dff0d8;
		background-color: #74B52C;
	}

	.reserve-button a {
		color: #FFF !important;
	}

	.reserve-button-occupied {
		background-color: #E8317C !important;
	}

	.reservation-requests-container {
		margin-left: 7px;
	}

	.reserve-button-approval-pending {
		background-color: #FFAC55 !important;
	}

	.reservation-button-approved {
		background-color: #11DD21 !important;
	}

	.check-out-tell {
		font-size: 100%;
		font-weight: 500;
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

<?php 

$form_vars = array('enctype' => 'multipart/form-data');
echo elgg_view_form('service_comments/add_service_comment', $form_vars);

?>

<div>
	<div class="row">
		<div class="col-xs-12 col-sm-3 col-md-3">
			<?php echo elgg_view('gallery/item/details', array('entity' => $room)); ?>
		</div>
		<div class="col-sm-9 col-md-9">
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
</div>
</div>