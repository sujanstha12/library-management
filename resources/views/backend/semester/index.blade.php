@extends('backend.layouts.master')
@section('content')
<div class="col-md-12 margin_top_30">
    <div class="white_shd full margin_bottom_30">
       <div class="full graph_head">
          <div class="heading1 margin_0">
             <h2>Semester</h2>
          </div>
          <div class="row">
            <div class="col-md-6">
                <a href="{{route('admin.semester.create')}}" class="btn btn-primary">Add Semester</a>
            </div>
          </div>
       </div>
       <div class="table_section padding_infor_info">
          <div class="table-responsive-sm">
             <table class="table table-bordered">
                <thead>
                   <tr>
                    <th>S.No</th>
                      <th>Category Name</th>
                      <th>Status</th>
                      <th>Action</th>
                   </tr>
                </thead>
                @foreach ($semesters as $semester)
                <tbody>

                   <tr>
                    <td>{{ $loop->iteration }}</td>
                      <td>{{ $semester->title }}</td>
                      <td>
                        <td>
                            <a href="{{ route('admin.semester.updateStatus', $semester) }}">
                                @if ($semester->status == 1)
                                    <i class="btn btn-sm btn-toggle btn-success">On</i>
                                @else
                                    <i class="btn btn-sm btn-toggle btn-danger">Off</i>
                                @endif
                            </a>
                        </td>
                      </td>
                      <td>
                        <a href="{{ route('admin.semester.edit', $semester) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.semester.destroy', $semester) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                        </form>

                      </td>
                   </tr>
                </tbody>
                @endforeach
             </table>
          </div>
       </div>
    </div>
 </div>

@endsection
