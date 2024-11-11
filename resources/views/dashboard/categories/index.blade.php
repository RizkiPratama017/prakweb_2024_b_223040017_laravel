<x-dlayout>
    <div class="flex flex-col md:flex-row justify-between items-center border-b border-gray-300 py-4 mb-4">
        <h2 class="mb-5 text-2xl font-bold">Post Categories</h2>
    </div>

    @if (session('success'))
        <div id="alert-2"
            class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Success</span>
            <div class="ms-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-2" aria-label="Close" onclick="this.parentElement.style.display='none';">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif
    <div class="overflow-x-auto max-w-lg">
        <a href="/dashboard/categories/create"
            class="inline-flex items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            <i class="bi bi-plus-circle-fill mr-2"></i> Create New Category
        </a>

        <table class="mt-3 min-w-full text-sm border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border-b border-gray-300 px-4 py-2 text-left">#</th>
                    <th class="border-b border-gray-300 px-4 py-2 text-left">Category Name</th>
                    <th class="border-b border-gray-300 px-4 py-2 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="odd:bg-white even:bg-gray-50">
                        <td class="border-b border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border-b border-gray-300 px-4 py-2">{{ $category->name }}</td>
                        <td
                            class="border-b border-gray-300 px-4 py-2 flex flex-wrap space-y-2 sm:space-y-0 sm:flex-nowrap sm:space-x-2">
                            <a href="/dashboard/categories/{{ $category->slug }}" class="text-gray-800 dark:text-white">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                </svg>
                            </a>
                            <a href="/dashboard/categories/{{ $category->slug }}/edit"
                                class="text-gray-800 dark:text-white">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z">
                                    </path>
                                </svg>
                            </a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="text-gray-800 dark:text-white"
                                    onclick="return confirm ('are you sure?') ">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m15 9-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</x-dlayout>
