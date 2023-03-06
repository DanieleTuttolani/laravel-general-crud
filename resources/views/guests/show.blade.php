@extends('layouts.main')





@section('title', 'Dettaglio')
@section('content')
    <div class="d-flex justify-content-center mt-5">
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-title text-center mt-4">
                        <h6> Sig: </h6>
                        <div class="d-flex">

                            <h6>Data di Nascita:</h6>
                            <h6>Sesso</h6>
                            <h6>Età:</h6>
                            <h6>Codice Fiscale:</h6>
                        </div>
                        <div class="d-flex justyfy-content-between">
                            <h6>Tes.San.</h6>
                            <h6>Provenienza</h6>
                        </div>
                        <table class="table">
                         <thead>
                        <tr>
                            <th scope="col">Esame</th>
                            <th scope="col">Esito</th>
                            <th scope="col">U.M.</th>
                            <th scope="col">Intervalli di Riferimento</th>
                         </tr>
                        </thead>
                            <tbody>
                            <tr>
                            <th scope="row">EMOCROMO:</th>
                            <td>Piastrine:</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                             <tr>
                            <th scope="row">2</th>
                             <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                             </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                             <td>@twitter</td>
                             </tr>
                            </tbody>
                            </table>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">EMOCROMO: </h5>
                        <p class="card-text">Piastrine: </p>
                        <p class="card-text">Globuli Bianchi: </p>
                        <p class="card-text">Globuli Rossi:ate </p>
                        <p class="card-text">Emoglobina:ate</p>
                        <p class="card-text">Emoglobina (nuova unità di Misura):</p>
                        <p class="card-text">Ematocito: </p>
                        <p class="card-text">Volume Cellule Medio: te </p>
                        <p class="card-text">Contenuto Cellul.medio Hb: te </p>
                        <p class="card-text">Ampiezza Media Disturb G.R.:ate </p>
                        <p class="card-text">Volume Medio Piastrinico: te </p>
                        <p class="card-text">Emazio Ipocromico:ate </p>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="wrapper bg-light rounded-3 p-5">

                   

                    <div class="info-btn d-flex justify-content-end mt-5">
                        <a href="{{ route('guests.index') }}" class="btn btn-primary"><i
                                class="fa-regular fa-hand-point-left"></i></a>
                        <a href="{{ route('guests.edit', $guest->id) }}" class="btn btn-success mx-2"><i
                                class="fa-solid fa-pen-to-square"></i></a>

                        
                    </div>



                </div>
            </div>

        </div>
    </div>
@endsection
