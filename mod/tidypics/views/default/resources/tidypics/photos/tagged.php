<?php
/**
 * Tidypics Tagged Listing
 *
 * List all photos tagged with a user
 */

elgg_gatekeeper();

// Get user guid (of logged in user, so everyone only gets the images their tagged in)
$guid = elgg_get_logged_in_user_guid();

$user = get_entity($guid);

if(!$user || !(elgg_instanceof($user, 'user'))) {
	forward(REFERER);
}

// set up breadcrumbs
elgg_push_breadcrumb(elgg_echo('photos'), 'photos/siteimagesall');
elgg_push_breadcrumb(elgg_echo('tidypics:usertagged'));

$offset = (int)get_input('offset', 0);
$limit = (int)get_input('limit', 16);

if ($user && ($user instanceof ElggUser)) {
	$title = elgg_echo('tidypics:usertag', array($user->name));

	$options = array(
		'relationship' => 'phototag',
		'relationship_guid' => $guid,
		'inverse_relationship' => false,
		'type' => 'object',
		'subtype' => 'image',
		'limit' => $limit,
		'offset' => $offset,
		'full_view' => false,
		'list_type' => 'gallery',
		'gallery_class' => 'tidypics-gallery'
	);
	$result = elgg_list_entities_from_relationship($options);
	if (!empty($result)) {
		$area2 = $result;
	} else {
		$area2 = elgg_echo('tidypics:usertags_photos:nosuccess');
	}
} else {
	$title = elgg_echo('tidypics:usertag:nosuccess');
	$area2 = '';
}

$logged_in_user = elgg_get_logged_in_user_entity();
if (tidypics_can_add_new_photos(null, $logged_in_user)) {
	$url = elgg_get_site_url() . "ajax/view/photos/selectalbum/?owner_guid=" . $logged_in_user->getGUID();
	$url = elgg_format_url($url);
	elgg_register_menu_item('title', array(
		'name' => 'addphotos',
		'href' => 'javascript:',
		'data-colorbox-opts' => json_encode([
			'href' => $url,
		]),
		'text' => elgg_echo("photos:addphotos"),
		'link_class' => 'elgg-button elgg-button-action elgg-lightbox',
	));
}

// only show slideshow link if slideshow is enabled in plugin settings and there are images
if (elgg_get_plugin_setting('slideshow', 'tidypics') && !empty($result)) {
	elgg_require_js('tidypics/slideshow');
	$url = elgg_get_site_url() . "photos/tagged?guid={$user->guid}&limit=64&offset=$offset&view=rss";
	$url = elgg_format_url($url);
	elgg_register_menu_item('title', array(
		'name' => 'slideshow',
		'id' => 'slideshow',
		'data-slideshowurl' => $url,
		'href' => '#',
		'text' => "<img src=\"" . elgg_get_simplecache_url("tidypics/slideshow.png") . "\" alt=\"".elgg_echo('album:slideshow')."\">",
		'title' => elgg_echo('album:slideshow'),
		'link_class' => 'elgg-button elgg-button-action'
	));
}

$body = elgg_view_layout('content', array(
	'filter_override' => '',
	'content' => $area2,
	'title' => $title,
	'sidebar' => elgg_view('photos/sidebar_im', array('page' => 'friends')),
));

// Draw it
echo elgg_view_page($title, $body);
