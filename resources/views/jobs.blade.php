<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
    <h1>Listing</h1>

    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    <strong>{{ $job['title'] }} : </strong> Pay {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
