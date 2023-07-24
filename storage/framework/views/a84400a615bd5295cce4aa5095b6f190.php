<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="Front_end/lib/easing/easing.min.js"></script>
<script src="Front_end/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="Front_end/mail/jqBootstrapValidation.min.js"></script>
<script src="Front_end/mail/contact.js"></script>

<!-- Template Javascript -->
<script src="Front_end/js/main.js"></script>


<script>
    // JavaScript to handle quantity changes and update total amount
    const quantityInputs = document.querySelectorAll(".quantity-input");

    quantityInputs.forEach((input) => {
        input.addEventListener("change", (event) => {
            const item_id = event.target.getAttribute("data-item-id");
            const price = parseFloat(document.querySelector(`td[data-field="price"][data-item-id="${item_id}"]`).innerText.replace('$', ''));
            const quantity = parseInt(event.target.value);
            const totalAmountElement = document.getElementById(`total-${item_id}`);
            const total = price * quantity;

            totalAmountElement.textContent = `$${total.toFixed(2)}`;
        });
    });

</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var button = document.getElementById('add-to-cart-button-pet');
        if (button) {
            button.addEventListener('click', addToCart);
        }
    });

    function addToCart(event) {
        event.preventDefault(); // Prevent the default behavior of the link

        var petId = this.getAttribute('data-pet-id');

        // Get the CSRF token value
        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('/Clients/Cart/add-to-cart/' + petId + '/pet', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the request headers
                }
            })
            .then(response => {
                // Update the cart count
                return fetch('/Clients/Cart/get-cart-count');
            })
            .then(response => response.json())
            .then(data => {
                // Update the cart count on the page
                var cartCountElement = document.getElementById('cart-count');
                if (cartCountElement) {
                    cartCountElement.textContent = data.cartCount;
                }
            })
            .catch(error => {
                // Handle any errors that occur during the request
            });
    }
</script>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        var button = document.getElementById('add-to-cart-button-product');
        if (button) {
            button.addEventListener('click', addToCart);
        }

    });

    function addToCart(event) {
        event.preventDefault(); // Prevent the default behavior of the link

        var productId = this.getAttribute('data-product-id');

        // Get the CSRF token value
        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('/Clients/Cart/add-to-cart/' + productId + '/product', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the request headers
                }
            })
            .then(response => {
                // Update the cart count
                return fetch('/Clients/Cart/get-cart-count');
            })
            .then(response => response.json())
            .then(data => {
                // Update the cart count on the page
                var cartCountElement = document.getElementById('cart-count');
                if (cartCountElement) {
                    cartCountElement.textContent = data.cartCount;
                }
            })
            .catch(error => {
                // Handle any errors that occur during the request
            });
    }
</script>






<!-- Add this script after the cart items table -->
<!-- Add this script after the cart items table -->
<script>
    // Function to calculate the total amount and update the displayed value
    function updateTotalAmount() {
      let totalAmount = 0;
      const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
      
      checkboxes.forEach((checkbox) => {
        const itemRow = checkbox.closest('tr');
        const itemId = itemRow.dataset.itemId;
        const price = parseFloat(document.getElementById(`price-${itemId}`).textContent.replace('$', ''));
        const quantity = parseInt(document.getElementById(`quantity-${itemId}`).value);
        totalAmount += price * quantity;
      });
      
      document.getElementById('total-amount').textContent = `Total Amount: $${totalAmount.toFixed(2)}`;
    }
    
    // Event listener for checkboxes
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach((checkbox) => {
      checkbox.addEventListener('change', updateTotalAmount);
    });
    
    // Event listener for quantity inputs
    const quantityInputs = document.querySelectorAll('.quantity-input');
    quantityInputs.forEach((input) => {
      input.addEventListener('input', updateTotalAmount);
    });
    
    // Call the updateTotalAmount function initially to display the initial total
    updateTotalAmount();
  </script>
  
  <?php /**PATH D:\GraduationThesis_PetE-commerce_G5\resources\views/Front_end/Layouts/js_for_cart.blade.php ENDPATH**/ ?>