<div class="w-100 card p-3">
    <div class="message">
        <span>{{ $report->getName() }}</span>
        <h2>10000</h2>
    </div>
    
    <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
        </svg>
    </div>
</div>

@push('css')
    <link rel="stylesheet" href="{{ asset('css/components/card.css') }}">
@endpush