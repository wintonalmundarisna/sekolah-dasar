const categoryLinks = document.querySelectorAll(".category-link");
const cards = document.querySelectorAll(".card");

categoryLinks.forEach((link) => {
    link.addEventListener("click", function (event) {
        event.preventDefault();
        const category = this.getAttribute("data-category");
        
        cards.forEach((card) => {
            if (card.getAttribute("data-category") === category) {
                card.style.display = "block"; // Tampilkan produk yang sesuai
            } else {
                card.style.display = "none"; // Sembunyikan produk yang tidak sesuai
            }
        });
    });
});

const active = document.querySelectorAll(".active");

active.forEach((item) => {
    item.addEventListener("click", function (event) {
        event.preventDefault();
        active.forEach((item) => {
            item.classList.remove("active");
            item.style.backgroundColor = "#167287";
            item.style.color = "#e5e7eb";
        });
        this.classList.add("active");
        this.style.backgroundColor = "#e5e7eb";
        this.style.color = "#167287";
    });
});
