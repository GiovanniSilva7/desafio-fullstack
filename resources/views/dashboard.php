<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/dashboard.css"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

</head>
<body>
<div class="Cms">
  <div class="Home">Home</div>
  <div class="Header" style="width: 1029px; height: 233px; left: 381px; top: 106px; position: absolute">
    <div class="Header">Header</div>
    <div class="ImagemDeFundo">
      <div class="Background" style="width: 502px; height: 155px; left: 0px; top: 28px; position: absolute; background: white; border: 2px #D9D9D9 solid"></div>
      <div class="ArrasteESolteAImagemOuCliqueAqui">
        <div id="drop-area">  
        Arraste e solte a imagem ou </span><span>clique aqui</span>
      </div>
      </div>
      <div class="ImagemDeFundo">Imagem de fundo</div>
    </div>
    <div class="CorDoTexto" style="width: 502px; height: 78px; left: 0px; top: 155px; position: absolute">
      <input class="TerraplanagemSustentVel"></input>
      <div class="SubtTulo" style="left: 0px; top: 0px; position: absolute; color: #6A6A6A; font-size: 14px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">Subtítulo</div>
    </div>
    <div class="CorDoTexto" style="width: 502px; height: 78px; left: 0px; top: 50px; position: absolute">
      <input class="ODesafioDaVez"></input>
      <div class="TTulo">Título</div>
    </div>
  </div>
  <div class="Sobre">
    <div class="SobreODesafio">Sobre o desafio</div>
    <div class="CorDoTexto" style="width: 1029px; height: 261px; left: 0px; top: 50px; position: absolute">
      <textarea class="Background" style="width: 1029px; height: 233px; left: 0px; top: 28px; position: absolute; background: white; border: 2px #D9D9D9 solid"></textarea>
      <div class="ConteDo" style="left: 0px; top: 0px; position: absolute; color: #6A6A6A; font-size: 14px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">Conteúdo</div>
    </div>
  </div>
  <div class="BotO" style="width: 148px; height: 50px; left: 381px; top: 1048px; position: absolute">
  <div class="Rectangle12" style="width: 148px; height: 50px; left: 0px; top: 0px; position: absolute; background: #8B8B8B"></div>
    <div class="Atualizar" style="left: 46px; top: 16px; position: absolute; text-align: center; color: white; font-size: 14px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Atualizar</div>
  </div>
  <div class="DocumentosDeSuporte" style="width: 561px; height: 260px; left: 381px; top: 712px; position: absolute">
    <div class="DocumentosDeSuporte" style="left: 0px; top: 0px; position: absolute; color: #818181; font-size: 24px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">Documentos de suporte</div>
    <div class="BotO" style="width: 234px; height: 50px; left: 0px; top: 49px; position: absolute">
      <div class="Rectangle12" style="width: 234px; height: 50px; left: 0px; top: 0px; position: absolute; border: 1px #8B8B8B solid"></div>
        <form id="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
          <div id="drop-doc">  
            <div class="UploadDeNovoDocumento">Upload de novo documento</div>
          </div>
        </form>
<div id="tabelaDiv" class="Tabela" style="width: 561px; height: 132px; left: 0px; top: 128px; position: absolute">
    <div class="Tabela" style="width: 561px; height: 132px; left: 0px; top: 128px; position: absolute">
    @if($documento)
    <div class="Rectangle13" style="width: 561px; height: 132px; left: 0px; top: 0px; position: absolute; border: 1px #D9D9D9 solid"></div>
    <div class="Documento" style="width: 480px; height: 18px; left: 19px; top: 58px; position: absolute">
        <div class="AEs" style="width: 115px; height: 18px; left: 365px; top: 0px; position: absolute">
            <div class="Baixar" style="left: 0px; top: 0px; position: absolute; color: #8B8B8B; font-size: 14px; font-family: DM Sans; font-weight: 500; text-decoration: underline; word-wrap: break-word">Baixar</div>
            <div class="Excluir" style="left: 71px; top: 0px; position: absolute; color: #8B8B8B; font-size: 14px; font-family: DM Sans; font-weight: 500; text-decoration: underline; word-wrap: break-word">Excluir</div>
        </div>
        <div class="TTuloDoDocumento" style="left: 0px; top: 0px; position: absolute; color: black; font-size: 14px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">{{ $documento->titulo }}</div>
    </div>
