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

	.items-listing-options {
		padding: 2px 0;
		width: 146px;
		display: table;
		margin: 0 auto;
		margin: 8px  auto 22px auto;
	}

	.listing-options-btn {
		border-radius: 0 !important;
	}

	#menu-outer {
		margin-bottom: 8px;
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
			min-width: 120px;
			border-bottom: none;
		}

		/* Option 1 - Display Inline */
		.nav li {
			display: inline-block;
			margin-right: -4px;
		}
		.nav li a:hover {
			color: #444;
			background-color: #FFF;
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

.nav ul {
	list-style: none;
	background-color: #444;
	text-align: center;
	padding: 0;
	margin: 0;
}

.nav li {
	font-family: 'Oswald', sans-serif;
	line-height: 40px;
	height: 40px;
	border-bottom: 1px solid #888;
}

.nav a {
	text-decoration: none;
	color: #fff;
	display: block;
	transition: .3s background-color;
}

.nav a:hover {
	background-color: #005f5f;
}

.nav a.active {
	background-color: #fff;
	color: #444;
	cursor: default;
}

</style>

<div class="left-nav-main-nav">
	<div class="site-logo"><span class="glyphicon glyphicon-th" aria-hidden="true"></span></div>
	<div class="site-name">
		<span class="site-name-main-txt">CART</span></br>
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
					<span class="glyphicon glyphicon-share quick-access-personals" aria-hidden="true">
					</li>
				</ul>
			</div>
		</div>

		<div class="items-listing-options">
			<div class="row">
				<!-- Split button -->
				<div class="btn-group">
					<button type="button" class="btn btn-info listing-options-btn">Listing options</button>
					<button type="button" class="btn btn-info dropdown-toggle listing-options-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

		<div class="nav">
			<ul>
				<li class="tutorials"><a class="active" href="#">About CART</a></li>
				<li class="news"><a href="#">Blog</a></li>
				<li class="contact"><a href="#">Contact</a></li>
			</ul>
		</div>
	</div>