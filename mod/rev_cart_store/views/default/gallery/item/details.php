<style type="text/css">
	.item-price {
		font-size: 27px;
		font-weight: bold;
		border-top: solid 1px #E8950C;
		border-bottom: solid 1px #E8950C;
		padding: 20px 0;
		margin: 20px 0;
	}
	.user-name-by {
		padding: 15px 0 5px 0;
	}
	.username-by-txt {
		font-size: : 13px !important;
	}
	.username-verified-status {
		color: #09EB89;
	}
	.gallery-item-description {
		padding: 8px 0;
		color: #444;
	}
	.buy-options-btn-grp {
		text-align: center;
		padding: 10px 0;
	}


	@media only screen and (min-width: 400px) {
		/* For tablets: */
		.buy-options {
			background-color: #32D187;
			padding: 5px 12px;
			border-radius: 0;
			padding: 6px 8px;
			min-width: 142px;
		}
	}

	@media only screen and (min-width: 768px) {
		/* For tablets: */
		.buy-options {
			font-size: 90%;
			background-color: #32D187;
			padding: 5px 12px;
			border-radius: 0;
			padding: 6px 8px;
			min-width: 111px;
		}
	}
	@media only screen and (min-width: 992px) {
		/* For desktop: */
		.buy-options {
			font-size: 108%;
			font-weight: 700;
			background-color: #32D187;
			padding: 5px 12px;
			border-radius: 0;
			padding: 6px 8px;
			min-width: 134px;
		}
	}
	@media only screen and (min-width: 1170px) {
		/* For desktop: */
		.buy-options {
			font-size: 108%;
			font-weight: 700;
			background-color: #32D187;
			padding: 5px 12px;
			border-radius: 0;
			padding: 6px 8px;
			min-width: 134px;
		}
	}
	
</style>
<?php
$gallery_item = elgg_extract('entity', $vars, FALSE);
$gallery_item_title = $gallery_item -> title;
$gallery_item_description= $gallery_item -> description;

$gallery_item_owner = $gallery_item -> getOwnerEntity();
$gallery_item_owner_names = $gallery_item_owner -> name;
$gallery_item_owner_guid = $gallery_item_owner -> guid;
$gallery_item_guid = $gallery_item -> guid;

$owner_names = $gallery_item_owner -> name;

?>
<ol class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li><a href="#">Library</a></li>
	<li class="active">Data</li>
</ol>
<h3><?= $gallery_item_title; ?></h3>
<div class="user-name-by">
	By <span class="username-by-txt" style="font-size:18px;">  <?= $gallery_item_owner_names; ?></span>  
	<span class="glyphicon glyphicon-eye-open username-verified-status" aria-hidden="true"></span> 
</div>
<div class="item-price">$ 1, 550</div>
<div class="gallery-item-description">
	<?= $gallery_item_description; ?>
</div>

<div class="btn-group buy-options-btn-grp" role="group" aria-label="...">
	<button type="button" class="btn btn-success buy-options">
		<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add To Cart
	</button>
	<button type="button" class="btn btn-success buy-options">
		<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Buy Now
	</button>
</div>