<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Área do Aluno - Colmeia do Código</title>    
    <link rel="shortcut icon" href="views/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="views/css/styles.css">
</head>
<body>
    <main id="areaDoAluno" class="d-flex">
        <section class="menuNav">
            <img src="views\img\menuHamburguer.svg" alt="Menu" class="menu" onclick="menuNav()">
            <div class="menuEsquerdo">
                <div class="botoes">
                    <img src="views\img\fechar.svg" alt="Fechar" class="menu" onclick="menuNav()">
                    <div class="navegacao">
                        <a href="/ColmeiadoCodigo/"><img class="btnLateral" src="views\img\inicio.svg" alt="Home"></a>
                        <a href="#"><img class="btnLateral ativo" src="views\img\areaDoAluno.svg" alt="Inicio"></a>
                        <a href="#"><img class="btnLateral" src="views\img\conquistas.svg" alt="Conquistas"></a>
                        <a href="#"><img class="btnLateral" src="views\img\chat.svg" alt="Chat"></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="conteudo flex-grow-1 d-none">
            <h1 class="titulo">Colmeia</h1>
            <div class="cursos">
                <a href="#" class="btnCurso html">HTML5</a>
                <a href="#" class="btnCurso css"><img src="views\img\cadeado.svg" alt="Cadeado"> CSS</a>
                <a href="#" class="btnCurso js"><img src="views\img\cadeado.svg" alt="Cadeado"> JAVASCRIPT</a>
            </div>
            <div class="progresso">
                <p>Meta Diária</p>
                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="progressoPorc">50%</p>
            </div>
        </section>

        <section>
        
            <h1 class="titulo">Salão de Conquistas</h1>
            <h3 id="subtituloConquistas">O trabalho duro traz doces vitórias, aprecie as suas!</h3>

            <div class="d-flex justify-content-around flex-wrap" id="colmeiaBaixo">
                <img class="imgCadeado" src="views/img/seloConquista.svg" alt="Conquista desbloqueada!">
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">                  
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">                    
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">
                <img class="imgCadeado" src="views/img/conquistaBloqueada.svg" alt="Conquista bloqueada!">
            </div>
        
        </section>



        <section class="menuAluno">
            <img src="views/img/profileImg.svg" class="profile" alt="Imagem de Perfil" onclick="menuAluno()">
            <div class="menuDireito">
                <div class="botoes">
                    <img src="views/img/profileImg.svg" class="profile" alt="Imagem de Perfil" onclick="menuAluno()">
                    <div class="navegacao">
                        <a href="#" ><img class="btnAluno" src="views\img\notificacaoAtivo.svg" alt="Notificação"></a>
                        <a href="#" ><img class="btnAluno" src="views\img\chatNotificacao.svg" alt="Chat"></a>
                        <a href="#" ><img class="btnAluno" src="views\img\configuracoes.svg" alt="Configurações"></a>
                        <a href="#" ><img class="btnAluno" src="views\img\ajuda.svg" alt="Ajuda"></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="menuResp">
            <a href="/ColmeiadoCodigo/"><img class="btnResp" src="views\img\inicio.svg" alt="Home"></a>
            <a href="#"><img class="btnResp" src="views\img\chat.svg" alt="Chat"></a>
            <a href="#"><img class="btnResp ativoResp" src="views\img\areaDoAluno.svg" alt="Inicio"></a>
            <a href="#"><img class="btnResp" src="views\img\conquistas.svg" alt="Conquistas"></a>
            <img src="views/img/profileImg.svg" class="profileResp" alt="Imagem de Perfil" onclick="menuAluno()">
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function menuNav() {
            $(".menuEsquerdo").toggle();
        }
        function menuAluno() {
            $(".menuDireito").toggle();
        }
    </script>

</body>
</html>