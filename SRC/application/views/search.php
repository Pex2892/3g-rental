<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ct-site--map">
                <div class="container">
                    <a href="index.html">Home</a>
                    <a href="search-grid.html">Cerca</a>
                </div>
            </div>  
<!--<pre><?php //print_r($prd); ?></pre>-->
<section class="ct-u-paddingTop50 ct-u-paddingBottom60">
	<div class="container">
		<div class="ct-section--products">
			<div class="row">
				<div class="col-md-4 col-lg-3">
    				<div class="ct-js-sidebar">
        				<div class="row">
            				<div class="col-sm-6 col-md-12">
               			 		<div class="widget">
                    				<div class="widget-inner">
                        				<form action="<?php echo base_url().'search_key'; ?>" class="ct-formSearch--extended" role="form" method="POST">
                            				<div class="ct-form--label--type3">
                                				<div class="ct-u-displayTableVertical">
                                    				<div class="ct-u-displayTableCell">
                                        				<div class="ct-input-group-btn">
                                            				<button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                        				</div>
                                    				</div>
                                    				<div class="ct-u-displayTableCell text-center">
                                        				<span class="text-uppercase">Aggiungi Filtri</span>
                                   					</div>
                                				</div>
                           					</div>
                            				<div class="form-group">
                                				<div class="ct-form--item ct-u-marginBottom10">
                                    				<label>Categoria</label>
				                                    <select name="cat" class="ct-js-select ct-select-lg">
				                                        <option value="all">Tutte</option>
				                                        <option value="1">Musica</option>
				                                        <option value="2">Film e Serie TV</option>
				                                        <option value="3">Videogiochi</option>
				                                        <option value="4">Console</option>
				                                        <option value="5">Elettronica</option>
				                                        <option value="6">Informatica</option>
				                                        <option value="7">Casa</option>
				                                        <option value="8">Giardino</option>
				                                        <option value="9">Fai da te</option>
				                                        <option value="10">Giocattoli</option>
				                                        <option value="11">Prima infanzia</option>
				                                        <option value="12">Moda</option>
				                                        <option value="13">Gioielli</option>
				                                        <option value="14">Sport</option>
				                                        <option value="15">Tempo libero</option>
				                                        <option value="16">Sex toys</option>
				                                    </select>
                               					</div>
                               					<br /><br />
                                				<div class="ct-u-displayTableCell">
                                    				<input name="price" type="text" class="slider ct-js-sliderTicks" value="" data-slider-handle="square" data-slider-min="0" data-slider-max="1000" data-slider-step="20" data-slider-value="[0,1000]"/>
                                    				<label class="text-center center-block">Prezzo Noleggio (€)</label>
                                				</div>
                                				<br /><br />
                                				<div class="ct-u-displayTableCell">
                                    				<input name="price_ven" type="text" class="slider ct-js-sliderTicks" value="" data-slider-handle="square" data-slider-min="0" data-slider-max="1000" data-slider-step="20" data-slider-value="[0,1000]"/>
                                    				<label class="text-center center-block">Prezzo Vendita (€)</label>
                                				</div>
                                				<input name="keyword" type="hidden" value="<?php echo $this->uri->segment(3); ?>" />
                                				<button type="submit" class="btn btn-warning ct-u-marginTop10">Cerca</button>
                            				</div>
                        				</form>
                    				</div>
               					</div>
            				</div>
        				</div>
    				</div>
				</div>
				<div class="col-md-8 col-lg-9">
					<div class="ct-sortingBar ct-u-paddingRight10 ct-u-paddingLeft10 ct-u-marginBottom30">
    					<div class="ct-sortingTitle pull-left">
        					<h4 class="text-uppercase">Hai cercato: <b><span><?php echo $this->uri->segment(3); ?></span></b></h4>
    					</div>
					    <!--<ul class="list-inline list-unstyled pull-right ct-u-paddingBoth15">
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
					    </ul>-->
					    <div class="clearfix"></div>
					</div>
					<div class="row ct-js-search-results ct-showProducts--default">
					<?php
					if($prd != 0) {
                    	foreach ($prd as $key => $value) {
							$curl_handle=curl_init();
							curl_setopt($curl_handle, CURLOPT_URL,'https://graph.facebook.com/?fields=og_object{likes.limit(0).summary(true)},share&ids='.base_url().'product/'.$value->ID.'/'.url_title($value->nome, 'dash', true));
							curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
							curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
							curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
							$query = curl_exec($curl_handle);
							curl_close($curl_handle);

								$json = json_decode($query, true);

							if (array_key_exists("og_object", $json[base_url().'product/'.$value->ID.'/'.url_title($value->nome, 'dash', true)]))
                                $likes_fb = $json[base_url().'product/'.$value->ID.'/'.url_title($value->nome, 'dash', true)]['og_object']['likes']['summary']['total_count'];
                            else $likes_fb = 0;                		
                    ?>
					    <div class="col-sm-6 col-md-6 col-lg-4">
					        <div class="ct-itemProducts ct-u-marginBottom30 ct-hover">
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
                                                <span style="color: black;"> Noleggio:</span> <span>€ <?php echo $value->prezzo; ?>/gg</span><br />
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
                                            <span><i class="fa fa-comment"></i> <?php echo $json[base_url().'product/'.$value->ID.'/'.url_title($value->nome, 'dash', true)]['share']['comment_count']; ?></span>
                                            <span><i class="fa fa-share-alt"></i> <?php echo $json[base_url().'product/'.$value->ID.'/'.url_title($value->nome, 'dash', true)]['share']['share_count']; ?></span>
		                                </div>
		                                <div class="ct-text">
		                                    <span><?php echo $value->nomeCat; ?></span>
		                                </div>
		                            </div>
					            </a>
					        </div>
					    </div>
					    <div class="clearfix visible-md"></div>
					<?php
                    	}
                    ?>

                    <?php
                    } else {
                    	echo "<h2>Non è stato trovato nessun risultato</h2>";
                    }
                    ?>
				</div>
				<?php if($prd != 0) { ?>
				<div class="ct-pagination text-center">
				    <ul class="pagination">
				        <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
				        <li class="active"><a href="#">1</a></li>
				        <li><a href="#">2</a></li>
				        <li><a href="#">3</a></li>
				        <li><a href="#">4</a></li>
				        <li><a href="#">5</a></li>
				        <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
				    </ul>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	</div>
</section>