// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 5.6
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_blinds(l,k,a){var g=jQuery;var j=g(this);var c=l.parts||3;var h=g("<div>").addClass("ws_effect").css({position:"absolute",width:"100%",height:"100%",left:0,top:0,"z-index":8}).hide().appendTo(a.parent());var d=g("<div>").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).appendTo(h);var e=[];for(var f=0;f<c;f++){e[f]=g("<div>").css({position:"absolute",height:"100%",width:Math.ceil(100/c)+1+"%",border:"none",margin:0,overflow:"hidden",top:0,left:Math.round(100*f/c)+"%"}).appendTo(h)}function b(p,m,n,i,o){if(l.support.transform&&l.support.transition){if(!m.transform){m.transform=""}if(m.left){m.transform+=" translate3d("+(m.left?m.left:0)+"px,0,0)"}delete m.left;if(n||i){m.transition=n+"ms all "+i+"ms ease-in-out"}p.css(m);if(o){p.on("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd",o)}}else{if(n){p.animate(m,n,"swing",o)}else{p.css(m)}}}this.go=function(q,o,u){var n=o>q?1:0;j.trigger("effectStart",h);if(u){if(u<=-1){q=(o+1)%k.length;n=0}else{if(u>=1){q=(o-1+k.length)%k.length;n=1}else{return -1}}}h.find("img").stop(true,true);h.show();var r=g("ul",a);if(l.fadeOut){r.fadeOut((1-1/c)*l.duration)}var s=g(k.get(o)).clone().appendTo(d);b(s,{left:0});b(s,{left:(!n?1:-1)*h.width()*0.5},l.duration,l.duration*0.1);for(var p=0;p<e.length;p++){var m=e[p];var t=g(k.get(q)).clone().css({position:"absolute",top:0,width:"auto",height:"100%"}).appendTo(m);b(t,{left:(!n?(-h.width()):(h.width()-m.position().left))});b(t,{left:-m.position().left},(l.duration/(e.length+1))*(n?(e.length-p+1):(p+2)),0,((!n&&p==e.length-1||n&&!p)?function(){j.trigger("effectEnd",q);h.hide().find("img").remove();s.remove()}:false))}return q}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 5.6
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery("#wowslider-container1").wowSlider({effect:"blinds",prev:"",next:"",duration:20*100,delay:20*100,width:960,height:360,autoPlay:true,playPause:true,stopOnHover:false,loop:false,bullets:true,caption:true,captionEffect:"slide",controls:true,onBeforeStep:0,images:0});