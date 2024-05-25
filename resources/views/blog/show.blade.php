<x-layouts.admin>
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Blog</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">title_uz</th>
                                <th scope="col">title_ru</th>
                                <th scope="col">title_en</th>
                                <th scope="col">qisqacha_uz</th>
                                <th scope="col">qisqacha_ru</th>
                                <th scope="col">qisqacha_en</th>
                                <th scope="col">content_uz</th>
                                <th scope="col">content_ru</th>
                                <th scope="col">content_en</th>
                                <th scope="col">Blog_uz</th>
                                <th scope="col">Blog_ru</th>
                                <th scope="col">Blog_en</th>
                                <th scope="col">photo</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $blogs->id }}</td>
                                <td>{{ $blogs->title_uz }}</td>
                                <td>{{ $blogs->title_ru }}</td>
                                <td>{{ $blogs->title_en }}</td>
                                <td>{{ $blogs->short_content_uz }}</td>
                                <td>{{ $blogs->short_content_ru }}</td>
                                <td>{{ $blogs->short_content_en }}</td>
                                <td>{{ $blogs->content_uz }}</td>
                                <td>{{ $blogs->content_ru }}</td>
                                <td>{{ $blogs->content_en }}</td>
                                <td>{{ $blogs->description_uz }}</td>
                                <td>{{ $blogs->description_ru }}</td>
                                <td>{{ $blogs->description_en }}</td>
                                <td><img src="{{ asset('storage/' . $blogs->photo) }}" alt="" style="width: 80px;"></td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('blog.index') }}" class="btn btn-outline-info">Orqaga <i class="fa fa-arrow-left"></i></a>

                    </div>
                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
