<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	<!-- Mobile specific metas  -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200italic,300,300italic,400,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Source+Code+Pro:400,500,600,700,300' rel='stylesheet' type='text/css'>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

	<!-- font-awesome & simple line icons CSS -->
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.css" media="all">
	<link rel="stylesheet" type="text/css" href="/css/simple-line-icons.css" media="all">

		<!-- owl.carousel CSS -->
	<link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="/css/owl.theme.css">

		<!-- animate CSS  -->
	<link rel="stylesheet" type="text/css" href="/css/animate.css" media="all">

	<!-- flexslider CSS -->
	<link rel="stylesheet" type="text/css" href="/css/flexslider.css" >

	<!-- Nivo Slider CSS -->
	<link href="/css/nivo-slider.css" rel="stylesheet">

	<!-- style CSS -->
	<link rel="stylesheet" type="text/css" href="/css/style.css" media="all">

	<!-- shortcodes -->
	<link rel="stylesheet" media="screen" href="/css/shortcodes/shortcodes.css" type="text/css" />

	<!-- accordion -->
	<link rel="stylesheet" type="text/css" href="/js/accordion/accordion.css" />

	<!-- tooltips -->
	<link rel="stylesheet" href="/js/tooltips/tooltip.css" />

	<!-- popup newsletter css -->
	<link rel="stylesheet" href="/css/popup-newsletter.css">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">

		<div id="header">
			<div class="header-container">
		      <div class="container">
		        <div class="row">
		          <div class="col-sm-4 col-md-3 col-xs-12"> 
		            <!-- Header Logo -->
		            <div class="logo"><a title="e-commerce" href="index.php"><img alt="e-commerce" src="/images/logo-blue.png"></a> </div>
		            <!-- End Header Logo --> 
		          </div>
		          <div class="col-xs-8 col-sm-4 col-md-6 hidden-xs">
		            <div class="support-client">
		              <div class="row">
		                <div class="col-md-6 col-sm-10">
		                  <div class="box-container free-shipping">
		                    <div class="box-inner">
		                      <h2>Free shipping</h2>
		                      <p>On order over $199</p>
		                    </div>
		                  </div>
		                </div>
		                <div class="col-sm-6 hidden-sm">
		                  <div class="box-container money-back">
		                    <div class="box-inner">
		                      <h2>Money back 100%</h2>
		                      <p>Within 30 Days after delivery</p>
		                    </div>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		          <!-- top cart -->
		          
		          <div class="col-lg-3 col-xs-12 top-cart">
		            <div class="mm-toggle-wrap">
		              <div class="mm-toggle"> <i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
		            </div>
		            <div class="top-cart-contain">
		              <div class="mini-cart">
		                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#"><i class="fa fa-shopping-cart"></i><span class="cart-title">Shopping Cart (4)</span></a></div>
		                <div>
		                  <div class="top-cart-content">
		                    <div class="block-subtitle">Recently added item(s)</div>
		                    <ul id="cart-sidebar" class="mini-products-list">
		                      <li class="item odd"> <a href="#" title="Ipsums Dolors Untra" class="product-image"><img src="/images/img07.jpg" alt="Lorem ipsum dolor" width="65"></a>
		                        <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
		                          <p class="product-name"><a href="#">Lorem ipsum dolor sit amet Consectetur</a> </p>
		                          <strong>1</strong> x <span class="price">$20.00</span> </div>
		                      </li>
		                      <li class="item even"> <a href="#" title="Ipsums Dolors Untra" class="product-image"><img src="/images/img18.jpg" alt="Lorem ipsum dolor" width="65"></a>
		                        <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
		                          <p class="product-name"><a href="#">Consectetur utes anet adipisicing elit</a> </p>
		                          <strong>1</strong> x <span class="price">$230.00</span> </div>
		                      </li>
		                      <li class="item last odd"> <a href="#" title="Ipsums Dolors Untra" class="product-image"><img src="/images/img10.jpg" alt="Lorem ipsum dolor" width="65"></a>
		                        <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
		                          <p class="product-name"><a href="#">Sed do eiusmod tempor incidist</a> </p>
		                          <strong>2</strong> x <span class="price">$420.00</span> </div>
		                      </li>
		                    </ul>
		                    <div class="top-subtotal">Subtotal: <span class="price">$520.00</span></div>
		                    <div class="actions">
		                      <button class="btn-checkout" type="button"><i class="fa fa-check"></i><span>Checkout</span></button>
		                      <button class="view-cart" type="button"><i class="fa fa-shopping-cart"></i> <span>View Cart</span></button>
		                    </div>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
		</div>

		<!-- Start Navigation --> 
	<nav>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3">
          <div class="mega-container visible-lg visible-md visible-sm">
            <div class="navleft-container">
              <div class="mega-menu-title">
                <h3>Category</h3>
              </div>
              <div class="mega-menu-category">
                <ul class="nav">
                  <li> <a href="#">Home</a></li>
                  <li> <a href="#">Page</a>
                    <div class="wrap-popup">
                      <div class="popup">
                        <div class="row">
                          <div class="col-sm-6">
                            <ul class="nav">
                              <li><a href="shop_grid.php"><span>Shop grid</span></a></li>
                              <li><a href="shop_grid_left_sidebar.php"><span>Shop grid left sidebar</span></a></li>
                              <li><a href="shop_list.php"><span>Shop List</span> </a></li>
                              <li><a href="shop_list_left_sidebar.php"><span>Shop List left sidebar</span> </a></li>
                              <li> <a href="single_product.php"><span>Single Product</span></a></li>
                              <li><a href="single_product_left_sidebar.php"><span>Single Product left sidebar</span></a></li>
                              <li><a href="single_product_right_sidebar.php"><span>Single Product right sidebar</span></a></li>
                              <li><a href="shopping_cart.php"><span>Shopping Cart</span></a></li>
                              <li><a href="quick_view.php"><span>Quick View</span></a></li>
                            </ul>
                          </div>
                          <div class="col-sm-6 has-sep">
                            <ul class="nav">
                              <li><a href="wishlist.php"><span>Wishlist</span></a></li>
                              <li><a href="checkout.php"><span>Checkout</span></a></li>
                              <li><a href="compare.php"><span>Compare</span></a></li>
                              <li><a href="contact_us.php"><span>Contact us</span></a></li>
                              <li><a href="404error.php"><span>404 Error Page</span></a></li>
                              <li><a href="about_us.php"><span>About us</span></a></li>
                              <li><a href="sitemap.php"><span>Sites Map</span></a></li>
                              <li><a href="faq.php"><span>FAQ</span></a></li>
                              <li><a href="coming_soon.php"><span>Coming Soon</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li> <a href="#">Women</a>
                    <div class="wrap-popup">
                      <div class="popup">
                        <div class="row">
                          <div class="col-md-4 col-sm-6">
                            <h3>Dresses</h3>
                            <ul class="nav">
                              <li><a href="shop_grid.php">Accessories</a></li>
                              <li><a href="shop_grid.php">Hats and Gloves</a></li>
                              <li><a href="shop_grid.php">Lifestyle</a></li>
                              <li><a href="shop_grid.php">Bras</a></li>
                            </ul>
                            <br>
                            <h3>Shoes</h3>
                            <ul class="nav">
                              <li> <a href="shop_grid.php">Flat Shoes</a> </li>
                              <li> <a href="shop_grid.php">Flat Sandals</a> </li>
                              <li> <a href="shop_grid.php">Boots</a> </li>
                              <li> <a href="shop_grid.php">Heels</a> </li>
                            </ul>
                          </div>
                          <div class="col-md-4 col-sm-6 has-sep">
                            <h3>Jwellery</h3>
                            <ul class="nav">
                              <li> <a href="shop_grid.php">Bracelets</a> </li>
                              <li> <a href="shop_grid.php">Necklaces &amp; Pendent</a> </li>
                              <li> <a href="shop_grid.php">Pendants</a> </li>
                              <li> <a href="shop_grid.php">Pins &amp; Brooches</a> </li>
                            </ul>
                            <br>
                            <h3>Swimwear</h3>
                            <ul class="nav">
                              <li> <a href="shop_grid.php">Swimsuits</a> </li>
                              <li> <a href="shop_grid.php">Beach Clothing</a> </li>
                              <li> <a href="shop_grid.php">Clothing</a> </li>
                              <li> <a href="shop_grid.php">Bikinis</a> </li>
                            </ul>
                          </div>
                          <div class="col-md-4 has-sep hidden-sm">
                            <div class="custom-menu-right">
                              <div class="box-banner media">
                                <div class="add-desc">
                                  <h3>New Jeans<br> collection </h3>
                                  <div class="price-sale">2016</div>
                                  <a href="#">Shop Now</a> </div>
                                <div class="add-right"><img src="images/menu-img1.jpg" alt=""></div>
                              </div>
                              <div class="box-banner media">
                                <div class="add-desc">
                                  <h3>Save up to</h3>
                                  <div class="price-sale">70 <sup>%</sup><sub>off</sub></div>
                                  <a href="#">Shopping Now</a> </div>
                                <div class="add-right"><img src="images/menu-img2.jpg" alt=""></div>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        <br>
                        <a href="#" class="ads"><img alt="" src="images/menu-img3.jpg" class="img-responsive"></a> </div>
                    </div>
                  </li>
                  <li> <a href="#">Men</a>
                    <div class="wrap-popup column2">
                      <div class="popup">
                        <div class="row">
                          <div class="col-sm-6">
                            <h3>Clothing</h3>
                            <ul class="nav">
                                  <li> <a href="shop_grid.php"> Coats &amp; Jackets </a>
                    </li>
                    <li>
                       <a href="shop_grid.phps"> Raincoats </a>
                    </li>
                    <li>
                     <a href="shop_grid.php"> Blazers </a>
                    </li>
                    <li>
                      <a href="shop_grid.php"> Jackets </a>
                    </li>
                            </ul>
                          </div>
                          <div class="col-sm-6 has-sep">
                            <h3> Accessories </h3>
                            <ul class="nav">
                               <li> <a href="shop_grid.php"> Wallets </a>
                    </li>
                    <li>
                       <a href="shop_grid.php"> Laptop Bags</a>
                    </li>
                    <li>
                       <a href="shop_grid.php"> Belts </a>
                    </li>
                    <li>
                      <a href="shop_grid.php"> Bakpacks </a>
                    </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li> <a href="#">Elements </a>
                    <div class="wrap-popup column2">
                      <div class="popup">
                        <div class="row">
                          <div class="col-sm-6">
                                                <ul class="nav">
                          <li><a href="portfolio4.php"><span>Portfolio 4 Columns</span></a></li>
            <li><a href="portfolio3.php"><span>Portfolio 3 Columns</span></a></li>
            <li><a href="portfolio2.php"><span>Portfolio 2 Columns</span></a></li>
            <li><a href="portfolio.php"><span>Portfolio 1 Columns</span></a></li>
            <li><a href="portfolio-post.php"><span>Portfolio Post</span></a></li>
            <li><a href="featured-box.php"><span>Featured Box</span></a></li>
 <li><a href="accordion_toggle.php"><span>Accordion Toggle</span></a></li>
            <li><a href="buttons.php"><span>Buttons</span></a></li>
            <li><a href="images.php"><span>Images</span></a></li>
            <li> <a href="pie_charts.php"><span>Pie Charts</span></a></li>
            <li><a href="glyphicons.php"><span>Glyphicons</span></a></li>
            <li><a href="shortcode-post.php"><span>post</span></a></li>
                            </ul>
                          </div>
                          <div class="col-md-6 has-sep">
                            <ul class="nav">
                          <li><a href="typography.php"><span>Typography</span></a></li>
            <li><a href="pagination.php"><span>Pagination</span></a></li>
            <li><a href="forms.php"><span>Forms</span></a></li>
            <li><a href="ani_counters.php"><span>Animated Counters</span></a></li>
            <li><a href="alerts.php"><span>Alerts</span></a></li>
            <li><a href="testimonial.php"><span>testimonial</span></a></li>
            <li><a href="tables.php"><span>Tables</span></a></li>
            <li><a href="progress_bars.php"><span>Progress bars</span></a></li>
            <li><a href="tabs.php"><span>Tabs</span></a></li>
            <li><a href="tooltips.php"><span>Tooltips</span></a></li>
            <li><a href="carousel.php"><span>Carousel</span></a></li>
            <li><a href="pricing-table.php"><span>Pricing Table</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                   <li class="nosub"> <a href="blog">Blog</a>
                  </li>
                  <li class="nosub"><a href="#">Electronics</a></li>
                  <li class="nosub"><a href="#">Bags &amp; Cases</a></li>
                  <li class="nosub"><a href="#">New arrivals</a></li>
                  
                  <li class="more-menu"><a href="#">Dresses</a><div class="wrap-popup column1">
                      <div class="popup">
                        <ul class="nav">
                    
                    
                      
                              <li><a href="shop_grid.php">Accessories</a></li>
                              <li><a href="shop_grid.php">Hats and Gloves</a></li>
                              <li><a href="shop_grid.php">Lifestyle</a></li>
                              <li><a href="shop_grid.php">Bras</a></li>
                      
                            
                 
                        </ul>
                      </div>
                    </div></li>
                  <li class="more-menu"><a href="#">Accessories</a>
                  <div class="wrap-popup column1">
                      <div class="popup">
                        <ul class="nav">
                     <li> <a href="shop_grid.php"> Wallets </a>
                    </li>
                    <li>
                       <a href="shop_grid.php"> Laptop Bags</a>
                    </li>
                    <li>
                       <a href="shop_grid.php"> Belts </a>
                    </li>
                    <li>
                      <a href="shop_grid.php"> Bakpacks </a>
                    </li>
                        </ul>
                      </div>
                    </div></li>
                  <li class="view-more"><a href="#">More category</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="language-currency-wrapper col-sm-3 col-md-5 col-lg-6">
            <div class="inner-cl">
              <div class="block block-language form-language">
                <div class="lg-cur"> <span> <img src="/images/flag-default.jpg" alt="French"> <span class="lg-fr">French</span> <i class="fa fa-angle-down"></i> </span> </div>
                <ul>
                  <li> <a class="selected" href="#"> <img src="/images/flag-english.jpg" alt="flag"> <span>English</span> </a> </li>
                  <li> <a href="#"> <img src="/images/flag-default.jpg" alt="flag"> <span>French</span> </a> </li>
                  <li> <a href="#"> <img src="/images/flag-german.jpg" alt="flag"> <span>German</span> </a> </li>
                  <li> <a href="#"> <img src="/images/flag-brazil.jpg" alt="flag"> <span>Brazil</span> </a> </li>
                  <li> <a href="#"> <img src="/images/flag-chile.jpg" alt="flag"> <span>Chile</span> </a> </li>
                  <li> <a href="#"> <img src="/images/flag-spain.jpg" alt="flag"> <span>Spain</span> </a> </li>
                </ul>
              </div>
              <div class="block block-currency">
                <div class="item-cur"> <span>USD </span> <i class="fa fa-angle-down"></i></div>
                <ul>
                  <li> <a href="#"><span class="cur_icon">€</span> EUR</a> </li>
                  <li> <a href="#"><span class="cur_icon">¥</span> JPY</a> </li>
                  <li> <a class="selected" href="#"><span class="cur_icon">$</span> USD</a> </li>
                </ul>
              </div>
            </div>
            <!-- Default Welcome Message -->
            <div class="welcome-msg hidden-xs hidden-sm">Welcome to our online store! </div>
            <!-- End Default Welcome Message -->  
          </div>
          <!-- top links -->
          <div class="headerlinkmenu col-lg-6 col-md-7 col-sm-6 col-xs-6">
            <div class="links">
              <div class="myaccount"><a title="My Account" href="account_page.php"><i class="fa fa-user"></i><span class="hidden-xs">My Account</span></a></div>
              <div class="wishlist"><a title="My Wishlist" href="wishlist.php"><i class="fa fa-heart"></i><span class="hidden-xs">Wishlist</span></a></div>
              <div class="blog hidden-xs"><a title="Blog" href="blog.php"><i class="fa fa-rss"></i><span class="hidden-xs">Blog</span></a></div>
              <div class="login"><a href="account_page.php"><i class="fa fa-unlock-alt"></i><span class="hidden-xs">Log In</span></a></div>
            </div>
            <div class="top-search">
              <div class="block-icon"> <a data-target=".bs-example-modal-lg" data-toggle="modal" class="search-focus dropdown-toggle links"> <i class="fa fa-search"></i> </a>
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
                        <h4 id="gridSystemModalLabel" class="modal-title">Search Products</h4>
                      </div>
                      <div class="modal-body">
                        <form class="navbar-form">
                          <div id="search">
                            <div class="input-group">
                              <select name="category_id" class="cate-dropdown hidden-xs">
                                <option>All Categories</option>
                                <option>women</option>
                                <option>&nbsp;&nbsp;&nbsp;Accessories </option>
                                <option>&nbsp;&nbsp;&nbsp;Dresses</option>
                                <option>&nbsp;&nbsp;&nbsp;Top</option>
                                <option>&nbsp;&nbsp;&nbsp;Handbags </option>
                                <option>&nbsp;&nbsp;&nbsp;Shoes </option>
                                <option>&nbsp;&nbsp;&nbsp;Clothing </option>
                                <option>Men</option>
                                <option>Electronics</option>
                                <option>&nbsp;&nbsp;&nbsp;Mobiles </option>
                                <option>&nbsp;&nbsp;&nbsp;Music & Audio </option>
                              </select>
                              <input name="search" placeholder="Search" class="form-control" type="text">
                              <button type="button" class="btn-search"><i class="fa fa-search"></i></button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- end nav -->