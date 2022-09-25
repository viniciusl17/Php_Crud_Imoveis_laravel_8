@extends('admin.layouts.principal')

@section('conteudo-principal')
    <h4>{{ $imovel->titulo }}</h4>
    <p></p>
    <br>

    <section class="section">
        <div class="row">
            <div class="col s4">
                <label for="titulo">Cidade</label>
                <div style="display: flex; flex-wrap:wrap; ">
                    <span style="margin-top:10px;margin-right:10px; font-weight:600; ">{{ $imovel->cidade->nome }}</span>
                    </div>
            </div>
            <span class="col s4">
                <label for="titulo">Tipo de imóvel</label>
                <div style="display: flex; flex-wrap:wrap; ">
                    <span style="margin-top:10px;margin-right:10px; font-weight:600; ">{{ $imovel->tipo->nome }}</span>
                    </div>
            </span>
            <span class="col s4">
                <label for="titulo">Finalidade do imóvel</label>
                <div style="display: flex; flex-wrap:wrap; ">
                    <span style="margin-top:10px;margin-right:10px; font-weight:600; ">{{ $imovel->finalidade->nome}}</span>
                    </div>
            </span>
        </div>
        <div class="row">
            <div class="col s3">
                <label for="preco">Preço</label>
                <div style="display: flex; flex-wrap:wrap; ">
                    <span style="margin-top:10px;margin-right:10px; font-weight:600; ">{{ $imovel->preco}}</span>
                    </div>
            </div>
            <div class="col s3">
                <label for="dormitorios">Quantidade de dormitórios</label>
                <div style="display: flex; flex-wrap:wrap; ">
                    <span style="margin-top:10px;margin-right:10px; font-weight:600; ">{{ $imovel->dormitorios }}</span>
                    </div>
            </div>
            <div class="col s3">
                <label for="salas">Quantidade de salas</label>
                <div style="display: flex; flex-wrap:wrap; ">
                    <span style="margin-top:10px;margin-right:10px; font-weight:600; ">{{ $imovel->salas }}</span>
                    </div>
            </div>
            <div class="col s3">
                <label for="garagens">Quantidade de vagas na garagem</label>
                <div style="display: flex; flex-wrap:wrap; ">
                    <span style="margin-top:10px;margin-right:10px; font-weight:600; ">{{ $imovel->garagens }}</span>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <label for="descricao">Descrição</label>
                <div style="display: flex; flex-wrap:wrap; ">
                    <span style="margin-top:10px;margin-right:10px; font-weight:600; ">{{ $imovel->descricao }}</span>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col s5">
                <label for="rua">Rua</label>
                <div style="display: flex; flex-wrap:wrap; ">
                    <span style="margin-top:10px;margin-right:10px; font-weight:600; ">{{ $imovel->endereco->rua }}</span>
                    </div>
            </div>
            <div class="col s2">
                <label for="numero">Número</label>
                <div style="display: flex; flex-wrap:wrap; ">
                    <span style="margin-top:10px;margin-right:10px; font-weight:600; ">{{ $imovel->endereco->numero }}</span>
                    </div>
            </div>
            <div class="col s2">
                <label for="complemento">Complemento</label>
                <div style="display: flex; flex-wrap:wrap; ">
                    <span style="margin-top:10px;margin-right:10px; font-weight:600; ">{{ $imovel->endereco->complemento}}</span>
                    </div>
            </div>
            <div class="col s3">
                <label for="bairro">Bairro</label>
                <div style="display: flex; flex-wrap:wrap; ">
                <span style="margin-top:10px;margin-right:10px; font-weight:600; ">{{ $imovel->endereco->bairro }}</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <label for="proximidade">Pontos de Proximidade</label>
                <div style="display: flex; flex-wrap:wrap; ">
                    @foreach ($imovel->proximidades as $proximidade)
                    <span style="margin-top:15px;margin-right:20px; font-weight:600; ">{{ $proximidade->nome}};</span>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="right-align">
            <a href="{{url()->previous()}}" class="btn-flat waves-effect">Voltar</a>
        </div>

    </section>
@endsection
