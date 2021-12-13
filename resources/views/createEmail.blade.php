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
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <h1>Booking Request Email</h1>
        <h4>New Booking Request</h4>
        <p> Booking Informations :</p>
       <p><b> Full Name</b> : {{$request->fullName}}</p>
       <p> Email : {{$request->email}}</p>
       <p> Phone Number : {{$request->phone}}</p>
       <p> Pick up Location : {{$request->pickUp}}</p>
       @if ($request->pickUp=="autre")
       <p> other Pick up Location : {{$request->otherAddressPick}}</p>   
       @endif
       <p> Drop off Location : {{$request->dropOff}}</p>
       @if ($request->dropOff=="autre")
       <p> other Drop off Location : {{$request->otherAddressDrop}}</p>   
       @endif
       <p> Number Of Suitcases : {{$request->suitecaseNum}}</p>
       <p> Number Of Persons : {{$request->personsNum}}</p>
       <p> Taxi Type : {{$request->choiceTaxi}}</p>
       <p> Payment Type : {{$request->payment}}</p>
        <p> Estimation : {{$request->estimation}}</p>
       <p> additional Info (Optional) : {{$request->additionalInfo}}</p>,
       

    </body>
</html>