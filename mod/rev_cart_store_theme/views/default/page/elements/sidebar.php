<style type="text/css">

	a:hover {
		text-decoration: none !important;
	}

	.left-nav-main-nav {
		width:100%;
	}
	
	.site-logo {
		font-size: 50px;
		color: #E8AD0C;
		text-align: center;
		margin: 12px auto 4px auto;
	}

	.site-name {
		text-align: center;
		padding: 0 5px;
		margin: 4px auto;
	}

	.site-name-main-txt {
		font-size: 32px;
		font-weight: bold;
		line-height: 32px;
	}

	.site-name-desc {
		font-size: 13px;
		color: #E8AD0C;
		font-weight: bold;
	}

	.quick-access-personals {
		font-size: 18px;
		color: #737368;
		padding: 2px 4px;
	}

	.table {
		text-align: center;
		display: table;   /* Allow the centering to work */
		margin: 0 auto;
	}

	ul#horizontal-list {
		list-style: none;
	}
	ul#horizontal-list li {
		display: inline;
	}

	@media screen and (min-width: 600px) {
		.nav li {
			min-width: 100%;
			border-bottom: none;
		}

		/* Option 1 - Display Inline */
		.nav li {
			display: inline-block;
		}
		.nav li a:hover {
			color: #444;
			background-color: #DEE4C3;
		}

  /* Options 2 - Float
  .nav li {
    float: left;
  }
  .nav ul {
    overflow: auto;
    width: 600px;
    margin: 0 auto;
  }
  .nav {
    background-color: #444;
  }
  */
}

.add-new-item {
	color: #325F87;
	font-size: 32px;
	text-align: center;
	margin-top: 4px;
	margin-bottom: 22px;
}

.items-listing-options {
	padding: 2px 0;
	width: 146px;
	display: table;
	margin: 0 auto;
	margin: 8px  auto 22px auto;
}

.listing-options-btn {
	background-color: #FFF !important;
	border-radius: 0 !important;
}

.btn-group>.btn+.dropdown-toggle {
	padding-right: 8px;
	padding-left: 8px;
	min-height: 34.67px;
}

.btn-primary-outline {
	background-color: transparent;
	border-color: #CCC !important;
}

button:focus {
	outline: 0 !important;
}

/** ABOUT SITE NAV **/

.nav ul {
	list-style: none;
	text-align: center;
	padding: 0;
	margin: 0;
}

.nav li {
	font-family: 'Oswald', sans-serif;
	line-height: 40px;
	height: 40px;
	border-bottom: 1px solid #DEE4C3;
}

.nav a {
	text-decoration: none;
	color: #444;
	display: block;
	transition: .3s background-color;
}

.nav a:hover {
	background-color: #005f5f;
}

.nav a.active {
	color: #444;
	cursor: default;
	background-color: #fff;
	border: none;
}

/** END ABOUT SITE NAV **/

</style>

<!-- HID ITEMS FOOT -->

<style type="text/css">
	/* For mobile phones: */
	.header-top {
		display:block;
	}
	.header-bottom {
		display:none;
	}
	@media only screen and (min-width: 600px) {
		/* For tablets: */
		.header-top {
			display:block;
		}
		.header-bottom {
			display:none;
		}
	}
	@media only screen and (min-width: 768px) {
		/* For desktop: */
		.header-top {
			display:none;
		}
		.header-bottom {
			display:block;
		}
	}
	
</style>

<div class="left-nav-main-nav">
	<div class="site-logo"><span class="glyphicon glyphicon-th" aria-hidden="true"></span></div>
	<div class="site-name">
		<span class="site-name-main-txt">CART</span>
		<br>
		<span class="site-name-desc">- Shopping ART -</span>
	</div>

	<div id="menu-outer">
		<div class="table">
			<ul id="horizontal-list">
				<li><span class="glyphicon glyphicon-user quick-access-personals" aria-hidden="true"></li>
				<li><span class="glyphicon glyphicon-cog quick-access-personals" aria-hidden="true"></li>
				<li><span class="glyphicon glyphicon-shopping-cart quick-access-personals" aria-hidden="true"></li>
				<li><span class="glyphicon glyphicon-search quick-access-personals" aria-hidden="true"></li>
				<li>
					<span class="glyphicon glyphicon-share quick-access-personals" aria-hidden="true"></span>
				</li>
			</ul>
		</div>
	</div>

	<div class="add-new-item">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></li></span>
	</div>

	<div class="items-listing-options">
		<div class="row">
			<!-- Split button -->
			<div class="btn-group">
				<button type="button" class="btn btn-primary-outline listing-options-btn">Listing options</button>
				<button type="button" class="btn btn-primary-outline dropdown-toggle listing-options-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="caret"></span>
					<span class="sr-only">Toggle Dropdown</span>
				</button>
				<ul class="dropdown-menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="#">Separated link</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="nav header-bottom">
		<ul>
			<li class="tutorials"><a class="active" href="#">About CART</a></li>
			<li class="news"><a href="#">Blog</a></li>
			<li class="contact"><a href="#">Contact</a></li>
		</ul>
	</div>
</div>