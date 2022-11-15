@extends('layouts.admin.main')
@section('content')
    @include('admin.departments.breadcrumbs')

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-lg-12">
                    @if (Session::has('msg'))
                        <div class="alert alert-success"> {{ Session::get('msg') }} </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Department Table <a href="{{ route('departments.archive') }}"><button style="margin-left: 5px"
                                        type="button" class="btn btn-info btn-sm"> <i class="fa fa-archive"></i>
                                        Archive</button></a> </strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Department Name</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($data as $v)
                                        <tr>
                                            <td>{{ $v['d_id'] }}</td>
                                            <td>{{ $v['d_name'] }}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-4"><a
                                                            href="{{ route('departments.show', $v['d_id']) }}"
                                                            title="show"><i class="fa fa-list-ol text-primary"></i></a></div>
                                                    <div class="col-4"><a
                                                            href="{{ route('departments.edit', $v['d_id']) }}"
                                                            title="edit"><i class="fa fa-edit text-success"></i></a></div>
                                                    <form action="{{ route('departments.destroy', $v['d_id']) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('delete')
                                                        <div class="col-4">
                                                            <button class="bg-white" title="delete"
                                                                style="border-style: none;cursor: pointer;"><i
                                                                    class="fa fa-trash text-danger"></i></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td align="center" colspan="2">No Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

    <div class="clearfix"></div>
@endsection
