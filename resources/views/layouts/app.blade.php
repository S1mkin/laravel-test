<!DOCTYPE html>
<html lang="ru">
    @include('parts.head')
    <body>
        <div class="container">
            <section id="main">
                @include('parts.header')
                @yield ('content')
            </section>
        </div>
        @include('parts.footer')
    </body>
</html>