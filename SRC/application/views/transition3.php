<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ct-site--map">
    <div class="container">
        <a href="index.html">Home</a>
        <a href="<?php echo base_url().'product/'.$this->input->post('id').'/'.url_title($this->input->post('nome'), 'dash', true); ?>"><?php echo $this->input->post('nome'); ?></a>
        <a href="faq.html">Step 4</a>
    </div>
</div>
<header class="ct-mediaSection" data-stellar-background-ratio="0.3" data-height="140" data-type="parallax" data-bg-image="<?php echo asset_img(); ?>agency-parallax.jpg" data-bg-image-mobile="<?php echo asset_img(); ?>agency-parallax.jpg">
    <div class="ct-mediaSection-inner">
        <div class="container">
            <div class="ct-steps--submission center-block ct-u-marginBottom20">
                <div class="ct-steps--item ct-steps--past">
                    <div class="ct-steps--counter">
                        <span>1</span>
                    </div>
                </div>
                <div class="ct-steps--item ct-steps--past">
                    <div class="ct-steps--counter">
                        <span>2</span>
                    </div>
                </div>
                <div class="ct-steps--item ct-steps--progress">
                    <div class="ct-steps--counter">
                        <span>3</span>
                    </div>
                </div>
                <div class="ct-steps--item">
                    <div class="ct-steps--counter ct-steps--active">
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
            <h2>Step 4 <span class="ct-text--highlightGray">COMPLETATO</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form role="form" class="ct-formSubmission">
                    <div class="form-group ">
                        <h4 class="text-uppercase ct-fw-600 ct-u-marginBottom20">GRAZIE MILLE!</h4>
                        <span class="span ct-u-marginBottom20">Grazie per aver utilizzato il nostro servizio!
                            La attendiamo giorno <?php echo date_format(date_create($this->input->post('dateStart')), "d/m/Y"); ?> per il ritiro de prodotto.
                            Per qualsiasi informazione, non esitare a contattarci, saremo lieti di chiarire ogni sua perplessità</span>
						<div class="ct-container--Big">
                            <a class="btn btn-success pull-right" href="<?php echo base_url().'product/'.$this->input->post('id').'/'.url_title($this->input->post('nome'), 'dash', true); ?>">Chiudi</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>