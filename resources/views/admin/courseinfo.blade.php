@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Course Info') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    {{-- <div class="alert alert-info">
                        Sample table page
                    </div> --}}

                    <div class="card">
                       
                        <!-- /.card-body -->
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Course Title</th>
                                        <th>Duration</th>
                                        <th>WTR</th>
                                        <th>Category</th>
                                        <th>Modality</th>
                                        <th>Schedules</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {{-- @foreach($users as $user) --}}
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer clearfix">
                        
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection