@extends('layout')

@section('title', 'All Departments')
@section('content')
   <div class="card my-4">
      <div class="card-header">
         <i class="fas fa-table me-1"></i>
         All Departments
         <a href="{{ route('depart.create') }}" class="btn btn-sm btn-primary float-end">Add New Department</a>
      </div>
      <div class="card-body">
         @if ($departments->isEmpty())
            <p class="text-center text-danger">Oops! No department found.</p>
         @else
            @if (Session::has('msg'))
               <div class="alert alert-success">
                  {{ session('msg') }}
               </div>
            @endif
            <table id="datatablesSimple">
               <thead>
                  <tr>
                     <th>Sl. No.</th>
                     <th>Title</th>
                     <th>Created At</th>
                     <th>Updated At</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th>Sl. No.</th>
                     <th>Title</th>
                     <th>Created At</th>
                     <th>Updated At</th>
                     <th>Action</th>
                  </tr>
               </tfoot>
               <tbody style="vertical-align:middle !importan">
                  @foreach ($departments as $department)
                     <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $department->title }}</td>
                        <td>{{ $department->created_at }}</td>
                        <td>{{ $department->updated_at }}</td>
                        <td>
                           <a href="#" class="btn btn-info">
                              <i class="fas fa-eye"></i>
                           </a>
                           {{-- <a href="{{route('depart.edit')}}" class="btn btn-warning">
                            <i class="fas fa-edit"></i>
                        </a> --}}
                           <form action="{{ route('depart.destroy', $department->id) }}" method="post">
                            @csrf
                              @method('DELETE')
                              <button class="btn btn-primary" type="submit"></button>

                           </form>
                        </td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
         @endif
      </div>
   </div>
@endsection
