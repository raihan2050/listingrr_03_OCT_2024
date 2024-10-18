$(document).ready(function() {
    const formChangeStates = {};

    $('form').each(function(index) {
        formChangeStates[index] = false;
        const $form = $(this);
        const targetPulse = $form.data('target_pulse');
        const $button = $(`.${targetPulse}`);

        $form.on('input', function() {
            formChangeStates[index] = true;
            $button.addClass('formChanged');
            console.log(`Form ${index} is changed: ${formChangeStates[index]}`);
        });

        $form.on('reset', function() {
            formChangeStates[index] = false;
            $button.removeClass('formChanged');
        });
    });

    $(window).on('beforeunload', function(event) {
        const anyFormChanged = Object.values(formChangeStates).some(changed => changed);

        if (anyFormChanged) {
            event.preventDefault();
        }
    });
});
