@extends('layouts.app1')
@section('skilet')
    <div class="content-wrapper">
        <x-breadcrumb title="Gos" put="hospital-create"></x-breadcrumb>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <form action="{{ route('citizen.store') }}" method="POST" id="quickForm"> @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Surname</label>
                                        <input type="text" name="surname" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Middlename</label>
                                        <input type="text" name="middlename" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" name="location" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Passport</label>
                                        <input type="text" name="passport" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" name="date" class="form-control">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
