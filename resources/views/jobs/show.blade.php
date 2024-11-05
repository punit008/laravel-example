<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
    <h1>Job</h1>

    <strong>{{ $job->title }} : </strong> Pay {{ $job->salary }} per year.
    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>
</x-layout>
