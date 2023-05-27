@extends('layouts.index')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables Kelas</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="{{ route('student.create') }}" class="btn btn-facebook">.add data</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>class_id</th>
                            <th>name</th>
                            <th>born_date</th>
                            <th>gender</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>class_id</th>
                            <th>name</th>
                            <th>born_date</th>
                            <th>gender</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>System Architect</td>
                            <td>12 kelas</td>
                            <td>61</td>
                            <td>asd</td>
                            <td>
                                {{-- <form action="{{ route('product.destroy',['product'=>$item->id]) }}" method="post"> --}}
                                    <button type="submit" class="btn btn-google">.delete</button>
                                    @method('delete')
                                    @csrf
                                </form>
                                <a href="#" class="btn btn-facebook">.edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
@endsection
