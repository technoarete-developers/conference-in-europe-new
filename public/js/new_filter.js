
         function subtopic_click(val) {
               elem = document.getElementsByClassName("is-open")
                handleMenuItemCloseState($(elem));
                topic_and_sub_topic = val.split(",");
                $(".main_topic").text(topic_and_sub_topic[0])
                $(".sub_topic").text(topic_and_sub_topic[1])
                
         }
         function search(){
            url="";
            is_month=false;
            month_val="";
            sub_topic = $(".sub_topic").text();
            var month= ["january","february","march","april","may","june","july",
                        "august","september","october","november","december"];
            $(".select_row div div div span select > option:selected").each(function() {
               if(typeof $(this).attr("class") !== "undefined"){
                  if(month.includes($(this).val())){
                     is_month = true
                     month_val = "/"+$(this).val()
                  }else{
                     url += "/"+this.value;
                  }
               }
            }); 
            
            if(sub_topic != "Sub Topic"){
               sub_topic = sub_topic.toLowerCase().replace(" ", "-")
               url += "/"+sub_topic;
            }
            console.log(url)
            if($('.select_countries').val() == "" && $('.select_cities').val() != ""){
               //alert(url+month_val)
               window.location.href = "https://conferenceineurope.net/cities"+url+month_val;
            }
            else if($('.select_countries').val() == "" && sub_topic != "Sub Topic"){
               //alert(url+month_val)
               window.location.href = "https://conferenceineurope.net/topic-list"+url+month_val;
            }else{
               //alert(url+month_val)
               window.location.href = "https://conferenceineurope.net"+url+month_val;
            }
         }
               // Filter part
        function fetch_sub_topics(country,city_param=null,month_param=null){
                  $('.hero').removeClass('loaded')
                  $('.hero').addClass('loading');
                    const fetch_sub_topics_api = async () => {
                    const response = await fetch('https://conferenceineurope.net/api/v1/subtopics/fetch', {
                        method: 'POSt',
                        body: JSON.stringify({ 
                            "country": country,
                            "search_by":"country"
                            }),
                        headers: {
                        'Content-Type': 'application/json',
                        'session-id':"iwRqqpj-f4vmdrzViw54iCv8pdJbEicNtkFfXktP0cd0WQmb1rwVPSHNcxgACokP"
                        }
                    });
                    const myJson = await response.json(); 
                    console.log("myJson",myJson)
                    $('.hero').removeClass('loading')
                    $('.hero').addClass('loaded');
                    if(myJson.response.error == 1){
                    }else{
                        console.log(myJson.content.sub_topics);
                        $('.subnav').empty();
                        Object.keys(myJson.content).forEach(function(key) {
                           $('.select_'+key+'').find('option').not(':first').remove();
                              Object.keys(myJson.content[key]).forEach(function(child_key) {
                                 if(["Medicine","Engineering","Business","Education","Mathematics","Life-science","Social-science","Interdisciplinary"].includes(child_key)){
                                    myJson.content[key][child_key].sort();
                                    if(myJson.content[key][child_key].length == 0){ 
                                                $('#'+child_key+'_ul').append(
                                                $(`<li><button class="subnav-item" 
                                                      value="No Subtopics for ${child_key}">
                                                      No Subtopics for ${child_key}
                                                   </button></li>`));
                                    }else{
                                          Object.keys(myJson.content[key][child_key]).forEach(function(s_key) {
                                                $('#'+child_key+'_ul').append(
                                                $(`<li><button class="subnav-item" 
                                                               onclick="subtopic_click('${child_key},${myJson.content[key][child_key][s_key]}');" 
                                                               value="${myJson.content[key][child_key][s_key].toLowerCase().replace(" ", "-")}">
                                                      ${myJson.content[key][child_key][s_key]}
                                                   </button></li>`));  
                                          });
                                    }
                                 }
                                 else if([city_param,month_param,country].indexOf( myJson.content[key][child_key].toLowerCase() ) !== -1){
                                    $('.select_'+key+'').append(
                                    '<option class="option_'+key+'" selected="selected" value="'+child_key+'">'+myJson.content[key][child_key]+'</option>'
                                    )
                                 }else{
                                    $('.select_'+key+'').append(
                                    '<option class="option_'+key+'" value="'+child_key+'">'+myJson.content[key][child_key]+'</option>'
                                    )
                                 }
                              });
                        });
                    }
                    }
                fetch_sub_topics_api();
            }
