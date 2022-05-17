@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-bodt">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>{{ __('Register Time') }}</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Email') }}</th>
                                        <th>{{ __('Website') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr class="">
                                        <td class="">{{ $user->created_at }}</td>
                                        <td class="">{{ $user->name }}</td>
                                        <td class="">{{ $user->email }}</td>
                                        <td class="">{{ $user->website }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

