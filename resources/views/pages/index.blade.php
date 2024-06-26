@extends('base.base')

@section('content')
    <h1 class="text-2xl font-semibold text-gray-800 mb-4">Home</h1>
    <p>Welcome to the Home page!</p>

    <div class="mt-6">
        <h2 class="text-xl font-semibold text-gray-700 mb-2">Latest News</h2>
        <ul class="list-disc pl-5 text-gray-600">
            <li class="mb-2">We are launching a new product next month. Stay tuned for more details!</li>
            <li class="mb-2">Our team is growing! Check out the <a href="/careers" class="text-blue-500 underline">careers</a> page for open positions.</li>
            <li class="mb-2">Don't miss our upcoming webinar on industry trends. Register <a href="/webinars" class="text-blue-500 underline">here</a>.</li>
        </ul>
    </div>

    <div class="mt-6">
        <h2 class="text-xl font-semibold text-gray-700 mb-2">Featured Articles</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="p-4 border rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                <h3 class="text-lg font-semibold text-gray-800">How to Improve Your Productivity</h3>
                <p class="text-gray-600 mt-2">Discover effective strategies to boost your productivity and manage your time better...</p>
                <a href="/articles/productivity" class="text-blue-500 underline mt-2 block">Read more</a>
            </div>
            <div class="p-4 border rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                <h3 class="text-lg font-semibold text-gray-800">The Future of Technology</h3>
                <p class="text-gray-600 mt-2">Explore the latest trends and innovations shaping the future of technology...</p>
                <a href="/articles/technology" class="text-blue-500 underline mt-2 block">Read more</a>
            </div>
        </div>
    </div>

@endsection
