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

{{-- tính giá tiền --}}
<script>
    $(document).ready(function() {
        $('.btn-minus').on('click', function() {
            var item_id = $(this).data('item-id');
            var quantityInput = $('#quantity-' + item_id);
            var currentQuantity = parseInt(quantityInput.val());
            if (currentQuantity > 1) {
                quantityInput.val(currentQuantity - 1);
                updateTotalPrice(item_id);
            }
        });

        $('.btn-plus').on('click', function() {
            var item_id = $(this).data('item-id');
            var quantityInput = $('#quantity-' + item_id);
            var currentQuantity = parseInt(quantityInput.val());
            quantityInput.val(currentQuantity + 1);
            updateTotalPrice(item_id);
        });

        function updateTotalPrice(item_id) {
            var quantity = parseInt($('#quantity-' + item_id).val());
            var price = parseFloat($('#price-' + item_id).text());
            var totalPrice = quantity * price;
            $('#total-price-' + item_id).text('$' + totalPrice.toFixed(2));
        }

        // Trigger initial calculation
        $('.quantity-input').each(function() {
            var item_id = $(this).data('item-id');
            updateTotalPrice(item_id);
        });
    });
</script>

{{-- add to cart --}}
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var button = document.getElementById('add-to-cart-button');
        if (button) {
            button.addEventListener('click', addToCart);
        }
    });

    function addToCart() {
        var petId = this.getAttribute('data-pet-id');

        // Perform a GET request to add the item to the cart
        fetch('/Clients/Cart/add-to-cart/' + petId + '/pet', {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    // Include any required headers for authentication or CSRF protection
                }
            })
            .then(response => {
                // Handle the response from the server
            })
            .catch(error => {
                // Handle any errors that occur during the request
            });
    }
</script> --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var button = document.getElementById('add-to-cart-button');
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

{{-- end add to cart --}}

{{-- <script>
    // Function to handle "Add to Cart" button click
    function addToCart() {
        // Get the current cart count
        var cartCount = parseInt(document.getElementById("cart-count").innerText);

        // Increase the cart count by 1
        cartCount++;

        // Update the cart count in the UI
        document.getElementById("cart-count").innerText = cartCount;

        // Store the cart count in local storage
        localStorage.setItem("cartCount", cartCount);
    }
</script> --}}
