$(function() {
    $('form').each(function(index) {
        window.formChangeStates[index] = false;
        const $form = $(this);
        const targetPulse = $form.data('target_pulse');
        const $button = $(`.${targetPulse}`);

        $form.on('input', function() {
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
