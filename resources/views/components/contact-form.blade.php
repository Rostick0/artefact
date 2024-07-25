<form class="contacts__form form-contact" action="{{ route('feedback.send') }}" enctype="multipart/form-data"
    method="POST">
    @csrf
    <div class="form-contact__flex">
        <label class="label">
            <span class="label__title">Name</span> <input class="input" required="" type="text">
        </label>
        @error('name')
            <span class="error">{{ $message }}</span>
        @enderror
        <label class="label">
            <span class="label__title">Email</span> <input class="input" name="email" required="" type="email">
        </label> @error('email')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-contact__flex">
        <label class="label">
            <span class="label__title">Question</span>
            <select class="input" name="question">
                <option selected="selected" value="">- None -</option>
                <option value="Order project">Order project</option>
                <option value="Get answer">Get answer</option>
            </select>
        </label>
        <label class="label">
            <span class="label__title">Service</span>
            <select class="input" name="service">
                <option selected="selected" value="">- None -</option>
                @foreach (App\Models\Category::all() as $item)
                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </label>
    </div>
    <label class="label">
        <span class="label__title">Message</span>
        <textarea class="input" name="message" required="" rows="5"></textarea>
    </label>
    <button class="btn form-contact__btn">Submit</button>
</form>
