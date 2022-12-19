@extends('layouts.app')

@section('content')
<section class="form text-white mt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Contact Us</h2>
                <!-- Section title -->
                <p>We will respond to your message as soon as possibile</p>
                <!-- Description -->
                <form>
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example1" class="form-control" placeholder="Name" />
                                <!-- Name -->
                            </div>
                            <div class="form-outline">
                                <input type="number" id="form6Example6" class="form-control" placeholder="Phone" />
                                <!-- Phone -->
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline mb-4">
                                <input type="email" id="form6Example5" class="form-control" placeholder="Email" />
                                <!-- Email -->
                            </div>
                            <select class="form-select form-select-md" aria-label=".form-select-md">
                                <option disabled selected hidden class="select">More info</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <!-- More info -->
                        </div>
                    </div>
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="form6Example7" rows="4" placeholder="Message"></textarea>
                        <!-- Textarea -->
                    </div>
                    <button type="submit" class="btn btn-dark rounded-1 px-3 mb-4">Send</button>
                    <!-- Button -->
                </form>
            </div>
            <div class="col">
                <h5 class="mb-3">Example Inc.</h5>
                <!-- Info -->
                <div class="contacts d-flex flex-column">
                    <div class="phone m-2">
                        <font-awesome-icon icon="fa-solid fa-phone" class="icon" />
                        <span class="p-2">+1(305)1234-5678</span>
                    </div>
                    <div class="mail m-2">
                        <font-awesome-icon icon="fa-solid fa-envelope" class="icon" />
                        <span class="p-2">hello@example.com</span>
                    </div>
                    <div class="social m-2">
                        <font-awesome-icon icon="fa-solid fa-location-dot" class="icon" />
                        <span class="p-2">Main Avenue, 987</span>
                    </div>
                    <!-- Contacts -->
                </div>
                <button class="btn px-3 py-2 mt-2 rounded-1 btn-dark" type="button">View Map</button>
                <!-- Button -->
            </div>
        </div>
    </div>
</section>
@endsection