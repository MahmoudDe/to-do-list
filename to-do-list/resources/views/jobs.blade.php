<x-layout>
    <x-slot:heading>Jobs Page</x-slot:heading>
            <h2> <strong> Welcome to Jobs</strong></h2>

            @foreach ($jobs as $job)
            <ul>
            <a href="/jobs/{{ $job['id'] }}">
                <li>{{ $job['title'] }}</li>
            </a>
            </ul>
            @endforeach
</x-layout>