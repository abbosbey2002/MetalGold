<x-layouts.admin>
    <!-- Bosh saxifa -->
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Mahsulot turlari</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Operation</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->category->name_uz }}</td>
                                    <td>{{ $product->name_uz }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td><img src="{{ asset( 'storage/' . $product->photo ) }}" alt="" style="width: 80px; height: 70px;"></td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('category_of_product.show', ['category_of_product' => $product->id]) }}" class="mx-3"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('category_of_product.edit', ['category_of_product' => $product->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('category_of_product.destroy', ['category_of_product'=> $product->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn text-danger" style="margin-top: -6px;"><i class="fa fa-trash"></i></button>
                                                </form>
                                            @endauth
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        <a href="{{ route('category_of_product.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>
                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>