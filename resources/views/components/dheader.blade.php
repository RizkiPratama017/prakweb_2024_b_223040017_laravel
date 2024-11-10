<header class="bg-gray-900 text-white flex items-center p-4 shadow">
    <a href="/" class="text-white text-lg font-semibold">Admin {{ auth()->user()->name }}</a>
    <div class="ml-auto">
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="text-white font-semibold hover:text-black">Logout</button>
        </form>
    </div>
</header>
