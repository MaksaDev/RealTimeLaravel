@extends('layouts.app')




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

                    <ul id="users">

                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('scripts')

<script>

    window.axios.get('api/users')
        .then((response) =>{
            const usersElement = document.getElementById('users');

            let users = response.data;

            users.foreach((user, index) => {

                let element = document.createElement('li');

                element.setAttribute('id', user.id);
                element.innerText = user.name;

                usersElement.appendChild(element);

            })

        })

</script>

@endpush