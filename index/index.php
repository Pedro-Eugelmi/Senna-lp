<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pedro Eugelmi</title>
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: radial-gradient(circle at top, #0a0a0f, #020202);
      color: white;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      font-family: 'Poppins', sans-serif;
      overflow: hidden;
    }

    h1 {
      font-size: 3.5rem;
      margin-bottom: 50px;
      background: linear-gradient(90deg, #ffffff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      letter-spacing: 2px;
      text-shadow: 0 0 20px rgba(58, 109, 156, 0.6);
    }

    /* Logo giratória mais moderna */
    .spinner {
      width: 120px;
      height: 120px;
      position: relative;
      animation: spin 4s linear infinite;
    }

    .spinner::before,
    .spinner::after {
      content: '';
      position: absolute;
      border-radius: 50%;
      border: 2px solid transparent;
    }

    .spinner::before {
      width: 100%;
      height: 100%;
      border-top: 3px solid #3a6d9c;
      border-right: 3px solid transparent;
      border-bottom: 3px solid transparent;
      border-left: 3px solid #3a6d9c;
    }

    .spinner::after {
      top: 15px;
      left: 15px;
      width: 90px;
      height: 90px;
      border-top: 2px solid #ffffff;
      border-right: 2px solid transparent;
      border-bottom: 2px solid #3a6d9c;
      border-left: 2px solid transparent;
      animation: spinReverse 3s linear infinite;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
    }

    @keyframes spinReverse {
      to { transform: rotate(-360deg); }
    }

    /* Mensagem */
    p {
      margin-top: 40px;
      font-size: 1.1rem;
      opacity: 0.7;
      letter-spacing: 1px;
    }

    /* Partículas no fundo */
    .particle {
      position: absolute;
      background: rgba(58, 109, 156, 0.3);
      border-radius: 50%;
      animation: float 10s infinite ease-in-out;
    }

    @keyframes float {
      0% {
        transform: translateY(0) scale(1);
        opacity: 0.4;
      }
      50% {
        transform: translateY(-50px) scale(1.3);
        opacity: 0.7;
      }
      100% {
        transform: translateY(0) scale(1);
        opacity: 0.4;
      }
    }
  </style>
</head>
<body>
  <h1>PEDRO EUGELMI</h1>
  <div class="spinner"></div>
  <p>Coming soon...</p>

  <!-- Partículas -->
  <script>
    const totalParticles = 20;
    for (let i = 0; i < totalParticles; i++) {
      const particle = document.createElement("div");
      particle.classList.add("particle");
      const size = Math.random() * 5 + 2;
      particle.style.width = `${size}px`;
      particle.style.height = `${size}px`;
      particle.style.left = `${Math.random() * 100}%`;
      particle.style.top = `${Math.random() * 100}%`;
      particle.style.animationDuration = `${Math.random() * 5 + 5}s`;
      document.body.appendChild(particle);
    }
  </script>
</body>
</html>
