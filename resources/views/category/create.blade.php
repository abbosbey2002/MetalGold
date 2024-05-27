<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="name_uz"
                               placeholder="mahsulot nomi uz" value="{{ old('name_uz') }}"/>
                        @error('name_uz')
                        <label for="if" class="text-danger">Ism familiyasi</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="name_ru"
                               placeholder="mahsulot nomi ru" value="{{ old('name_ru') }}"/>
                        @error('name_ru')
                        <label for="if" class="text-danger">name_ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="name_en"
                               placeholder="Mahsulot nomi en" value="{{ old('name_en') }}"/>
                        @error('name_en')
                        <label for="if" class="text-danger">name_en</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="size"
                               placeholder="mahsulot hajmi" value="{{ old('size') }}"/>
                        @error('size')
                        <label for="if" class="text-danger">size</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="theory"
                               placeholder="nazariya" value="{{ old('theory') }}"/>
                        @error('theory')
                        <label for="if" class="text-danger">theory</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="manufacturer"
                               placeholder="ishlab chiqarilgan joyi" value="{{ old('manufacturer') }}"/>
                        @error('manufacturer')
                        <label for="if" class="text-danger">manufacturer</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="unit"
                               placeholder="birligi" value="{{ old('unit') }}"/>
                        @error('unit')
                        <label for="if" class="text-danger">unit</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="price"
                               placeholder="narxi" value="{{ old('price') }}"/>
                        @error('price')
                        <label for="if" class="text-danger">price</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group form-control mb-3 pb-2">
                        <input name="photo" type="file" class="input-group m-2" id="subject"/>
                    </div>
                    @error('photo')
                    <label for="if" class="text-danger">faylni yuklashni unutdingiz3</label>
                    @enderror
                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.admin>