//end filter
const $megamenuParentListItem = $('.megamenu-nav > li.is-parent');

const $megamenuBackground = $('#megamenu-background');

const isTouch = 'ontouchstart' in window || !!navigator.msMaxTouchPoints;

const handleMenuItemOpenState = elem => {
  elem.addClass('is-open');
  elem.find('a').first().attr('aria-expanded', true);
};

const handleMenuItemCloseState = elem => {
  elem.removeClass('is-open');
  elem.find('a').first().attr('aria-expanded', false);
};

const openMegamenu = (bgElem, heightVal) => {
  $('body').addClass('megamenu-visible');
  bgElem.height(heightVal);
};

const closeMegamenu = (bgElem, heightVal) => {
  $('body').removeClass('megamenu-visible');
  bgElem.height(heightVal);
};

const $megamenuContentElem = $('.megamenu-nav .megamenu-content');

const getTallestMenuHeight = () => {
  let maxHeight = 0;
  $megamenuContentElem.each((index, item) => {
    if ($(item).outerHeight() > maxHeight) {
      maxHeight = $(item).outerHeight();
    }
  });
  return maxHeight;
};

const debouncedClose = _.debounce(closeMegamenu, 400);
const throttledContentHeightCount = _.throttle(getTallestMenuHeight, 100);

let megamenuContentMaxHeight = 0;

window.onresize = () => {
  megamenuContentMaxHeight = throttledContentHeightCount();
};

$(() => {
  megamenuContentMaxHeight = getTallestMenuHeight();

  $megamenuParentListItem.each((index, item) => {
    if (!isTouch) {
      $(item).hoverIntent({
        sensitivity: 10,
        interval: 50,
        over: () => {
          debouncedClose.cancel();
          $megamenuParentListItem.removeClass('is-open');
          handleMenuItemOpenState($(item));
          openMegamenu($megamenuBackground, megamenuContentMaxHeight);
        },
        out: () => {
          handleMenuItemCloseState($(item));
          debouncedClose($megamenuBackground, 0);
        } });

    }

    $(item).find('a').first().on('click touch', () => {
      if (!$(item).hasClass('is-open')) {
        $megamenuParentListItem.removeClass('is-open');
        handleMenuItemOpenState($(item));
        openMegamenu($megamenuBackground, megamenuContentMaxHeight);
      } else {
        handleMenuItemCloseState($(item));
        closeMegamenu($megamenuBackground, 0);
      }
    });
  });

  $('#megamenu-dim').on('click touch', e => {
    if ($('body').hasClass('megamenu-visible')) {
      e.preventDefault();
      $megamenuParentListItem.removeClass('is-open');
      closeMegamenu($megamenuBackground, 0);
    }
  });
});


/* DOM is ready
------------------------------------------------*/
$(function(){

    // Change top navbar on scroll
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 100) {
            $(".tm-top-bar").addClass("active");
        } else {                    
         $(".tm-top-bar").removeClass("active");
        }
    });

    // Smooth scroll to search form
    $('.tm-down-arrow-link').click(function(){
        $.scrollTo('#tm-section-search', 300, {easing:'linear'});
    });

    // Date Picker in Search form
    var pickerCheckIn = datepicker('#inputCheckIn');
    var pickerCheckOut = datepicker('#inputCheckOut');

    // Update nav links on scroll
    $('#tm-top-bar').singlePageNav({
        currentClass:'active',
        offset: 60
    });

    // Close navbar after clicked
    $('.nav-link').click(function(){
        $('#mainNav').removeClass('show');
    });

    // Slick Carousel
    $('.tm-slideshow').slick({
        infinite: true,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    loadGoogleMap();                                       // Google Map                
    $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright           
});
