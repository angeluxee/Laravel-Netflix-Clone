import "bootstrap";

document.addEventListener("DOMContentLoaded", function () {
    const genreSelect = document.getElementById("genre");
    const yearSelect = document.getElementById("year");
    const serieCards = document.querySelectorAll(".serie-card");

    genreSelect.addEventListener("change", filterMedia);
    yearSelect.addEventListener("change", filterMedia);

    function filterMedia() {
        const selectedGenre = genreSelect.value.toLowerCase();

        serieCards.forEach(function (card) {
            const cardGenres = card.dataset.genre.toLowerCase().split(", ");
            const showGenre =
                selectedGenre === "todos" || cardGenres.includes(selectedGenre);

            const selectedYear = yearSelect.value;
            const cardYear = card.dataset.year;
            const showYear =
                selectedYear === "todos" || selectedYear === cardYear;

            if (showGenre && showYear) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    }
});
