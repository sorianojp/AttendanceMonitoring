@props(['errors'])
@if ($errors->any())
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-red-600']) }}>
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif
