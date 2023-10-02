<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/edit-dashboard.css"/>
    

</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="Cms" style="width: 1440px; height: 1128px; position: relative; background: white">
  <div class="LgoDeAlteraEs" style="left: 379px; top: 35px; position: absolute; color: black; font-size: 28px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">Lgo de alterações</div>
  @foreach($logs as $log)
    
    <button type="button" data-bs-toggle="modal" data-bs-target="#modal{{$log->id}}">
        Detalhes
    </button>

   
    <div class="modal fade" id="modal{{$log->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detalhes do Log</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Quem alterou: {{$log->user->name}}</p>
                    <p>Data da alteração: {{$log->action_date}}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
    <div class="Documento">
    <div class="JoOCarlos">João Carlos</div>
    <div class="UploadDeDocumentoRealizado">Upload de documento realizado</div>
    <div class="AlteraO">Alteração</div>
    <div class="QuemAlterou">Quem alterou</div>
    <div class="Detalhes">Detalhes</div>
</div>

<div id="drop-detail">
    <div class="MaisDetalhes">Mais detalhes</div>
    <div class="MaisDetalhes">Mais detalhes</div>
    <div class="MaisDetalhes">Mais detalhes</div>
    <div class="Line1"></div>
    <div class="Line3"></div>
    <div class="Line2"></div>
</div>
  <div class="Sidebar">
    <div class="BackgroundSidebar"></div>
    <div class="BackgroundSidebar"></div>
    @if(Auth::check())
    <div class="OlJoO">Olá, {{ Auth::user()->name }}</div>
@else
    <div class="OlJoO">Olá, Visitante</div>
@endif
    <div class="FazerLogout">Fazer logout</div>
    <div class="Menu">
      <div class="Home">Home</div>
      <div class="Ellipse1"></div>
    </div>
    <div class="Menu">
      <div class="LogDeAlteraEs">Log de alterações</div>
      <div class="Ellipse2"></div>
    </div>
</div>
<script type="text/javascript" src="script.js">
</body>

</html>