@extends('layout.client.layout')

@section('content')
    <div class="contacts">
        <div class="container">
            <h1 class="title contacts__title">ARTEFACT</h1>
            <div class="contacts__flex">
                <div class="contacts__info">
                    <div class="contacts__info_item">
                        <div class="contacts__info_icon">
                            <i class="far fa-envelope-open"></i>
                        </div>
                        <a class="contacts__info_link" href="">sofialopatina@artefact.guru</a>
                    </div>
                    <div class="contacts__info_item">
                        <div class="contacts__info_icon">
                            <span class="icon fas fa-map-marker-alt"></span>
                        </div>
                        <a class="contacts__info_link" href="">Prague, Korunni 2569/108</a>
                    </div>
                </div>
                <form class="contacts__form form-contact" enctype="multipart/form-data"
                    action="{{ route('feedback.send') }}" method="POST">
                    @csrf
                    <div class="form-contact__flex">
                        <label class="label">
                            <span class="label__title">Name</span>
                            <input class="input" name="name" type="text" required>
                        </label>
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        <label class="label">
                            <span class="label__title">Email</span>
                            <input class="input" name="email" type="email" required>
                        </label>
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
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
                                <option value="Interior">Interior</option>
                                <option value="Exterior">Exterior</option>
                                <option value="Product rendering">Product rendering</option>
                                <option value="Modelling">Modelling</option>
                                <option value="Animation">Animation</option>
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
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2560.3015790335253!2d14.42655947645609!3d50.08064027152398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1695025304344!5m2!1sru!2sru"
            width="100%" height="450" allowfullscreen="" style="border:0;" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" />
    </div>
@endsection
