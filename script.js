const projectCards = document.querySelectorAll(".projectCard");
const previewBoxes = document.querySelectorAll(".previewBox");
const previewDefault = document.getElementById("previewDefault");

function hideAllPreviews() {
	previewBoxes.forEach(box => {
		box.style.display = "none";
	});
}

projectCards.forEach(card => {
	const previewId = card.dataset.preview;
	const previewBox = document.getElementById(previewId);

	if (!previewBox) return;

	card.addEventListener("mouseenter", () => {
		hideAllPreviews();
		if (previewDefault) {
			previewDefault.style.display = "none";
		}
		previewBox.style.display = "block";
	});

	card.addEventListener("mouseleave", () => {
		previewBox.style.display = "none";
		if (previewDefault) {
			previewDefault.style.display = "block";
		}
	});
});