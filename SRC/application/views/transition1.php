<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ct-site--map">
    <div class="container">
        <a href="index.html">Home</a>
        <a href="<?php echo base_url().'product/'.$this->input->post('id').'/'.url_title($this->input->post('nome'), 'dash', true); ?>"><?php echo $this->input->post('nome'); ?></a>
        <a href="faq.html">Step 2</a>
    </div>
</div>
<header class="ct-mediaSection" data-stellar-background-ratio="0.3" data-height="140" data-type="parallax" data-bg-image="<?php echo asset_img(); ?>agency-parallax.jpg" data-bg-image-mobile="<?php echo asset_img(); ?>agency-parallax.jpg">
    <div class="ct-mediaSection-inner">
        <div class="container">
            <div class="ct-steps--submission center-block ct-u-marginBottom20">
                <div class="ct-steps--item ct-steps--progress">
                    <div class="ct-steps--counter">
                        <span>1</span>
                    </div>
                </div>
                <div class="ct-steps--item">
                    <div class="ct-steps--counter ct-steps--active">
                        <span>2</span>
                    </div>
                </div>
                <div class="ct-steps--item">
                    <div class="ct-steps--counter">
                        <span>3</span>
                    </div>
                </div>
                <div class="ct-steps--item">
                    <div class="ct-steps--counter">
                        <span>4</span>
                    </div>
                </div>
            </div>
            <div class="ct-u-displayTable ct-steps--title text-center">
				<div class="ct-u-displayTableCell">
                    <span>Selezione Prodotto</span>
                </div>            
                <div class="ct-u-displayTableCell">
                    <span>Riepilogo</span>
                </div>
                <div class="ct-u-displayTableCell">
                    <span>Pagamento</span>
                </div>
                <div class="ct-u-displayTableCell">
                    <span>Completato</span>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="ct-u-paddingTop50 ct-u-paddingBottom100">
    <div class="container">
        <div class="ct-headerText--normal text-uppercase ct-u-marginBottom40">
            <h2>Step 2 <span class="ct-text--highlightGray">RIEPILOGO</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-6">
                <form action="<?php echo base_url(); ?>trans_2" method="POST" role="form" class="ct-formSubmission">
                    <div class="form-group ">
                        <ul class="list-unstyled ct-productBox--thumbnail ct-u-marginBottom50">
                            <li>
                                <div class="ct-media--left">
                                    <a href="blog-single.html">
                                        <img src="<?php echo asset_upimg_product().$this->input->post('img'); ?>" alt="">
                                    </a>
                                </div>
                                <div class="ct-media--content">
                                    <span>Nome Prodotto: <?php echo $this->input->post('nome'); ?></span>
                                    <span>Marca: <?php echo $this->input->post('marca'); ?></span>
                                    <span>Categoria: <?php echo $this->input->post('cat'); ?></span>
                                    <span>Prezzo Noleggio: € <?php echo $this->input->post('przNo'); ?></span>
                                    <span>Prezzo Vendita: € <?php echo $this->input->post('przVen'); ?></span>
                                </div>
                            </li>
                        </ul>
                        <input name="dateStart" type="hidden" value="<?php echo $this->input->post('dateStart'); ?>"><br />
                        <input name="dateEnd" type="hidden" value="<?php echo $this->input->post('dateEnd'); ?>"><br /><br />
                        <input type="hidden" name="id" value="<?php echo $this->input->post('id'); ?>" />
                        <input type="hidden" name="nome" value="<?php echo $this->input->post('nome'); ?>" />
                        <input type="hidden" name="img" value="<?php echo $this->input->post('img'); ?>" />
                        <input type="hidden" name="cat" value="<?php echo $this->input->post('cat'); ?>" />
                        <input type="hidden" name="marca" value="<?php echo $this->input->post('marca'); ?>" />
                        <input type="hidden" name="przNo" value="<?php echo $this->input->post('przNo'); ?>" />
                        <input type="hidden" name="przVen" value="<?php echo $this->input->post('przVen'); ?>" />
                        <div class="ct-container--Big">
                            <a class="btn btn-link pull-left" href="<?php echo base_url().'product/'.$this->input->post('id').'/'.url_title($this->input->post('nome'), 'dash', true); ?>">Ritorna allo step 1</a>
                            <button type="submit" class="btn btn-warning pull-right">Vai allo Step 3</button>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>