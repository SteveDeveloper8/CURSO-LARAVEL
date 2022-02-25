@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Etiqueta</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
<div class="card">
    <div class="card-body">
       {!! Form::open($tag,['routes'=>'[admin.tags.update', $tag], 'method'=>'put']) !!}
            @include('admin.tags.partial.form')
            {!! Form::submit('Actualizar etiqueta', ['class'=>'btn btn-primary']) !!}
       {!! Form::close() !!}
    </div>
</div>
@stop
@section('js')

    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection