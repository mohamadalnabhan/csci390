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

