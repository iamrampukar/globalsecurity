@csrf
<div class="mb-3">
    <label for="full_name" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name"
           value="{{ old('full_name',@$model->full_name) }}">
    @error('full_name')
    <div class="invalid">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email..."
           value="{{ old('email',@$model->email) }}">
    @error('email')
    <div class="invalid">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="contact" class="form-label">Contact</label>
    <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact..."
           value="{{ old('contact',@$model->contact) }}">
    @error('contact')
    <div class="invalid">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="quote" class="form-label">Quote</label>
    <textarea class="form-control" id="quote" name="quote" rows="3"
              placeholder="Message...">{{ old('quote',@$model->quote) }}</textarea>
    @error('quote')
    <div class="invalid">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="message" class="form-label">Message</label>
    <textarea class="form-control" id="message" name="message" rows="3"
              placeholder="Message...">{{ old('message',@$model->message) }}</textarea>
    @error('message')
    <div class="invalid">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="visible" class="form-label">Visible</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="visible_status" id="status_yes"
               value="1" {{ @$model->visible_status == 1 ? 'checked' : '' }}>
        <label class="form-check-label" for="status_yes"><i class="bi bi-check-circle"></i></label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="visible_status" id="status_no"
               value="0" {{ @$model->visible_status == 0 ? 'checked' : '' }}>
        <label class="form-check-label" for="status_no"><i class="bi bi-x-circle"></i></label>
    </div>
</div>

<div class="mb-3">
    <label for="imageFile" class="form-label">Image File</label>
    <input class="form-control form-control-sm" type="file" name="image_name" id="imageFile">
    @error('image_name')
    <div class="invalid">{{ $message }}</div>
    @enderror
</div>

<button class="btn btn-primary btn-sm">Save</button>
