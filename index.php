<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
    <link rel="stylesheet" href="love_letter.css">
</head>
<body>
    <div class="background" id="background"></div>
    <div class="envelope" onclick="showQuestions()">
        <div class="message-top"></div>
        <div class="heart"></div>
    </div>
    <div class="questions">
        <div class="question">
            <p>¿Me llamas la atención, te gustaría que nos conociéramos?</p>
            <div class="buttons">
                <button onclick="answerYes()">Sí</button>
                <button onclick="answerNo()">No</button>
            </div>
            <div class="small-text">cuando respondas la pregunta podrias mandarme tu respuesta por WhatsApp?.</div>
        </div>
    </div>
    <div class="love-message" id="loveMessage">
      que bien no estare guapo,mamado pero se querer bonito y ser detallista
    </div>
    <div class="disappointment-message" id="disappointmentMessage">
    que mal pero no pasa nada.
    </div>
    
    <script>
        function showQuestions() {
            document.querySelector('.envelope').style.display = 'none';
            document.querySelector('.questions').style.display = 'flex';
            document.getElementById('background').style.display = 'block';
        }
        function answerYes() {
            document.querySelector('.questions').style.display = 'none';
            document.getElementById('loveMessage').style.display = 'block';
        }
        function answerNo() {
            document.querySelector('.questions').style.display = 'none';
            document.getElementById('disappointmentMessage').style.display = 'block';
        }
    </script>
</body>
</html>
