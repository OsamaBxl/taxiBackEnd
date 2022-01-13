<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment confirmation</title>
    <style>
        .content{
            
        }
    </style>
</head>
<body>
    <div class="content">
        <h2 class="heading"> Payment confirmation </h2>
        <p class="txt">
            {{ $message }} <br> <br>

            You will be redirect to Airport Cab website in a few seonds
            <a href="https://airportcab.be">Back</a>
        
        </p>
        @if(isset($link_refund))
            <p>if you would like to cancel, you can click <a href="{{ $link_refund }}">here</a></p>
            notice: this link will be alive 5 minutes ....
        @endif
    </div>
</body>
</html>