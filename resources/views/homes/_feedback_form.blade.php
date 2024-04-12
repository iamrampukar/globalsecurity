<form method="post" action="{{ route('app.send_feedback') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="fullName" class="form-label">Full Name</label>
        <input type="text" class="form-control" name="full_name" id="fullName"
               placeholder="Full Name">
        @error('full_name')
        <div class="invalid">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" name="message" id="message" placeholder="Message..." rows="3"></textarea>
        @error('message')
        <div class="invalid">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="imageFile" class="form-label">Image File</label>
        <input class="form-control form-control-sm" type="file" name="image_name" id="imageFile">
        @error('image_name')
        <div class="invalid">{{ $message }}</div>
        @enderror
    </div>
    <input type="submit" value="Send" class="btn btn-primary">
</form>
