const abrir = document.getElementById('abrir');
const modal = document.getElementById('modal');
const cerrar = document.getElementById('cerrar');

abrir.addEventListener('click', () => {
    modal.classList.add('show');

});

cerrar.addEventListener('click', () => {
    modal.classList.remove('show');
});
