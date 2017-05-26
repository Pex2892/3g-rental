<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Asset URL
|--------------------------------------------------------------------------
*/
function asset_url() {
   return base_url().'assets/';
}

function asset_css() {
   return asset_url().'css/';
}

function asset_js() {
   return asset_url().'js/';
}

function asset_img() {
   return asset_url().'img/';
}

function asset_upimg() {
   return asset_url().'up_img/';
}

function asset_upimg_avatar() {
   return asset_upimg().'avatar/';
}

function asset_upimg_product() {
   return asset_upimg().'product/';
}