jQuery(document).ready(function () {
    jQuery('.user').click(function(){
        event.preventDefault();
        var id = jQuery(this).attr('id');
        jQuery('.display_details').empty();

        jQuery.ajax({
            url: 'https://jsonplaceholder.typicode.com/users/', //This is the current doc
            type: "GET",
            dataType:'json', // add json datatype to get json

            success: function(data) {
                // turn the JSON response into a string and append the result into the display_details container
                var data_response_id = id - 1; 
        
                jQuery('#display_details_' + id).append('<b>Street:</b> ' + data[data_response_id]['address']['street'] + "<br />");
                jQuery('#display_details_' + id).append('<b>Suite:</b> ' + data[data_response_id]['address']['suite'] + "<br />");
                jQuery('#display_details_' + id).append('<b>City:</b> ' + data[data_response_id]['address']['city'] + "<br />");
                jQuery('#display_details_' + id).append('<b>Zipcode:</b> ' + data[data_response_id]['address']['zipcode'] + "<br />");
                jQuery('#display_details_' + id).append('<b>Street:</b> ' + data[data_response_id]['address']['geo']['lat'] + "<br />");
                jQuery('#display_details_' + id).append('<b>Geo Lat:</b> ' + data[data_response_id]['address']['geo']['lng'] + "<br />");
                jQuery('#display_details_' + id).append('<b>Geo Lng:</b> ' + data[data_response_id]['phone'] + "<br />");
                jQuery('#display_details_' + id).append('<b>Phone:</b> ' + data[data_response_id]['website'] + "<br />");
                jQuery('#display_details_' + id).append('<b>Website:</b> ' + data[data_response_id]['company']['name'] + "<br />");
                jQuery('#display_details_' + id).append('<b>Company Name:</b> ' + data[data_response_id]['company']['catchPhrase'] + "<br />");
                jQuery('#display_details_' + id).append('<b>Company Catch Phrase:</b> ' + data[data_response_id]['company']['bs'] + "<br />");
             },
             error: function() {
                 console.log('Error occured');
             }
        })      
    });
});
jQuery('.display_details').empty();