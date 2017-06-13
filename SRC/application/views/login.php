<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<header class="ct-mediaSection" data-stellar-background-ratio="0.3" data-height="630" data-type="parallax" data-bg-image="<?php echo asset_img(); ?>registration-parallax.jpg" data-bg-image-mobile="<?php echo asset_img(); ?>registration-parallax.jpg">
    <div class="ct-mediaSection-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="ct-headerText--normal">
                        <h2 class="text-uppercase ct-fw-600 ct-u-marginBottom70">
                            Check what
                            <span class="ct-u-text--motive">is</span>
                            new
                        </h2>
                    </div>
                    <div class="ct-iconBox ct-u-marginBottom40 ct-iconBox--2col">
                        <div class="ct-icon text-center ct-iconContainer--circle ct-iconContainer--circleHoverLight">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="ct-iconBox--description">
                            <span class="ct-title text-uppercase ct-fw-600">Get more users</span>
                            <span class="ct-text">Thanks to our content optimization you will get more visits to your property page.</span>
                        </div>
                    </div>
                    <div class="ct-iconBox ct-u-marginBottom40 ct-iconBox--2col">
                        <div class="ct-icon text-center ct-iconContainer--circle ct-iconContainer--circleHoverLight">
                            <i class="fa fa-bolt"></i>
                        </div>
                        <div class="ct-iconBox--description">
                            <span class="ct-title text-uppercase ct-fw-600">Convert visitors</span>
                            <span class="ct-text">With our design and structures you will be able to show your property in better light.</span>
                        </div>
                    </div>
                    <div class="ct-iconBox ct-iconBox--2col">
                        <div class="ct-icon text-center ct-iconContainer--circle ct-iconContainer--circleHoverLight">
                            <i class="fa fa-trophy"></i>
                        </div>
                        <div class="ct-iconBox--description">
                            <span class="ct-title text-uppercase ct-fw-600">Reach your goal</span>
                            <span class="ct-text">Estato was designed to become your real estate business partner. It’s not only a tool, it’s a working ecosystem.</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php echo form_open('log_val', array('role' => 'form', 'class' => 'ct-formRegister pull-right')); ?>
                        <div class="form-group">
                            <div class="ct-form--label--type2">
                                <div class="ct-u-displayTableVertical">
                                    <div class="ct-u-displayTableCell">
                                        <div class="ct-input-group-btn">
                                            <button class="btn btn-primary">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="ct-u-displayTableCell text-center">
                                        <span class="text-uppercase">ACCEDI</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ct-form--item ct-u-marginBottom20">
                                <label>Email</label>
                                <input name="email" type="text" required class="form-control input-lg" placeholder="">
                            </div>
                            <div class="ct-form--item ct-u-marginBottom20">
                                <label>Password</label>
                                <input name="psw" type="password" required class="form-control input-lg" placeholder="">
                            </div>
                            <div class="ct-form--item ct-u-marginBottom20">
                                <a href="#">Hai dimenticato la Password ?</a>
                            </div>
                            <div class="ct-form--item">
                                <button type="submit" class="btn btn-warning center-block">Entra</button>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</header>