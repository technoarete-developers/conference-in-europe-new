// header search script start
$(document).ready(function() {    
    $('#search-btn').on('click', function(e) {       
        e.preventDefault();        
        $('#search-container').slideDown(300);  
        $('.search-overlay').fadeIn(300);
        $('#search-query').focus();
    });
    $('#search-close-btn').on('click', function() {        
        $('#search-container').slideUp(300);
        $('.search-overlay').fadeOut(300);
    });

    // Close the search container when the overlay is clicked
    $('.search-overlay').on('click', function() {
        $('#search-container').slideUp(300);
        $(this).fadeOut(300);
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
