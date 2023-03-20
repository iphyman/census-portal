<x-app-layout>
    @include('people.navbar')
    <div class="w-100 table-responsive mt-5">
        {{ $dataTable->table() }}
    </div>

    @push('scripts')
    {{ $dataTable->scripts() }}
    @endpush
</x-app-layout>