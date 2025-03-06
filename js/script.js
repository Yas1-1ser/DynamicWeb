$(document).ready(function() {
  let cartCount = JSON.parse(localStorage.getItem("cart"))?.length || 0;
  updateCartCount(cartCount);

  $("#shop-accessories-btn").click(function() {
    window.location.href = "shopping.php";
  });

  // Function to update cart count
  function updateCartCount(count) {
    $(".fa-shopping-cart").attr("data-count", count);
    $(".cart-count").text(count);
  }

  // Fetch reasons from reson.json and add them to the HTML
  $.getJSON("../reson.json")
    .done(function(data) {
      const reasons = data.reasons;
      let reasonsHtml = "";
      reasons.forEach(reason => {
        reasonsHtml += `
          <li>
            <i class="${reason.icon}"></i>
            <strong>${reason.title}:</strong> ${reason.description}
          </li>
        `;
      });
      $("#why-choose-us ul").html(reasonsHtml);
      gsap.from("#why-choose-us li", { duration: 1, opacity: 0, y: 50, stagger: 0.2 });
    })
    .fail(function(jqxhr, textStatus, error) {
      console.error("Request Failed: " + textStatus + ", " + error);
      console.error("Response Text: " + jqxhr.responseText);
      alert("Failed to load reasons. Please try again later.");
    });

  // GSAP animations for other elements
  gsap.from(".animated-text", { duration: 1, opacity: 0, y: -50, stagger: 0.3 });
  gsap.from(".navbar ul li", { duration: 1, opacity: 0, y: -50, stagger: 0.2 });
});
