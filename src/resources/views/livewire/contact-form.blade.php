<div class="container-fluid donate py-5" id="contact">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-7 donate-text bg-light py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column justify-content-center h-100 p-5 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 mb-4">Do you have questions?</h1>
                </div>
            </div>
            <div class="col-lg-5 donate-form bg-primary py-5 text-center wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100 p-5">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form wire:submit.prevent="submitForm">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" wire:model="name">
                                    <label for="name">Your Name</label>
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="identifier"
                                           placeholder="Your Email or number" wire:model="identifier">
                                    <label for="identifier">Your Email or number</label>
                                    @error('identifier') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                             <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a description here" id="description" style="height: 150px" wire:model="description"></textarea>
                                    <label for="description">Your message</label>
                                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary py-3 w-100" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
