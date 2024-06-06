<x-layout>
    <x-slot:heading>JOBS</x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}">
                <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year.
            </a>
        </li>

        @endforeach
    </ul>
</x-layout>
