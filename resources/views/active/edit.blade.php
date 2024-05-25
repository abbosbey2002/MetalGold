<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('active_client.update', ['active_client' => $active_clients->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="active_client"
                               placeholder="faol mijozlarimiz soni" value="{{ $active_clients->active_client }}"/>
                        @error('active_client')
                        <label for="if" class="text-danger">Faol mijozlarimiz</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="experienced"
                               placeholder="Tajribali azolarimiz" value="{{ $active_clients->experienced }}"/>
                        @error('experienced')
                        <label for="if" class="text-danger">experienced</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="years_services"
                               placeholder="Hizmat ko'rsatishni boshlangan yil" value="{{ $active_clients->years_services }}"/>
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
