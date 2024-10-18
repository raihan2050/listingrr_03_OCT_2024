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
});
