<x-layouts.admin>
    <!-- Main Content -->
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Order</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('orders.update', ['order' => $order->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="product" class="form-label">Product</label>
                                <input type="text" class="form-control" id="product" name="product" value="{{ $order->product->name_ru }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $order->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $order->phone_number }}">
                            </div>
                            <div class="mb-3">
                                <label for="total_price" class="form-label">Total Price</label>
                                <input type="text" class="form-control" id="total_price" name="total_price" value="{{ $order->total_price }}">
                            </div>
                            <div class="mb-3">
                                <label for="total_length" class="form-label">Total Length</label>
                                <input type="text" class="form-control" id="total_length" name="total_length" value="{{ $order->total_length }}">
                            </div>
                            <div class="mb-3">
                                <label for="total_weight" class="form-label">Total Weight</label>
                                <input type="text" class="form-control" id="total_weight" name="total_weight" value="{{ $order->total_weight }}">
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" class="form-control" id="status" name="status" value="{{ $order->status }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Order</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
