<x-dlayout>
    <div class="flex flex-col md:flex-row justify-between items-center border-b border-gray-300 py-4 mb-4">
        <h2 class="mb-5 text-2xl font-bold">My Post</h2>
    </div>

    <div class="overflow-x-auto">
        <a href="/dashboard/posts/create"
            class="inline-flex items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            <i class="bi bi-plus-circle-fill mr-2"></i> Create New Post
        </a>

        <table class="mt-3 min-w-full text-sm border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border-b border-gray-300 px-4 py-2 text-left">#</th>
                    <th class="border-b border-gray-300 px-4 py-2 text-left">Title</th>
                    <th class="border-b border-gray-300 px-4 py-2 text-left">Category</th>
                    <th class="border-b border-gray-300 px-4 py-2 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="odd:bg-white even:bg-gray-50">
                        <td class="border-b border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border-b border-gray-300 px-4 py-2">{{ $post->title }}</td>
                        <td class="border-b border-gray-300 px-4 py-2">{{ $post->category->name }}</td>
                        <td
                            class="border-b border-gray-300 px-4 py-2 flex flex-wrap space-y-2 sm:space-y-0 sm:flex-nowrap sm:space-x-2">
                            <a href="/dashboard/posts/{{ $post->slug }}" class="text-gray-800 dark:text-white">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                </svg>
                            </a>
                            <a href="/edit" class="text-gray-800 dark:text-white">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z">
                                    </path>
                                </svg>
                            </a>
                            <a href="/hapus" class="text-gray-800 dark:text-white">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m15 9-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-dlayout>
