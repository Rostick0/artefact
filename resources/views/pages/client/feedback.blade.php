@extends('layout.client.layout')

@section('content')
    {{-- <x-banner-nav> --}}
    <div class="feedback">
        <div class="container">
            <form class="contacts__form form-contact" enctype="multipart/form-data" action="{{ url()->current() }}"
                method="POST">
                <div class="form-contact__flex">
                    <label class="label">
                        <span class="label__title">Name</span>
                        <input class="input" name="name" type="text">
                    </label>
                    <label class="label">
                        <span class="label__title">Email</span>
                        <input class="input" name="email" type="text">
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
                    <textarea class="input" name="message" rows="5"></textarea>
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
