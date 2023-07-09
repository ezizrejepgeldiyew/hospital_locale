@extends('layouts.app1')
@section('skilet')
    <div class="content-wrapper">
        <x-breadcrumb title="Hassahanalar" put="hospital"></x-breadcrumb>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('hospital.create') }}" class="bt bt-success"><i
                                        class="fas fa-plus"></i></a>
                            </div>
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Url</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($hospitals as $hospital)
                                            <tr>
                                                <td>{{ $hospital->name }}</td>
                                                <td>{{ $hospital->address}}</td>
                                                <td>{{ $hospital->url }}</td>
                                                <td> 4</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Url</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
