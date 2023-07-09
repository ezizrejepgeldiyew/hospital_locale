@extends('layouts.app1')
@section('skilet')
    <div class="content-wrapper">
        <x-breadcrumb title="Rayatlar" put="citizen"></x-breadcrumb>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('citizen.create') }}" class="bt bt-success"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Surname</th>
                                            <th>Middlename</th>
                                            <th>Location</th>
                                            <th>Passport</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($citizens as $citizen)
                                            <tr>
                                                <td>{{ $citizen->name }}
                                                </td>
                                                <td>{{ $citizen->surname }}</td>
                                                <td>{{ $citizen->middlename }}</td>
                                                <td>{{ $citizen->location }}</td>
                                                <td>{{ $citizen->passport }}</td>
                                                <td>{{ $citizen->date }}</td>
                                                <td> 4</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Surname</th>
                                            <th>Middlename</th>
                                            <th>Location</th>
                                            <th>Passport</th>
                                            <th>Date</th>
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
