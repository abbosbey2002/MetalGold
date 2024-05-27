<x-layouts.admin>
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Categoriyalar ro'yxati</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">mahsulot nomi uz</th>
                                <th scope="col">mahsulot nomi ru</th>
                                <th scope="col">mahsulot nomi en</th>
                                <th scope="col">hajmi</th>
                                <th scope="col">nazariya</th>
                                <th scope="col">ishlab chiqarilgan</th>
                                <th scope="col">birligi</th>
                                <th scope="col">narxi</th>
                                <th scope="col">photo</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $categories->id }}</td>
                                <td>{{ $categories->name_uz }}</td>
                                <td>{{ $categories->name_ru }}</td>
                                <td>{{ $categories->name_en }}</td>
                                <td>{{ $categories->size }}</td>
                                <td>{{ $categories->theory }}</td>
                                <td>{{ $categories->manufacturer }}</td>
                                <td>{{ $categories->unit }}</td>
                                <td>{{ $categories->price }}</td>
                                <td><img src="{{ asset('storage/' . $categories->photo) }}" alt="" style="width: 80px;"></td>
                            </tr>
                            </tbody>
                        </table>
                    <a href="{{ route('categories.index') }}" class="btn btn-outline-info">Orqaga <i class="fa fa-arrow-left"></i></a>

                    </div>
                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
