<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create Booking</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #3c4042;
                font-family: 'Nunito', sans-serif;
                font-weight: 150;
                height: 100vh;
                margin: 0;
            }

            .heading {
                padding: 40px 0;
                width: 100%;
                min-width: 400px;
                background-color: #8da1fa00;
                text-align: center
            }

        </style>
    </head>
    <body>
        <div class="heading">
            <h1 style="padding: 30px 0;margin:0 ;width: 100%; background-color: blueviolet; color: white;
                text-align: center">Booking Request Email</h1>
        </div>
          <hr>
        <h4> Booking Informations :</h4>
        <p><b> Nom</b> : {{$request->fullName}}</p>
        <p> <b>Email</b> : {{$request->email}}</p>
        <p> <b>Numéro de tél </b>: {{$request->phone}}</p>
        <p> <b>Départ</b> : {{$request->from}}</p>
        <p><b> Déstination </b>: {{$request->to}}</p>
        <p> <b>Estimation</b> : {{$request->estimation}} Euros</p>
        <p><b> Date </b>: {{$request->time}}</p>
        <p> <b>Nombre de Valise</b> : {{$request->suitecaseNum}}</p>
        <p> <b>Nombre de personnes</b> : {{$request->personsNum}}</p>
        <p> <b>Type de taxi</b> : {{$request->choiceTaxi}}</p>
        <p> <b>Sèige Enfant</b> : {{$request->seigeEnfant}}</p>
        <p> <b>Numéro de vol</b> : {{$request->vol}}</p>
        <p> <b>Payment Type</b>  : {{$request->payment}}</p>
        <p> <b>Informations complémentaires</b> : {{$request->additionalInfo}}</p>,       
    </body>
</html>