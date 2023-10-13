<div id="{!! $id !!}"></div>

@once
    @push('scripts')
        <script src="{{ $cdn }}"></script>
    @endpush
@endonce

@push('scripts')
    {!! $script !!}
@endpush
