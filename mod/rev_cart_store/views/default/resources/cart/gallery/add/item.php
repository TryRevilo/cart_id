<?php
// make sure only logged in users can see this page
gatekeeper();

$vars = array();
$vars["id"] = "blog-post-edit";
$vars["name"] = "blog_post";
$vars["class"] = "elgg-form-alt";
$vars["enctype"] = "multipart/form-data";

// set the title
// be sure to use ``elgg_echo()`` for internationalization if you need it
$title = "List new Gallery Item";

$form_vars = array('enctype' => 'multipart/form-data');

// add the form to this section
$content = elgg_view_form("gallery/add/item", $form_vars);

// optionally, add the content for the sidebar
$sidebar = "";

// layout the page
$body = elgg_view_layout('one_sidebar', array(
   'content' => $content,
   'sidebar' => $sidebar
));

// draw the page, including the HTML wrapper and basic page layout
echo elgg_view_page($title, $body);