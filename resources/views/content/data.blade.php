<!-- begin:: base -->
@extends('base')
<!-- end:: base -->

<!-- begin:: content -->
@section('content')

@if (Session::has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<livewire:upd />
<livewire:add />

<hr />
<livewire:data />
@endsection
<!-- end:: content -->