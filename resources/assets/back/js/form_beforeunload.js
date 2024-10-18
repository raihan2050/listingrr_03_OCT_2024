import Swal from 'sweetalert2';

const formChangeStates = {};

document.addEventListener('DOMContentLoaded', () => {
    const forms = document.querySelectorAll('form');

    forms.forEach((form, index) => {
        formChangeStates[index] = false;

        form.addEventListener('input', () => {
            formChangeStates[index] = true;
            console.log(`Form ${index} is changed: ${formChangeStates[index]}`);
        });
    });

    window.addEventListener('beforeunload', (event) => {
        const anyFormChanged = Object.values(formChangeStates).some(changed => changed);

        if (anyFormChanged) {
            event.preventDefault();
        }
    });
});
