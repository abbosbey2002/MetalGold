<x-layouts.admin>
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Hodimlarimiz ro'yhati</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Ism familiya</th>
                                <th scope="col">title_uz</th>
                                <th scope="col">title_ru</th>
                                <th scope="col">title_en</th>
                                <th scope="col">telegram</th>
                                <th scope="col">instagram</th>
                                <th scope="col">facebook</th>
                                <th scope="col">youtube</th>
                                <th scope="col">Photo</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $teams->id }}</td>
                                <td>{{ $teams->name }}</td>
                                <td>{{ $teams->title_uz }}</td>
                                <td>{{ $teams->title_ru }}</td>
                                <td>{{ $teams->title_en }}</td>
                                <td>{{ $teams->telegram }}</td>
                                <td>{{ $teams->instagram }}</td>
                                <td>{{ $teams->facebook }}</td>
                                <td>{{ $teams->youtube }}</td>
                                <td><img src="{{ asset( 'storage/' . $teams->photo) }}" alt="" style="width: 100px;"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