@endif
      <@if($documento)
    <div class="Rectangle13" style="width: 561px; height: 132px; left: 0px; top: 0px; position: absolute; border: 1px #D9D9D9 solid"></div>
    <div class="Documento" style="width: 480px; height: 18px; left: 19px; top: 58px; position: absolute">
        <div class="AEs" style="width: 115px; height: 18px; left: 365px; top: 0px; position: absolute">
            <div class="Baixar" style="left: 0px; top: 0px; position: absolute; color: #8B8B8B; font-size: 14px; font-family: DM Sans; font-weight: 500; text-decoration: underline; word-wrap: break-word">Baixar</div>
            <div class="Excluir" style="left: 71px; top: 0px; position: absolute; color: #8B8B8B; font-size: 14px; font-family: DM Sans; font-weight: 500; text-decoration: underline; word-wrap: break-word">Excluir</div>
        </div>
        <div class="TTuloDoDocumento" style="left: 0px; top: 0px; position: absolute; color: black; font-size: 14px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">{{ $documento->titulo }}</div>
    </div>
@endif
      </div>
      @if($documento)
    <div class="Rectangle13" style="width: 561px; height: 132px; left: 0px; top: 0px; position: absolute; border: 1px #D9D9D9 solid"></div>
    <div class="Documento" style="width: 480px; height: 18px; left: 19px; top: 58px; position: absolute">
        <div class="AEs" style="width: 115px; height: 18px; left: 365px; top: 0px; position: absolute">
            <div class="Baixar" style="left: 0px; top: 0px; position: absolute; color: #8B8B8B; font-size: 14px; font-family: DM Sans; font-weight: 500; text-decoration: underline; word-wrap: break-word">Baixar</div>
            <div class="Excluir" style="left: 71px; top: 0px; position: absolute; color: #8B8B8B; font-size: 14px; font-family: DM Sans; font-weight: 500; text-decoration: underline; word-wrap: break-word">Excluir</div>
        </div>
        <div class="TTuloDoDocumento" style="left: 0px; top: 0px; position: absolute; color: black; font-size: 14px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">{{ $documento->titulo }}</div>
    </div>
    @endif
      <div class="Line1" style="width: 561px; height: 0px; left: 0px; top: 44px; position: absolute; border: 1px #D9D9D9 solid"></div>
      <div class="Line2" style="width: 561px; height: 0px; left: 0px; top: 91px; position: absolute; border: 1px #D9D9D9 solid"></div>
    </div>
  </div>
  </div>
  <div class="Sidebar" style="width: 356px; height: 1128px; left: 0px; top: 0px; position: absolute">
    <div class="BackgroundSidebar" style="width: 356px; height: 1128px; left: 0px; top: 0px; position: absolute; background: #D9D9D9"></div>
    <div class="BackgroundSidebar" style="width: 356px; height: 77px; left: 0px; top: 234px; position: absolute; background: #C9C9C9"></div>
        @if(Auth::check())
        <div class="OlJoO">Olá, {{ Auth::user()->name }}</div>
          @else
        <div class="OlJoO">Olá, Visitante</div>
          @endif
    <div id="logout" href="loginout.php">
    <div class="FazerLogout">Fazer logout</div>
    </div>
    <div class="Menu">
      <div class="Home">Home</div>
      <div class="Ellipse1"></div>
    </div>
    <div class="Menu">
    <a href="{{ route('edit-dashboard') }}">
    <div class="LogDeAlteraEs">Log de alterações</div>
    </a>
      <div class="Ellipse2"></div>
    </div>
  </div>
</div>
<script type="text/javascript" src="script.js">
</body>

</html>