<!DOCTYPE html>
<html>
<head>
    <title>Smart Cidade</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            padding: 0;
            margin: 0;
            background-color: #000000;
            height: 100vh;
            overflow: hidden;
        }
        #particles-js {
            width: 100%;
            height: 100vh;
            background: #000000;
            position: relative;
        }
        .title {
            text-align: center;
            font-size: 5.5em;
            color: white;
            font-family: "Orbitron", sans-serif;
            font-weight: 700;
            font-style: normal;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .container {
            max-width: 100%;
            margin: 0 auto;
            padding: 0;
            position: relative;
            height: 100vh;
        }
        .texto2 {
            font-size: 20px;
            padding: 0;
            text-decoration: underline;
            opacity: 0.5;
        }
        .date {
            font-size: 0.5em;
            color: white;
            font-family: "Orbitron", sans-serif;
            opacity: 0.8;
        }
        hr {
            color: white;
            display: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div id="particles-js">
        <div class="title">
            Smart Cidade
            <span class="texto2">O futuro está chegando</span>
            <span class="date" id="date">00/00/0000</span>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script>
    // Configuração do Particle.js
    particlesJS('particles-js', {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle"
            },
            "opacity": {
                "value": 0.5,
                "random": false
            },
            "size": {
                "value": 5,
                "random": true
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#cdba10",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out"
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            }
        },
        "retina_detect": true
    });

    // Animação da data estilo Matrix com loop
    const targetDate = "15/04/2025";
    const dateElement = document.getElementById("date");
    const matrixChars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()+-=[]{}|;:,.<>?";
    const animationDuration = 7000; // 10 segundos para animação
    const displayDuration = 10000; // 10 segundos exibindo a data
    const frameRate = 50; // 50 fps
    const totalFrames = animationDuration / 1000 * frameRate; // Frames para 10s
    const intervalTime = 1000 / frameRate; // 20ms por frame

    function getRandomChar() {
        return matrixChars[Math.floor(Math.random() * matrixChars.length)];
    }

    function animateToDate() {
        let elapsedTime = 0;
        let fixedPositions = new Array(targetDate.length).fill(false);

        function updateDate() {
            let currentText = "";
            const progress = elapsedTime / animationDuration;

            for (let i = 0; i < targetDate.length; i++) {
                if (fixedPositions[i] || progress > i / targetDate.length + 0.3) {
                    currentText += targetDate[i];
                    fixedPositions[i] = true;
                } else {
                    currentText += getRandomChar();
                }
            }

            dateElement.textContent = currentText;
            elapsedTime += intervalTime;

            if (elapsedTime < animationDuration) {
                setTimeout(updateDate, intervalTime);
            } else {
                dateElement.textContent = targetDate;
                setTimeout(animateRandom, displayDuration); // Após 10s, volta aos códigos
            }
        }

        updateDate();
    }

    function animateRandom() {
        let elapsedTime = 0;

        function updateRandom() {
            let currentText = "";
            for (let i = 0; i < targetDate.length; i++) {
                currentText += getRandomChar();
            }

            dateElement.textContent = currentText;
            elapsedTime += intervalTime;

            if (elapsedTime < animationDuration) {
                setTimeout(updateRandom, intervalTime);
            } else {
                animateToDate(); // Após 10s de códigos aleatórios, volta à data
            }
        }

        updateRandom();
    }

    // Inicia o loop após 1 segundo
    setTimeout(animateToDate, 100);
</script>
</body>
</html>
