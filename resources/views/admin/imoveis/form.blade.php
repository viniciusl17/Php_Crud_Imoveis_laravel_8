@extends('admin.layouts.principal')

@section('conteudo-principal')
    <section class="section">
        <form action="{{ $action }}" method="POST">
            @csrf

            @isset($imovel)
                @method('PUT')
            @endisset

            {{-- Título --}}
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" name="titulo" id="titulo" value="{{ old('titulo', $imovel->titulo ?? '') }}" />
                    <label for="titulo">Título</label>
                    @error('titulo')
                        <span class="red-text text-accent-3"><small>{{ $message }}</small></span>
                    @enderror
                </div>
            </div>

            {{-- Cidade --}}
            <div class="row">
                <div class="input-field col s6">
                    <select name="cidade_id" id="cidade_id">
                        <option value="" disabled selected>Selecione uma Cidade</option>
                        @foreach ($cidades as $cidade)
                            <option value="{{ $cidade->id }}" {{ old('cidade_id', $imovel->cidade_id ?? '') == $cidade->id ? 'selected' : '' }}>
                                {{ $cidade->nome }}</option>
                        @endforeach
                    </select>
                    <label for="cidade_id">Cidade</label>
                    @error('cidade_id')
                        <span class="red-text text-accent-3"><small>{{ $message }}</small></span>
                    @enderror
                </div>

                {{-- TIPO --}}
                <div class="input-field col s6">
                    <select name="tipo_id" id="tipo_id">
                        <option value="" disabled selected>Selecione uma tipo de imóvel</option>

                        @foreach ($tipos as $tipo)
                            <option value="{{ $tipo->id }}" {{ old('tipo_id', $imovel->tipo_id ?? '') == $tipo->id ? 'selected' : '' }}>
                                {{ $tipo->nome }}</option>
                        @endforeach
                    </select>
                    <label for="tipo_id">Tipo de Imóvel</label>
                    @error('tipo_id')
                        <span class="red-text text-accent-3"><small>{{ $message }}</small></span>
                    @enderror
                </div>
            </div>




            {{-- FINALIDADE --}}
            <div class="row">
                @foreach ($finalidades as $finalidade)
                    <span class="col s2">
                        <label style="margin-right: 30px">
                            <input type="radio" name="finalidade_id" id="finalisadade_id" class="with-gap"
                                value="{{ $finalidade->id }}"
                                {{ old('finalidade_id', $imovel->finalidade_id ?? '') == $finalidade->id ? 'checked' : '' }} />
                            <span>{{ $finalidade->nome }}</span>
                        </label>
                    </span>
                @endforeach
                @error('finalidade_id')
                    <span class="red-text text-accent-3"><small>{{ $message }}</small></span>
                @enderror
            </div>

            {{-- preço, dormitórios, sala --}}
            <div class="row">
                <div class="input-field col s4">
                    <input type="number" name="preco" id="preco" value="{{ old('preco', $imovel->preco ?? '') }}" />
                    <label for="preco">Preço</label>
                    @error('preco')
                        <span class="red-text text-accent-3"><small>{{ $message }}</small></span>
                    @enderror
                </div>
                <div class="input-field col s4">
                    <input type="number" name="dormitorios" id="dormitorios" value="{{ old('dormitorios', $imovel->dormitorios ?? '') }}" />
                    <label for="dormitorios">Quantidade de Dormitórios</label>
                    @error('dormitorios')
                        <span class="red-text text-accent-3"><small>{{ $message }}</small></span>
                    @enderror
                </div>
                <div class="input-field col s4">
                    <input type="number" name="salas" id="salas" value="{{ old('salas', $imovel->salas ?? '') }}" />
                    <label for="salas">Quantidade de Salas</label>
                    @error('salas')
                        <span class="red-text text-accent-3"><small>{{ $message }}</small></span>
                    @enderror
                </div>
            </div>

            {{-- Terreno, banheiro e garagem --}}
            <div class="row">
                <div class="input-field col s4">
                    <input type="number" name="terreno" id="terreno" value="{{ old('terreno', $imovel->terreno ?? '') }}" />
                    <label for="terreno">Terreno em m²</label>
                    @error('terreno')
                        <span class="red-text text-accent-3"><small>{{ $message }}</small></span>
                    @enderror
                </div>
                <div class="input-field col s4">
                    <input type="number" name="banheiros" id="banheiros" value="{{ old('banheiros', $imovel->banheiros ?? '') }}" />
                    <label for="banheiros">Quantidade de Banheiros</label>
                    @error('banheiros')
                        <span class="red-text text-accent-3"><small>{{ $message }}</small></span>
                    @enderror
                </div>
                <div class="input-field col s4">
                    <input type="number" name="garagens" id="garagens" value="{{ old('garagens', $imovel->garagens ?? '') }}" />
                    <label for="garagens">Vagas na Garagens</label>
                    @error('garagens')
                        <span class="red-text text-accent-3"><small>{{ $message }}</small></span>
                    @enderror
                </div>
            </div>

            {{-- Descrição --}}
            <div class="row">
                <div class="input-field col s12">
                    <textarea name="descricao" id="descricao" class="materialize-textarea">{{ old('descricao', $imovel->descricao ?? '') }}</textarea>
                    <label for="descricao">Descrição</label>
                    @error('descricao')
                        <span class="red-text text-accent-3"><small>{{ $message }}</small></span>
                    @enderror
                </div>
            </div>

            {{-- Endereço --}}
            <div class="row">
                <div class="input-field col s5">
                    <input type="text" name="rua" id="rua" value="{{ old('rua', $imovel->endereco->rua ?? '') }}" />
                    <label for="rua">Rua</label>
                    @error('rua')
                        <span class="red-text text-accent-3"><small>{{ $message }}</small></span>
                    @enderror
                </div>
                <div class="input-field col s2">
                    <input type="number" name="numero" id="numero" value="{{ old('numero', $imovel->endereco->numero ?? '') }}" />
                    <label for="numero">Numero</label>
                    @error('numero')
                        <span class="red-text text-accent-3"><small>{{ $message }}</small></span>
                    @enderror
                </div>
                <div class="input-field col s2">
                    <input type="text" name="complemento" id="complemento" value="{{ old('complemento', $imovel->endereco->complemento ?? '') }}" />
                    <label for="complemento">Complemento</label>
                    @error('complemento')
                        <span class="red-text text-accent-3"><small>{{ $message }}</small></span>
                    @enderror
                </div>
                <div class="input-field col s3">
                    <input type="text" name="bairro" id="bairro" value="{{ old('bairro', $imovel->endereco->bairro ?? '') }}" />
                    <label for="bairro">Bairro</label>
                    @error('bairro')
                        <span class="red-text text-accent-3"><small>{{ $message }}</small></span>
                    @enderror
                </div>
            </div>
            {{-- PROXIMIDADES --}}
            <div class="row">
                <div class="input-field col s12">
                    <select name="proximidades[]" id="proximidades" multiple>
                        <option value="" disabled>Selecione os Pontos de Iteresse nas Proximidades</option>
                        @foreach ($proximidades as $proximidade)
                            <option value="{{ $proximidade->id }}"
                                @if (old('proximidades')) {{ in_array($proximidade->id, old('proximidades')) ? 'selected' : '' }}
                                @else
                                @isset($imovel)
                                    {{$imovel->proximidades->contains($proximidade->id) ? 'selected' : ''}}
                                @endisset
                                @endif
                                >{{ $proximidade->nome }}</option>
                        @endforeach
                    </select>
                    <label for="proximidades">Pontos de interesse nas Proximidades</label>
                    @error('proximidades')
                        <span class="red-text text-accent-3"><small>{{ $message }}</small></span>
                    @enderror
                </div>
            </div>

            <div class="right-align">
                <a class="btn-flat waves-effect waves-red" href="{{ route('admin.imoveis.index') }}">Cancelar</a>
                <button class="btn waves-effect waves-light light-blue darken-4" type="submit">
                    Salvar
                </button>
            </div>


        </form>
    </section>
@endsection
