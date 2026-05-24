/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
(function ($) {

    $.fn.changeElementType = function (newType) {
        var $this = this;

        this.each(function (index) {

            var atts = {};
            $.each(this.attributes, function () {
                atts[ this.name ] = this.value;
            });

            var $old = $(this);
            var $new = $('<' + newType + '/>', atts).append($old.contents());
            $old.replaceWith($new);

            $this[ index ] = $new[0];
        });

        return this;
    };

})(jQuery);

(function ($, root, undefined) {

    $(document).ready(function ()
    {
          $('section.cd-timeline.cd-container').each(function(){
              $(this).removeAttr('id');
              });
// $('.primary-menu-wrapper .menu-item-home a').text('<i class="icon-home icons"></i>');
        $('.aktualnosci_slider').changeElementType('div');
        $('.aktualnosci_slider > *').each(function () {
            $(this).addClass('news-item');
            $(this).find('a:not(.czytaj_wiecej)').add("h3"); 
        });


//$('.search-modal')
        $('.news-item').each(function () {
            link = $(this).find('a').attr('href');
            $(this).append("<a class='czytaj_wiecej' href='" + link + "'> czytaj więcej <i class=\"fas fa-arrow-right\"></i></a>");
            $(this).find('time').prepend("<i class=\"far fa-clock\"></i>");
        });
        $('.projekty_aktualnosci > *').each(function () {
            $(this).addClass('projekt-item');
            $(this).find('a:not(.czytaj_wiecej)').add("h3");
        });
         $('.projekt-item').each(function () {
            link = $(this).find('a').attr('href');
            $(this).append("<a class='czytaj_wiecej' href='" + link + "'> czytaj więcej <i class=\"fas fa-arrow-right\"></i></a>");
            $(this).find('time').prepend("<i class=\"far fa-clock\"></i>");
        });
        $('.bip_footer').parent().addClass('bip');

        $('body').on('click touch tap', '.font-size .pojo-a11y-btn-resize-plus', function () {
            $('#pojo-a11y-toolbar .pojo-a11y-btn-resize-plus').trigger('click');
            $('.slick-slide').height('100%');
        });
        $('body').on('click touch tap', '.font-size .pojo-a11y-btn-resize-minus', function () {
            $('#pojo-a11y-toolbar .pojo-a11y-btn-resize-minus').trigger('click');
            $('.slick-slide').height('100%');

        });
          $('body').on('click touch tap', '#pojo-a11y-toolbar .pojo-a11y-toolbar-item a', function () {
              $('.slick-slide').height('100%');

        });
        $('body').on('click touch tap', '.font-size .pojo-a11y-btn-resize-regular', function () {
            $('body')[0].className = $('body')[0].className.replace(/\pojo-a11y-resize-font-.*?\b/g, '');

        });
        $('body').on('click touch tap', '.header-content-top-bottom .pojo-a11y-btn-high-contrast', function () {
            $('#pojo-a11y-toolbar .pojo-a11y-btn-negative-contrast').trigger('click');

        });
        $('[target="_blank"]').each(function () {
            $(this).append('<span class="visuallyhidden">otwiera się w nowej karcie</span>');
        });
        aktualnosci_slick();

        function aktualnosci_slick() {
            $('.aktualnosci_slider').slick({
                dots: false,
                arrows: true,
                infinite: false,
                slick: 'li',
                slidesToShow: 3,
                slidesToScroll: 3,
                adaptiveHeight: true,
                focusOnSelect: true,
                pauseOnHover: true,
                responsive: [
                    {
                        breakpoint: 1000,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            variableWidth: false,
                            infinite: false,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 850,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            variableWidth: false
                        }
                    },
                    {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 1,
                            variableWidth: false,
                            arrows: false,
                            slidesToScroll: 1
                        }
                    }
                ]
            }).on('setPosition', function (event, slick) {
                slick.$slides.css('height', slick.$slideTrack.height() + 'px');
            });
        }
        ;
        //ukrywanie arial label itd
        $('.aktualnosci_slider .slick-arrow[aria-label]').each(function () {
            $(this).removeAttr('aria-label');
            if ($(this).hasClass('slick-prev')) {
                $(this).html('<span class="visuallyhidden">poprzednie aktualności</span>');
            } else if ($(this).hasClass('slick-next')) {
                $(this).html('<span class="visuallyhidden">następne aktualności</span>');
            }
        });
//        $('[target="_blank"]').each(function () {
//            $(this).append('<span class="visuallyhidden">otwiera się w nowej karcie</span>');
//        });
        function makeResponsiveTables() {

            $('table').each(function () {
                var table_headers = [];
                $('table thead tr').find('th').each(function () {
                    table_headers.push($(this).text().trim());
                });
                $(this).find('tbody tr').each(function () {
                    $(this).find('td').each(function (index) {
                        $(this).attr('data-label', table_headers[index]);
                    });
                });
            });
        }
        makeResponsiveTables();

        function getWCAGspanInformacja() {
            $('.pobierz_plik').each(function () {
                let trescSpan = $(this).parent().find('h3').html();
                let WCAGspan = $(this).find('a');
                WCAGspan.prepend('<i class="far fa-file-pdf"></i>');
                if (trescSpan) {
                    WCAGspan.prepend('<span class="visuallyhidden"> ' + trescSpan + ' - </span>');
                }
            });
        }
        getWCAGspanInformacja();

        $('.da-attachments-table td').each(function () {
            let WCAGspan = $(this).find('a');
            WCAGspan.prepend('<i class="fas fa-file-download"></i>');
        });
        $('.da-attachments-table').DataTable({
            paging: false,
            select: true,
            searching: false
        });



        function maxWidthCalc() {
            const scrollbarWidth = '' + ($('#site-header').width() - $('.header-inner').width() + 2) / 2 + 'px';
            $('#site-header .primary-menu-wrapper span.before').width(scrollbarWidth);
//            css('width', '${scrollbarWidth}px)');
//   $('.custom-text-o-nas').width('calc(100vw - '+scrollbarWidth+'px)');
        }
        maxWidthCalc();
        $(window).resize(function () {
            maxWidthCalc();
        });

  $('.box_item').on('click', function () {
            const link = $(this).find('a.like_h3').attr('href');
            const target = $(this).find('a.like_h3').attr('target');

            if (link) {
                if (target === '_blank') {
                    window.open(link, '_blank');
                } else {
                    window.location.href = link;
                }
            }
        });

    });


})(jQuery);