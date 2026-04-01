const projectCardsNodeList = document.querySelectorAll('.projectCard');
const projectCount = document.getElementById('projectCount');

const observer = new IntersectionObserver ((entries) => {
	entries.forEach(entry => {
		if (entry.isIntersecting) {
			const index = Array.from(projectCardsNodeList).indexOf(entry.target) + 1;
			projectCount.innerHTML = `<i class='fas fa-layer-group'></i> Project ${index} of ${projectCardsNodeList.length}`;
		}
	});
}, {threshold: 0.9});

projectCardsNodeList.forEach(card => observer.observe(card));