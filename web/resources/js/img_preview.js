window.addEventListener("DOMContentLoaded", () => {
    if (document.getElementById("create_new_fixtures_image") !== null) {
        document
            .getElementById("create_new_fixtures_image")
            .addEventListener("change", function (event) {
                const file = event.target.files[0];
                if (!file) return;
                const reader = new FileReader();
                reader.onload = (event) => {
                    document.querySelector(
                        "#create_new_fixtures_image_preview"
                    ).src = event.target.result;
                };

                reader.readAsDataURL(file);
            });
    }

    if (document.getElementById("edit_fixtures_image") !== null) {
        document
            .getElementById("edit_fixtures_image")
            .addEventListener("change", function (event) {
                const file = event.target.files[0];
                if (!file) return;
                const reader = new FileReader();
                reader.onload = (event) => {
                    document.querySelector("#edit_fixtures_image_preview").src =
                        event.target.result;
                };

                reader.readAsDataURL(file);
            });
    }
});
