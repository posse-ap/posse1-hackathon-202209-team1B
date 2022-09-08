const modal = document.getElementById("modal_to_login");
const buttons = document.getElementsByName("open_modal_button_to_login");
const closeButton = document.getElementById("close_button");
const outer = document.getElementById("modal_outer");

if (modal && buttons) {
    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            modal.classList.remove("hidden");
        });
    });
    outer.addEventListener("click", () => {
        modal.classList.add("hidden");
    });
}
