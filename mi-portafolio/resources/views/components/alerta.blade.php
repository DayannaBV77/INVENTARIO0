@if(session('ok'))
    <div class="alert-success">
        ✓ {{ session('ok') }}
    </div>
@endif
