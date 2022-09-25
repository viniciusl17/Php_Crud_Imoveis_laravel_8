@extends('admin.layouts.principal')

@section('conteudo-principal')
    <section class="section">
        <table class="highlight">
            <thead>
                <tr>
                    <th>Cidade</th>
                    <th class="right-align">Opções</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cidades as $cidade)
                    <tr>
                        <td>{{ $cidade->nome }}</td>
                        <!-- Botões -->
                        <td class="right-align">
                            <a href="{{route('admin.cidades.edit', $cidade->id)}}" class="btn-floating  waves-effect waves-light light-blue darken-4">
                                <i class="large material-icons">edit</i>
                            </a>

                            <form action="{{ route('admin.cidades.destroy', $cidade->id) }}" method="POST"
                                style="display: inline">
                                @csrf
                                @method('DELETE')

                                <button style="border: 0; background:transparent; " type="submit"
                                    class="btn-floating waves-effect waves-light red accent-3">
                                    <i class="large material-icons">delete_forever</i>
                                </button>
                            </form>
                        </td>
                        <!-- Fim Botões -->
                    </tr>
                @empty
                    <tr>
                        <td colspan="2"> Não Existem Cidades Cadastradas</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{ route('admin.cidades.create') }}">
                <i class="large material-icons">playlist_add</i>
            </a>
        </div>
    </section>
@endsection
