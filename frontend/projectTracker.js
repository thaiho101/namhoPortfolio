const projectCardsNodeList = document.querySelectorAll('.projectCard');
const projectCount = document.getElementById('projectCount');
const projectSection = document.getElementById('projects');

const defaultHTML = `<div class="timelineDotProject"></div> <div>Total: ${projectCardsNodeList.length} Projects</div>`;

function updateProjectCount() {
  const firstCard = projectCardsNodeList[0].getBoundingClientRect();
  const lastCard = projectCardsNodeList[projectCardsNodeList.length - 1].getBoundingClientRect();
  
  const offset = window.innerHeight * 0.5;

  if (firstCard.top > window.innerHeight - offset || lastCard.bottom < offset) {
    projectCount.innerHTML = defaultHTML;
    return;
  }

  let currentIndex = 0;
  projectCardsNodeList.forEach((card, i) => {
    const rect = card.getBoundingClientRect();
    if (rect.top < window.innerHeight * 0.5) {
      currentIndex = i + 1;
    }
  });

  if (currentIndex === 0) currentIndex = 1;

  projectCount.innerHTML = `<div class="timelineDotProject"></div> <div>Project ${currentIndex} of ${projectCardsNodeList.length}</div>`;
}

window.addEventListener('scroll', updateProjectCount);
updateProjectCount();