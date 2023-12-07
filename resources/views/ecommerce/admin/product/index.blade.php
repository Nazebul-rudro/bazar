<x-admin.layouts.master>


<div class="p-4">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
            <a href="{{ route('product.create') }}" class="btn btn-success float-end">Add Product</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>old Price</th>
                        <th>Regular Price</th>
                        <th>active</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>old Price</th>
                        <th>Regular Price</th>
                        <th>active</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
@foreach ($products as $product)
<tr>
    <td>{{ $product->name }}</td>
    <td>{{ $product->quantity }}</td>
    <td>{{ $product->old_price }}</td>
    <td>{{ $product->regular_price }}</td>
    <td>{{ $product->is_active }}</td>
    <td>
        <a href="" class="btn btn-warning"> Edit </a>
        <a href="" class="btn btn-danger"> Delete </a>
    </td>
</tr>
@endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

</x-admin.layouts.master>
