<x-layouts.admin>
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>mahsulotlar ro'yhati</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">category_id</th>
                                <th scope="col">title_uz</th>
                                <th scope="col">title_ru</th>
                                <th scope="col">title_en</th>
                                <th scope="col">qisqacha malumot uz</th>
                                <th scope="col">qisqacha malumot ru</th>
                                <th scope="col">qisqacha malumot en</th>
                                <th scope="col">product uz</th>
                                <th scope="col">product ru</th>
                                <th scope="col">product en</th>
                                <th scope="col">Photo</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $products->id }}</td>
                                <td>{{ $products->category_id }}</td>
                                <td>{{ $products->title_uz }}</td>
                                <td>{{ $products->title_ru }}</td>
                                <td>{{ $products->title_en }}</td>
                                <td>{{ $products->short_content_uz }}</td>
                                <td>{{ $products->short_content_ru }}</td>
                                <td>{{ $products->short_content_en }}</td>
                                <td>{{ $products->name_uz }}</td>
                                <td>{{ $products->name_ru }}</td>
                                <td>{{ $products->name_en }}</td>
                                <td><img src="{{ asset( 'storage/' . $products->photo) }}" alt="" style="width: 100px;"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
