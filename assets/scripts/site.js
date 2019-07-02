(function () {

	$("#theCarousel").carousel();

var myImage = $("#theCarousel");

var imageArray = ["images/Banner1.png","images/Banner2.png","images/Banner3.png"];
var imageIndex = 0;

function changeImage()  {
	myImage.setAttribute("src",imageArray[imageIndex]);
	imageIndex++;
	if (imageIndex >= imageArray.length) {
		imageIndex = 0;
		}
	}
setInterval(changeImage,2000);


})(); 