﻿function selectDropdown(){getCookie("ct_macaroon.dropdown")!=null?(jQuery(".navbar-nav").removeClass("ct-navbar--fadeIn"),jQuery(".navbar-nav").removeClass(getCookie("ct_macaroon.dropdown"))):jQuery(".navbar-nav").removeClass("ct-navbar--fadeIn");var n=document.getElementById("dropdownSelect"),t=n.options[n.selectedIndex].value;setCookie("ct_macaroon.dropdown",t);jQuery(".navbar-nav").addClass(t)}jQuery(document).ready(function(n){function u(){var n="";jQuery("a[data-value].btn-primary, [data-value].demoActive",i).each(function(){var t=jQuery(this);n=n+t.attr("data-value")+"."});setCookie("ct_macaroon",n)}function s(){if(d=getCookie("ct_macaroon"),d){var n=jQuery(d.split("."));jQuery.each(n,function(n,t){$e=jQuery('[data-value="'+t+'"]',i);$e.click()})}t=!0}function f(){var n=jQuery("#stylechooser"),i,r;jQuery("body").is(".navbar-sidebar")?(i=-222,parseInt(n.css("right"))==i&&(i=0),t?n.animate({right:i}):n.css("right",i)):(r=-222,parseInt(n.css("left"))==r&&(r=0),t?n.animate({left:r}):n.css("left",r))}var i=jQuery("#stylechooser"),h=jQuery("#slideContainer"),r=jQuery("body"),t=!1,e=window.location.pathname,o="ct_macaroon."+e;n("head").append('<link rel="stylesheet" type="text/css" href="../demo/css/demo.css">');n("head").append('<link rel="stylesheet" type="text/css" href="../demo/generator.php">');getCookie(o+".switcher")!="show"&&f();jQuery("#stylechooser  #styleToggle").click(function(){return setCookie("ct_macaroon.switcher",i.css("left")=="0px"||i.css("left")=="-1px"?"hide":"show"),f(),!1});jQuery("#demoReset").click(function(){return setCookie("ct_macaroon",!1),location.reload(!0),!1});jQuery("#stylechooser [data-value]").click(function(){var n=jQuery(this),i,f;return(n.attr("data-dependent")&&jQuery(n.attr("data-dependent")).click(),i=n.attr("data-value"),f=r.hasClass(i)&&!n.hasClass("btn"),jQuery("[data-value]",n.parents("div.mkSpace")).each(function(){var n=jQuery(this).removeClass("demoActive btn-primary");r.removeClass(n.attr("data-value"))}),f)?(r.removeClass(i),n.removeClass("demoActive"),n.removeAttr("checked"),n.attr("data-clear-container-deselected")!==undefined&&jQuery(n.attr("data-clear-container-deselected")).find(".demoActive").toggleClass("demoActive"),u(),t&&n.attr("data-refresh")&&location.reload(!0),!1):(r.addClass(i),n.hasClass("btn")?n.addClass("btn-primary"):n.toggleClass("demoActive"),n.attr("type")=="checkbox"&&n.attr("checked",!0),u(),t&&n.attr("data-refresh")&&location.reload(!0),!1)});s()});var setCookie=function(n,t,i){var r,u;i?(r=new Date,r.setTime(r.getTime()+i*864e5),u="; expires="+r.toGMTString()):u="";document.cookie=n+"="+t+u+"; path=/"},getCookie=function(n){for(var t,r=n+"=",u=document.cookie.split(";"),i=0;i<u.length;i++){for(t=u[i];t.charAt(0)==" ";)t=t.substring(1,t.length);if(t.indexOf(r)==0)return t.substring(r.length,t.length)}return null};