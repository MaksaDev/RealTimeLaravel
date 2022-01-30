@extends('layouts.app')

@push('styles')

<style type="text/css"> 




</style>

@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    This is aaSDsadsadasd
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('scripts')

<script>


</script>

@endpush