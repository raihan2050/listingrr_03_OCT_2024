import {showToast} from "../js/show_toast"
import {mkAjaxRequest} from "../js/ajax"

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
        var $submitFormBtn = $(this);
        var targetform = $submitFormBtn.data('targetform');
        var $form = $('.' + targetform);
        var isValid = true;

        const $currentForm = $(this).closest('form');
        const formIndex = $('form').index($currentForm);
        const $button = $("."+$form.data('target_pulse'));

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
            showToast(translations.super.please_fill_in_all_required_fields, 'warning');
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
        $submitFormBtn.prop('disabled', true);
        mkAjaxRequest('POST', window.commonAsset.ajax, formData, function(error, response) {
            $submitFormBtn.prop('disabled', false);
            if (error) {
                console.error(error);
            } else {
                if(response.type == 'error'){
                    showToast(response.msg, response.type);
                    return false;
                }
                removeFormChanged(formIndex, $button);
                showToast(response.msg, response.type);
            }
        });
    });
});
function setFormChanged(index, $button) {
    window.formChangeStates[index] = true;
    $button.addClass('formChanged');
}
function removeFormChanged(index, $button) {
    window.formChangeStates[index] = false;
    $button.removeClass('formChanged');
}
