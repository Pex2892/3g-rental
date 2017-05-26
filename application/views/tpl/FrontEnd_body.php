<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <body class="ct-headroom--scrollUpBoth cssAnimate">
        <nav class="ct-menuMobile">
            <ul class="ct-menuMobile-navbar">
                <li class="dropdown"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="dropdown"><a href="<?php echo base_url(); ?>new_products">Nuovi Arrivi</a></li>
                <li class="dropdown"><a>Categorie<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-book"></i> Libri</a></li>
                        <li><a href="features-typography.html"><i class="fa fa-music"></i> Musica</a></li>
                        <li><a href="features-buttons.html"><i class="fa fa-film"></i> Film e Serie TV</a></li>
                        <li><a href="features-tables.html"><i class="fa fa-gamepad"></i> Videogiochi</a></li>
                        <li><a href="features-sliders.html"><i class="fa fa-gamepad"></i> Console</a></li>
                        <li><a href="features-pricetables.html"><i class="fa fa-plug"></i> Elettronica</a></li>
                        <li><a href="features-iconboxes.html"><i class="fa fa-laptop"></i> Informatica</a></li>
                        <li><a href="features-personboxes.html"><i class="fa fa-home"></i> Casa</a></li>
                        <li><a href="features-counters.html"><i class="fa fa-tree"></i> Giardino</a></li>
                        <li><a href="features-toggable.html"><i class="fa fa-scissors"></i> Fai da te</a></li>
                        <li><a href="features-m-sections.html"><i class="fa fa-car"></i> Giocattoli</a></li>
                        <li><a href="features-charts.html"><i class="fa fa-child"></i> Prima infanzia</a></li>
                        <li><a href="features-p-bars.html"><i class="fa fa-star"></i> Moda</a></li>
                        <li><a href="features-lists.html"><i class="fa fa-diamond"></i> Gioielli</a></li>
                        <li><a href="features-lists2.html"><i class="fa fa-futbol-o"></i> Sport</a></li>
                        <li><a href="features-developers.html"><i class="fa fa-clock-o"></i> Tempo libero</a></li>
                        <li><a href="features-developers.html"><i class="fa fa-venus-mars"></i> Sex toys</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">Servizi</a></li>
                <li class="dropdown"><a href="#">Chi siamo</a></li>
                <li class="dropdown"><a href="<?php echo base_url().'staff'; ?>">Staff</a></li>
                <li class="dropdown"><a href="contact.html">Contatti</a></li>
            </ul>
        </nav>

        <form class="ct-searchFormMobile ct-u-marginBottom50" role="form">
            <div class="form-group ">
                <div class="ct-form--label--type1">
                    <div class="ct-u-displayTableVertical">
                        <div class="ct-u-displayTableCell">
                            <div class="ct-input-group-btn">
                                <button class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="ct-u-displayTableCell text-center">
                            <span class="text-uppercase">Search for property</span>
                        </div>
                    </div>
                </div>
                <div class="ct-u-displayTableVertical ct-u-marginBottom20">
                    <div class="ct-u-displayTableCell">
                        <div class="ct-form--item">
                            <label>Property id</label>
                            <input type="text" required class="form-control input-lg" placeholder="Any">
                        </div>
                    </div>
                    <div class="ct-u-displayTableCell">
                        <div class="ct-form--item">
                            <label>Location</label>
                            <select class="ct-js-select ct-select-lg">
                                <option value="any">Any</option>
                                <option value="1">New York</option>
                                <option value="2">New Jersey</option>
                                <option value="3">Newark</option>
                                <option value="4">Philadelphia</option>
                            </select>
                        </div>
                    </div>
                    <div class="ct-u-displayTableCell">
                        <div class="ct-form--item">
                            <label>Sub-Location</label>
                            <select class="ct-js-select ct-select-lg">
                                <option value="any">Any</option>
                                <option value="1">New York</option>
                                <option value="2">Jersey</option>
                                <option value="3">Newark</option>
                                <option value="4">Philadelphia</option>
                            </select>
                        </div>
                    </div>
                    <div class="ct-u-displayTableCell">
                        <div class="ct-form--item">
                            <label>Property Status</label>
                            <select class="ct-js-select ct-select-lg">
                                <option value="any">Any</option>
                                <option value="1">Sale</option>
                                <option value="2">New</option>
                                <option value="3">Loan</option>
                            </select>
                        </div>
                    </div>
                    <div class="ct-u-displayTableCell">
                        <div class="ct-form--item">
                            <label>Property type </label>
                            <select class="ct-js-select ct-select-lg">
                                <option value="any">Any</option>
                                <option value="1">Houses</option>
                                <option value="2">Industrial</option>
                                <option value="3">Retail</option>
                                <option value="4">Apartments</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="ct-u-displayTableVertical ct-slider--row">
                    <div class="ct-u-displayTableCell">
                        <div class="ct-form--item">
                            <label>Bedrooms</label>
                            <select class="ct-js-select ct-select-lg">
                                <option value="any">Any</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3+</option>
                            </select>
                        </div>
                    </div>
                    <div class="ct-u-displayTableCell">
                        <div class="ct-form--item">
                            <label>Bathrooms</label>
                            <select class="ct-js-select ct-select-lg">
                                <option value="any">Any</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3+</option>
                            </select>
                        </div>
                    </div>
                    <div class="ct-u-displayTableCell ct-u-marginBottom40">
                        <div class="ct-form--item ct-sliderAmount">
                            <label>Price ($)</label>
                            <input type="text" value="1000000" required class="form-control input-lg ct-js-slider-min ct-u-marginBottom20" placeholder="">
                            <input type="text" class="slider ct-js-sliderAmount" value="" data-slider-tooltip="hide" data-slider-handle="square" data-slider-min="5000" data-slider-max="5000000" data-slider-step="5000" data-slider-value="[1000000,2000000]">
                            <label class="pull-left">Min</label>
                            <label class="pull-right">Max</label>
                            <input type="text" value="2000000" required class="form-control input-lg ct-js-slider-max" placeholder="">
                        </div>
                    </div>
                    <div class="ct-u-displayTableCell">
                        <input type="text" class="slider ct-js-sliderTicks" value="" data-slider-handle="square" data-slider-min="0" data-slider-max="200" data-slider-step="20" data-slider-value="[60,120]"/>
                        <label class="text-center center-block">Area (m2)</label>
                    </div>
                    <div class="ct-u-displayTableCell">
                        <button type="submit" class="btn btn-warning text-capitalize pull-right">search now</button>
                    </div>
                </div>
            </div>
        </form>
        <div id="ct-js-wrapper" class="ct-pageWrapper">
            <div class="ct-navbarMobile">
                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo asset_img(); ?>logo2.png" alt="Estato"> </a>
                <button type="button" class="searchForm-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span><i class="fa fa-search"></i></span>
                </button>
            </div>

            <div class="ct-topBar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-md-8">
                            <div class="ct-panel--contact ct-panel--left">
                                <!--<div class="ct-panel--item ct-email">
                                    <a href="#"><i class="fa fa-envelope-o"></i> example@example.com</a>
                                </div>-->
                                <ul class="nav navbar-nav ct-switcher--language">
                                    <li class="dropdown">
                                        <a href="#"><i class="fa fa-globe"></i> English <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#">
                                                    English
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Spanish
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    German
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div id="ct-js-navSearch">
                                    <i class="fa fa-search"></i>
                                    <input placeholder="Cerca..." required type="text" name="q" class="form-control input-lg ct-input--search">
                                </div>
                                <div class="ct-navbar-search">
                                    <form action="<?php echo base_url().'search_key'; ?>" role="form" method="POST">
                                        <button class="ct-navbar-search-button" type="submit">
                                            <i class="fa fa-search fa-fw"></i>
                                        </button>
                                        <div class="form-group">
                                            <input name="keyword" id="search" placeholder="Cerca..." required type="text" class="form-control input-lg">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 col-md-4">
                            <div class="ct-panel--user ct-panel--right text-right">
                                <!--<div class="ct-panel--item ct-email">
                                    <a href="properties.html"><i class="fa fa-home"></i> My Properties</a>
                                </div>-->
                                <div class="ct-panel--item ct-email">
                                    <a href="login.html"><i class="fa fa-user"></i> Login</a>
                                </div>
                                <div class="ct-panel--item ct-email">
                                    <a href="registration.html"><i class="fa fa-plus-square"></i> Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <nav class="navbar yamm ct-navbar--noDecoration" role="navigation" data-heighttopbar="40px" data-startnavbar="0">
                <div class="container">
                    <div class="navbar-header ct-panel--navbar">
                        <a href="<?php echo base_url(); ?>">
                            <img src="<?php echo asset_img(); ?>logo2.png" alt="logo">
                        </a>
                    </div>
                    <div class="ct-panelBox">
                       <!-- <div class="ct-panel--text ct-panel--navbar ct-fw-600"><a href="#">3G Rental</a></div>--> &nbsp;&nbsp;
                        <ul class="ct-panel--socials ct-panel--navbar list-inline list-unstyled">
                            <li><a href="#"><div class="ct-socials ct-socials--circle"><i class="fa fa-facebook"></i></div></a></li>
                            <li><a href="#"><div class="ct-socials ct-socials--circle"><i class="fa fa-twitter"></i></div></a></li>
                            <li><a href="#"><div class="ct-socials ct-socials--circle"><i class="fa fa-instagram"></i></div></a></li>
                        </ul>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav ct-navbar--fadeInUp">
                            <li class="dropdown"><a href="<?php echo base_url(); ?>">Home<span class="caret"></span></a></li>
                            <li class="dropdown"><a href="<?php echo base_url(); ?>new_products">Nuovi Arrivi<span class="caret"></span></a></li>
                            <li class="dropdown yamm-fw">
                                <a href="features-typography.html">Categorie<span class="caret ct-menu--arrow"></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <ul class="list-unstyled">
                                                        <li><a href="#"><i class="fa fa-book"></i> Libri</a></li>
								                        <li><a href="features-typography.html"><i class="fa fa-music"></i> Musica</a></li>
								                        <li><a href="features-forms.html"><i class="fa fa-film"></i> Film e Serie TV</a></li>
								                        <li><a href="features-tables.html"><i class="fa fa-gamepad"></i> Videogiochi</a></li>
								                        <li><a href="features-sliders.html"><i class="fa fa-gamepad"></i> Console</a></li>
								                       	<li><a href="features-pricetables.html"><i class="fa fa-plug"></i> Elettronica</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="list-unstyled">
								                        <li><a href="features-iconboxes.html"><i class="fa fa-laptop"></i> Informatica</a></li>
								                        <li><a href="features-personboxes.html"><i class="fa fa-home"></i> Casa</a></li>
								                        <li><a href="features-counters.html"><i class="fa fa-tree"></i> Giardino</a></li>
								                        <li><a href="features-toggable.html"><i class="fa fa-scissors"></i> Fai da te</a></li>
								                        <li><a href="features-m-sections.html"><i class="fa fa-car"></i> &nbsp;Giocattoli</a></li>
								                        <li><a href="features-charts.html"><i class="fa fa-child"></i> Prima infanzia</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <ul class="list-unstyled">
								                        
								                        <li><a href="features-p-bars.html"><i class="fa fa-star"></i> Moda</a></li>
								                        <li><a href="features-lists.html"><i class="fa fa-diamond"></i> Gioielli</a></li>
								                        <li><a href="features-lists2.html"><i class="fa fa-futbol-o"></i> Sport</a></li>
								                        <li><a href="features-developers.html"><i class="fa fa-clock-o"></i> Tempo libero</a></li>
								                        <li><a href="features-developers.html"><i class="fa fa-venus-mars"></i> Sex toys</a></li>
                                                    </ul>
                                                </div>
                                                <!--<div class="col-sm-3">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <a href="http://createit.pl/" class="ct-image--megamenu"  target="_blank"><img src="assets/images/demo-content/megamenu-createit.jpg" alt="createIT"></a>
                                                        </li>
                                                    </ul>
                                                </div>-->
                                            </div>
                                            <div class="ct-u-shadow"></div>
                                            <div class="ct-menuBrand ct-u-displayTableVertical">
                                                <div class="ct-u-displayTableCell">
                                                    <a href="index.html">
                                                        <img src="<?php echo asset_img(); ?>logo2.png" alt="logo">
                                                    </a>
                                                </div>
                                                <div class="ct-u-displayTableCell">
                                                    <div class="ct-panel--text ct-panel--navbar ct-fw-600"><a href="index.html">We packed Estato with everything in mind!</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!--<li class="dropdown"><a href="about.html">Pages<span class="caret ct-menu--arrow"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="pricing.html">Pricing Tables</a></li>
                                    <li class="dropdown-submenu">
                                        <a href="gallery1.html">Gallery</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="gallery1.html">Gallery - Three Colums</a></li>
                                            <li><a href="gallery2.html">Gallery - Four Colums</a></li>
                                            <li><a href="gallery3.html">Gallery - Five Colums</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="terms.html">Terms</a></li>
                                    <li><a href="policy.html">Privacy Policy</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                    <li><a href="registration.html">Registration</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="maintenance.html">Maintenance</a></li>
                                </ul>
                            </li>-->
                            <li class="dropdown"><a href="contact.html">Servizi<span class="caret"></span></a></li>
                            <li class="dropdown"><a href="contact.html">Chi siamo<span class="caret"></span></a></li>
                            <li class="dropdown"><a href="<?php echo base_url().'staff'; ?>">Staff<span class="caret"></span></a></li>
                        </ul>
                        <a class="btn btn-primary btn-transparent--border ct-u-text--motive" href="submission.html">Contatti</a>
                    </div>
                    <div class="ct-shapeBottom"></div>
                </div>
            </nav>

            <div class="ct-site--map">
                <div class="container">
                    <a href="index.html">Home</a>
                    <a href="search-grid.html">Search Results</a>
                </div>
            </div>   