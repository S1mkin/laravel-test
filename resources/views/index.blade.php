<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel test project</title>

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
        
        <script src="https://use.fontawesome.com/441fced82f.js"></script>


    </head>
    <body>
       
        <div class="container">
            <section id="main">
                <h1><i class="fa fa-address-book" aria-hidden="true"></i> Test project Laravel</h1>
                
                <div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-align-left" aria-hidden="true"></span> Bootstrap was installed</div>
            </section>
        </div>
        
    </body>
</html>