<x-admin.layouts.master>


<div class="p-4">
    <div class="row">
        <div class="col-md-6 offset-3">
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h2 class="text-warning">Product Submit</h2>
                <div>
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="mt-2">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="text" name="quantity" id="quantity" class="form-control">
                </div>
                <div class="mt-2">
                    <label for="old_price" class="form-label">Old Price</label>
                    <input type="text" name="old_price" id="old_price" class="form-control">
                </div>
                <div class="mt-2">
                    <label for="regular_price" class="form-label">Regular Price</label>
                    <input type="text" name="regular_price" id="regular_price" class="form-control">
                </div>
                <div class="mt-2">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="text-end mt-2">
                    <input type="submit" value="Add" class="btn btn-success">

                </div>

            </form>
        </div>
    </div>
</div>

</x-admin.layouts.master>
