<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Formulario de Registro</title>
</head>
<body class="container-fluid">
    <header>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus nesciunt quam ratione qui fugiat odio ipsam voluptatem esse magnam! Earum iste eos voluptates excepturi. Excepturi quisquam rerum assumenda labore consequatur.</p>
            <p>dio ipsam voluptatem esse magnam! Earum iste eos voluptates excepturi. Excepturi quisquam rerum assumenda labore consequatur.</p>
    </header>

    <main class="row">
        <nav class="col-2 border">
            <x-layouts.navigation>
            </x-layouts.navigation>
        </nav>
    
        <section class="col-10 border">
            <article class="card">
                <article class="card-body">
                    <h1 class="card-title">{{ $title ?? ''}}</h1>
                    <article class="card-text">
                        {{ $slot }}
                    </article>
                </article>
            </article>
        </section>
    </main>
    
    <footer>
        Todos los derechos reservados
    </footer>
</body>
</html>