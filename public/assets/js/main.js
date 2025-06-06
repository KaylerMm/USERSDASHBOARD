document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('toggleView');
    const container = document.getElementById('userContainer');

    btn.addEventListener('click', () => {
        container.classList.toggle('grid-view');
        container.classList.toggle('list-view');
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.querySelector('input[name="search"]');
    const userCards = document.querySelectorAll('.user-card');

    searchInput.addEventListener('input', () => {
        const search = searchInput.value.toLowerCase();

        userCards.forEach(card => {
            const name = card.dataset.name;
            const email = card.dataset.email;

            if (name.includes(search) || email.includes(search)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});

const toggleBtn = document.getElementById('darkModeToggle');
toggleBtn.addEventListener('click', () => {
  document.body.classList.toggle('dark-mode');
  if(document.body.classList.contains('dark-mode')){
    localStorage.setItem('theme', 'dark');
  } else {
    localStorage.setItem('theme', 'light');
  }
});

window.onload = () => {
  if(localStorage.getItem('theme') === 'dark'){
    document.body.classList.add('dark-mode');
  }
}

const konamiCode = [
    "ArrowUp", "ArrowUp",
    "ArrowDown", "ArrowDown",
    "ArrowLeft", "ArrowRight",
    "ArrowLeft", "ArrowRight",
    "b", "a"
];

let input = [];

window.addEventListener("keydown", (e) => {
    input.push(e.key);
    if (input.length > konamiCode.length) input.shift();

    if (input.join("") === konamiCode.join("")) {
    document.body.style.backgroundColor = "black";
    document.body.style.color = "red";
    alert("🕹️ Parabéns! Você desbloqueou o lado negro da Força.");
    }
});

