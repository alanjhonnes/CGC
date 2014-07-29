$(document).ready(function(){
    
    $(window).load(function() {
        calculateScrollpoints();
    });
    //$("html").niceScroll();

    var $header = $('header');
    var $window = $(window);
    var windowWidth;
    var windowHeight;
    var mobileMode = false;
    var divisorHeight = 200;
    
    var $buttons = $("header li");
    var $icons = $('header li span');
    var $sections = $("section");
    var $activeButton = $buttons.eq(0);
    var $activeSection = $sections.eq(0);
    var activeIndex = 0;
    var scrollpoints = [];
    var navHeight = 0;

    $activeButton.addClass("active-button");
    
    $window.resize(function(){
        windowWidth = $window.width();
        windowHeight = $window.height();
        //console.log('W: ' + windowWidth + ' H: ' + windowHeight);
        $("#overlay").css("height", windowHeight + "px");
        if(windowWidth > 991){
            //$header.css('height', windowHeight);
            var size = (windowHeight / 5) + 'px';
            $icons.css('lineHeight', size);
            navHeight = 102;
            mobileMode = false;
        }
        else {
            //$header.css('height', 'auto');
            navHeight = 102;
            $icons.css('lineHeight', navHeight + 'px');
            mobileMode = true;
        }
        $sections.css('min-height', (windowHeight + 100)+ 'px');
        
        calculateScrollpoints();
        
        console.log(scrollpoints);
        
        $sections.each(function(index){
            var $sectionContent = $(this).children(".section-content");
            var sectionOffset = ($(this).height() - $sectionContent.height()) / 2;
           $sectionContent.css("top", sectionOffset + "px");
        });

    }).resize();
    
    function calculateScrollpoints() {
        scrollpoints = [];
        $sections.each(function(index) {
            var offset;
            offset = $(this).offset().top - navHeight;
            if(index > 0){
                offset += divisorHeight;
            }
            scrollpoints.push(offset);
        });
    }
    
    
    $(window).scroll(function() {
        var scrolled = $(window).scrollTop();
        console.log(scrolled);
        var totalPoints = scrollpoints.length;
        while (totalPoints--) {
            if (scrollpoints[totalPoints] <= scrolled) {
                if (activeIndex !== totalPoints) {
                    $activeButton.removeClass("active-button");
                    activeIndex = totalPoints;
                    $activeButton = $buttons.eq(totalPoints);
                    $activeButton.addClass("active-button");
                    $activeSection.removeClass('active-section');
                    $activeSection = $sections.eq(activeIndex);
                    $activeSection.addClass('active-section');
                }
                break;
            }
        }
    });
    
    
    var $items = $('header ul li');
    $items.click(function(){
        $items.removeClass('active-button');
        $(this).addClass('active-button');
        var sectionIndex = $(this).index();
        //scroll down to the respective section
        //var yOffset = $("section:eq(" + sectionIndex + ")").offset().top - navHeight + divisorHeight;
        TweenLite.to(window, 0.6, { scrollTo: { y: scrollpoints[sectionIndex] +1 } } );
        
        
    });
    
});