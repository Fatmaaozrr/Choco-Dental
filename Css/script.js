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

// Tüm kareleri seç
const kutular = document.querySelectorAll('.square');
const doktorSol = document.querySelector('.doktor-container.sol');
const doktorSag = document.querySelector('.doktor-container.sag');
const balonSol = document.querySelector('.doktor-container.sol .balon');
const balonSag = document.querySelector('.doktor-container.sag .balon');

// Her kutu için hover olayını ekle
kutular.forEach(kutu => {
    kutu.addEventListener('mouseenter', () => {
        // Açıklamayı al
        const aciklama = kutu.getAttribute('data-aciklama');

        // Kutunun sınıfına göre balonun konumunu belirle
        if (kutu.classList.contains('sol')) {
            balonSol.textContent = aciklama;
            doktorSol.style.left = '20px'; // Soldan içeri gir
            doktorSag.style.right = '-1000px'; // Sağdaki doktoru gizle
        } else if (kutu.classList.contains('sag')) {
            balonSag.textContent = aciklama;
            doktorSag.style.right = '20px'; // Sağdan içeri gir
            doktorSol.style.left = '-1000px'; // Soldaki doktoru gizle
        }
    });

    kutu.addEventListener('mouseleave', () => {
        // Doktorları yavaşça ekranın dışına çıkar
        if (doktorSol.style.left === '20px') {
            doktorSol.style.left = '-1000px';
        }
        if (doktorSag.style.right === '20px') {
            doktorSag.style.right = '-1000px';
        }
    });
});

//Yuvarlaklar
const circleCount = 30;  // Kaç tane yuvarlak olacağını belirtiyoruz
const container = document.getElementById('circleContainer');
const circles = [];

for (let i = 0; i < circleCount; i++) {
    const circle = document.createElement('div');
    const size = Math.random() * 30 + 10;  // 10 ile 40 px arasında bir boyut
    const color = `hsl(${Math.random() * 360}, 100%, 50%)`;  // Rastgele renk
    const speedX = Math.random() * 2 + 1;  // Yatay hız
    const speedY = Math.random() * 2 + 1;  // Dikey hız

    circle.classList.add('circle');
    circle.style.width = `${size}px`;
    circle.style.height = `${size}px`;
    circle.style.backgroundColor = color;
    circle.style.left = `${Math.random() * (container.clientWidth - size)}px`;
    circle.style.top = `${Math.random() * (container.clientHeight - size)}px`;

    container.appendChild(circle);
    circles.push({ element: circle, speedX, speedY, size });
}

function animateCircles() {
    circles.forEach(circle => {
        let currentX = parseFloat(circle.element.style.left);
        let currentY = parseFloat(circle.element.style.top);

        // Kapsayıcı alanın sınırlarına ulaştığında yön değiştir
        if (currentX + circle.size >= container.clientWidth || currentX <= 0) {
            circle.speedX *= -1; // X ekseninde yön değiştir
        }
        if (currentY + circle.size >= container.clientHeight || currentY <= 0) {
            circle.speedY *= -1; // Y ekseninde yön değiştir
        }

        // Yeni pozisyonlara yuvarlakları yerleştir
        currentX += circle.speedX;
        currentY += circle.speedY;

        circle.element.style.left = `${currentX}px`;
        circle.element.style.top = `${currentY}px`;
    });

    requestAnimationFrame(animateCircles); // Animasyonu sürekli çağır
}

animateCircles(); // Animasyonu başlat
