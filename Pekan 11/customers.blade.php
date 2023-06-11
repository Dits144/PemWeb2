@extends('template/admin')

@section('content')
<h1>Pelanggan</h1>
<a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">Add Pelanggan</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Pelanggan</th>
        <th scope="col">Alamat</th>
        <th scope="col">NO HP</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
        @php $number = 1;  @endphp
        @foreach($customers as $customer)
        <tr>
            <td>{{ $number }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->no_hp }}</td>
            <td>
              <a href="" class="btn btn-primary">Edit</a>
              <form action="" method="POST" style="display: inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</button>
              </form>
          </td>
        </tr>
        @php  $number++ @endphp
        @endforeach
        
    </tbody>
  </table>
@endsection