<form wire:submit="create" class="row">
    <div class="input-block col-12">
        <label class="form-label">Full Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" wire:model="name">
        @error('name')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="input-block col-6">
        <label class="form-label">Email <span class="text-danger">*</span></label>
        <input type="email" class="form-control" wire:model="email">
        @error('email')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="input-block col-6">
        <label class="form-label">Phone Number <span class="text-danger">*</span></label>
        <input type="text" class="form-control" wire:model="phone_number">
        @error('phone_number')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="input-block col-6">
        <label class="form-label">Street Address <span class="text-danger">*</span></label>
        <input type="text" class="form-control" wire:model="street_address">
        @error('street_address')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="input-block col-6">
        <label class="form-label">Town/City <span class="text-danger">*</span></label>
        <input type="text" class="form-control" wire:model="town_city">
        @error('town_city')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="input-block col-6">
        <label class="form-label">State <span class="text-danger">*</span></label>
        <input type="text" class="form-control" wire:model="state">
        @error('state')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="input-block col-6">
        <label class="form-label">Country <span class="text-danger">*</span></label>
        <input type="text" value="Nigeria" readonly class="form-control" wire:model="country">
        @error('country')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="input-block col-12">
        <label class="form-label">Profile Picture <span class="text-danger">*</span></label>
        <input type="file" class="form-control" wire:model="picture">
        @error('picture')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="input-block col-6">
        <label class="form-label">Password <span class="text-danger">*</span></label>
        <div class="pass-group">
            <input type="password" class="form-control pass-input" wire:model="password">
            <span class="fas fa-eye-slash toggle-password"></span>
        </div>
        @error('password')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="input-block col-6">
        <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
        <div class="pass-group">
            <input type="password" class="form-control pass-input" wire:model="password_confirmation">
            <span class="fas fa-eye-slash toggle-password"></span>
        </div>
        @error('password_confirmation')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="btn btn-outline-light w-100 btn-size mt-1">Sign Up</button>
    <div class="text-center dont-have">Already have an Account? <a href="{{ route('login') }}">Sign In</a>
    </div>
    <div class="text-center dont-have">Register as a mechanic <a href="{{ route('register') }}">Here</a>
    </div>
</form>
