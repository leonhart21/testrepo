/*
    Slider
*/
$(window).load(function() {
    $('.flexslider').flexslider({
        animation: "fade",
        controlNav: "thumbnails"
    });
});


/*
    FancyBox
*/
    $(document).ready(function(){
      $(".fancybox-effects-b").fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                helpers : {
                    title : {
                        type : 'over'
                    }
                }
            });
    });


/*
    Google maps
*/
jQuery(document).ready(function() {
    var position = new google.maps.LatLng(14.653804, 120.964877);
    $('.map').gmap({'center': position,'zoom': 15, 'disableDefaultUI':true, 'callback': function() {
            var self = this;
            self.addMarker({'position': this.get('map').getCenter() });	
        }
    }); 
});



/*
    Ajax Email Sender
*/

$('#contactform').on('submit', function(){
        //variable for passing the template url
        var parser = $('#parser').val();

        $('.feedback').html('Loading <img src="'+parser+'/assets/img/loading.gif" />');


        var data = $('#contactform').serialize();

        
        //Perform the AJAX operation
        $.ajax({
            url: parser+'/sendmail.php?noajax=0',
            type: 'post',
            data: data,
            success: function(data){
                    
                    if(data == 'success'){
                        $('.feedback').html('<h6 class="success violet">Message Successfully Sent! Thank you for the visit :)</h6>');
                        $('.send_mail').attr('disabled', 'disabled').css('opacity','.4');
                    }else if(data == 'err101'){
                        $('.feedback').html('<h6 class="error">Message not Sent. All Fields are Required to be filled-in.</h6>');
                    }else if(data == 'err102'){
                        $('.feedback').html('<h6 class="error">Message not Sent. You have entered an Invalid Email Address.</h6>');
                    }else if(data == 'err103'){
                        $('.feedback').html('<h6 class="error">Message not Sent. Your Name exceeds the 100 character Limit.</h6>');
                    }else if(data == 'err104'){
                        $('.feedback').html('<h6 class="error">Message not Sent. Your Email exceeds the 100 character Limit.</h6>');
                    }else{
                        $('.feedback').html('<h6 class="error">Message not Sent. Unexpected Error has been encountered. Please Try Again Later.</h6>');
                    }
            }

        });

        
        return false;
    });
