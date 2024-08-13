<div class="form-contact">
    @if (session()->get('message'))
        <div>
            <strong>{{ session()->get('message') }}</strong>
        </div>
        <br>
    @endif
    <form class="feedback__form form-contact__inner" enctype="multipart/form-data" action="{{ route('feedback.send') }}"
        method="POST">
        @csrf
        <div class="form-contact__flex">
            <label class="label">
                <span class="label__title">Name</span>
                <input class="input" name="name" type="text" required>
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
            <label class="label">
                <span class="label__title">Email</span>
                <input class="input" name="email" type="email" required>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </label>
        </div>
        <div class="form-contact__flex">
            <label class="label">
                <span class="label__title">Subject</span>
                <input class="input" name="subject" type="text" maxlength="255">
            </label>
            <label class="label">
                <span class="label__title">Service</span>
                <select class="input" name="service">
                    <option value="" selected>- None -</option>
                    @foreach (App\Models\Category::all() as $item)
                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </label>
        </div>
        <label class="label">
            <span class="label__title">Message</span>
            <textarea class="input" name="message" rows="5" required></textarea>
            @error('message')
                <span class="error">{{ $message }}</span>
            @enderror
        </label>
        <br>
        <label class="label">
            <span class="label__title">Select file</span>
            <input class="input" type="file" name="file">
            @error('file')
                <span class="error">{{ $message }}</span>
            @enderror
        </label>
        <button class="btn form-contact__btn">Submit</button>
    </form>
</div>
