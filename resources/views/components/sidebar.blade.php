<div x-data="{ sidebarOpen: false }" class="flex">
    <!-- Sidebar -->
    <div
        class="sidebar bg-gray-100 border-r border-gray-300 w-60 h-screen fixed md:relative md:flex md:flex-col hidden md:block">
        <nav class="flex flex-col p-4">
            <ul class="space-y-4">
                <li>
                    <a href="/dashboard"
                        class="{{ Request::is('dashboard') ? 'text-blue-500' : 'text-gray-700' }} flex items-center hover:text-black font-semibold">
                        <i class="bi bi-house mr-2"></i> Dashboard
                    </a>
                </li>

                <li>
                    <a href="/dashboard/posts"
                        class="{{ Request::is('dashboard/posts') ? 'text-blue-500' : 'text-gray-700' }} flex items-center hover:text-black font-semibold">
                        <i class="bi bi-house mr-2"></i> My Post
                    </a>
                </li>

            </ul>
        </nav>
    </div>

    <!-- Content -->
    <div class="flex-1 p-6">
        <!-- Mobile Sidebar Trigger -->
        <div class="md:hidden p-4">
            <button @click="sidebarOpen = true" class="text-gray-700 hover:text-black font-semibold">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>
        <!-- Content goes here -->
    </div>

    <!-- Mobile Sidebar -->
    <div x-show="sidebarOpen" @click.away="sidebarOpen = false"
        class="md:hidden fixed inset-0 z-50 flex bg-gray-900 bg-opacity-50">
        <div class="sidebar bg-gray-100 border-r border-gray-300 w-60 h-screen">
            <div class="p-4 border-b border-gray-300 flex justify-between items-center">
                <button @click="sidebarOpen = false" class="text-gray-700 hover:text-black font-semibold">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            <nav class="flex flex-col p-4">
                <ul class="space-y-4">
                    <li>
                        <a href="/dashboard" class="flex items-center text-gray-700 hover:text-black font-semibold">
                            <i class="bi bi-house mr-2"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/posts"
                            class="flex items-center text-gray-700 hover:text-black font-semibold">
                            <i class="bi bi-file-earmark mr-2"></i> My Posts
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
