@extends('layouts.template')
@section('title', 'Minhas vagas')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header"><i class="icon-grid"></i> Minhas vagas</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <th>#</th>
                    <th>Título</th>
                    <th>Publicada em</th>
                    <th>Visualizações</th>
                    <th>Candidaturas</th>
                    <th>Opções</th>
                </thead>
                <tbody>
                    @forelse ($jobs as $job)
                        <tr>
                            <td colspan="6">{{ $job['title'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">Nenhuma vaga cadastrada ainda. <a href="jobs/new">Clique aqui</a> para
                                cadastrar
                                sua primeira vaga.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
