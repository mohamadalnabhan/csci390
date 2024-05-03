const images = ["image/image2.webp","image/image3.webp","image/image1.webp"];
let currentIndex=0;
function ChangeImage(){
 
 document.getElementById("ad-img").src=images[currentIndex];

currentIndex= (currentIndex+1)%images.length;

}

setInterval(ChangeImage,3000);