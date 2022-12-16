@if (session()->has('message'))
    <h3>{{ session()->get('message') }}</h3>
@endif
