const imageInput = document.getElementById('image-input');
var uploaded_image = "";

imageInput.addEventListener("change", function() {
    console.log(imageInput.value);

//     const reader = new FileReader();
//     reader.addEventListener('load', () => { 
//         uploaded_image = reader.result;
//         document.getElementById('display-image').style.backgroundImage = `url(${uploaded_image})`
//     });

//     reader.readAsDataURL(this.files[0]);
});
