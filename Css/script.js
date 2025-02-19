let slideIndex = 1;  // Başlangıçta ilk slayt gösterilecek
let slideTimer;      // Zamanlayıcıyı burada tanımlıyoruz

// Sayfa yüklendikten sonra slider'ı başlatıyoruz
document.addEventListener("DOMContentLoaded", function() {
    showSlides(slideIndex);  // İlk slaytı göster

    // Otomatik geçişi başlatıyoruz
    slideTimer = setInterval(autoSlide, 5000);  // 5000ms = 5 saniye
});

// Slaytları otomatik olarak geçiş yapacak fonksiyon
function autoSlide() {
    showSlides(slideIndex += 1);  // Bir sonraki slayta geçiş yapar
}

// Slaytları göstermek için fonksiyon
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");  // Tüm slaytları alır
    let dots = document.getElementsByClassName("dot");  // Tüm noktaları alır

    if (n > slides.length) {slideIndex = 1}  // Eğer son slayt geçildiyse ilk slayta döner
    if (n < 1) {slideIndex = slides.length}  // Eğer ilk slayttan önce gidildiyse son slayta döner

    // Tüm slaytları gizler
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }

    // Tüm noktaların "active" sınıfını kaldırır
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");  
    }

    // Geçerli slaytı gösterir
    slides[slideIndex-1].style.display = "block";  
    // Geçerli noktanın aktif olduğunu belirtir
    dots[slideIndex-1].className += " active";  
}

// Slider üzerinde etkileşim olduğunda zamanlayıcıyı sıfırlama
document.querySelector('.prev').addEventListener('click', function() {
    clearInterval(slideTimer);  // Otomatik geçişi durdurur
    slideTimer = setInterval(autoSlide, 5000);  // Zamanlayıcıyı tekrar başlatır
    showSlides(slideIndex -= 1);  // Önceki slayta geçiş yapar
});

document.querySelector('.next').addEventListener('click', function() {
    clearInterval(slideTimer);  // Otomatik geçişi durdurur
    slideTimer = setInterval(autoSlide, 5000);  // Zamanlayıcıyı tekrar başlatır
    showSlides(slideIndex += 1);  // Sonraki slayta geçiş yapar
});
