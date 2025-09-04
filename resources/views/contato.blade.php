<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Sua Empresa de Máquinas Pesadas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            width: 90%;
            margin: auto;
            overflow: hidden;
            padding: 20px 0;
        }
        .contact-form {
            background: white;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .contact-form h2 {
            text-align: center;
            color: #2c3e50;
        }
        .contact-form label {
            display: block;
            margin-top: 10px;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Para o padding não aumentar a largura */
        }
        .contact-form button {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #2c3e50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .contact-form button:hover {
            background-color: #34495e;
        }
    </style>
</head>
<body>

    <div class="container">
        <section class="contact-form">
            <h2>Entre em Contato</h2>
            <p>Preencha o formulário para solicitar um orçamento ou tirar suas dúvidas.</p>
            <form action="/contato" method="POST">
    @csrf
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>
@error('name')
    <div style="color: red; font-size: 0.9em; margin-top: -10px; margin-bottom: 10px;">{{ $message }}</div>
@enderror

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
@error('email')
    <div style="color: red; font-size: 0.9em; margin-top: -10px; margin-bottom: 10px;">{{ $message }}</div>
@enderror

                <label for="message">Mensagem:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
@error('message')
    <div style="color: red; font-size: 0.9em; margin-top: -10px; margin-bottom: 10px;">{{ $message }}</div>
@enderror

                <button type="submit">Enviar Mensagem</button>
            </form>
        </section>
    </div>

</body>
</html>