<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<pre><?php //print_r($prd); ?></pre>
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
                        				<form class="ct-formSearch--extended" role="form">
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
				                                        <option value="">Tutte</option>
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
                                    				<input type="text" class="slider ct-js-sliderTicks" value="" data-slider-handle="square" data-slider-min="0" data-slider-max="1000" data-slider-step="20" data-slider-value="[0,10]"/>
                                    				<label class="text-center center-block">Prezzo (€)</label>
                                				</div>
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
        					<h4 class="text-uppercase">Search Results<span> (231) - <?php echo $this->uri->segment(3); ?></span></h4>
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
					    </ul>
					    <div class="clearfix"></div>
					</div>
					<div class="row ct-js-search-results ct-showProducts--default">
					<?php
					if($prd != 0) {
                    	foreach ($prd as $key => $value) {
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
		                                    <span><i class="fa fa-eye"></i> <?php echo $value->view; ?></span>
		                                    <span><i class="fa fa-thumbs-o-up"></i> <?php echo $value->likes; ?></span>
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