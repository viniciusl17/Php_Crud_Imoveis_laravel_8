@extends('admin.layouts.principal')

@section('conteudo-principal')
    <section class="section">


        <table class="highlight">
            <thead>
                <tr>
                    <th>Cidade</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                    <th>Título</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($imoveis as $imovel)
                    <tr>
                        <td>{{$imovel->cidade->nome}}</td> <!-- Nome da variáveo + nome Relacionamento + o que quer que apareça -->
                        <td>{{$imovel->endereco->rua}}</td>
                        <td>{{$imovel->endereco->bairro}}</td>
                        <td>{{$imovel->titulo}}</td>
                        <!-- Botões -->
                        <td class="right-align">
                            {{--Ver--}}
                            <a href="{{route('admin.imoveis.show', $imovel->id)}}" title="ver" class="btn-floating  waves-effect waves-light grey darken-3">
                                <i class="large material-icons">remove_red_eye</i>
                            </a>

                            {{--Editar--}}
                            <a href="{{route('admin.imoveis.edit', $imovel->id)}}" title="editar" class="btn-floating  waves-effect waves-light light-blue darken-4">
                                <i class="large material-icons">edit</i>
                            </a>

                            {{--Deletar--}}
                            <form action="{{route('admin.imoveis.destroy', $imovel->id)}}" method="POST"
                                style="display: inline">
                                @csrf
                                @method('DELETE')

                                <button style="border: 0; background:transparent; " type="submit" title="remover"
                                    class="btn-floating waves-effect waves-light red accent-3">
                                    <i class="large material-icons">delete_forever</i>
                                </button>
                            </form>
                        </td>
                        <!-- Fim Botões -->
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Não existem imóveis cadastrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>




        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{ route('admin.imoveis.create') }}">
                <i class="large material-icons">playlist_add</i>
            </a>
        </div>
    </section>
@endsection
