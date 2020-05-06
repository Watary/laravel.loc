@extends('backend.layouts.backend')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="mb-3 card">
                <div class="card-body">
                    <table class="mb-0 table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Created at</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($menus as $menu)
                                <tr>
                                <th scope="row">{{ $menu->id }}</th>
                                <td>{{ $menu->name }}</td>
                                <td>{{ $menu->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
