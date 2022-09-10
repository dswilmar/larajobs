@extends('layouts.template')
@section('title', 'Home')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">Olá recrutador!</h2>
            @component('components.alert')
                Você recebeu 2 novas candidaturas! <a href="">Clique aqui</a> para ver mais.
            @endcomponent
        </div>
    </div>
@endsection
