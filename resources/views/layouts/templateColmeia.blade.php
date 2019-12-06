<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>    
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <main id="areaDoAluno" class="d-flex ">
        <section class="menuNav">
            <img src="{{ url('img/menuHamburguer.svg')}}" alt="Menu" class="menu" onclick="menuNav()">
            <div class="menuEsquerdo">
                <div class="botoes">
                    <img src="{{ url('img\fechar.svg')}}" alt="Fechar" class="menu" onclick="menuNav()">
                    <div class="navegacao">
                        <a href="/ColmeiadoCodigo/"><img class="btnLateral" src="/img/inicio.svg" alt="Home"></a>
                        <a href="#"><img class="btnLateral ativo" src="/img/areaDoAluno.svg" alt="Inicio"></a>
                        <a href="#"><img class="btnLateral" src="/img/conquistas.svg" alt="Conquistas"></a>
                        <a href="#"><img class="btnLateral" src="/img/chat.svg" alt="Chat"></a>
                    </div>
                </div>
            </div>
        </section>
        
        <main class="container">
            <!-- Conteúdo do site -->
            <div class="row">
               <section class="col-md-1">
                    <!-- Menu lateral esquerdo aqui vai o include -->
                    <section class="menuResp">
                        <a href="/ColmeiadoCodigo/"><img class="btnResp" src="public\img\inicio.svg" alt="Home"></a>
                        <a href="#"><img class="btnResp" src="/public\img\chat.svg" alt="Chat"></a>
                        <a href="#"><img class="btnResp ativoResp" src="public\img\areaDoAluno.svg" alt="Inicio"></a>
                        <a href="#"><img class="btnResp" src="public\img\conquistas.svg" alt="Conquistas"></a>
                        <img src="public/img/profileImg.svg" class="profileResp" alt="Imagem de Perfil" onclick="menuAluno()">
                    </section>
               </section>
               <section class="col-md-10">
                <!-- Conteúdo aqui vai o include-->
                @yield ('conteudo')
               </section>
               <section class="col-md-1">
                    <!-- Menu lateral direito aqui vai o include-->
                    <section class="menuAluno">
                        <img src="/img/profileImg.svg" class="profile" alt="Imagem de Perfil" onclick="menuAluno()">
                        <div class="menuDireito">
                            <div class="botoes">
                                <img src="/img/profileImg.svg" class="profile" alt="Imagem de Perfil" onclick="menuAluno()">
                                <div class="navegacao">
                                    <a href="#" ><img class="btnAluno" src="/img/notificacaoAtivo.svg" alt="Notificação"></a>
                                    <a href="#" ><img class="btnAluno" src="/img/chatNotificacao.svg" alt="Chat"></a>
                                    <a href="#" ><img class="btnAluno" src="/img/configuracoes.svg" alt="Configurações"></a>
                                    <a href="#" ><img class="btnAluno" src="/img/ajuda.svg" alt="Ajuda"></a>
                                </div>
                            </div>
                        </div>
                    </section>             
                </section>

            </div>
        </main>

        
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