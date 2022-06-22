@extends('admin/layouts/main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
</div>

<div class="table-responsive col-lg-8">
  <a href="admin/karyawan/add" class="btn btn-primary">Tambah data karyawan</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Cabang</th>
          <th scope="col">Jabatan</th>
        </tr>
      </thead>
      <tbody>
        <?php $data = Session::get('data');
        $data = $data->toArray();
         ?>
          @foreach ($data as $karyawan)
              
          <tr>
            <td>{{ $loop->iteration }}</td> 
            <td>{{ $karyawan['name'] }}</td>
            <td>{{ $karyawan['cabang'] }}</td>
            <td>{{ $karyawan['jabatan'] }}</td>
            {{-- <td>
                <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                </form>
            </td> --}}
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection