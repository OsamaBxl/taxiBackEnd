<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <section class="contact m-auto my-5" style="width: 450px">
        <div class="row">
            <div class="card">
                <div class="card-header"><b>Contact Form</b></div>
                <div class="card-body">
                    @if(Session::has('message_sent')) 
                        <div class="alert alert-success">
                            {{ Session::get('message_sent') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data">
                        @csrf
                    <input type="text" name="name" placeholder="Full Name" class="form-control mb-2">
                    <input type="text" name="email" placeholder="Email" class="form-control mb-2">
                    <input type="text" name="phone" placeholder="Phone number" class="form-control mb-2">
                    <input type="text" name="subject" placeholder="Subject" class="form-control mb-2">

                    <textarea name="message" class="form-control" placeholder="Message" cols="30" rows="10"></textarea>

                    <button type="submit" class="btn btn-primary my-3">Send Email</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>