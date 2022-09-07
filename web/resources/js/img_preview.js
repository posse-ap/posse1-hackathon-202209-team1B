document
    .getElementById("create_new_fixtures_image")
    .addEventListener("change", function (event) {
        // 1枚だけ表示する
        const file = event.target.files[0];
        if (!file) return;
        const reader = new FileReader();
        reader.onload = (event) => {
            document.querySelector("#create_new_fixtures_image_preview").src =
                event.target.result;
        };

        reader.readAsDataURL(file);
    });
