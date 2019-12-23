<!DOCTYPE html>
<html lang="ru">
    @include('parts.head')
    <body>
        <div class="container">
            @include('parts.header')
            <section id="main">    
                @yield ('content')
            </section>
        </div>
        @include('parts.footer')
    </body>
</html>