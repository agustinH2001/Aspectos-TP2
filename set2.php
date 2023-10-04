<!-- Created By CodingNepal - www.codingnepalweb.com  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspectos Profesionales y Sociales</title>
    <link rel="stylesheet" href="style.css">
    <!-- FontAweome CDN Link for Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<a href="index.php">
    <h1>Seleccionar otro cuestionario</h1>
</a>
    <!-- start Quiz button -->
    <div class="start_btn"><button>Empezar Cuestionario</button></div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Reglas del cuestionario</span></div>
        <div class="info-list">
            <div class="info">1. Tienes <span>30 segundos</span> por pregunta.</div>
            <div class="info">2. No se puede cambiar la opción elegida.</div>
            <div class="info">3. No se puede elegir una vez termina el tiempo.</div>
        </div>
        <div class="buttons">
            <button class="quit">Salir</button>
            <button class="restart">Continuar</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Quiz de Contratos</div>
            <div class="timer">
                <div class="time_left_txt">Tiempo</div>
                <div class="timer_sec">30</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Siguiente</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">Completaste el Quiz!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Reintentar</button>
            <button class="quit">Salir</button>
        </div>
    </div>

    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="js/questions2.js"></script>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="js/script.js?v=1"></script>

</body>
</html>