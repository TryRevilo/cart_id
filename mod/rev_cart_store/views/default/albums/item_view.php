<?php
elgg_require_js('js/campus_rooms/inline_image_view');
$image = elgg_extract('entity', $vars);
$guid = $image -> getGUID();

$img = elgg_view_entity_icon($image, 'medium'); 
?>
<div class="item">
	<?= $img; ?>
</div>