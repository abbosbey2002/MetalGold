<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('active_client.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="active_client"
                               placeholder="Faol mijozlarimiz soni" value="{{ old('active_client') }}"/>
                        @error('active_client')
                        <label for="if" class="text-danger">active_client soni</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="experienced"
                               placeholder="Tajribali azolarimi soni" value="{{ old('experienced') }}"/>
                        @error('experienced')
                        <label for="if" class="text-danger">experienced</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="years_services"
                               placeholder="Hizmat ko'rsatishni boshlangan yil" value="{{ old('years_services') }}"/>
                        @error('years_services')
                        <label for="if" class="text-danger">years_services</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.admin>
