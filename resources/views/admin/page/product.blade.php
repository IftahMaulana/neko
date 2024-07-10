@extends('admin.layout.index')

@section('content')
    <div class="card mb-1">
        <div class="card-body d-flex flex-row justify-content-between">
        <div class="filter d-flex flex-lg-row gap-3">
                <input type="date" class="form-control" name="tgl_awal">
                <input type="date" class="form-control" name="tgl_akhir">
                <button class="btn btn-primary">Filter</button>
            </div>

            </div>
            </div>
            <div class="card rounded-full">
                <div class="card-header bg-transparent d-flex justify-content-between">
                    <button class="btn btn-info" id="addData">
                        <i class="fa fa-plus">
                            <span>Tambah Product</span>
                            </i>
                            </button>
                        <input type="text" class="form-control w-25" placeholder="Search....">
        </div>
        <div class="card-body">
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Date In</th>
                        <th>SKU</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $y => $x)
                    <tr class="align-middle">
                        <td>{{++$y}}</td>
                        <td>
                            <img src="{{asset('storage/product/'. $x->foto)}}" style="width:100px;">
                        </td>
                        <td>{{$x->created_at}}</td>
                        <td>{{$x->sku}}</td>
                        <td>{{$x->nama_product}}</td>
                        <td>{{$x->type . ' ' . $x->kategory}}</td>
                        <td>{{$x->harga}}</td>
                        <td>{{$x->quantity}}</td>
                        <td>
                            <button class="btn btn-info editModal" data-id="{{$x->id}}">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
    <div class="tampilData" style="display: none;"></div>
    <div class="tampilEditData" style="display: none;"></div>

    <script>
        $('#addData').click(function() {
            $.ajax({
                url: '{{route('addModal')}}',
                success: function (response) {
                    $('.tampilData').html(response).show();
                    $('#addModal').modal("show");
                }
            });
        });

        $('.editModal').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            $.ajax({
                type: "GET",
                url: "{{ route('editModal', ['id' => ':id']) }}".replace(':id', id),
                success: function(response) {
                    $('.tampilEditData').html(response).show();
                    $('#editModal').modal("show");
                }
            });
        });

    </script>
@endsection