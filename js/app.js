// HAMBURGER MENU
const navbarToggler = document.querySelector('.navbar-toggler');
const navbarMenu = document.querySelector('#navbarMenu');

if (navbarToggler) {
    navbarToggler.addEventListener('click', () => {
        navbarMenu.classList.toggle('show');
    });
}
//  KONTAKT - VALIDÁCIA FORMULÁRA + ALERT
const contactForm = document.getElementById("contactForm");

if (contactForm) {
    contactForm.addEventListener("submit", function(e) {

        const email = document.getElementById("email").value;
        const gdpr = document.getElementById("gdpr");

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailRegex.test(email)) {
            e.preventDefault();
            alert("Zadajte platnú emailovú adresu.");
            return;
        }

        if (!gdpr.checked) {
            e.preventDefault();
            alert("Musíte súhlasiť so spracovaním osobných údajov.");
            return;
        }

        alert("Formulár bol úspešne odoslaný.");
    });
}
// GALÉRIA – LIGHTBOX
const galleryImages = document.querySelectorAll(".gallery-img");
const lightboxImg = document.getElementById("lightboxImage");
const lightboxCaption = document.getElementById("lightboxCaption");

if (galleryImages.length > 0 && lightboxImg && lightboxCaption) {

    const modal = new bootstrap.Modal(document.getElementById("lightboxModal"));

    galleryImages.forEach(img => {
        img.addEventListener("click", () => {

            // reset animácie
            lightboxImg.classList.remove("active");

            // nastavi obrázok a text
            lightboxImg.src = img.getAttribute("data-full");
            lightboxCaption.textContent = img.alt;

            // zobrazie lightbox
            modal.show();

            // Spustenie animácie – okamžite
            lightboxImg.classList.add("active");
    });
});

}