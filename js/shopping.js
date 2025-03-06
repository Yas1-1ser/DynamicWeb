$(document).ready(function () {
  let productsData = [];
  let cartCount = JSON.parse(localStorage.getItem("cart"))?.length || 0;
  updateCartCount(cartCount);

  $("#loading-message").show();
  $("#error-message").hide();

  $.getJSON("../products.json")
    .done(function (data) {
      console.log("Data received:", data); 
      productsData = data.products;
      renderProducts(productsData);
      updateBrandFilter(productsData);
      $("#loading-message").hide();
    })
    .fail(function (jqxhr, textStatus, error) {
      console.error("Request Failed: " + textStatus + ", " + error);
      console.error("Response Text: " + jqxhr.responseText);
      $("#loading-message").hide();
      $("#error-message").show();
    });

  // Function to add item to cart
  function addToCart(product) {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    // Add unique identifier to product if not exists
    if (!product.cartId) {
        product.cartId = Date.now();
    }
    cart.push(product);
    localStorage.setItem("cart", JSON.stringify(cart));
    updateCartCount();
    showMessageBox("Product added to cart successfully!");
  }

  // Function to update cart count
  function updateCartCount() {
    const cart = JSON.parse(localStorage.getItem("cart")) || [];
    $(".cart-count").text(cart.length);
  }

  // Function to show message
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

  // PRODUCTS INFO
  function renderProducts(products) {
    let productsHtml = "";
    products.forEach((product) => {
      productsHtml += `
        <div class="product" data-category="${product.category}" data-brand="${product.brand}">
          <img src="${product.image}" alt="${product.name}" />
          <div class="product-info">
            <h3>${product.name}</h3>
            <p>${product.description}</p>
            <p class="price">$${product.price}</p>
            <button class="btn add-to-cart-btn" data-name="${product.name}" data-description="${product.description}" data-price="${product.price}" data-image="${product.image}">Add to Cart</button>
          </div>
        </div>
      `;
    });
    $("#product-grid").html(productsHtml);

    $(".add-to-cart-btn").click(function () {
      const productName = $(this).data("name");
      const productDescription = $(this).data("description");
      const productPrice = $(this).data("price");
      const productImage = $(this).data("image");
      const product = {
        name: productName,
        description: productDescription,
        price: productPrice,
        image: productImage,
      };
      addToCart(product);
    });
  }

  // FILTER
  function updateBrandFilter(products) {
    const selectedCategory = $("#filter").val();
    const brands = new Set();
    products.forEach((product) => {
      if (selectedCategory === "all" || product.category === selectedCategory) {
        brands.add(product.brand);
      }
    });

    let brandOptions = '<option value="all">All Brands</option>';
    brands.forEach((brand) => {
      brandOptions += `<option value="${brand}">${brand}</option>`;
    });
    $("#brand-filter").html(brandOptions);
  }

  $("#filter").change(function () {
    const filterValue = $(this).val();
    updateBrandFilter(productsData);
    $(".product").each(function () {
      if (filterValue === "all" || $(this).data("category") === filterValue) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  });

  $("#brand-filter").change(function () {
    const filterValue = $(this).val();
    $(".product").each(function () {
      if (filterValue === "all" || $(this).data("brand") === filterValue) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  });

  updateCartCount();
});