@if(session()->has('flash'))
  @if(session()->get('flash')['status'] === 'ok')
    <div class="alert alert-success">
        <strong><span class="fas fa-check fa-fw"></span></strong> {{ session()->get('flash')['message'] }}
    </div>
  @elseif(session()->get('flash')['status'] === 'fail')
    <div class="alert alert-danger">
        <strong><span class="fas fa-times fa-fw"></span></strong> {{ session()->get('flash')['message'] }}
    </div>
  @endif
@endif
