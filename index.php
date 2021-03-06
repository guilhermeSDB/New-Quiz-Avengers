<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" type="imagex/png" href="img/avengers-icon2.png">

    <!-- Import animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Import My CSS -->
    <link rel="stylesheet" href="css/main.min.css" />

    <!-- Import Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Index - Quiz</title>
</head>

<body>
    <header class="header">
        <img class="question_img_header" src="https://images4.alphacoders.com/909/909185.jpg" alt="Capa Vingadores"
            width="300">
        <h1 class="question_title">Qual dos Vingadores é você?</h1>
    </header>
    <main>
        <section>
            <form action="resultado.php" method="post">
                <!-- Começo da questao 1 -->
                <div id="1" class="question_card">
                    <img class="animate__animated animate__fadeInLeft question_img"
                        src="https://previews.123rf.com/images/pressmaster/pressmaster1510/pressmaster151000205/46147122-group-of-ecstatic-friends-with-cocktails-looking-at-camera-at-party.jpg"
                        width="500" alt="">
                    <h2 class="question_title animate__animated animate__fadeInDown">
                        1- Quem é você em uma festa de amigos?
                    </h2>
                    <div class="question_options">
                        <input type="radio" name="q1" value="a" id="q1a" required>
                        <button type="button" class="animate__animated animate__fadeInDown button1">
                            <label for="q1a">a) A pessoa que controla a música e agita a festa.</label>
                        </button>

                        <input type="radio" name="q1" value="b" id="q1b" required>
                        <button type="button" class="animate__animated animate__fadeInDown button1">
                            <label for="q1b">b) Alguém entre os que estão dançando.</label>
                        </button>

                        <input type="radio" name="q1" value="c" id="q1c" required>
                        <button type="button" class="animate__animated animate__fadeInDown button1">
                            <label for="q1c"> c) Está sempre perto da mesa de comida.</label>
                        </button>

                        <input type="radio" name="q1" value="d" id="q1d" required>
                        <button type="button" class="animate__animated animate__fadeInDown button1">
                            <label for="q1d"> d) Está em casa, longe da festa.</label>
                        </button>
                    </div>
                </div>
                <!-- Fim da questao 1 -->

                <!-- Começo da questao 2 -->
                <div id="2" class="question_card">
                    <img class="animate__animated animate__fadeInLeft question_img"
                        src="http://www.dennisbird.org/wp-content/uploads/2019/10/umit-bulut-qbTC7ZwJB64-unsplash-1-1024x683.jpg"
                        width="500" alt="">
                    <h2 class="question_title animate__animated animate__fadeInDown">
                        2- Em uma decisão difícil, com seus amigos, você:
                    </h2>
                    <div class="question_options">

                        <input type="radio" name="q2" value="a" id="q2a" required> 
                        <button type="button" class="animate__animated animate__fadeInDown button2">
                            <label for="q2a">a) Faz o que é certo, acima de tudo.</label>
                        </button>

                        <input type="radio" name="q2" value="b" id="q2b" required>
                        <button type="button" class="animate__animated animate__fadeInDown button2">
                            <label for="q2b">b) Decide em conjunto e faz o que todos acharem melhor.</label>
                        </button>

                        <input type="radio" name="q2" value="c" id="q2c" required>
                        <button type="button" class="animate__animated animate__fadeInDown button2">
                            <label for="q2c">c) Calcula as alternativas e mostra pra todo mundo onde há menos
                                danos.</label>
                        </button>

                        <input type="radio" name="q2" value="d" id="q2d" required>
                        <button type="button" class="animate__animated animate__fadeInDown button2">
                            <label for="q2d">d) Espera alguém decidir e vai na onda.</label>
                        </button>
                    </div>
                </div>
                <!-- Fim da questao 2 -->

                <!-- Começo da questao 3 -->
                <div class="question_card">
                    <img class="animate__animated animate__fadeInLeft question_img"
                        src="https://mapaavaliacoes.com.br/wp-content/uploads/2020/04/WhatsApp-Image-2020-05-20-at-12.32.46-PM.jpeg"
                        width="500" alt="">
                    <h2 class="question_title animate__animated animate__fadeInDown">
                        3- Sua maior habilidade no meio da crise:
                    </h2>
                    <div class="question_options">
                        <input type="radio" name="q3" value="a" id="q3a" required>
                        <button name="q3" class="animate__animated animate__fadeInDown button3">
                            <label for="q3a">a) Força.</label>
                        </button>

                        <input type="radio" name="q3" value="b" id="q3b" required>
                        <button type="button" class="animate__animated animate__fadeInDown button3">
                            <label for="q3b">b) Lealdade.</label>
                        </button>

                        <input type="radio" name="q3" value="c" id="q3c" required>
                        <button type="button" class="animate__animated animate__fadeInDown button3">
                            <label for="q3c">c) Pensamento lógico.</label>
                        </button>

                        <input type="radio" name="q3" value="d" id="q3d" required>
                        <button type="button" class="animate__animated animate__fadeInDown button3">
                            <label for="q3d">d) Abordagem criativa.</label>
                        </button>
                    </div>
                </div>
                <!-- Fim da questao 3 -->                

                <!-- Começo da questao 4 -->
                <div class="question_card">
                    <img class="animate__animated animate__fadeInLeft question_img"
                        src="https://images.ctfassets.net/cnu0m8re1exe/N3pNNr0rSCtGxopdTRYwy/2b22f1e357213d66505c4e224438c408/female-question.jpg?fm=jpg&fl=progressive&w=660&h=433&fit=fill"
                        width="500" alt="">
                    <h2 class="question_title animate__animated animate__fadeInDown">
                        4- Qual dessas frases se aplica mais a você?
                    </h2>
                    <div class="question_options">
                        <input type="radio" name="q4" value="a" id="q4a" required>
                        <button type="button" class="animate__animated animate__fadeInDown button4">
                            <label for="q4a">a) Se eu tivesse oito horas para derrubar uma árvore, passaria seis afiando
                                meu
                                machado" (Abraham Lincoln).</label>
                        </button>

                        <input type="radio" name="q4" value="b" id="q4b" required>
                        <button type="button" class="animate__animated animate__fadeInDown button4">
                            <label for="q4b">b) Mil vidas eu tivesse, mil vidas eu daria pela libertação da minha pátria
                                (Tiradentes).</label>
                        </button>

                        <input type="radio" name="q4" value="c" id="q4c" required>
                        <button type="button" class="animate__animated animate__fadeInDown button4">
                            <label for="q4c">c) "Lutar pelo amor é bom, mas alcançá-lo sem luta é melhor." (William
                                Shakespeare).</label>
                        </button>

                        <input type="radio" name="q4" value="d" id="q4d" required>
                        <button type="button" class="animate__animated animate__fadeInDown button4">
                            <label for="q4d">d) O verdadeiro homem mede a sua força quando se defronta com o obstáculo."
                                (Antoine de Saint-Exupéry).</label>
                        </button>
                    </div>
                </div>
                <!-- Fim da questao 4 -->

                <!-- Começo da questao 5 -->
                <div class="question_card">
                    <img class="animate__animated animate__fadeInLeft question_img"
                        src="https://xerpay.com.br/blog/wp-content/uploads/sites/2/2019/03/como-organizar-tarefas.jpg"
                        width="500" alt="">
                    <h2 class="question_title animate__animated animate__fadeInDown">
                        5- Como você faz para que os outros realizem uma tarefa??
                    </h2>
                    <div class="question_options">
                        <input type="radio" name="q5" value="a" id="q5a" required>
                        <button type="button" class="animate__animated animate__fadeInDown button5">
                            <label for="q5a"> a) Cria um passo a passo para a realização da tarefa.</label>
                        </button>

                        <input type="radio" name="q5" value="b" id="q5b" required>
                        <button type="button" class="animate__animated animate__fadeInDown button5">
                            <label for="q5b"> b) Explica a tarefa e apresenta os motivos pelos quais deveriam
                                fazer.</label>
                        </button>

                        <input type="radio" name="q5" value="c" id="q5c" required>
                        <button type="button" class="animate__animated animate__fadeInDown button5">
                            <label for="q5c">c) Dá ordem de forma bem firme e direta.</label>
                        </button>

                        <input type="radio" name="q5" value="d" id="q5d" required>
                        <button type="button" class="animate__animated animate__fadeInDown button5">
                            <label for="q5d"> d) Faz primeiro e chama a seguirem o seu exemplo.</label>
                        </button>
                    </div>
                </div>
                <!-- Fim da questao 5 -->

                <!-- Começo da questao 6 -->
                <div class="question_card">
                    <img class="animate__animated animate__fadeInLeft question_img"
                        src="https://s3.amazonaws.com/ibc-portal/wp-content/uploads/2014/08/11151423/comportamentos-inadequados.jpg"
                        width="500" alt="">
                    <h2 class="question_title animate__animated animate__fadeInDown">
                        6- Um colega seu está fazendo algo errado para prejudicar alguém. Você:
                    </h2>
                    <div class="question_options">
                        <input type="radio" name="q6" value="a" id="q6a" required>
                        <button type="button" class="animate__animated animate__fadeInDown button6">
                            <label for="q6a"> a) Monta um plano para expôr o que o colega está fazendo de
                                errado.</label>
                        </button>

                        <input type="radio" name="q6" value="b" id="q6b" required>
                        <button type="button" class="animate__animated animate__fadeInDown button6">
                            <label for="q6b"> b) Apronta algo para que ele se dê mal.</label>
                        </button>

                        <input type="radio" name="q6" value="c" id="q6c" required>
                        <button type="button" class="animate__animated animate__fadeInDown button6">
                            <label for="q6c"> c) Conta para alguém que é autoridade sobre ele.</label>
                        </button>

                        <input type="radio" name="q6" value="d" id="q6d" required>
                        <button type="button" class="animate__animated animate__fadeInDown button6">
                            <label for="q6d"> d) Confronta ele para tirar satisfações.</label>
                        </button>
                    </div>
                </div>
                <!-- Fim da questao 6 -->

                <!-- Começo da questao 7 -->
                <div class="question_card">
                    <img class="animate__animated animate__fadeInLeft question_img"
                        src="https://image.freepik.com/fotos-gratis/bonito-confiante-e-orgulhoso-modelo-masculino-ruivo-com-cerdas-na-camiseta-azul-apontando-para-si-mesmo-com-o-dedo-indicador-e-sorrindo_176420-27435.jpg"
                        width="500" alt="">
                    <h2 class="question_title animate__animated animate__fadeInDown">
                        7- Qual desses adjetivos as outras pessoas usariam pra te descrever melhor?
                    </h2>
                    <div class="question_options">
                        <input type="radio" name="q7" value="a" id="q7a" required>
                        <button type="button" class="animate__animated animate__fadeInDown button7">
                            <label for="q7a"> a) Forte.</label>
                        </button>

                        <input type="radio" name="q7" value="b" id="q7b" required>
                        <button type="button" class="animate__animated animate__fadeInDown button7">
                            <label for="q7b"> b) Inteligente.</label>
                        </button>

                        <input type="radio" name="q7" value="c" id="q7c" required>
                        <button type="button" class="animate__animated animate__fadeInDown button7">
                            <label for="q7c"> c) Sem medo.</label>
                        </button>

                        <input type="radio" name="q7" value="d" id="q7d" required>
                        <button type="button" class="animate__animated animate__fadeInDown button7">
                            <label for="q7d"> d) Habilidoso/a.</label>
                        </button>
                    </div>
                </div>
                <!-- Fim da questao 7 -->

                <!-- Começo da questao 8 -->
                <div class="question_card">
                    <img class="animate__animated animate__fadeInLeft question_img"
                        src="https://sm.ign.com/t/ign_pt/news/t/the-simpso/the-simpsons-renewed-fox-orders-seasons-33-and-34-of-the-ani_h7r7.h720.jpg"
                        width="500" alt="">
                    <h2 class="question_title animate__animated animate__fadeInDown">
                        8- Com qual personagem dos Simpsons você mais se identifica?
                    </h2>
                    <div class="question_options">
                        <input type="radio" name="q8" value="a" id="q8a" required>
                        <button type="button" class="animate__animated animate__fadeInDown button8">
                            <label for="q8a"> a) Homer.</label>
                        </button>

                        <input type="radio" name="q8" value="b" id="q8b" required>
                        <button type="button" class="animate__animated animate__fadeInDown button8">
                            <label for="q8b"> b) Marge.</label>
                        </button>

                        <input type="radio" name="q8" value="c" id="q8c" required>
                        <button type="button" class="animate__animated animate__fadeInDown button8">
                            <label for="q8c"> c) Bart.</label>
                        </button>

                        <input type="radio" name="q8" value="d" id="q8d" required>
                        <button type="button" class="animate__animated animate__fadeInDown button8">
                            <label for="q8d"> d) Lisa.</label>
                        </button>
                    </div>
                </div>
                <!-- Fim da questao 8 -->

                <button type="submit" class="questions_finish">
                    Ver Resultado
                </button>
            </form>
        </section>
    </main>

    <footer>
        Feito por <span class="footer_author"> Guilherme S de Barros</span>
        <div>
            <a href="https://www.linkedin.com/in/guilhermesb/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://github.com/guilhermeSDB" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://www.facebook.com/guilherme.s.barros.3/" target="_blank"><i class="fab fa-facebook"></i></a>
        </div>

    </footer>

    <!-- Import JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>
</body>
</html>