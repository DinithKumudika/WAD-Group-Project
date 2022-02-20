const btn = document.querySelectorAll('.more-info');
const modal = document.querySelectorAll('.bg-modal');
const closeBtn = document.querySelectorAll('.close');

btn.forEach(item => {
	item.addEventListener("click", function() {
		modal.style.display = "flex";
	});
});

closeBtn.forEach(item=>{
	item.addEventListener("click", function() {
		modal.style.display = "none";
	});
});
