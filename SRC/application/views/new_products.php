<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ct-site--map">
                <div class="container">
                    <a href="index.html">Home</a>
                    <a href="search-grid.html">Nuovi Prodotti</a>
                </div>
            </div>  
<!--<pre><?php //print_r($prd); ?></pre>-->
        <section class="ct-u-paddingTop50 ct-u-paddingBottom60">
                <div class="container">
                    <div class="ct-section--products">
                        <div class="row">
                            <div class="col-md-12">
                                <!--<div class="ct-sortingBar ct-u-paddingRight10 ct-u-paddingLeft10 ct-u-marginBottom30">
                                    <div class="ct-sortingTitle pull-left">
                                        <h4 class="text-uppercase">My Properties</h4>
                                    </div>
                                    <ul class="list-inline list-unstyled pull-right ct-u-paddingBoth15">
                                        <li>
                                            <form>
                                                <select class="ct-js-select">
                                                    <option value="price">Sort by</option>
                                                    <option value="price">Price</option>
                                                    <option value="newness">Newness</option>
                                                    <option value="rating">Rating</option>
                                                    <option value="popularity">Popularity</option>
                                                </select>
                                            </form>
                                        </li>
                                        <li>
                                            <form>
                                                <select class="ct-js-select">
                                                    <option value="nine">12 items</option>
                                                    <option value="eighteen">15 items</option>
                                                    <option value="eighteen">21 items</option>
                                                    <option value="twentyseven">36 items</option>
                                                    <option value="fourtyfive">45 items</option>
                                                    <option value="ninety">90 items</option>
                                                </select>
                                            </form>
                                        </li>
                                    </ul>
                                    <ul class="ct-showPages list-inline list-unstyled pull-right ct-u-paddingBoth15">
                                        <li class="ct-showElements is-active" id="ct-js-showTiles">
                                            <a href="#">
                                                <i class="fa fa-th fa-fw"></i>
                                            </a>
                                        </li>
                                        <li class="ct-showElements" id="ct-js-showList">
                                            <a href="#">
                                                <i class="fa fa-th-list fa-fw"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>-->
                                
                                <div class="row ct-js-search-results ct-showProducts--default">
                                <?php
                                if($prd != 0) {
                               		foreach ($prd as $key => $value) {
                                        /*$curl_handle=curl_init();
                                        curl_setopt($curl_handle, CURLOPT_URL,'https://graph.facebook.com/?fields=og_object{likes.limit(0).summary(true)},share&ids='.base_url().'product/'.$value->ID.'/'.url_title($value->nome, 'dash', true));
                                        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
                                        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
                                        curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
                                        $query = curl_exec($curl_handle);
                                        curl_close($curl_handle);

                                        $json = json_decode($query, true);

                                        if (array_key_exists("og_object", $json[base_url().'product/'.$value->ID.'/'.url_title($value->nome, 'dash', true)]))
                                            $likes_fb = $json[base_url().'product/'.$value->ID.'/'.url_title($value->nome, 'dash', true)]['og_object']['likes']['summary']['total_count'];
                                        else $likes_fb = 0;*/
                                    $likes_fb = rand(0, 15);
                                    $comm_fb = rand(0, 15);
                                    $share_fb = rand(0, 15);

                                ?>
                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="ct-itemProducts ct-u-marginBottom30 ct-hover">
                                            <label class="control-label new">Nuovo</label>
                                            <a href="<?php echo base_url().'product/'.$value->ID.'/'.url_title($value->nome, 'dash', true); ?>">
                                                <div class="ct-main-content">
                                                    <div class="ct-imageBox">
                                                        <img src="<?php echo asset_upimg_product().$value->img; ?>" alt="" width="265" height="195"><i class="fa fa-eye"></i>
                                                    </div>
                                                    <div class="ct-main-text">
                                                        <div class="ct-product--tilte">
                                                           <span style="color: #337ab7;"><?php echo $value->nome; ?></span>
                                                        </div>
                                                        <div class="ct-product--price">
                                                            <span style="color: black;">Noleggio:</span> <span>€ <?php echo $value->prezzo; ?>/gg</span><br />
                                                            <span style="color: black;">Vendita:</span> <span style="color: #bf5252;">€ <?php echo $value->prezzo_vendita; ?></span>
                                                        </div>
                                                        <div class="ct-product--description">
                                                            <?php echo $value->marca; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ct-product--meta">
                                                    <div class="ct-icons">
                                                       <!--<span><i class="fa fa-eye"></i> <?php echo $value->view; ?></span>-->
                                                        <span><i class="fa fa-thumbs-o-up"></i> <?php echo $likes_fb; ?></span>
                                                        <span><i class="fa fa-comment"></i> <?php echo $comm_fb; ?></span>
                                                        <span><i class="fa fa-share-alt"></i> <?php echo $share_fb; ?></span>
                                                    </div>
                                                    <div class="ct-text">
                                                        <span><?php echo $value->nomeCat; ?></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php
                                	}
                                } else {
                                	echo "<h1>Nessun prodotto inserito questa settimana!</h1>";
                                }
                                ?>
                                </div>
                                <div class="clearfix visible-sm visible-md"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>