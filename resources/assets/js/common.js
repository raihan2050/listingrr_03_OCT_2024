import {mkAjaxRequest} from "../js/ajax"
import Toastify from 'toastify-js'
$(function(){
    $(document).on("click", ".switchToggleOne", function(){
        var className = $(this).data("target_class");
        var val = ($(this).hasClass('on')) ? 1 : 0;
        $("."+className).val(val);

        $('form').each(function(index) {
            const $form = $(this);
            const targetPulse = $form.data('target_pulse');
            const $button = $(`.${targetPulse}`);

            if ($form.find(`.${className}`).length > 0) {
                formChangeStates[index] = true;
                $button.addClass('formChanged');
            }
        });
    });
    $(document).on("click", ".submitForm", function(){
        var targetform = $(this).data('targetform');
        var formData = new FormData($('.'+targetform)[0]);
        $('.' + targetform).find(':input').each(function() {
            var inputName = this.name;
            if (!formData.has(inputName)) {
                // Handle checkboxes
                if ($(this).is(':checkbox')) {
                    formData.append(inputName, $(this).is(':checked') ? $(this).val() : 'no');
                }
                // Handle radio buttons
                else if ($(this).is(':radio')) {
                    if ($(this).is(':checked')) {
                        formData.append(inputName, $(this).val());
                    }
                }
                // Handle other input types
                else {
                    formData.append(inputName, $(this).val());
                }
            }
        });
        formData.append('action', 'save_update_data');
        formData.append('target_form', targetform);
        $(this).prop('disabled', true);
        mkAjaxRequest('POST', window.commonAsset.ajax, formData, function(error, response) {
            $(this).prop('disabled', false);
            if (error) {
                console.error(error);
            } else {
                if(response.type == 'error'){
                    Toastify({
                        text: response.msg,
                        style: {
                            background: "linear-gradient(to right, #00b09b, #96c93d)",
                        },
                        duration: 3000
                    }).showToast();
                    return false;
                }
                console.log('Response:', response);
            }
        });
    });
});
