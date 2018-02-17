/*jslint browser: true*/
/*global $*/
function onHomeReady() {
    'use strict';
    
    var Slides = {
        container: "",

        totalSlides: "",

        translateAmount: "",

        currentSlide: "",

        slideWidth: "",

        init : function (totalSlides) {
            var each;
            Slides.container = $('#slides');
            Slides.translateAmount = 0;
            Slides.currentSlide = 1;
            if (!totalSlides) {
                throw new Error('Please pass the total number of slides.');
            }
            Slides.totalSlides = totalSlides;

            Slides.loadContent();

            each = Slides.container.children('div');

            // Determine the width of our canvas
            Slides.slideWidth = each.width() + (parseInt(each.css('margin-right'), 10));

            Slides.keyPress();
        },
        loadContent : function () {
            var i;
            Slides.container.hide();
            for (i = 1; i <= Slides.totalSlides; i += 1) {
                $('<div id="#slide-' + i + '"></div>')
                    .load('slides/Module1/' + i + '.php')
                    .appendTo(Slides.container);
            }
            Slides.container.show();
        },

        keyPress : function () {
            $(document.body).keydown(function (e) {
                // if left or right arrow key is pressed
                if (e.keyCode === 39 || e.keyCode === 37) {
                    e.preventDefault();
                    if (e.keyCode === 39) {
                        Slides.next();
                    } else {
                        Slides.prev();
                    }
                }
            });
        },

        next : function () {
            var totalSlideWidth = Slides.slideWidth * (Slides.totalSlides - 1);
            if (Slides.translateAmount == -totalSlideWidth) {
                return;
            } else {
                Slides.translateAmount -= Slides.slideWidth;
                Slides.updateHash(++Slides.currentSlide);
                Slides.animate();
            }
        },

        prev : function () {
            // No more left to go back.
            if (Slides.translateAmount === 0) {
                return;
            } else {
                Slides.translateAmount += Slides.slideWidth;
                Slides.updateHash(--Slides.currentSlide);
                Slides.animate();
            }
        },

        animate : function () {
            Slides
                .container
                .children()
                .css('-webkit-transform', 'translateX(' + Slides.translateAmount + 'px)');
        },

        updateHash : function (direction) {
            // Update current Slides and hash.
            location.hash = '#slide-' + Slides.currentSlide;
        }
    };

    // All right; let's do this. 
    Slides.init(3);
}
