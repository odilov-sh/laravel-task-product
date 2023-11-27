@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <div class="alert-body">
            {{  session()->get('success') }}
        </div>
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <div class="alert-body">
            {{  session()->get('error') }}
        </div>
    </div>
@endif

@if(session()->has('warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <div class="alert-body">
            {{  session()->get('warning') }}
        </div>
    </div>
@endif

@if(session()->has('info'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <div class="alert-body">
            {{  session()->get('info') }}
        </div>
    </div>
@endif
