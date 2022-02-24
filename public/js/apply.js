const fileUpload = document.getElementById("cv-upload");
const uplaodBtn = document.getElementById("cv-btn");
const uploadText = document.getElementById("cv-text");

const moreInfoBtn = document.getElementById("more-btn");
const modal = document.querySelector('.bg-modal');
const closeBtn = document.querySelector('.close');

moreInfoBtn.addEventListener('click', function() {
		modal.style.display = "flex";
});
	
closeBtn.addEventListener('click', function() {
		modal.style.display = "none";
});

uplaodBtn.addEventListener('click',function(){
	fileUpload.click();
});

fileUpload.addEventListener('change',function(){
	if(fileUpload.value){
		uploadText.innerHTML = fileUpload.value;
	}
	else{
		uploadText.innerHTML = "No file chosen"
	}
});