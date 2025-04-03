<!DOCTYPE html>
<html>
<head>
    <title>Smart Cidade</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            padding: 0;
            margin: 0;
            background-color: #000000;
            min-height: 100vh;
            overflow-x: hidden;
            font-family: "Roboto", sans-serif;
            font-optical-sizing: auto;
            font-weight: 300;
            font-style: normal;
            font-variation-settings:
                "wdth" 100;
        }

        #particles-js {
            width: 100%;
            height: 400px;
            background: #000000;
            position: relative;
        }

        .title {
            text-align: center;
            font-size: 5.5em;
            color: white;
            font-family: "Orbitron", sans-serif;
            font-weight: 700;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .texto2 {
            font-size: 20px;
            text-decoration: underline;
            opacity: 0.5;
        }

        .date {
            font-size: 0.3em;
            color: white;
            font-family: "Orbitron", sans-serif;
            opacity: 0.8;
            padding: 15px;
            width: 120px;
            text-align: center;
            display: inline-block;
            white-space: nowrap;
        }

        .menu {
            width: 90%;
            height: 80px;
            margin: 5px auto;
            border: 2px solid white;
        }

        ul li {
            display: inline-block;
        }

        li a {
            text-decoration: none;
            color: white;
            font-family: "Orbitron", sans-serif;
            font-size: 2em;
            margin-right: 20px;
        }

        .content {
            width: 100%;
            height: 281px;
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        /* Primeira seção (Vindo da DIREITA para a esquerda) */
        .trapezio {
            width: 45%;
            height: 280px;
            background-color: white;
            clip-path: polygon(0 100%, 100% 100%, 60% 0, 0 0);
            margin-left: 5%;
            position: relative;
            opacity: 0;
            transform: translateX(100px); /* Vindo da DIREITA */
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .texto {
            width: 45%;
            height: 280px;
            display: flex;
            align-items: center;
            margin-left: 5%;
        }

        .texto p {

            color: white;
            font-size: 2em;
            opacity: 0;
            transform: translateX(-100px); /* Vindo da ESQUERDA */
            transition: opacity 1.5s ease-out, transform 1.5s ease-out;
            margin-right: 5%;
        }

        /* Segunda seção (Vindo da ESQUERDA para a direita) */
        .trapezio2 {
            width: 45%;
            height: 280px;
            background-color: white;
            clip-path: polygon(0 0, 100% 0, 100% 100%, 30% 100%);
            position: relative;
            opacity: 0;
            transform: translateX(-100px); /* Vindo da ESQUERDA */
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .texto2-container {
            width: 45%;
            height: 280px;
            display: flex;
            align-items: center;
            margin-left: 5%;
        }

        .texto2-container p {
            color: white;
            font-size: 2em;
            opacity: 0;
            transform: translateX(100px); /* Vindo da DIREITA */
            transition: opacity 1.5s ease-out, transform 1.5s ease-out;
        }

        /* Quando a classe "show" for adicionada */
        .trapezio.show, .texto p.show {
            opacity: 1 !important;
            transform: translateX(0) !important;
        }

        .trapezio2.show, .texto2-container p.show {
            opacity: 1 !important;
            transform: translateX(0) !important;
        }
        hr{
            color: white;
            width: 90%;
            margin: 0 auto;
            margin-bottom: 15px;
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

<div class="menu">
    <ul>
        <li><a href="">Inicio</a></li>
        <li><a href="">Sobre</a></li>
        <li><a href="">Contato</a></li>
    </ul>
</div>

<div class="content">
    <div class="trapezio"></div>
    <div class="texto">
        <p>Smart Cidade é um app multi plataforma com foco em Mobile, tanto para Android quanto para IOS. Concentrando todos os cerviços da cidade na palma da sua mão.</p>
    </div>
</div>
<hr>
<div class="content">
    <div class="texto2-container">
        <p>Com tecnologia avançada, oferecemos soluções inteligentes para cidades que desejam modernizar seus serviços e agilizar o atendimento ao publico.</p>
    </div>
    <div class="trapezio2"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const elements = document.querySelectorAll(".trapezio, .trapezio2, .texto p, .texto2-container p");

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                }
            });
        }, { threshold: 0.1 });

        elements.forEach(element => observer.observe(element));
    });

    particlesJS('particles-js', {
        "particles": {
            "number": { "value": 80, "density": { "enable": true, "value_area": 800 }},
            "color": { "value": "#ffffff" },
            "shape": { "type": "circle" },
            "opacity": { "value": 0.5, "random": false },
            "size": { "value": 5, "random": true },
            "line_linked": { "enable": true, "distance": 150, "color": "#cdba10", "opacity": 0.4, "width": 1 },
            "move": { "enable": true, "speed": 6, "direction": "none", "random": false, "straight": false, "out_mode": "out" }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": { "onhover": { "enable": true, "mode": "repulse" }, "onclick": { "enable": true, "mode": "push" }, "resize": true }
        },
        "retina_detect": true
    });

    document.getElementById("date").textContent = "15/04/2025";
</script>

</body>
</html>
