/*! jQuery UI - v1.12.1 - 2017-03-31
* http://jqueryui.com
* Copyright jQuery Foundation and other contributors; Licensed  */
!function(a){"function"==typeof define&&define.amd?define(["jquery","../version","../effect","./effect-size"],a):a(jQuery)}(function(a){return a.effects.define("scale",function(b,c){var d=a(this),e=b.mode,f=parseInt(b.percent,10)||(0===parseInt(b.percent,10)?0:"effect"!==e?0:100),g=a.extend(!0,{from:a.effects.scaledDimensions(d),to:a.effects.scaledDimensions(d,f,b.direction||"both"),origin:b.origin||["middle","center"]},b);b.fade&&(g.from.opacity=1,g.to.opacity=0),a.effects.effect.size.call(this,g,c)})});