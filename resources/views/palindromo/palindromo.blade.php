@extends('layouts.default')
@section('titulo_pagina','Palabra | palindromo')
@section('titulo','Palindromo')
@section('subtitulo','Palabra')
@section('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Sección</h3>
            </div>
            <div class="box-body">

            <div class="form-group">
            
            <label>Introduzca la palabra</label>
            <input class="form-control" type="text" id="palabra">
            <br>
            <button class="btn btn-primary" id="confirmar">Evaluar</button>

            </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')


<script>
</script>

@endsection