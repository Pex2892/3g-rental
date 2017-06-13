<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ct-site--map">
                <div class="container">
                    <a href="index.html">Home</a>
                    <a href="search-grid.html">Prodotto</a>
                </div>
            </div>  

<section class="ct-u-paddingBottom60">
    <div class="container">
        <div class="ct-productMeta--single text-uppercase">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="ct-u-displayTableVertical">
                        <div class="ct-u-displayTableCell text-left">
                            <i class="fa fa-calendar"></i><h6>Pubblicato il:  <?php echo $prd[0]->data; ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ct-section--products">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="ct-gallery ct-u-marginBottom30">
                        <div class="ct-owl-controls--type2" data-single="true" data-pagination="false" data-navigation="false" data-snap-ignore="true" id="sync1">
                            <div class="item">
                                <img src="<?php echo asset_upimg_product().$prd[0]->img; ?>" alt="" width="871" height="442">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="ct-heading ct-u-marginBottom20">
                                <h3 class="text-uppercase">Sommario</h3>
                            </div>
                            <div class="ct-u-displayTableVertical ct-productDetails">
                                <div class="ct-u-displayTableRow">
                                    <div class="ct-u-displayTableCell">
                                        <span class="ct-fw-600">Prezzo/gg</span>
                                    </div>
                                    <div class="ct-u-displayTableCell text-right">
                                        <span class="ct-price">€ <?php echo $prd[0]->prezzo; ?></span>
                                    </div>
                                </div>
                                <div class="ct-u-displayTableRow">
                                    <div class="ct-u-displayTableCell">
                                        <span class="ct-fw-600">Prezzo Tot</span>
                                    </div>
                                    <div class="ct-u-displayTableCell text-right">
                                        <span class="ct-price">€ <?php echo $prd[0]->prezzo_vendita; ?></span>
                                    </div>
                                </div>
                                <div class="ct-u-displayTableRow">
                                    <div class="ct-u-displayTableCell">
                                        <span class="ct-fw-600">Marca</span>
                                    </div>
                                    <div class="ct-u-displayTableCell text-right">
                                        <span><?php echo $prd[0]->marca; ?></span>
                                    </div>
                                </div>
                                <div class="ct-u-displayTableRow">
                                    <div class="ct-u-displayTableCell">
                                        <span class="ct-fw-600">Categoria</span>
                                    </div>
                                    <div class="ct-u-displayTableCell text-right">
                                        <span><?php echo $prd[0]->nomeCat; ?></span>
                                    </div>
                                </div>
                                <div class="ct-u-displayTableRow">
                                    <div class="ct-u-displayTableCell">
                                        <span class="ct-fw-600">Likes</span>
                                    </div>
                                    <div class="ct-u-displayTableCell text-right">
                                        <span><div class="fb-like" data-href="<?php echo base_url().'product/'.$this->uri->segment(2).'/'.$this->uri->segment(3); ?>" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="ct-heading ct-u-marginBottom20">
                                <h3 class="text-uppercase">Controlla la disponibilità</h3>
                            </div>
                                <form action="<?php echo base_url(); ?>trans_1" method="POST">
                                    Data Inizio: <input name="dateStart" id="dateStart" type="text" value="<?php echo date("Y-m-d"); ?>"><br />
                                    Data Fine: <input name="dateEnd" id="dateEnd" type="text" value="<?php echo date("Y-m-d", strtotime(date("Y-m-d"). ' + 1 days')); ?>"><br /><br />
                                    <button id="checkPrd" class="btn btn-warning text-capitalize">Controlla!</button>&nbsp;
                                    <input type="hidden" name="id" value="<?php echo $prd[0]->ID; ?>" />
                                    <input type="hidden" name="nome" value="<?php echo $prd[0]->nome; ?>" />
                                    <input type="hidden" name="img" value="<?php echo $prd[0]->img; ?>" />
                                    <input type="hidden" name="cat" value="<?php echo $prd[0]->nomeCat; ?>" />
                                    <input type="hidden" name="marca" value="<?php echo $prd[0]->marca; ?>" />
                                    <input type="hidden" name="przNo" value="<?php echo $prd[0]->prezzo; ?>" />
                                    <input type="hidden" name="przVen" value="<?php echo $prd[0]->prezzo_vendita; ?>" />
                                    
                                    <?php if(!$this->session->userdata('email') != '') { ?>
                                        <a href="<?php echo base_url().'login'; ?>" class="btn btn-warning text-capitalize">Loggati</a>
                                    <?php } else { ?>
                                        <button type="submit" id="btnconfirmPrd" class="btn btn-warning text-capitalize">Noleggia/Acquista</button>
                                    <?php } ?>
                                </form>
                            <br /><br />

                            <div class="ct-heading ct-u-marginBottom20">
                                <h3 class="text-uppercase">Ulteriori dettagli</h3>
                            </div>
                            <div class="ct-u-displayTableVertical ct-productDetails--type2 ct-u-marginBottom20">
                                <div class="ct-u-displayTableCell">
                                    <ul class="list-unstyled">
                                    <?php
                                    foreach ($prd_dtl as $key => $value) {
                                    ?>
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                            <span class="text-capitalize"><?php echo $value->dettaglio.": ".$value->descrizione; ?></span>
                                        </li>
                                    <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="fb-comments" data-href="<?php echo base_url().'product/'.$this->uri->segment(2).'/'.$this->uri->segment(3); ?>" data-width="871" data-numposts="5"></div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="ct-js-sidebar">
                        <div class="row">
                            <div class="col-sm-6 col-md-12">
                                <div class="widget">
                                    <div class="widget-inner">
                                        <h4 class="text-uppercase">Contattaci</h4>
                                        <div class="ct-personBox text-left">
                                            <div class="ct-imagePerson">
                                                <img src="assets/images/demo-content/agents-1.jpg" alt="">
                                                <ul class="ct-panel--socials list-inline list-unstyled">
                                                    <li><a href="https://www.facebook.com/createITpl"><div class="ct-socials ct-socials--circle"><i class="fa fa-facebook"></i></div></a></li>
                                                    <li><a href="https://twitter.com/createitpl"><div class="ct-socials ct-socials--circle"><i class="fa fa-twitter"></i></div></a></li>
                                                    <li><a href="#"><div class="ct-socials ct-socials--circle"><i class="fa fa-instagram"></i></div></a></li>
                                                </ul>
                                            </div>
                                            <div class="ct-personContent">
                                                <div class="ct-personContact">
                                                    <div class="successMessage alert alert-success">
                                                        Per conoscere ulteriori informazioni su tale prodotto!
                                                    </div>
                                                    <!--<form role="form" action="http://estato.html.themeforest.createit.pl/assets/form/send.php" method="post" class="contactForm validateIt" data-email-subject="Contact Form" data-show-errors="true">-->
                                                        <div class="form-group">
                                                            <div class="ct-form--item">
                                                                <input id="contact_email" type="email" required class="form-control input-lg ct-u-marginBottom10" name="email" placeholder="E-mail">
                                                                <textarea id="contact_message" placeholder="Messaggio...." class="form-control input-lg" rows="4" name="mess" required></textarea>
                                                                <input id="id_prd" type="hidden" value="<?php echo $prd[0]->ID; ?>">
                                                                <input id="name_prd" type="hidden" value="<?php echo $prd[0]->nome; ?>">
                                                            </div>
                                                            <button id="sendEmailInfoPrd" type="button" class="btn btn-warning text-capitalize center-block">INVIA!</button>
                                                        </div>
                                                    <!--</form>-->
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
        </div>
    </div>
</section>
<section class="ct-u-paddingBoth60 ct-js-section" data-bg-color="#f3f3f3">
    <div class="container">
        <div class="ct-heading ct-u-marginBottom30">
            <h3 class="text-uppercase">Prodotti Simili</h3>
            <a href="<?php echo base_url().'category/'.$prd[0]->ID_CATEGORIA.'/'.$prd[0]->nomeCat; ?>" class="pull-right"><i class="fa fa-angle-right"></i>Vedi Tutti...</a>
        </div>
        <div class="ct-js-owl ct-owl-controls--type2" data-single="false" data-items="4" data-pagination="false">
            
        <?php
        foreach ($prd_corr as $key => $value) {
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
            <div class="item">
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
        <?php } ?>
        </div>
    </div>
</section>