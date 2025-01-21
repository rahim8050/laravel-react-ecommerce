@props(['title'=>'Homepage','bodyClass'=>''])
<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>{{$title}} | {{config('app.name','Laravel')}}</title>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

play your game
<header>
    <h1>Welcome to Our E-commerce Site</h1>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/shop">Shop</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
</header>
<main>
    <section>
        <h2>Featured Products</h2>
        <div class="products">
            <!-- Product items will go here -->
        </div>
    </section>
    <section>
        <h2>Why Shop With Us?</h2>
        <p>We offer the best products at the best prices.</p>
    </section>
</main>
<footer>
    <p>&copy; {{ date('Y') }} Your E-commerce Site. All rights reserved.</p>
</footer>
</body>
</html>