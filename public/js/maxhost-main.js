/* Template: Maxhost Theme | Author: Fluent-Themes */
/*----------------------------------------------------------*/
(function($) {

"use strict";

jQuery(document).ready(function($){
    // Contact Form ajax

    var eForm = jQuery('#contact-form');
    var spinner = jQuery('.spinner');

    eForm.find('#submit').on('click', function(e){
        e.preventDefault();
        jQuery('#contactsMsgs').html('');
        spinner.show();
        var errmsg;
        errmsg = '';

        if(errmsg){
            jQuery('#contactsMsgs').html('<p class="nc-response">' + errmsg + '</p>');
            spinner.hide();
        }else{
            
            var url = eForm.attr('action');
            
            var data = eForm.serialize();
                   
            jQuery.ajax({
                url: url,
                method: 'POST',
                data: data,
                error: function(data) {
					var $error_while_ajax_request = prefix_object_name.error_while_ajax_request;
                    jQuery('#contactsMsgs').html('<p class="nc-response">'+ $error_while_ajax_request +'</p>');
                    spinner.hide();
                },
                success : function(data){
					var $thank_you_your_email_has_been_sent = prefix_object_name.thank_you_your_email_has_been_sent;
					var $please_try_again = prefix_object_name.please_try_again;
                    if (data.status == 'success') {
                        jQuery('#contactsMsgs').html('<p class="icon-ok mc-response">'+ $thank_you_your_email_has_been_sent +'</p>');
                        eForm.find("input[type=text], textarea").val("");
                    }else{
						jQuery('#contactsMsgs').html('<p class="nc-response">'+ $please_try_again +'</p>');
                    }
                    spinner.hide();
                    //closeParentBtn();
                }
            });
            
        }

    });
	
	//Styling sidebar widgets
	jQuery('.pagenation-blog > ul').addClass('pagenation-list').removeClass('page-numbers');
	jQuery('.maxhost_sidebar .widget_categories > ul').addClass('cat-list');
	jQuery('.maxhost_sidebar .widget_recent_entries > ul').addClass('cat-list');
	jQuery('.maxhost_sidebar .widget_archive > ul').addClass('cat-list');
	jQuery('.maxhost_sidebar .widget_meta > ul').addClass('cat-list');
	jQuery('.maxhost_sidebar .widget_pages > ul').addClass('cat-list');
	jQuery('.maxhost_sidebar .widget_recent_comments > ul').addClass('cat-list');
	jQuery('.maxhost_sidebar .widget_nav_menu > ul').addClass('cat-list');
	jQuery('.maxhost_sidebar .widget_nav_menu > div > ul').addClass('cat-list');
	jQuery('.tagcloud').addClass('tags').removeClass('tagcloud');
	jQuery('.comment-author-link').addClass('font-color').removeClass('comment-author-link');
	jQuery('.comment-reply-title').addClass('m-i-bottom3 font-thin font25').removeClass('comment-reply-title');
	jQuery('#comments .comment').addClass('comment-list');
	jQuery('.mm').addClass('img-circle').removeClass('mm');
	jQuery('.widget_search').addClass('sidebar_search').removeClass('widget_search');
	jQuery('.widget_calendar').addClass('sidebar_search').removeClass('widget_calendar');
	jQuery('.maxhost_sidebar .widget_text .textwidget > form > select > option').addClass('option-width');
});
}(jQuery));