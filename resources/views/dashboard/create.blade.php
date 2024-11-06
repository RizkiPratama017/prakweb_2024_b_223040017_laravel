<x-dlayout>
    <div class="flex flex-col md:flex-row justify-between items-center border-b border-gray-300 py-4 mb-4">
        <h2 class="text-2xl font-bold">My Post</h2>
    </div>

    <div class="flex justify-center md:justify-start">
        <form class="w-full md:w-1/2" method="POST" action="/dashboard/posts">
            @csrf
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" id="title" name="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
            </div>

            <div class="mb-5">
                <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                <input type="text" id="slug" name="slug"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required />
            </div>

            <div class="mb-5">
                <label for="slug"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>

                <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

                <div class="mb-5">
                    <label for="body"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
                    <input id="body" type="hidden" name="body">
                    <trix-editor input="body"></trix-editor>
                </div>
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Create Post
            </button>
        </form>
    </div>

    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur inventore facilis hic? Cumque dolor suscipit
    debitis soluta explicabo laudantium. Quis in temporibus laboriosam, maxime non accusamus quod, quia unde aut ratione
    tempora? Ab mollitia ad consectetur, sint aliquid animi. Dignissimos autem vel cumque dolore perferendis nulla sint
    in. Fugiat laudantium, architecto, accusamus suscipit non reprehenderit enim corporis at deleniti placeat earum
    cupiditate hic, rem unde maxime eligendi quidem. Accusantium debitis aliquam voluptas corrupti eius odit maxime
    consequatur minus possimus odio. Odio repellat, sunt quis totam aliquid similique excepturi pariatur eius, earum
    quia modi laboriosam, facilis ex hic saepe delectus ut!

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/create/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script>
</x-dlayout>
