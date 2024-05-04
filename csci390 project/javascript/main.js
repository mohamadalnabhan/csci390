const images1 = ["image/image2.webp","image/image3.webp","image/image1.webp"];
const images2 = ["image/image2.webp","image/image3.webp","image/image1.webp"];
const images3 = ["image/image2.webp","image/image3.webp","image/image1.webp"];
const images4 = ["image/image2.webp","image/image3.webp","image/image1.webp"];
let currentIndex=0;

function ChangeImage(){
    document.getElementById("ad-img1").src = images1[currentIndex];
    document.getElementById("ad-img2").src = images1[currentIndex];
    currentIndex = (currentIndex + 1) % images1.length;
}

setInterval(ChangeImage, 3000);

document.addEventListener('DOMContentLoaded', function() {
    let previewContainer = document.querySelector('.product-preview');
    let previewBox = previewContainer.querySelectorAll('.preview');

    document.querySelectorAll('.product .img-container .box').forEach(box => {
        box.onclick = () => {
            previewContainer.style.display = 'flex';
            let name = box.getAttribute('data-name');
            previewBox.forEach(preview => {
                let target = preview.getAttribute('data-target');
                if (name == target) {
                    preview.classList.add('active');
                }
            });
        };
    });

    previewBox.forEach(close => {
        close.querySelector('.fa-times').onclick = () => {
            close.classList.remove('active');
            previewContainer.style.display = 'none';
        };
    });
});



//code mn chatgpt mmkn ykon help


{/* <script>
  // Function to handle adding items to the cart
  function addToCart(name, price) {
    // Create a new item object
    const item = { name, price };
    // Get the cart element
    const cart = document.getElementById('cart-items');
    // Create a new list item
    const listItem = document.createElement('li');
    // Set innerHTML of the list item
    listItem.innerHTML = `${item.name} - $${item.price}`;
    // Append the list item to the cart
    cart.appendChild(listItem);
  }

  // Get all add-to-cart buttons
  const addToCartButtons = document.querySelectorAll('.add-to-cart');

  // Add event listener to each add-to-cart button
  addToCartButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Get the parent element of the button
      const parent = button.parentNode;
      // Get the name and price from the parent element's data attributes
      const name = parent.dataset.name;
      const price = parent.dataset.price;
      // Call the addToCart function with name and price
      addToCart(name, price);
    });
  });
</script> */}
