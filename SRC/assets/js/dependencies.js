﻿jQuery.easing.jswing=jQuery.easing.swing;jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(n,t,i,r,u){return jQuery.easing[jQuery.easing.def](n,t,i,r,u)},easeInQuad:function(n,t,i,r,u){return r*(t/=u)*t+i},easeOutQuad:function(n,t,i,r,u){return-r*(t/=u)*(t-2)+i},easeInOutQuad:function(n,t,i,r,u){return(t/=u/2)<1?r/2*t*t+i:-r/2*(--t*(t-2)-1)+i},easeInCubic:function(n,t,i,r,u){return r*(t/=u)*t*t+i},easeOutCubic:function(n,t,i,r,u){return r*((t=t/u-1)*t*t+1)+i},easeInOutCubic:function(n,t,i,r,u){return(t/=u/2)<1?r/2*t*t*t+i:r/2*((t-=2)*t*t+2)+i},easeInQuart:function(n,t,i,r,u){return r*(t/=u)*t*t*t+i},easeOutQuart:function(n,t,i,r,u){return-r*((t=t/u-1)*t*t*t-1)+i},easeInOutQuart:function(n,t,i,r,u){return(t/=u/2)<1?r/2*t*t*t*t+i:-r/2*((t-=2)*t*t*t-2)+i},easeInQuint:function(n,t,i,r,u){return r*(t/=u)*t*t*t*t+i},easeOutQuint:function(n,t,i,r,u){return r*((t=t/u-1)*t*t*t*t+1)+i},easeInOutQuint:function(n,t,i,r,u){return(t/=u/2)<1?r/2*t*t*t*t*t+i:r/2*((t-=2)*t*t*t*t+2)+i},easeInSine:function(n,t,i,r,u){return-r*Math.cos(t/u*(Math.PI/2))+r+i},easeOutSine:function(n,t,i,r,u){return r*Math.sin(t/u*(Math.PI/2))+i},easeInOutSine:function(n,t,i,r,u){return-r/2*(Math.cos(Math.PI*t/u)-1)+i},easeInExpo:function(n,t,i,r,u){return t==0?i:r*Math.pow(2,10*(t/u-1))+i},easeOutExpo:function(n,t,i,r,u){return t==u?i+r:r*(-Math.pow(2,-10*t/u)+1)+i},easeInOutExpo:function(n,t,i,r,u){return t==0?i:t==u?i+r:(t/=u/2)<1?r/2*Math.pow(2,10*(t-1))+i:r/2*(-Math.pow(2,-10*--t)+2)+i},easeInCirc:function(n,t,i,r,u){return-r*(Math.sqrt(1-(t/=u)*t)-1)+i},easeOutCirc:function(n,t,i,r,u){return r*Math.sqrt(1-(t=t/u-1)*t)+i},easeInOutCirc:function(n,t,i,r,u){return(t/=u/2)<1?-r/2*(Math.sqrt(1-t*t)-1)+i:r/2*(Math.sqrt(1-(t-=2)*t)+1)+i},easeInElastic:function(n,t,i,r,u){var o=1.70158,f=0,e=r;return t==0?i:(t/=u)==1?i+r:(f||(f=u*.3),e<Math.abs(r)?(e=r,o=f/4):o=f/(2*Math.PI)*Math.asin(r/e),-(e*Math.pow(2,10*(t-=1))*Math.sin((t*u-o)*2*Math.PI/f))+i)},easeOutElastic:function(n,t,i,r,u){var o=1.70158,f=0,e=r;return t==0?i:(t/=u)==1?i+r:(f||(f=u*.3),e<Math.abs(r)?(e=r,o=f/4):o=f/(2*Math.PI)*Math.asin(r/e),e*Math.pow(2,-10*t)*Math.sin((t*u-o)*2*Math.PI/f)+r+i)},easeInOutElastic:function(n,t,i,r,u){var o=1.70158,f=0,e=r;return t==0?i:(t/=u/2)==2?i+r:(f||(f=u*.3*1.5),e<Math.abs(r)?(e=r,o=f/4):o=f/(2*Math.PI)*Math.asin(r/e),t<1)?-.5*e*Math.pow(2,10*(t-=1))*Math.sin((t*u-o)*2*Math.PI/f)+i:e*Math.pow(2,-10*(t-=1))*Math.sin((t*u-o)*2*Math.PI/f)*.5+r+i},easeInBack:function(n,t,i,r,u,f){return f==undefined&&(f=1.70158),r*(t/=u)*t*((f+1)*t-f)+i},easeOutBack:function(n,t,i,r,u,f){return f==undefined&&(f=1.70158),r*((t=t/u-1)*t*((f+1)*t+f)+1)+i},easeInOutBack:function(n,t,i,r,u,f){return(f==undefined&&(f=1.70158),(t/=u/2)<1)?r/2*t*t*(((f*=1.525)+1)*t-f)+i:r/2*((t-=2)*t*(((f*=1.525)+1)*t+f)+2)+i},easeInBounce:function(n,t,i,r,u){return r-jQuery.easing.easeOutBounce(n,u-t,0,r,u)+i},easeOutBounce:function(n,t,i,r,u){return(t/=u)<1/2.75?r*7.5625*t*t+i:t<2/2.75?r*(7.5625*(t-=1.5/2.75)*t+.75)+i:t<2.5/2.75?r*(7.5625*(t-=2.25/2.75)*t+.9375)+i:r*(7.5625*(t-=2.625/2.75)*t+.984375)+i},easeInOutBounce:function(n,t,i,r,u){return t<u/2?jQuery.easing.easeInBounce(n,t*2,0,r,u)*.5+i:jQuery.easing.easeOutBounce(n,t*2-u,0,r,u)*.5+r*.5+i}});!function(n,t){"use strict";var r,i,u,f,e;(n.uaMatch=function(n){n=n.toLowerCase();var t=/(opr)[\/]([\w.]+)/.exec(n)||/(chrome)[ \/]([\w.]+)/.exec(n)||/(version)[ \/]([\w.]+).*(safari)[ \/]([\w.]+)/.exec(n)||/(webkit)[ \/]([\w.]+)/.exec(n)||/(opera)(?:.*version|)[ \/]([\w.]+)/.exec(n)||/(msie) ([\w.]+)/.exec(n)||n.indexOf("trident")>=0&&/(rv)(?::| )([\w.]+)/.exec(n)||n.indexOf("compatible")<0&&/(mozilla)(?:.*? rv:([\w.]+)|)/.exec(n)||[],i=/(ipad)/.exec(n)||/(iphone)/.exec(n)||/(android)/.exec(n)||/(windows phone)/.exec(n)||/(win)/.exec(n)||/(mac)/.exec(n)||/(linux)/.exec(n)||[];return{browser:t[3]||t[1]||"",version:t[2]||"0",platform:i[0]||""}},r=n.uaMatch(t.navigator.userAgent),i={},r.browser&&(i[r.browser]=!0,i.version=r.version,i.versionNumber=parseInt(r.version)),r.platform&&(i[r.platform]=!0),(i.chrome||i.opr||i.safari)&&(i.webkit=!0),i.rv)&&(u="msie",r.browser=u,i[u]=!0);i.opr&&(f="opera",r.browser=f,i[f]=!0);i.safari&&i.android&&(e="android",r.browser=e,i[e]=!0);i.name=r.browser;i.platform=r.platform;n.browser=i}(jQuery,window);!function(n){n.fn.appear=function(t,i){var r=n.extend({data:void 0,one:!0,accX:0,accY:0},i);return this.each(function(){var i=n(this);if(i.appeared=!1,!t)return void i.trigger("appear",r.data);var u=n(window),f=function(){if(!i.is(":visible"))return void(i.appeared=!1);var n=u.scrollLeft(),t=u.scrollTop(),f=i.offset(),e=f.left,o=f.top,s=r.accX,h=r.accY,c=i.height(),l=u.height(),a=i.width(),v=u.width();o+c+h>=t&&t+l+h>=o&&e+a+s>=n&&n+v+s>=e?i.appeared||i.trigger("appear",r.data):i.appeared=!1},e=function(){if(i.appeared=!0,r.one){u.unbind("scroll",f);var e=n.inArray(f,n.fn.appear.checks);e>=0&&n.fn.appear.checks.splice(e,1)}t.apply(this,arguments)};r.one?i.one("appear",r.data,e):i.bind("appear",r.data,e);u.scroll(f);n.fn.appear.checks.push(f);f()})};n.extend(n.fn.appear,{checks:[],timeout:null,checkAll:function(){var t=n.fn.appear.checks.length;if(t>0)for(;t--;)n.fn.appear.checks[t]()},run:function(){n.fn.appear.timeout&&clearTimeout(n.fn.appear.timeout);n.fn.appear.timeout=setTimeout(n.fn.appear.checkAll,20)}});n.each(["append","prepend","after","before","attr","removeAttr","addClass","removeClass","toggleClass","remove","css","show","hide"],function(t,i){var r=n.fn[i];r&&(n.fn[i]=function(){var t=r.apply(this,arguments);return n.fn.appear.run(),t})})}(jQuery),function(){var o,t,i,n,r,f,u,e,s,h;o=window.device;window.device={};i=window.document.documentElement;h=window.navigator.userAgent.toLowerCase();device.ios=function(){return device.iphone()||device.ipod()||device.ipad()};device.iphone=function(){return n("iphone")};device.ipod=function(){return n("ipod")};device.ipad=function(){return n("ipad")};device.android=function(){return n("android")};device.androidPhone=function(){return device.android()&&n("mobile")};device.androidTablet=function(){return device.android()&&!n("mobile")};device.blackberry=function(){return n("blackberry")||n("bb10")||n("rim")};device.blackberryPhone=function(){return device.blackberry()&&!n("tablet")};device.blackberryTablet=function(){return device.blackberry()&&n("tablet")};device.windows=function(){return n("windows")};device.windowsPhone=function(){return device.windows()&&n("phone")};device.windowsTablet=function(){return device.windows()&&n("touch")};device.fxos=function(){return(n("(mobile;")||n("(tablet;"))&&n("; rv:")};device.fxosPhone=function(){return device.fxos()&&n("mobile")};device.fxosTablet=function(){return device.fxos()&&n("tablet")};device.meego=function(){return n("meego")};device.mobile=function(){return device.androidPhone()||device.iphone()||device.ipod()||device.windowsPhone()||device.blackberryPhone()||device.fxosPhone()||device.meego()};device.tablet=function(){return device.ipad()||device.androidTablet()||device.blackberryTablet()||device.windowsTablet()||device.fxosTablet()};device.portrait=function(){return 90!==Math.abs(window.orientation)};device.landscape=function(){return 90===Math.abs(window.orientation)};device.noConflict=function(){return window.device=o,this};n=function(n){return-1!==h.indexOf(n)};f=function(n){var t;return t=new RegExp(n,"i"),i.className.match(t)};t=function(n){if(!f(n))return i.className+=" "+n};e=function(n){if(f(n))return i.className=i.className.replace(n,"")};device.ios()?device.ipad()?t("ios ipad tablet"):device.iphone()?t("ios iphone mobile"):device.ipod()&&t("ios ipod mobile"):device.android()?device.androidTablet()?t("android tablet"):t("android mobile"):device.blackberry()?device.blackberryTablet()?t("blackberry tablet"):t("blackberry mobile"):device.windows()?device.windowsTablet()?t("windows tablet"):device.windowsPhone()?t("windows mobile"):t("desktop"):device.fxos()?device.fxosTablet()?t("fxos tablet"):t("fxos mobile"):device.meego()?t("meego mobile"):t("desktop");r=function(){return device.landscape()?(e("portrait"),t("landscape")):(e("landscape"),t("portrait"))};s="onorientationchange"in window;u=s?"orientationchange":"resize";window.addEventListener?window.addEventListener(u,r,!1):window.attachEvent?window.attachEvent(u,r):window[u]=r;r()}.call(this);!function(n){"use strict";function f(n){return new RegExp("(^|\\s+)"+n+"(\\s+|$)")}function e(n,u){var f=t(n,u)?r:i;f(n,u)}var t,i,r,u;"classList"in document.documentElement?(t=function(n,t){return n.classList.contains(t)},i=function(n,t){n.classList.add(t)},r=function(n,t){n.classList.remove(t)}):(t=function(n,t){return f(t).test(n.className)},i=function(n,i){t(n,i)||(n.className=n.className+" "+i)},r=function(n,t){n.className=n.className.replace(f(t)," ")});u={hasClass:t,addClass:i,removeClass:r,toggleClass:e,has:t,add:i,remove:r,toggle:e};"function"==typeof define&&define.amd?define(u):n.classie=u}(window),function(n,t){var i=i||function(i){var f={element:null,dragger:null,disable:"none",addBodyClasses:!0,hyperextensible:!0,resistance:.5,flickThreshold:50,transitionSpeed:.3,easing:"ease",maxPosition:266,minPosition:-266,tapToClose:!0,touchToDrag:!0,slideIntent:40,minDragDistance:5},r={simpleStates:{opening:null,towards:null,hyperExtending:null,halfway:null,flick:null,translation:{absolute:0,relative:0,sinceDirectionChange:0,percentage:0}}},o={},u={hasTouch:t.ontouchstart===null,eventType:function(n){var t={down:u.hasTouch?"touchstart":"mousedown",move:u.hasTouch?"touchmove":"mousemove",up:u.hasTouch?"touchend":"mouseup",out:u.hasTouch?"touchcancel":"mouseout"};return t[n]},page:function(n,t){return u.hasTouch&&t.touches.length&&t.touches[0]?t.touches[0]["page"+n]:t["page"+n]},klass:{has:function(n,t){return n.className.indexOf(t)!==-1},add:function(n,t){!u.klass.has(n,t)&&f.addBodyClasses&&(n.className+=" "+t)},remove:function(n,t){f.addBodyClasses&&(n.className=n.className.replace(t,"").replace(/^\s+|\s+$/g,""))}},dispatchEvent:function(n){if(typeof o[n]=="function")return o[n].call()},vendor:function(){var r=t.createElement("div"),n="webkit Moz O ms".split(" ");for(var i in n)if(typeof r.style[n[i]+"Transition"]!="undefined")return n[i]},transitionCallback:function(){return r.vendor==="Moz"||r.vendor==="ms"?"transitionend":r.vendor+"TransitionEnd"},canTransform:function(){return typeof f.element.style[r.vendor+"Transform"]!="undefined"},deepExtend:function(n,t){for(var i in t)t[i]&&t[i].constructor&&t[i].constructor===Object?(n[i]=n[i]||{},u.deepExtend(n[i],t[i])):n[i]=t[i];return n},angleOfDrag:function(n,t){var i,u;return u=Math.atan2(-(r.startDragY-t),r.startDragX-n),u<0&&(u+=2*Math.PI),i=Math.floor(u*(180/Math.PI)-180),i<0&&i>-180&&(i=360-Math.abs(i)),Math.abs(i)},events:{addEvent:function(n,t,i){return n.addEventListener?n.addEventListener(t,i,!1):n.attachEvent?n.attachEvent("on"+t,i):void 0},removeEvent:function(n,t,i){return n.addEventListener?n.removeEventListener(t,i,!1):n.attachEvent?n.detachEvent("on"+t,i):void 0},prevent:function(n){n.preventDefault?n.preventDefault():n.returnValue=!1}},parentUntil:function(n,t){for(var i=typeof t=="string";n.parentNode;){if(i&&n.getAttribute&&n.getAttribute(t)||!i&&n===t)return n;n=n.parentNode}return null}},e={translate:{get:{matrix:function(t){if(u.canTransform()){var i=n.getComputedStyle(f.element)[r.vendor+"Transform"].match(/\((.*)\)/);return i?(i=i[1].split(","),i.length===16&&(t+=8),parseInt(i[t],10)):0}return parseInt(f.element.style.left,10)}},easeCallback:function(){f.element.style[r.vendor+"Transition"]="";r.translation=e.translate.get.matrix(4);r.easing=!1;clearInterval(r.animatingInterval);r.easingTo===0&&(u.klass.remove(t.body,"snapjs-right"),u.klass.remove(t.body,"snapjs-left"));u.dispatchEvent("animated");u.events.removeEvent(f.element,u.transitionCallback(),e.translate.easeCallback)},easeTo:function(n){u.canTransform()?(r.easing=!0,r.easingTo=n,f.element.style[r.vendor+"Transition"]="all "+f.transitionSpeed+"s "+f.easing,r.animatingInterval=setInterval(function(){u.dispatchEvent("animating")},1),u.events.addEvent(f.element,u.transitionCallback(),e.translate.easeCallback),e.translate.x(n)):(r.translation=n,e.translate.x(n));n===0&&(f.element.style[r.vendor+"Transform"]="")},x:function(i){if((f.disable!=="left"||!(i>0))&&(f.disable!=="right"||!(i<0)))if(f.hyperextensible||(i===f.maxPosition||i>f.maxPosition?i=f.maxPosition:(i===f.minPosition||i<f.minPosition)&&(i=f.minPosition)),i=parseInt(i,10),isNaN(i)&&(i=0),u.canTransform()){var e="translate3d("+i+"px, 0,0)";f.element.style[r.vendor+"Transform"]=e}else f.element.style.width=(n.innerWidth||t.documentElement.clientWidth)+"px",f.element.style.left=i+"px",f.element.style.right=""}},drag:{listen:function(){r.translation=0;r.easing=!1;u.events.addEvent(f.element,u.eventType("down"),e.drag.startDrag);u.events.addEvent(f.element,u.eventType("move"),e.drag.dragging);u.events.addEvent(f.element,u.eventType("up"),e.drag.endDrag)},stopListening:function(){u.events.removeEvent(f.element,u.eventType("down"),e.drag.startDrag);u.events.removeEvent(f.element,u.eventType("move"),e.drag.dragging);u.events.removeEvent(f.element,u.eventType("up"),e.drag.endDrag)},startDrag:function(n){var t=n.target?n.target:n.srcElement,e=u.parentUntil(t,"data-snap-ignore"),i;if(e){u.dispatchEvent("ignore");return}(!f.dragger||(i=u.parentUntil(t,f.dragger),i||r.translation===f.minPosition||r.translation===f.maxPosition))&&(u.dispatchEvent("start"),f.element.style[r.vendor+"Transition"]="",r.isDragging=!0,r.hasIntent=null,r.intentChecked=!1,r.startDragX=u.page("X",n),r.startDragY=u.page("Y",n),r.dragWatchers={current:0,last:0,hold:0,state:""},r.simpleStates={opening:null,towards:null,hyperExtending:null,halfway:null,flick:null,translation:{absolute:0,relative:0,sinceDirectionChange:0,percentage:0}})},dragging:function(n){if(r.isDragging&&f.touchToDrag){var o=u.page("X",n),a=u.page("Y",n),v=r.translation,i=e.translate.get.matrix(4),h=o-r.startDragX,y=i>0,l=h,c;if(r.intentChecked&&!r.hasIntent)return;if(f.addBodyClasses&&(i>0?(u.klass.add(t.body,"snapjs-left"),u.klass.remove(t.body,"snapjs-right")):i<0&&(u.klass.add(t.body,"snapjs-right"),u.klass.remove(t.body,"snapjs-left"))),r.hasIntent===!1||r.hasIntent===null){var s=u.angleOfDrag(o,a),p=s>=0&&s<=f.slideIntent||s<=360&&s>360-f.slideIntent,w=s>=180&&s<=180+f.slideIntent||s<=180&&s>=180-f.slideIntent;r.hasIntent=w||p?!0:!1;r.intentChecked=!0}if(f.minDragDistance>=Math.abs(o-r.startDragX)||r.hasIntent===!1)return;u.events.prevent(n);u.dispatchEvent("drag");r.dragWatchers.current=o;r.dragWatchers.last>o?(r.dragWatchers.state!=="left"&&(r.dragWatchers.state="left",r.dragWatchers.hold=o),r.dragWatchers.last=o):r.dragWatchers.last<o&&(r.dragWatchers.state!=="right"&&(r.dragWatchers.state="right",r.dragWatchers.hold=o),r.dragWatchers.last=o);y?(f.maxPosition<i&&(c=(i-f.maxPosition)*f.resistance,l=h-c),r.simpleStates={opening:"left",towards:r.dragWatchers.state,hyperExtending:f.maxPosition<i,halfway:i>f.maxPosition/2,flick:Math.abs(r.dragWatchers.current-r.dragWatchers.hold)>f.flickThreshold,translation:{absolute:i,relative:h,sinceDirectionChange:r.dragWatchers.current-r.dragWatchers.hold,percentage:i/f.maxPosition*100}}):(f.minPosition>i&&(c=(i-f.minPosition)*f.resistance,l=h-c),r.simpleStates={opening:"right",towards:r.dragWatchers.state,hyperExtending:f.minPosition>i,halfway:i<f.minPosition/2,flick:Math.abs(r.dragWatchers.current-r.dragWatchers.hold)>f.flickThreshold,translation:{absolute:i,relative:h,sinceDirectionChange:r.dragWatchers.current-r.dragWatchers.hold,percentage:i/f.minPosition*100}});e.translate.x(l+v)}},endDrag:function(n){if(r.isDragging){u.dispatchEvent("end");var t=e.translate.get.matrix(4);if(r.dragWatchers.current===0&&t!==0&&f.tapToClose){u.dispatchEvent("close");u.events.prevent(n);e.translate.easeTo(0);r.isDragging=!1;r.startDragX=0;return}r.simpleStates.opening==="left"?r.simpleStates.halfway||r.simpleStates.hyperExtending||r.simpleStates.flick?r.simpleStates.flick&&r.simpleStates.towards==="left"?e.translate.easeTo(0):(r.simpleStates.flick&&r.simpleStates.towards==="right"||r.simpleStates.halfway||r.simpleStates.hyperExtending)&&e.translate.easeTo(f.maxPosition):e.translate.easeTo(0):r.simpleStates.opening==="right"&&(r.simpleStates.halfway||r.simpleStates.hyperExtending||r.simpleStates.flick?r.simpleStates.flick&&r.simpleStates.towards==="right"?e.translate.easeTo(0):(r.simpleStates.flick&&r.simpleStates.towards==="left"||r.simpleStates.halfway||r.simpleStates.hyperExtending)&&e.translate.easeTo(f.minPosition):e.translate.easeTo(0));r.isDragging=!1;r.startDragX=u.page("X",n)}}}},s=function(n){n.element&&(u.deepExtend(f,n),r.vendor=u.vendor(),e.drag.listen())};this.open=function(n){u.dispatchEvent("open");u.klass.remove(t.body,"snapjs-expand-left");u.klass.remove(t.body,"snapjs-expand-right");n==="left"?(r.simpleStates.opening="left",r.simpleStates.towards="right",u.klass.add(t.body,"snapjs-left"),u.klass.remove(t.body,"snapjs-right"),e.translate.easeTo(f.maxPosition)):n==="right"&&(r.simpleStates.opening="right",r.simpleStates.towards="left",u.klass.remove(t.body,"snapjs-left"),u.klass.add(t.body,"snapjs-right"),e.translate.easeTo(f.minPosition))};this.close=function(){u.dispatchEvent("close");e.translate.easeTo(0)};this.expand=function(i){var r=n.innerWidth||t.documentElement.clientWidth;i==="left"?(u.dispatchEvent("expandLeft"),u.klass.add(t.body,"snapjs-expand-left"),u.klass.remove(t.body,"snapjs-expand-right")):(u.dispatchEvent("expandRight"),u.klass.add(t.body,"snapjs-expand-right"),u.klass.remove(t.body,"snapjs-expand-left"),r*=-1);e.translate.easeTo(r)};this.on=function(n,t){return o[n]=t,this};this.off=function(n){o[n]&&(o[n]=!1)};this.enable=function(){u.dispatchEvent("enable");e.drag.listen()};this.disable=function(){u.dispatchEvent("disable");e.drag.stopListening()};this.settings=function(n){u.deepExtend(f,n)};this.state=function(){var n,t=e.translate.get.matrix(4);return n=t===f.maxPosition?"left":t===f.minPosition?"right":"closed",{state:n,info:r.simpleStates}};s(i)};typeof module!="undefined"&&module.exports&&(module.exports=i);typeof ender=="undefined"&&(this.Snap=i);typeof define=="function"&&define.amd&&define("snap",[],function(){return i})}.call(this,window,document);!function(n,t){"use strict";function u(n){this.callback=n;this.ticking=!1}function e(t){return t&&"undefined"!=typeof n&&(t===n||t.nodeType)}function f(n){var t,r,i,u;if(arguments.length<=0)throw new Error("Missing arguments in extend function");for(i=n||{},r=1;r<arguments.length;r++){u=arguments[r]||{};for(t in u)i[t]="object"!=typeof i[t]||e(i[t])?i[t]||u[t]:f(i[t],u[t])}return i}function o(n){return n===Object(n)?n:{down:n,up:n}}function i(n,t){t=f(t,i.options);this.lastKnownScrollY=0;this.elem=n;this.debouncer=new u(this.update.bind(this));this.tolerance=o(t.tolerance);this.classes=t.classes;this.offset=t.offset;this.scroller=t.scroller;this.initialised=!1;this.onPin=t.onPin;this.onUnpin=t.onUnpin;this.onTop=t.onTop;this.onNotTop=t.onNotTop}var r={bind:!!function(){}.bind,classList:"classList"in t.documentElement,rAF:!!(n.requestAnimationFrame||n.webkitRequestAnimationFrame||n.mozRequestAnimationFrame)};n.requestAnimationFrame=n.requestAnimationFrame||n.webkitRequestAnimationFrame||n.mozRequestAnimationFrame;u.prototype={constructor:u,update:function(){this.callback&&this.callback();this.ticking=!1},requestTick:function(){this.ticking||(requestAnimationFrame(this.rafCallback||(this.rafCallback=this.update.bind(this))),this.ticking=!0)},handleEvent:function(){this.requestTick()}};i.prototype={constructor:i,init:function(){if(i.cutsTheMustard)return(this.elem.classList.add(this.classes.initial),setTimeout(this.attachEvent.bind(this),100),this)},destroy:function(){var n=this.classes;this.initialised=!1;this.elem.classList.remove(n.unpinned,n.pinned,n.top,n.initial);this.scroller.removeEventListener("scroll",this.debouncer,!1)},attachEvent:function(){this.initialised||(this.lastKnownScrollY=this.getScrollY(),this.initialised=!0,this.scroller.addEventListener("scroll",this.debouncer,!1),this.debouncer.handleEvent())},unpin:function(){var n=this.elem.classList,t=this.classes;(n.contains(t.pinned)||!n.contains(t.unpinned))&&(n.add(t.unpinned),n.remove(t.pinned),this.onUnpin&&this.onUnpin.call(this))},pin:function(){var n=this.elem.classList,t=this.classes;n.contains(t.unpinned)&&(n.remove(t.unpinned),n.add(t.pinned),this.onPin&&this.onPin.call(this))},top:function(){var n=this.elem.classList,t=this.classes;n.contains(t.top)||(n.add(t.top),n.remove(t.notTop),this.onTop&&this.onTop.call(this))},notTop:function(){var n=this.elem.classList,t=this.classes;n.contains(t.notTop)||(n.add(t.notTop),n.remove(t.top),this.onNotTop&&this.onNotTop.call(this))},getScrollY:function(){return void 0!==this.scroller.pageYOffset?this.scroller.pageYOffset:void 0!==this.scroller.scrollTop?this.scroller.scrollTop:(t.documentElement||t.body.parentNode||t.body).scrollTop},getViewportHeight:function(){return n.innerHeight||t.documentElement.clientHeight||t.body.clientHeight},getDocumentHeight:function(){var n=t.body,i=t.documentElement;return Math.max(n.scrollHeight,i.scrollHeight,n.offsetHeight,i.offsetHeight,n.clientHeight,i.clientHeight)},getElementHeight:function(n){return Math.max(n.scrollHeight,n.offsetHeight,n.clientHeight)},getScrollerHeight:function(){return this.scroller===n||this.scroller===t.body?this.getDocumentHeight():this.getElementHeight(this.scroller)},isOutOfBounds:function(n){var t=0>n,i=n+this.getViewportHeight()>this.getScrollerHeight();return t||i},toleranceExceeded:function(n,t){return Math.abs(n-this.lastKnownScrollY)>=this.tolerance[t]},shouldUnpin:function(n,t){var i=n>this.lastKnownScrollY,r=n>=this.offset;return i&&r&&t},shouldPin:function(n,t){var i=n<this.lastKnownScrollY,r=n<=this.offset;return i&&t||r},update:function(){var n=this.getScrollY(),i=n>this.lastKnownScrollY?"down":"up",t=this.toleranceExceeded(n,i);this.isOutOfBounds(n)||(n<=this.offset?this.top():this.notTop(),this.shouldUnpin(n,t)?this.unpin():this.shouldPin(n,t)&&this.pin(),this.lastKnownScrollY=n)}};i.options={tolerance:{up:0,down:0},offset:0,scroller:n,classes:{pinned:"headroom--pinned",unpinned:"headroom--unpinned",top:"headroom--top",notTop:"headroom--not-top",initial:"headroom"}};i.cutsTheMustard="undefined"!=typeof r&&r.rAF&&r.bind&&r.classList;n.Headroom=i}(window,document);!function(n){n&&(n.fn.headroom=function(t){return this.each(function(){var u=n(this),i=u.data("headroom"),r="object"==typeof t&&t;r=n.extend(!0,{},Headroom.options,r);i||(i=new Headroom(this,r),i.init(),u.data("headroom",i));"string"==typeof t&&i[t]()})},n("[data-headroom]").each(function(){var t=n(this);t.headroom(t.data())}))}(window.Zepto||window.jQuery);