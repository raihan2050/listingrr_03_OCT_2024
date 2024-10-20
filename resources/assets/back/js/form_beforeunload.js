$(function() {
    window.formChangeStates = window.formChangeStates || [];

    $(document).on("click", ".switchToggleOne", function(){
        var className = $(this).data("target_class");
        var val = ($(this).hasClass('on')) ? 1 : 0;
        $("."+className).val(val);

        $('form').each(function(index) {
            const $form = $(this);
            const targetPulse = $form.data('target_pulse');
            const $button = $(`.${targetPulse}`);
            const $targetLeftTabPulse = $form.data('target_left_tab_pulse');

            if ($form.find(`.${className}`).length > 0) {
                if($("#"+$targetLeftTabPulse).length > 0){
                    addToTargetLeftTabPulse($targetLeftTabPulse, targetPulse);
                }
                formChangeStates[index] = true;
                $button.addClass('formChanged');
            }
        });
    });

    $('form').each(function(index) {
        window.formChangeStates[index] = false;
        const $form = $(this);
        const targetPulse = $form.data('target_pulse');
        const $button = $(`.${targetPulse}`);
        const $targetLeftTabPulse = $form.data('target_left_tab_pulse');

        $form.on('input', function() {
            if($("#"+$targetLeftTabPulse).length > 0){
                addToTargetLeftTabPulse($targetLeftTabPulse, targetPulse);
            }
            window.formChangeStates[index] = true;
            $button.addClass('formChanged');
        });

        $form.on('reset', function() {
            window.formChangeStates[index] = false;
            $button.removeClass('formChanged');
        });
    });

    $(window).on('beforeunload', function(event) {
        const anyFormChanged = Object.values(window.formChangeStates).some(changed => changed);
        if (anyFormChanged) {
            event.preventDefault();
            event.returnValue = '';
        }
    });
});

function addToTargetLeftTabPulse(targetLeftTabPulse, val) {
    let input = $('#'+targetLeftTabPulse);
    let currentVal = input.val();
    let valuesArray = currentVal ? currentVal.split(',') : [];
    if (!valuesArray.includes(val)) {
        valuesArray.push(val);
    }
    input.val(valuesArray.join(','));
}
