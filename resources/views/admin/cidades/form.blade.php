@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">
        <!-- Forma de setar os erros no formulário -->
        {{-- @if ($errors->any())
            <div class="red-text">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="{{$action}}" method="POST">
            @csrf

            @isset($cidade)
                @method('PUT')
            @endisset

            <div class="input-field">
                <input type="text" name="nome" id="nome" value="{{old('nome', $cidade->nome ?? '')}}" />
                <label for="nome">Nome</label>
                <!-- Acrescentado recentemente para validar erro de cada input -->
                @error('nome')
                       <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>

            <div class="right-align">
                <a class="btn-flat waves-effect waves-red" href="{{route('admin.cidades.index')}}">Cancelar</a>
                <button class="btn waves-effect waves-light light-blue darken-4" type="submit">
                    Salvar
                </button>
            </div>
        </form>
    </section>
@endsection
