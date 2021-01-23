<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Laravel SSO</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
    <div class="row">
        <div class="col-md-6 offset-md-3 pt-5">
            <div class="d-flex justify-content-center">
                <h1>SSO #APLIKASI 3</h1>
            </div>
            
            @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            
            <div class="d-flex justify-content-center">
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <div class="card">
                        <div class="card-body">
                            <h4>Nama: {{auth()->user()->name}}</h4>
                            <a href="{{route('logout')}}" class="btn btn-danger">Logout</a>
                        </div>
                    </div>           
                    @endauth
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    Aplikasi Lainnya
                </div>
                <div class="card-body">
                    <a href="http://aplikasi-1.domain.test" class="btn btn-warning" type="button">Buka Aplikasi 1</a>
                    <a href="http://aplikasi-2.domain.test" class="btn btn-primary" type="button">Buka Aplikasi 2</a>
                </div>
            </div>
            
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
