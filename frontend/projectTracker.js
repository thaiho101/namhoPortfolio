const projectCardsNodeList = document.querySelectorAll('.projectCard');
const projectCount = document.getElementById('projectCount');

const observer = new IntersectionObserver ((entries) => {
	entries.forEach(entry => {
		if (entry.isIntersecting) {
			const index = Array.from(projectCardsNodeList).indexOf(entry.target) + 1;
			projectCount.innerHTML = `<div class="timelineDotProject"></div> <div> Project ${index} of ${projectCardsNodeList.length} </div>`;
		}
	});
}, {threshold: 0.9});

const projectSection = document.getElementById('projects');
const sectionObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      projectCount.innerHTML = "<div class='timelineDotProject'></div> <div>Total: 6 Projects</div>";
    }
  });
}, { threshold: 0.2 });

sectionObserver.observe(projectSection);
projectCardsNodeList.forEach(card => observer.observe(card));