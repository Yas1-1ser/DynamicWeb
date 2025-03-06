$(document).ready(function () {
  // Function to add item to cart
  function addToCart(product) {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    cart.push(product);
    localStorage.setItem("cart", JSON.stringify(cart));
    showMessageBox("Product added to cart!");
    displayCartProducts();
  }

  function updateCartCount() {
    const cart = JSON.parse(localStorage.getItem("cart")) || [];
    $(".cart-count").text(cart.length);
  }

  // Function to display cart products
  function displayCartProducts() {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    const cartItemsContainer = $('#cart-products');
    cartItemsContainer.empty();

    if (cart.length === 0) {
      cartItemsContainer.append('<p>Your cart is empty!</p>');
      updateCartCount();
      $('#total-sum').text('Total: $0.00');
      return;
    }

    let totalSum = 0;
    cart.forEach(product => {
      cartItemsContainer.append(`
        <div class="cart-item" data-id="${product.cartId}">
          <img src="${product.image}" alt="${product.name}" class="cart-item-image">
          <h3 class="cart-item-name">${product.name}</h3>
          <p class="price cart-item-price">$${product.price}</p>
          <button class="btn remove-btn" data-id="${product.cartId}">Remove</button>
        </div>
      `);
      totalSum += parseFloat(product.price);
    });

    $('#total-sum').text(`Total: $${totalSum.toFixed(2)}`);
    updateCartCount();
  }

  function removeFromCart(cartId) {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    cart = cart.filter(product => product.cartId !== parseInt(cartId));
    localStorage.setItem("cart", JSON.stringify(cart));
    displayCartProducts();
    showMessageBox("Product removed from cart!");
  }

  function removeAllFromCart() {
    localStorage.removeItem("cart");
    displayCartProducts();
    showMessageBox("All products removed from cart!");
  }

  function handleCheckout() {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    if (cart.length === 0) {
      showMessageBox("Your cart is empty!");
      return;
    }

    // Simulate checkout process
    localStorage.removeItem("cart");
    showMessageBox("Checkout successful! Thank you for your purchase!");
    displayCartProducts();
  }

  function showMessageBox(message) {
    const messageBox = $('<div class="message-box"></div>').text(message);
    $('body').append(messageBox);
    messageBox.fadeIn();
    setTimeout(() => {
      messageBox.fadeOut(() => {
        messageBox.remove();
      });
    }, 3000);
  }

  // Add event listener to checkout button
  $("#checkout").click(function () {
    handleCheckout();
  });

  // Add event listener to remove all button
  $("#remove-all").click(function () {
    removeAllFromCart();
  });

  // Event delegation for remove buttons
  $('#cart-products').on('click', '.remove-btn', function () {
    const cartId = parseInt($(this).data('id'));
    console.log("Removing product with ID:", cartId); // Debugging line
    removeFromCart(cartId);
  });

  // Display cart products on page load
  displayCartProducts();
});
