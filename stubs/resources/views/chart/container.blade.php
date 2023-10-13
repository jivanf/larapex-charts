<div id="{!! $id !!}" class="w-full"></div>

@once
    @push('scripts')
        <script src="{{ $cdn }}"></script>
    @endpush
@endonce

@push('scripts')
    {!! $script !!}
@endpush
