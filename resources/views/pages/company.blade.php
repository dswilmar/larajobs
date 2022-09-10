@extends('layouts.template')
@section('title', 'Empresa')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Empresa</h2>
            <p>Preencha os dados da empresa para anunciar suas vagas</p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('company/save') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Nome da empresa:</label>
                    <input type="text" name="name" value="{{ $company->name }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Descrição:</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control">{{ $company->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="website">Site:</label>
                    <input type="text" name="website" value="{{ $company->website }}" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-info">Salvar</button>
                </div>
            </form>
        </div>
    </div>
@endsection