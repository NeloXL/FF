import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const openModal1 = document.getElementById('openModal');
const openModal2 = document.getElementById('openModal2');
const closeModal = document.getElementById('closeModal');
const modal = document.getElementById('modal');
const loginTab = document.getElementById('loginTab');
const registerTab = document.getElementById('registerTab');
const loginForm = document.getElementById('loginForm');
const registerForm = document.getElementById('registerForm');
const rectangle = document.querySelector('.top-part-modal-rectangle');

[openModal1, openModal2].forEach(btn => {
    if (btn) btn.addEventListener('click', () => {
        modal.showModal();
        document.body.classList.add('lock');
    });
});

closeModal.addEventListener('click', () => {
    modal.close();
    document.body.classList.remove('lock');
});

modal.addEventListener('click', e => {
    if (e.target === modal) {
        modal.close();
        document.body.classList.remove('lock');
    }
});

loginTab.addEventListener('click', () => {
    loginTab.classList.add('active');
    registerTab.classList.remove('active');
    loginForm.classList.add('active');
    registerForm.classList.remove('active');
    rectangle.classList.remove('register');
});

registerTab.addEventListener('click', () => {
    registerTab.classList.add('active');
    loginTab.classList.remove('active');
    registerForm.classList.add('active');
    loginForm.classList.remove('active');
    rectangle.classList.add('register');
});

axios.post('/api/something', { foo: 'bar' })
    .then(response => console.log(response.data))
    .catch(error => console.error(error));
