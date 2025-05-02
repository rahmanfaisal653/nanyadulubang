document.addEventListener("DOMContentLoaded", function () {
    const dropdownIcon = document.querySelector(".dropdown");
    const dropdownMenu = document.querySelector(".dropdown-menu");

    // Menampilkan dan menyembunyikan dropdown saat ikon bar diklik
    dropdownIcon.addEventListener("click", function () {
        const isVisible = dropdownMenu.style.display === "block";
        dropdownMenu.style.display = isVisible ? "none" : "block";
    });

    // Menutup dropdown jika klik di luar area dropdown dan menu
    document.addEventListener("click", function (event) {
        if (
            !dropdownIcon.contains(event.target) &&
            !dropdownMenu.contains(event.target)
        ) {
            dropdownMenu.style.display = "none";
        }
    });
});
