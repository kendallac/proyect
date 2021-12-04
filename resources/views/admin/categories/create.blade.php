@extends('adminlte::page')
@section('title', 'Logic code')

@section('content_header')
    <h1>Crear Nueva Categoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.categories.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de la categoria ']) !!}
                @error('name')
                    <span class="text-danger">{{ $message }} </span>
                @enderror

            </div>
            <div class="form-group">
                {!! Form::label('slug', 'slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder', 'readonly' => 'ingrese el nombre de la categoria, ']) !!}
                @error('slug')
                    <span class="text-danger">{{ $message }} </span>
                @enderror
            </div>

            {!! Form::submit('crear categoria', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>


    </div>

@stop

@section('js')

    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection
