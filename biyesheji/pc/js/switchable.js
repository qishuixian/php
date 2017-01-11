
(function(a,b){function c(e,f){if(arguments.length!==0){f=f||{};this.ID=e;this.NAVCLS=f.navCls||"js_switch_nav";this.CONTCLS=f.contentCls||"js_switch_ct";this.TRIGGERCLS=f.triggerCls||"js_switch_trigger";this.PREVCLS=f.prevCls||"js_switch_prev";this.NEXTCLS=f.nextCls||"js_switch_next";this.PANELCLS=f.panelCls||"js_switch_panel";this.PREVCLS=f.prevCls||"js_switch_prev";this.ACTIVEYRIGGERCLS=f.activeTriggerCls||"js_active";this.DISABLEBTNCLS=f.disableBtnCls||"js_switch_off";this.TRIGGERTYPE=f.triggerType||"click";this.EFFECT=f.effect||"normal";this.HASTRIGGERS=(f.hasTriggers!==undefined)?f.HASTRIGGERS:true;this.AUTOPLAY=(f.autoPlay!==undefined)?f.autoPlay:false;this.CIRCULAR=(f.circular!==undefined)?f.circular:true;this.DELAY=f.delay||200;this.STEPS=f.steps||1;this.VIEWSIZE=f.viewSize||1;this.INTERVAL=f.interval||5000;this.DURATION=f.duration||500;this.EASING=f.easing||"swing";this._activeIndex=f.activeIndex||0;this.CALLFUN=f.func||null;this._autoPlayTimer;this._eventTimer;}};c.prototype={_struct:function(){var e=a("#"+this.ID),f=e.find("."+this.PANELCLS),g=e.find("."+this.CONTCLS);switch(this.EFFECT){case"scrollx":var h=f.outerWidth(true)*f.length+"px";g.css({"position":"absolute","width":h});f.css({"float":"left"});break;case"scrolly":g.css({"position":"absolute"});break;case"fade":f.css({"position":"absolute","left":"0","top":"0","z-index":"0","opacity":"0"});break}(this.AUTOPLAY===true)&&this._auto()},_switch:function(e){switch(this.EFFECT){case"scrollx":this._switchScrollx(e);break;case"scrolly":this._switchScrolly(e);break;case"fade":this._switchFade(e);break;default:this._switchNormal(e)}},_switchNormal:function(e){var f=a("#"+this.ID),g=f.find("."+this.PANELCLS);this._setActiveTriggerCls(e);g.hide();g.eq(e).show();this._activeIndex=e;(this.CALLFUN!==null)&&this.CALLFUN.call(this,e)},_switchScrolly:function(e){var f=a("#"+this.ID),g=f.find("."+this.PANELCLS),h=f.find("."+this.CONTCLS),i=g.outerHeight(true),j=-e*this.STEPS*i;this._setActiveTriggerCls(e);h.stop().animate({"top":j},this.DURATION,this.EASING);this._activeIndex=e;(this.CIRCULAR===false)&&this._setDisableBtnCls(e);(this.CALLFUN!==null)&&this.CALLFUN.call(this,e)},_switchScrollx:function(e){var f=a("#"+this.ID),g=f.find("."+this.PANELCLS),h=f.find("."+this.CONTCLS),i=g.outerWidth(true),j=-e*this.STEPS*i;this._setActiveTriggerCls(e);h.stop().animate({"left":j},this.DURATION,this.EASING);this._activeIndex=e;(this.CIRCULAR===false)&&this._setDisableBtnCls(e);(this.CALLFUN!==null)&&this.CALLFUN.call(this,e)},_switchFade:function(e){var f=a("#"+this.ID),g=f.find("."+this.PANELCLS);this._setActiveTriggerCls(e);g.eq(this._activeIndex).stop().animate({opacity:0},this.DURATION,this.EASING).css("z-index",0);g.eq(e).stop().animate({opacity:1},this.DURATION,this.EASING).css("z-index",1);this._activeIndex=e;(this.CALLFUN!==null)&&this.CALLFUN.call(this,e)},_setActiveTriggerCls:function(e){var f=a("#"+this.ID),g=f.find("."+this.TRIGGERCLS),e=e||0;g.removeClass(this.ACTIVEYRIGGERCLS);g.eq(e).addClass(this.ACTIVEYRIGGERCLS)},_setDisableBtnCls:function(e){var f=a("#"+this.ID),g=f.find("."+this.PANELCLS),h=f.find("."+this.PREVCLS),i=f.find("."+this.NEXTCLS),j=Math.ceil((g.length-this.VIEWSIZE)/this.STEPS);if(e==0){h.addClass(this.DISABLEBTNCLS);if(g.length<=this.VIEWSIZE){i.addClass(this.DISABLEBTNCLS)}else{i.removeClass(this.DISABLEBTNCLS)}}else if(e==j){i.addClass(this.DISABLEBTNCLS);h.removeClass(this.DISABLEBTNCLS)}else{h.removeClass(this.DISABLEBTNCLS);i.removeClass(this.DISABLEBTNCLS)}},_auto:function(){var e=this,f=a("#"+this.ID);clearInterval(this._autoPlayTimer);e._autoPlayTimer=setInterval(function(){e._doPlay()},e.INTERVAL);f.unbind("mouseenter");f.unbind("mouseleave");f.mouseenter(function(){clearInterval(e._autoPlayTimer)});f.mouseleave(function(){e._autoPlayTimer=setInterval(function(){e._doPlay()},e.INTERVAL)})},_doPlay:function(){this._switch(this._checkActiveIndex(this._activeIndex+1))},_checkActiveIndex:function(e){var f=a("#"+this.ID),g=f.find("."+this.PANELCLS),h=Math.ceil((g.length-this.VIEWSIZE)/this.STEPS);if(e<0){return h}else if(e>h){return 0};return e},stop:function(){var e=a("#"+this.ID);e.unbind("mouseenter");e.unbind("mouseleave");clearInterval(this._autoPlayTimer)},start:function(){this._auto()},switchTo:function(e){this._switch(e)},prev:function(){this._switch(this._checkActiveIndex(this._activeIndex-1))},next:function(){this._switch(this._checkActiveIndex(this._activeIndex+1))},_bindEvent:function(){var e=this,f=a("#"+this.ID),g=f.find("."+this.TRIGGERCLS),h=f.find("."+this.PREVCLS),i=f.find("."+this.NEXTCLS);g.each(function(j,k){a(k)[e.TRIGGERTYPE](function(){if(e.TRIGGERTYPE==="click"){e._switch(j)}else{e._eventTimer=setTimeout(function(){e._switch(j)},e.DELAY)}})});if(e.TRIGGERTYPE==="mouseenter"){g.bind("mouseleave",function(){clearTimeout(e._eventTimer)})};i[e.TRIGGERTYPE](function(){if(a(this).hasClass(e.DISABLEBTNCLS))return;e.next()});h[e.TRIGGERTYPE](function(){if(a(this).hasClass(e.DISABLEBTNCLS))return;e.prev()})},_init:function(e,f){this._struct();this._bindEvent();this._switch(this._activeIndex)}};var d=b.Switch={};d.Tabs=function(e,f){c.call(this,e,f);this._init(e,f)};d.Tabs.prototype=new c();d.Tabs.prototype.constructor=d.Tabs;d.Slide=function(e,f){c.call(this,e,f);this._init(e,f)};d.Slide.prototype=new c();d.Slide.prototype.constructor=d.Slide;d.Carousel=function(e,f){c.call(this,e,f);this._init(e,f)};d.Carousel.prototype=new c();d.Carousel.prototype.constructor=d.Carousel;d.Carousel.prototype._init=function(e,f){this._struct();(this.CIRCULAR===false)&&this._setDisableBtnCls(this._activeIndex);this._setTrigger(f);this._bindEvent();this._switch(this._activeIndex)};d.Carousel.prototype._setTrigger=function(e){var f="",g=a("#"+this.ID),h=g.find("."+this.TRIGGERCLS),i=g.find("."+this.PANELCLS),j=g.find("."+this.NAVCLS),k=Math.ceil((i.length-this.VIEWSIZE)/this.STEPS);for(var l=1;l<=k+1;l++){f=f+'<li class="js_switch_trigger"><span>'+l+'</span></li>'};j.html(f);h=g.find("."+(e.triggerCls||"js_switch_trigger"))}})(jQuery,window);jQuery.easing['jswing']=jQuery.easing['swing'];jQuery.extend(jQuery.easing,{def:'easeOutQuad',swing:function(a,b,c,d,e){return jQuery.easing[jQuery.easing.def](a,b,c,d,e)},easeOutQuad:function(a,b,c,d,e){return-d*(b/=e)*(b-2)+c},easeOutExpo:function(a,b,c,d,e){return(b==e)?c+c:d*(-Math.pow(2,-10*b/e)+1)+c},easeInOutExpo:function(a,b,c,d,e){if(b==0)return c;if(b==e)return c+d;if((b/=e/2)<1)return d/2*Math.pow(2,10*(b-1))+c;return d/2*(-Math.pow(2,-10*--b)+2)+c},easeOutCirc:function(a,b,c,d,e){return d*Math.sqrt(1-(b=b/e-1)*b)+c},easeInOutCirc:function(a,b,c,d,e){if((b/=e/2)<1)return-d/2*(Math.sqrt(1-b*b)-1)+c;return d/2*(Math.sqrt(1-(b-=2)*b)+1)+c},easeOutElastic:function(a,b,c,d,e){var f=1.70158;var g=0;var h=d;if(b==0)return c;if((b/=e)==1)return c+d;if(!g)g=e*.3;if(h<Math.abs(d)){h=d;var i=g/4}else var f=g/(2*Math.PI)*Math.asin(d/h);return h*Math.pow(2,-10*b)*Math.sin((b*e-f)*(2*Math.PI)/g)+d+c},easeOutBack:function(a,b,c,d,e,f){if(f==undefined)f=1.70158;return d*((b=b/e-1)*b*((f+1)*b+f)+1)+c}});