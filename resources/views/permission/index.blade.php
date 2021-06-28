@extends('layouts.admin')

@section('title')
Permissions
@endsection

@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Permissions</h3>

      <div class="card-tools">
          <a href="{{ route('permission.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Add Permissions </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
            <th>Date Posted</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->id }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->created_at }}</td>
                        <td>
                            <a href="{{ route('permission.edit', $permission->id) }}" class="btn btn-sm btn-warning">Edit Permission</a>
                        </td>
                    </tr>
                @empty
                    <tr>No Result Found</tr>
                @endforelse
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
@endsection
