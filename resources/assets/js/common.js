import {showToast} from "../js/show_toast"
import {mkAjaxRequest} from "../js/ajax"

$(function(){
    $('input[data-is_required="1"], select[data-is_required="1"], textarea[data-is_required="1"]').attr('required', true);
    $(document).on("click", ".submitForm", function(){
        var $submitFormBtn = $(this);
        var targetform = $submitFormBtn.data('targetform');
        var $form = $('.' + targetform);
        var isValid = true;

        const $currentForm = $(this).closest('form');
        const formIndex = $('form').index($currentForm);
        const $button = $("."+$form.data('target_pulse'));
        const $targetPulse = $form.data('target_pulse');
        const $targetLeftTabPulse = $form.data('target_left_tab_pulse');

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
        $submitFormBtn.addClass('loader');
        $submitFormBtn.prop('disabled', true);
        mkAjaxRequest('POST', window.commonAsset.ajax, formData, function(error, response) {
            $submitFormBtn.prop('disabled', false);
            $submitFormBtn.removeClass('loader');
            if (error) {
                console.error(error);
            } else {
                if(response.type == 'error'){
                    showToast(response.msg, response.type);
                    return false;
                }
                removeFormChanged(formIndex, $button);

                if($("#"+$targetLeftTabPulse).length > 0){
                    removeFromTargetLeftTabPulse($targetLeftTabPulse, $targetPulse);
                    addClassFormChangedByLeftTabPulse($targetLeftTabPulse);
                }

                showToast(response.msg, response.type);
            }
        });
    });
    $(document).on("click", ".clickToUpload", function(){
        var targetFileInput = $(this).data('target_file_input');
        $("#"+targetFileInput).click();
    });
    $(document).on("change", ".imgUploaderInput", function() {
        var input = $(this);
        var targetPreviewId = input.data("target_preview");
        var targetPreview = $("#" + targetPreviewId);

        var file = input[0].files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                targetPreview.find("img").attr("src", e.target.result).show();
                targetPreview.find("span").hide();
            };

            reader.readAsDataURL(file);
        } else {
            targetPreview.find("img").attr("src", "").hide();
            targetPreview.find("span").show();
        }
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
function addClassFormChangedByLeftTabPulse(targetLeftTabPulse) {
    let input = $('#'+targetLeftTabPulse);
    let inputVal = input.val();
    let classNames = inputVal.split(',');
    classNames.forEach(function(className) {
        if(className != "") {
            $('.' + className).addClass('formChanged');
        }
    });
}
function removeFromTargetLeftTabPulse(targetLeftTabPulse, val) {
    let input = $('#'+targetLeftTabPulse);
    let currentVal = input.val();
    let valuesArray = currentVal ? currentVal.split(',') : [];
    valuesArray = valuesArray.filter(item => item !== val);
    input.val(valuesArray.join(','));
}
