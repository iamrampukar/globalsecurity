<form method="post" action="{{ route('app.apply_send') }}">
    @csrf
    <div class="mb-3">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" class="form-control" name="first_name" id="firstName"
               placeholder="First Name">
        @error('first_name')
        <div class="invalid">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" name="last_name" id="lastName"
               placeholder="Last Name">
        @error('last_name')
        <div class="invalid">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="mobile" class="form-label">Mobile</label>
        <input type="tel" class="form-control" name="mobile" id="mobile"
               placeholder="Mobile...">
        @error('mobile')
        <div class="invalid">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="userEmail" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="userEmail"
               placeholder="Email...">
        @error('email')
        <div class="invalid">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="eduLevel" class="form-label">Education Level</label>
        <input type="text" class="form-control" name="education" id="eduLevel"
               placeholder="Education level...">
        @error('education')
        <div class="invalid">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="course" class="form-label">Course</label>
        <input type="text" class="form-control" name="course" id="course"
               placeholder="Course...">
        @error('course')
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
    <input type="submit" value="Send" class="btn btn-primary">
</form>
