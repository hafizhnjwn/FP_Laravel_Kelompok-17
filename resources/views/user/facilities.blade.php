<x-layout>
    <x-header-title>OUR FACILITIES</x-header-title>

   <div class="px-4 mx-auto max-w-screen-xl lg:px-6">
    <div class="mx-auto max-w-screen-md sm:text-center">
        <form method="GET" action="/facilities">
            <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                <div class="relative w-full">
                    <label for="search" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input class="px-5 block py-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-primary-500" placeholder="Search our facilities" type="search" name="search" id="search" required>
                </div>
                <div>
                    <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-green-500 border-green-500 sm:rounded-none sm:rounded-r-lg hover:bg-green-600 focus:ring-4 focus:ring-green-300 dark:bg-green-400 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Search
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

    <div class="row mt-5 mb-5 no-gutters px-20">
        @foreach ($facilities as $item)
            <div class="col-lg-3 py-3 wow zoomIn">
                <div class="card-blog" style="height: 250px; overflow: hidden;">
                    <div class="header">

                        <img src="facility-icons/{{ $item->icon }}" alt="">

                    </div>
                    <div class="body">
                        <h5 class="post-title">
                            <a href="/facilities/{{ $item->slug }}">
                                {{ Str::limit($item->name, 40) }}
                            </a>
                        </h5>
                        <div class="site-info">
                            <div class="avatar mr-2">
                                <span>TCare Hospital</span>
                            </div>
                            <span class="mai-time"></span> {{ $item->created_at }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="pt-10 flex-auto">
            {{ $facilities->links() }}
        </div>
    </div>
</x-layout>
