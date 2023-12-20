// Tooltip
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

// Toggle Searchbar on clicking on burger-icon
var burger = document.querySelector(".burger-icon");
var searchbar = document.querySelector(".searchbar");
burger.addEventListener("click", (e) => {
    searchbar.classList.toggle("hidden");
});

// Document Table
$(function () {
    $("#data-table").DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
    });
});

// New Document Modal
var modal = document.querySelector("#newDocumentForm");
var modalCloseBtn = document.querySelector("#btn-close");
modalCloseBtn.addEventListener("click", () => {
    modal.style.display = "none";
});
