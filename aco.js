$(function() {
        $('#nav > div').hover(
        function () {
            var $this = $(this);
            $this.find('.icon').stop().animate({
                'width'     :'199px',
                'height'    :'199px',
                'top'       :'0px',
                'left'      :'0px',
                'opacity'   :'1.0'
            },1000,'easeOutBack',function(){
                $(this).parent().find('ul').fadeIn(700);
            });

            $this.find('a:first,h2').addClass('active');
            $("tooltiptext").css("visibility","visible");
        },
        function () {
            var $this = $(this);
            $this.find('.icon').stop().animate({
                'width'     :'199px',
                'height'    :'199px',
                'top'       :'0px',
                'left'      :'0px',
                'opacity'   :'0.3'
            },5000,'easeOutBack');

            $this.find('a:first,h2').removeClass('active');
        }
    );
    });
