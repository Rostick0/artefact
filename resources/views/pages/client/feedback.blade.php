@extends('layout.client.layout')

@section('seo_title', 'Request form')

@section("content")
    <x-banner-nav title="Request form" :navigations="$navigations" />
    <div class="feedback">
        <div class="container">
            <form class="feedback__form form-contact" enctype="multipart/form-data" action="{{ route('feedback.send') }}"
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
                        <span class="label__title">Question</span>
                        <select class="input" name="question">
                            <option value="" selected>- None -</option>
                            <option value="Order project">Order project</option>
                            <option value="Get answer">Get answer</option>
                        </select>
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
                </label>
                <button class="btn form-contact__btn">Submit</button>
            </form>
        </div>
    </div>
@endsection
