!function t(e,r,i){function n(s,f){if(!r[s]){if(!e[s]){var a="function"==typeof require&&require;if(!f&&a)return a(s,!0);if(o)return o(s,!0);var c=new Error("Cannot find module '"+s+"'");throw c.code="MODULE_NOT_FOUND",c}var u=r[s]={exports:{}};e[s][0].call(u.exports,function(t){var r=e[s][1][t];return n(r?r:t)},u,u.exports,t,e,r,i)}return r[s].exports}for(var o="function"==typeof require&&require,s=0;s<i.length;s++)n(i[s]);return n}({1:[function(t,e,r){"use strict";function i(){n=$fileslist_temp.split("\n");var t=$("#home-img").attr("src"),e=0;void 0!==t&&(e=(n.indexOf(t.filename(!0))+1)%n.length),$("#home-img").attr("src","../img/display/"+n[e]);var r=0==e?5e3:2e3;setTimeout(i,r),0==e?($("#home-img-text").html("Safety and Efficiency<br>Keep us moving forward."),$("#home-img-text").css("top","0px").css("left","0px").css("right","auto")):($("#home-img-text").html("Prevent accidents and<br>maximize productivity"),$("#home-img-text").css("top","200px").css("left","auto").css("right","0px"))}var n=[];String.prototype.filename=function(t){var e=this.replace(/\\/g,"/");return e=e.substring(e.lastIndexOf("/")+1),t?e.replace(/[?#].+$/,""):e.split(".")[0]},$(function(){i()})},{}]},{},[1]);