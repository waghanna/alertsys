(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

$(function () {
    $('.dropdown').hover(function () {
        $(this).addClass('open');
    }, function () {
        $(this).removeClass('open');
    });

    $('a').click(function () {
        $('html, body').animate({
            scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top
        }, 700);
        return false;
    });
    document.getElementById('location').value = location.href;
});

var amountScrolled = 200;

$(window).scroll(function () {
    if ($(window).scrollTop() > amountScrolled) {
        $('a.back-to-top').fadeIn('slow');
    } else {
        $('a.back-to-top').fadeOut('slow');
    }
});

$('a.back-to-top, a.simple-back-to-top').click(function () {
    $('html, body').animate({
        scrollTop: 0
    }, 700);
    return false;
});

},{}]},{},[1]);

//# sourceMappingURL=app.js.map
