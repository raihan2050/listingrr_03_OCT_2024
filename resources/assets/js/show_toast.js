import Toastify from "toastify-js"
export function showToast(msg, type) {
    let background;

    switch (type) {
        case 'success':
            background = "linear-gradient(to right, #ff5f6d, #ffc371)";
            break;
        case 'warning':
            background = "linear-gradient(to right, #ffcc00, #ff9966)";
            break;
        case 'error':
            background = "linear-gradient(to right, #ff4e50, #fc913a)";
            break;
        default:
            background = "#333";
    }

    Toastify({
        text: msg,
        style: {
            background: background,
        },
        duration: 3000
    }).showToast();
}
