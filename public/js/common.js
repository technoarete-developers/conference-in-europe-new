// header search script start
$(document).ready(function() {
    $('#advance-serch').on('click', function() {
        $('#search-container').show();
        $('#advance-serch').show();   
    });    
    $('#close-search').on('click', function() {
        $('#search-container').hide(); 
    });
});
// header search script end

// language function start

$(document).ready(function() {    
    $('#language-btn').click(function(event) {
        var isExpanded = $(this).attr('aria-expanded') === 'true';        
        $(this).attr('aria-expanded', !isExpanded);
        $('#language-dropdown').toggle();
        event.stopPropagation();
    });

    $('.language-option').click(function() {
        var selectedLang = $(this).text();
        $('#language-btn').html('<img src="img/world.png" alt="World Icon" style="width: 20px; height: 20px; margin-right: 5px;"> ' + selectedLang);
        
        $('#language-dropdown').hide();
        $('#language-btn').attr('aria-expanded', 'false');
    });
    $(document).click(function(event) {
        if (!$('#language-btn').is(event.target) && !$('#language-dropdown').is(event.target) && $('#language-dropdown').has(event.target).length === 0) {
            $('#language-dropdown').hide();
            $('#language-btn').attr('aria-expanded', 'false');
        }
    });
});

// language function End


        $(function() {

            // Change top navbar on scroll
            $(window).on("scroll", function() {
                if ($(window).scrollTop() > 100) {
                    $(".tm-top-bar").addClass("active");
                } else {
                    $(".tm-top-bar").removeClass("active");
                }
            });

            // Smooth scroll to search form
            $('.tm-down-arrow-link').click(function() {
                $.scrollTo('#tm-section-search', 300, {
                    easing: 'linear'
                });
            });

            // Date Picker in Search form
            var pickerCheckIn = datepicker('#inputCheckIn');
            var pickerCheckOut = datepicker('#inputCheckOut');

            // Update nav links on scroll
            $('#tm-top-bar').singlePageNav({
                currentClass: 'active',
                offset: 60
            });

            // Close navbar after clicked
            $('.nav-link').click(function() {
                $('#mainNav').removeClass('show');
            });

            // Slick Carousel
            $('.tm-slideshow').slick({
                infinite: true,
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1
            });


            $('.tm-current-year').text(new Date().getFullYear()); // Update year in copyright           
        });
   
