﻿!function(n){var t=function(t,i){var r,u;this.element=n(t);this.picker=n('<div class="slider"><div class="slider-track"><div class="slider-selection"><\/div><div class="slider-handle"><\/div><div class="slider-handle"><\/div><\/div><div class="tooltip"><div class="tooltip-arrow"><\/div><div class="tooltip-inner"><\/div><\/div><\/div>').insertBefore(this.element).append(this.element);this.id=this.element.data("slider-id")||i.id;this.id&&(this.picker[0].id=this.id);typeof Modernizr!="undefined"&&Modernizr.touch&&(this.touchCapable=!0);r=this.element.data("slider-tooltip")||i.tooltip;this.tooltip=this.picker.find(".tooltip");this.tooltipInner=this.tooltip.find("div.tooltip-inner");this.orientation=this.element.data("slider-orientation")||i.orientation;switch(this.orientation){case"vertical":this.picker.addClass("slider-vertical");this.stylePos="top";this.mousePos="pageY";this.sizePos="offsetHeight";this.tooltip.addClass("right")[0].style.left="100%";break;default:this.picker.addClass("slider-horizontal").css("width",this.element.outerWidth());this.orientation="horizontal";this.stylePos="left";this.mousePos="pageX";this.sizePos="offsetWidth";this.tooltip.addClass("top")[0].style.top=-this.tooltip.outerHeight()-14+"px"}this.min=this.element.data("slider-min")||i.min;this.max=this.element.data("slider-max")||i.max;this.step=this.element.data("slider-step")||i.step;this.value=this.element.data("slider-value")||i.value;this.value[1]&&(this.range=!0);this.selection=this.element.data("slider-selection")||i.selection;this.selectionEl=this.picker.find(".slider-selection");this.selection==="none"&&this.selectionEl.addClass("hide");this.selectionElStyle=this.selectionEl[0].style;this.handle1=this.picker.find(".slider-handle:first");this.handle1Stype=this.handle1[0].style;this.handle2=this.picker.find(".slider-handle:last");this.handle2Stype=this.handle2[0].style;u=this.element.data("slider-handle")||i.handle;switch(u){case"round":this.handle1.addClass("round");this.handle2.addClass("round");break;case"triangle":this.handle1.addClass("triangle");this.handle2.addClass("triangle")}if(this.range?(this.value[0]=Math.max(this.min,Math.min(this.max,this.value[0])),this.value[1]=Math.max(this.min,Math.min(this.max,this.value[1]))):(this.value=[Math.max(this.min,Math.min(this.max,this.value))],this.handle2.addClass("hide"),this.value[1]=this.selection=="after"?this.max:this.min),this.diff=this.max-this.min,this.percentage=[(this.value[0]-this.min)*100/this.diff,(this.value[1]-this.min)*100/this.diff,this.step*100/this.diff],this.offset=this.picker.offset(),this.size=this.picker[0][this.sizePos],this.formater=i.formater,this.layout(),this.touchCapable)this.picker.on({touchstart:n.proxy(this.mousedown,this)});else this.picker.on({mousedown:n.proxy(this.mousedown,this)});if(r==="show")this.picker.on({mouseenter:n.proxy(this.showTooltip,this),mouseleave:n.proxy(this.hideTooltip,this)});else this.tooltip.addClass("hide")};t.prototype={constructor:t,over:!1,inDrag:!1,showTooltip:function(){this.tooltip.addClass("in");this.over=!0},hideTooltip:function(){this.inDrag===!1&&this.tooltip.removeClass("in");this.over=!1},layout:function(){this.handle1Stype[this.stylePos]=this.percentage[0]+"%";this.handle2Stype[this.stylePos]=this.percentage[1]+"%";this.orientation=="vertical"?(this.selectionElStyle.top=Math.min(this.percentage[0],this.percentage[1])+"%",this.selectionElStyle.height=Math.abs(this.percentage[0]-this.percentage[1])+"%"):(this.selectionElStyle.left=Math.min(this.percentage[0],this.percentage[1])+"%",this.selectionElStyle.width=Math.abs(this.percentage[0]-this.percentage[1])+"%");this.range?(this.tooltipInner.text(this.formater(this.value[0])+" : "+this.formater(this.value[1])),this.tooltip[0].style[this.stylePos]=this.size*(this.percentage[0]+(this.percentage[1]-this.percentage[0])/2)/100-(this.orientation==="vertical"?this.tooltip.outerHeight()/2:this.tooltip.outerWidth()/2)+"px"):(this.tooltipInner.text(this.formater(this.value[0])),this.tooltip[0].style[this.stylePos]=this.size*this.percentage[0]/100-(this.orientation==="vertical"?this.tooltip.outerHeight()/2:this.tooltip.outerWidth()/2)+"px")},mousedown:function(t){var i,u,f,r;if(this.touchCapable&&t.type==="touchstart"&&(t=t.originalEvent),this.offset=this.picker.offset(),this.size=this.picker[0][this.sizePos],i=this.getPercentage(t),this.range?(u=Math.abs(this.percentage[0]-i),f=Math.abs(this.percentage[1]-i),this.dragged=u<f?0:1):this.dragged=0,this.percentage[this.dragged]=i,this.layout(),this.touchCapable)n(document).on({touchmove:n.proxy(this.mousemove,this),touchend:n.proxy(this.mouseup,this)});else n(document).on({mousemove:n.proxy(this.mousemove,this),mouseup:n.proxy(this.mouseup,this)});return this.inDrag=!0,r=this.calculateValue(),this.element.trigger({type:"slideStart",value:r}).trigger({type:"slide",value:r}),!1},mousemove:function(n){var t,i;return this.touchCapable&&n.type==="touchmove"&&(n=n.originalEvent),t=this.getPercentage(n),this.range&&(this.dragged===0&&this.percentage[1]<t?(this.percentage[0]=this.percentage[1],this.dragged=1):this.dragged===1&&this.percentage[0]>t&&(this.percentage[1]=this.percentage[0],this.dragged=0)),this.percentage[this.dragged]=t,this.layout(),i=this.calculateValue(),this.element.trigger({type:"slide",value:i}).data("value",i).prop("value",i),!1},mouseup:function(){this.touchCapable?n(document).off({touchmove:this.mousemove,touchend:this.mouseup}):n(document).off({mousemove:this.mousemove,mouseup:this.mouseup});this.inDrag=!1;this.over==!1&&this.hideTooltip();this.element;var t=this.calculateValue();return this.element.trigger({type:"slideStop",value:t}).data("value",t).prop("value",t),!1},calculateValue:function(){var n;return this.range?(n=[this.min+Math.round(this.diff*this.percentage[0]/100/this.step)*this.step,this.min+Math.round(this.diff*this.percentage[1]/100/this.step)*this.step],this.value=n):(n=this.min+Math.round(this.diff*this.percentage[0]/100/this.step)*this.step,this.value=[n,this.value[1]]),n},getPercentage:function(n){this.touchCapable&&(n=n.touches[0]);var t=(n[this.mousePos]-this.offset[this.stylePos])*100/this.size;return t=Math.round(t/this.percentage[2])*this.percentage[2],Math.max(0,Math.min(100,t))},getValue:function(){return this.range?this.value:this.value[0]},setValue:function(n){this.value=n;this.range?(this.value[0]=Math.max(this.min,Math.min(this.max,this.value[0])),this.value[1]=Math.max(this.min,Math.min(this.max,this.value[1]))):(this.value=[Math.max(this.min,Math.min(this.max,this.value))],this.handle2.addClass("hide"),this.value[1]=this.selection=="after"?this.max:this.min);this.diff=this.max-this.min;this.percentage=[(this.value[0]-this.min)*100/this.diff,(this.value[1]-this.min)*100/this.diff,this.step*100/this.diff];this.layout()}};n.fn.slider=function(i,r){return this.each(function(){var f=n(this),u=f.data("slider"),e=typeof i=="object"&&i;u||f.data("slider",u=new t(this,n.extend({},n.fn.slider.defaults,e)));typeof i=="string"&&u[i](r)})};n.fn.slider.defaults={min:0,max:10,step:1,orientation:"horizontal",value:5,selection:"before",tooltip:"show",handle:"round",formater:function(n){return n}};n.fn.slider.Constructor=t}(window.jQuery);