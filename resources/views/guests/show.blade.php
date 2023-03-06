@extends('layouts.main')
@section('cdns')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'
        integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=='
        crossorigin='anonymous' />
@endsection





@section('title', 'Dettaglio')
@section('content')
    <div class="d-flex justify-content-center mt-5">
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-title text-center mt-4">
                        <h6><span class="d-block"> NOME:</span> {{ $egg->name }}</h6>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">EMOCROMO: {{ $egg->color }}</h5>
                        <p class="card-text">Piastrine: {{ $egg->contains }}</p>
                        <p class="card-text">Globuli Bianchi: {{ $egg->size }}</p>
                        <p class="card-text">Globuli Rossi: {{ $egg->chocolate }}</p>
                        <p class="card-text">Emoglobina: {{ $egg->chocolate }}</p>
                        <p class="card-text">Emoglobina (nuova unità di Misura): {{ $egg->chocolate }}</p>
                        <p class="card-text">Ematocito: {{ $egg->chocolate }}</p>
                        <p class="card-text">Volume Cellule Medio: {{ $egg->chocolate }}</p>
                        <p class="card-text">Contenuto Cellul.medio Hb: {{ $egg->chocolate }}</p>
                        <p class="card-text">Ampiezza Media Disturb G.R.: {{ $egg->chocolate }}</p>
                        <p class="card-text">Volume Medio Piastrinico: {{ $egg->chocolate }}</p>
                        <p class="card-text">Emazio Ipocromico: {{ $egg->chocolate }}</p>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="wrapper bg-light rounded-3 p-5">

                   

                    <div class="info-btn d-flex justify-content-end mt-5">
                        <a href="{{ route('eggs.index') }}" class="btn btn-primary"><i
                                class="fa-regular fa-hand-point-left"></i></a>
                        <a href="{{ route('eggs.edit', $egg->id) }}" class="btn btn-success mx-2"><i
                                class="fa-solid fa-pen-to-square"></i></a>

                        
                    </div>



                </div>
            </div>

        </div>
    </div>
@endsection
