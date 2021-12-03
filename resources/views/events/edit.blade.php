@extends('layouts.main')

@section('title', 'Editando: ' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: $event->title</h1>
    <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Adicionar Imagem:</label>
            <input type="file" class="form-control-file" name="image" id="image">
            <img src="/img/events/{{$event->image}}" alt="$event->title" class="img-preview">
        </div> 
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Nome do evento" value="{{$event->title}}">
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Nome da cidade do evento" value="{{$event->city}}">
        </div>
        <div class="form-group">
            <label for="private">O evento é privado?:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1" {{$event->private == 1 ? "selected='selected'" : ""}}>Sim</option>
            </select>  
        </div>
        <div class="form-group">
            <label for="description">Descricao:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que irá acontecer?">{{$event->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="items">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras" id=""> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco" id=""> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cerveja Grátis" id=""> Cerveja Grátis
            </div>
        </div>
        <input type="submit" value="Editar Evento" class="btn btn-primary">
    </form>
</div>

@endsection