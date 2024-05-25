<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('team.update', ['team' => $teams->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="name"
                               placeholder="Ism familiya" value="{{ $teams->name }}"/>
                        @error('name')
                        <label for="if" class="text-danger">ism familiya</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_uz"
                               placeholder="mahsulot nomi uz" value="{{ $teams->title_uz }}"/>
                        @error('title_uz')
                        <label for="if" class="text-danger">title_uz</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_ru"
                               placeholder="Mahsulot nomi ru" value="{{ $teams->title_ru }}"/>
                        @error('title_ru')
                        <label for="if" class="text-danger">title_ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_en"
                               placeholder="mahsulot nomi en" value="{{ $teams->title_en }}"/>
                        @error('title_en')
                        <label for="if" class="text-danger">title_en</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="telegram"
                               placeholder="telegram link" value="{{ $teams->telegram }}"/>
                        @error('telegram')
                        <label for="if" class="text-danger">telegram</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="instagram"
                               placeholder="instagram link" value="{{ $teams->instagram }}"/>
                        @error('instagram')
                        <label for="if" class="text-danger">instagram</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="facebook"
                               placeholder="facebook link" value="{{ $teams->facebook }}"/>
                        @error('facebook')
                        <label for="if" class="text-danger">facebook</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="youtube"
                               placeholder="youtube link" value="{{ $teams->youtube }}"/>
                        @error('youtube')
                        <label for="if" class="text-danger">youtube</label>
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
