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
    <label for="course" class="form-label">Course</label>
    <input type="text" class="form-control" id="course" name="course" placeholder="Course"
           value="{{ old('course',@$model->course) }}">
    @error('course')
    <div class="invalid">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="university" class="form-label">University</label>
    <input type="text" class="form-control" id="university" name="university" placeholder="University"
           value="{{ old('university',@$model->university) }}">
    @error('university')
    <div class="invalid">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="location" class="form-label">Location</label>
    <input type="text" class="form-control" id="location" name="location" placeholder="Location"
           value="{{ old('location',@$model->location) }}">
    @error('location')
    <div class="invalid">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="year" class="form-label">Year</label>
    <input type="date" class="form-control" id="year" name="year" placeholder="University"
           value="{{ old('year',@$model->year) }}">
    @error('year')
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
