// script.js

let cart = [];

// Simulating the 'Add to Cart' button functionality
document.querySelectorAll(".add-to-cart").forEach((button) => {
  button.addEventListener("click", function () {
    const productId = this.getAttribute("data-id");
    cart.push(productId);

    // Update cart display
    updateCart();
  });
});

// Function to update the cart
function updateCart() {
  const cartCount = cart.length;
  document.querySelector("header ul li a").textContent = `Cart (${cartCount})`;
}
