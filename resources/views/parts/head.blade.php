<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ isset($title_seo)?$title_seo:'Laravel test project' }}</title>
        <meta name="description" content="{{ isset($description_seo)?$description_seo:'' }}" />

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
        <script src="https://use.fontawesome.com/441fced82f.js" defer></script>

    </head>