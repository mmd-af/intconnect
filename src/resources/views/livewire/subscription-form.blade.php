<div class="container-fluid bg-primary py-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-6 mb-4">Subscribe the Newsletter</h1>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <form wire:submit.prevent="subscribe">
                    <div class="position-relative w-100 mb-2">
                        <input name="email" class="form-control border-0 w-100 ps-4 pe-5" type="email" placeholder="Enter Your Email"
                               style="height: 60px;" wire:model="email">
                        <button type="submit"
                                class="btn btn-lg-square shadow-none position-absolute top-0 end-0 mt-2 me-2"><i
                                class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </div>
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </form>
                <p class="mb-0">Don't worry, we won't spam you with emails.</p>
            </div>
        </div>
    </div>
</div>
