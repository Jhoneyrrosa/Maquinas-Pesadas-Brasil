<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máquinas Pesadas Brasil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffcccc;
            color: #333;
        }

        /* --- Estilo do Menu Fixo --- */
        .navbar {
            background-color: #34495e;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 999;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar__left {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar__logo {
            display: flex;
            align-items: center;
            text-decoration: none;
        }
        .logo-img {
            background: green;
            width: 100px;
            margin: 0 0 0 25px;
            padding: 5px;
            border-radius: 100px;
        }
        .navbar__title {
            color: white;
            font-size: 2.0em;
            margin: 0 auto;
             font-weight: bold;
            font-size: 4.1em;
            align-items: center;
        }
        .navbar__links a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            margin-top: 80px;
            font-weight: bold;
            font-size: 1.1em;
        }
        .navbar__links a:hover {
            text-decoration: underline;
        }

        /* --- Estilo do Header --- */
        .header {
            background-color: #FF2800;
            color: white;
            padding: 10px;
            text-align: center;
            margin-top: 130px; /* Mantido o ajuste de margem para compensar o menu */
        }
        .header__description-page {
            font-size: 2.0em;
            margin: 0;
        }

        /* --- Estilo do Hero --- */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url('https://blog.mfrural.com.br/wp-content/uploads/2021/09/tecnologia-em-maquinas-1090x660.jpg') no-repeat center center/cover;
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #a2a2a2;
            text-shadow: 2px 2px 4px #000000;
            text-align: center;
        }
        .hero h2 {
            font-size: 3em;
            margin: 0;
        }
        .hero p {
            font-size: 1.5em;
        }

        /* --- Estilo do Conteúdo Principal --- */
        .container {
            width: 90%;
            margin: auto;
            overflow: hidden;
            padding: 20px 0;
        }
        .main-content {
            background: white;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .card {
            background: #fff;
            border: 1px solid #ddd;
            width: 300px;
            text-align: center;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 10px;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card img {
            max-width: 100%;
            height: auto;
        }
        .card h3 {
            margin-top: 10px;
        }
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }
        
        /* --- Estilo da Mensagem de Sucesso --- */
        .success-message {
            position: fixed;
            top: 50px;
            left: 0;
            right: 0;
            z-index: 1000;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 15px;
            text-align: center;
            transition: opacity 0.5s ease-in-out;
        }
    </style>
</head>
<body>

   <nav class="navbar">
        <a href="/" class="navbar__logo">
            <img class="logo-img" src="{{ asset('images/logo.png') }}" alt="Sua Logo">
        </a>
        <h1 class="navbar__title">Máquinas Pesadas Brasil</h1>
        <div class="navbar__links">
            <a href="/">Início</a>
            <a href="/produto">Produto</a>
            <a href="/contato">Contato</a>
            <a href="/sobre-nos">Sobre Nós</a>
        </div>
    </nav>

    @if(session('success'))
    <div id="success-message" class="success-message">
        {{ session('success') }}
    </div>
    @endif

    <header class="header">
        <span class="header__description-page">Especializada em modernas e pesadas Máquinas da China</span>
    </header>

    <div class="hero">
        <div>
            <h2>Qualidade e Força para o seu Projeto</h2>
            <p>Confiabilidade e Desempenho em Cada Máquina</p>
        </div>
    </div>

    <div class="container">
        <section class="main-content">
            <h2>Máquinas de Qualidade e com Garantia</h2>
            <p>Conheça alguns dos equipamentos que oferecemos.</p>
            <div class="card-container">
                <div class="card">
                    <img src="https://p.globalsources.com/IMAGES/PDT/B5920837908/China-Maquinas-terraplanagem-Escavadeira-Esteiras-6-Toneladas.jpg" alt="Escavadeira">
                    <h3>Escavadeira</h3>
                    <p>Máxima eficiência para grandes escavações.</p>
                </div>
                <div class="card">
                    <img src="https://s7d2.scene7.com/is/image/Caterpillar/CM20221103-bdf34-60001?$highres$?$cc-s$&fmt=pjpeg" alt="Trator de Esteira">
                    <h3>Trator de Esteira</h3>
                    <p>Potência e precisão para terraplenagem.</p>
                </div>
                <div class="card">
                    <img src="https://p.globalsources.com/IMAGES/PDT/B1177860004/Caminhao-basculante.jpg?ver=5161061725" alt="Caminhao Basculante">
                    <h3>Caminhão Basculante</h3>
                    <p>Robustez para o transporte de materiais.</p>
                </div>
            </div>
        </section>
        <section class="articol">
            <h1>Olá</h1>
        </section>
    </div>

    <footer class="footer">
        <p>&copy; 2025 Máquinas Pesadas Brasil. By Jhoney Rosa.</p>
    </footer>

    <script>
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            setTimeout(() => {
                successMessage.remove();
            }, 3000);
        }
    </script>
</body>
</html>