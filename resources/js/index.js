const categoryLinks = document.querySelectorAll(".category-link");
const products = document.querySelectorAll(".product");

console.log(categoryLinks);

categoryLinks.forEach((link) => {
    link.addEventListener("click", function (event) {
        event.preventDefault();
        const category = this.getAttribute("data-category");

        products.forEach((product) => {
            if (product.getAttribute("data-category") === category) {
                product.style.display = "block"; // Tampilkan produk yang sesuai
            } else {
                product.style.display = "none"; // Sembunyikan produk yang tidak sesuai
            }
        });
    });
});
