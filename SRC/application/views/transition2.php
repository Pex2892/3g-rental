<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ct-site--map">
    <div class="container">
        <a href="index.html">Home</a>
        <a href="<?php echo base_url().'product/'.$this->input->post('id').'/'.url_title($this->input->post('nome'), 'dash', true); ?>"><?php echo $this->input->post('nome'); ?></a>
        <a href="faq.html">Step 3</a>
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
                <div class="ct-steps--item ct-steps--progress">
                    <div class="ct-steps--counter">
                        <span>2</span>
                    </div>
                </div>
                <div class="ct-steps--item">
                    <div class="ct-steps--counter ct-steps--active">
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
            <h2>Step 3 <span class="ct-text--highlightGray">PAGAMENTO</span>
            </h2>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-6">
                <form action="<?php echo base_url(); ?>trans_3" method="POST" role="form" class="ct-formSubmission">
                    <div class="form-group ">
                        <h4 class="text-uppercase ct-fw-600 ct-u-marginBottom20">Riepilogo Noleggio/Costo totale</h4>
                        <hr />
                        Data INIZIO: <?php echo date_format(date_create($this->input->post('dateStart')), "d/m/Y"); ?><br />
                        Data FINE: <?php echo date_format(date_create($this->input->post('dateEnd')), "d/m/Y"); ?><br />

                        <hr />

                        Totale Giorni: <?php $days = floor((strtotime($this->input->post('dateEnd')) - strtotime($this->input->post('dateStart'))) / (60 * 60 * 24)); echo $days; ?><br />
                        Prezzo Totale: € <?php echo $days*$this->input->post('przNo'); ?><br /><br />

                        <input type="hidden" name="id" value="<?php echo $this->input->post('id'); ?>" />
                        <input type="hidden" name="nome" value="<?php echo $this->input->post('nome'); ?>" />
                        <input type="hidden" name="dateStart" value="<?php echo $this->input->post('dateStart'); ?>" />

                        <div class="ct-container--Big">
                            <a class="btn btn-link pull-left" href="<?php echo base_url().'product/'.$this->input->post('id').'/'.url_title($this->input->post('nome'), 'dash', true); ?>">Annulla</a>
                            <button type="submit" class="btn btn-warning pull-right">Vai allo Step 4</button>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>