document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('toggleView');
    const container = document.getElementById('userContainer');

    btn.addEventListener('click', () => {
        container.classList.toggle('grid-view');
        container.classList.toggle('list-view');
    });
});
