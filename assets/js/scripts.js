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

    
    let timeLeft = 15; 
    let timerElement = document.getElementById("timer-value");
    let quizForm = document.getElementById("quizForm");

    function updateTimer() {
        if (timeLeft > 0) {
            timerElement.textContent = timeLeft;
            timeLeft--;

           
            if (timeLeft <= 3) {
                timerElement.style.color = "red";
                timerElement.style.animation = "shake 0.5s infinite alternate";
            }
        } else {
            quizForm.submit(); 
        }
    }

    
    const style = document.createElement('style');
    style.innerHTML = `
        @keyframes shake {
            0% { transform: rotate(0); }
            25% { transform: rotate(-5deg); }
            50% { transform: rotate(5deg); }
            75% { transform: rotate(-5deg); }
            100% { transform: rotate(0); }
        }
    `;
    document.head.appendChild(style);

    setInterval(updateTimer, 1000);
});
