<section class="menuAluno">
    <img src="img/profileImg.svg" class="profile" alt="Imagem de Perfil" onclick="menuAluno()">
    <div class="menuDireito">
        <div class="botoes">
            <img src="img/profileImg.svg" class="profile" alt="Imagem de Perfil" onclick="menuAluno()">
            <div class="navegacao">
                <a href="/notificacao" ><img class="btnAluno" src="img/notificacaoAtivo.svg" alt="Notificação"></a>
                <a href="/chat" ><img class="btnAluno" src="img/chatNotificacao.svg" alt="Chat"></a>
                <a href="/config" ><img class="btnAluno" src="img/configuracoes.svg" alt="Configurações"></a>
                <a href="/ajuda" ><img class="btnAluno" src="img/ajuda.svg" alt="Ajuda"></a>
                <form method="post" action="{{ route('logout') }}" > @csrf <button type="submit" class="btn text-warning">logout</button></form>
            </div>
        </div>
    </div>
</section>