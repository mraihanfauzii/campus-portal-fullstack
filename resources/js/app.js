import * as bootstrap from 'bootstrap';
import './bootstrap';

// Animasi sederhana untuk alert
const successAlert = document.getElementById('success-alert');
if (successAlert) {
    setTimeout(() => {
        successAlert.style.display = 'none';
    }, 5000); // Sembunyikan setelah 5 detik
}

// Validasi form kontak sisi klien
const contactForm = document.getElementById('contact-form');
if (contactForm) {
    contactForm.addEventListener('submit', function(event) {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        if (name.trim() === '' || email.trim() === '' || message.trim() === '') {
            event.preventDefault(); // Hentikan pengiriman form
            alert('Semua kolom wajib diisi!');
        }
    });
}