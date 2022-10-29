@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Culture List') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="flex-container">
                            @if(Auth()->user() && Auth()->user()->role === 'admin')
                                @include('roles.admin')
                            @else()
                                @include('roles.home')
                            @endif
                        </div>
                    </div>
                    @if(Auth()->user())
                        <a class="btn btn-success" href="{{route('cultures.create')}}">Search</a>
                    @endif
                    <a href="{{route('cultures.index')}}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function () {
            $('#toggle-two').bootstrapToggle({
                on: 'Enabled',
                off: 'Disabled'
            });
        })
    </script>

    <script>
        $('.toggle-class').on('change', function () {
            let status = $(this).prop('checked') === true ? 1 : 0;
            alert(status);
            let culture_id = $(this).data('id');
            alert(culture_id);
            $.ajax({
                type: 'GET',
                datatype: 'JSON',
                url: '{{route('changeStatus')}}',
                data: {
                    'status': status,
                    'culture_id': culture_id
                },
                success: function (data) {
                }
            })
        })
    </script>
@endpush
