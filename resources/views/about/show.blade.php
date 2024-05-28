<x-layouts.admin>

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4>Mahsulot Ma'lumotlari</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-4 text-center">
                            <img src="{{ asset('storage/' . $about->photo) }}" alt="Mahsulot surati" class="img-fluid rounded" style="max-height: 300px;">
                        </div>
                        <h5 class="card-title">Title (UZ):</h5>
                        <p class="card-text">{{ $about->title_uz }}</p>
                        <h5 class="card-title">Title (RU):</h5>
                        <p class="card-text">{{ $about->title_ru }}</p>
                        <h5 class="card-title">Title (EN):</h5>
                        <p class="card-text">{{ $about->title_en }}</p>
                        <h5 class="card-title">Qisqacha Ma'lumot (UZ):</h5>
                        <p class="card-text">{{ $about->short_content_uz }}</p>
                        <h5 class="card-title">Qisqacha Ma'lumot (RU):</h5>
                        <p class="card-text">{{ $about->short_content_ru }}</p>
                        <h5 class="card-title">Qisqacha Ma'lumot (EN):</h5>
                        <p class="card-text">{{ $about->short_content_en }}</p>
                        <h5 class="card-title">To'liq Ma'lumot (UZ):</h5>
                        <p class="card-text">{{ $about->content_uz }}</p>
                        <h5 class="card-title">To'liq Ma'lumot (RU):</h5>
                        <p class="card-text">{{ $about->content_ru }}</p>
                        <h5 class="card-title">To'liq Ma'lumot (EN):</h5>
                        <p class="card-text">{{ $about->content_en }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('about.edit', $about->id) }}" class="btn btn-outline-secondary">Tahrirlash</a>
                        <form action="{{ route('about.destroy', $about->id) }}" method="post" onsubmit="return confirm('Ochirishga ishonchingiz komilmi?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">O'chirish</button>
                        </form>
                        <a href="{{ route('about.index') }}" class="btn btn-outline-primary">Orqaga</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.admin>
