// var formDataObj = new FormData();
// formDataObj.append('action', 'load_ticket_preview');
// formDataObj.append('layout_id', layoutId);
// formDataObj.append('booking_id', bookingId);
// formDataObj.append('barcode_index', barcodeIndex);

// mkAjaxRequest('POST', '{{ route("user.booking.manage.ajax") }}', formDataObj, function(error, response) {
//     loadTicketPreview(error, response);
// });
export function mkAjaxRequest(method, url, formData, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open(method, url, true);
    xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf_token"]').attr('content'));
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status >= 200 && xhr.status < 300) {
                var responseData;
                try {
                    responseData = JSON.parse(xhr.responseText);
                } catch (error) {
                    callback(new Error('Failed to parse JSON response'));
                    return;
                }
                callback(null, responseData);
            } else {
                callback(new Error('Request failed with status ' + xhr.status));
            }
        }
    };
    xhr.send(formData);
}
