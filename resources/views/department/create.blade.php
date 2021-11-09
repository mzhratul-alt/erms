@extends('layout')

@section('title', 'All Departments')
@section('content')
<div class="card my-4">
    <div class="card-header">
       <i class="fas fa-table me-1"></i>
       Create Department
       <a href="{{route('depart.index')}}" class="btn btn-sm btn-info text-dark float-end">View All Departments</a>
    </div>
    <div class="card-body">
        @error('title')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
        <form class="row" action="{{route('depart.store')}}" method="post">
            @csrf
            <div class="col-9">
                <input type="text" placeholder="Department Title" name="depart_title" class="form-control">
            </div>
            <div class="col-3">
                <input type="submit" value="Add Department" class="btn btn-success">
            </div>
        </form>
    </div>
 </div>
@endsection
