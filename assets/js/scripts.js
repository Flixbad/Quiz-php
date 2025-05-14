document.querySelectorAll('.form-check-input').forEach(input => {
    input.addEventListener('click', () => {
        document.querySelectorAll('.form-check-label').forEach(label => label.classList.remove('fw-bold', 'text-warning'));
        input.nextElementSibling.classList.add('fw-bold', 'text-warning');
    });
});

document.addEventListener("DOMContentLoaded", function () {
    let music = document.getElementById("backgroundMusic");
    let musicState = localStorage.getItem("musicPlaying");

    if (musicState === "true") {
        music.play();
    }

    document.getElementById("toggleMusic").addEventListener("click", function () {
        if (music.paused) {
            music.play();
            localStorage.setItem("musicPlaying", "true");
            this.textContent = "🔇 Couper la musique";
        } else {
            music.pause();
            localStorage.setItem("musicPlaying", "false");
            this.textContent = "🎵 Activer la musique";
        }
    });
});
