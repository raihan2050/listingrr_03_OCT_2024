import {mkAjaxRequest} from "../js/ajax"
import Toastify from 'toastify-js'
$(function(){
    $('input[data-is_required="1"], select[data-is_required="1"], textarea[data-is_required="1"]').attr('required', true);
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
        var $form = $('.' + targetform);
        var isValid = true;

        $form.find('[data-is_required="1"]').each(function() {
            if (!$(this).val()) {
                isValid = false;
                $(this).addClass('error');
                $(this).siblings('.error-message').text(translations.super.this_field_is_required).show();
            } else {
                $(this).removeClass('error');
                $(this).siblings('.error-message').hide();
            }
        });
        if (!isValid) {
            Toastify({
                text: translations.super.please_fill_in_all_required_fields,
                style: {
                    background: "linear-gradient(to right, #ff5f6d, #ffc371)",
                },
                duration: 3000
            }).showToast();
            return false;
        }
        var formData = new FormData($form[0]);
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
