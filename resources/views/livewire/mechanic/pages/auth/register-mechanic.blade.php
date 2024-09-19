<form wire:submit="create" class="row">
    <div class="input-block col-12">
        <label class="form-label">Shop Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" wire:model="shop_name">
        @error('shop_name')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="input-block col-12">
        <label class="form-label">Username <span class="text-danger">*</span></label>
        <input type="text" class="form-control" wire:model="username">
        @error('username')
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
        <label class="form-label">Whatsapp Number (Optional)</label>
        <input type="text" class="form-control" wire:model="whatsapp_number">
        @error('whatsapp_number')
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

    <div class="input-block col-6">
        <label class="form-label">Years Of Experience <span class="text-danger">*</span></label>
        <input type="text" class="form-control" wire:model="years_of_experience" placeholder="6 years">
        @error('years_of_experience')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="input-block col-12">
        <label class="form-label">Service Offered <span class="text-danger">*</span></label>
        <textarea class="form-control" wire:model="services_offered" placeholder="List services separated by commas, e.g., Engine Repair, Oil Change, Brake Inspection"></textarea>
        @error('services_offered')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="input-block col-12">
        <label class="form-label">Working Hours <span class="text-danger">*</span></label>
        <div class="d-flex">
            <input type="time" class="form-control me-2" wire:model="working_hours_from" required>
            <span class="me-2 align-self-center">to</span>
            <input type="time" class="form-control" wire:model="working_hours_to" required>
            @error('working_hours_to')
            <span class="text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="input-block col-12">
        <label class="form-label">Shop Logo/Picture <span class="text-danger">*</span></label>
        <input type="file" class="form-control" wire:model="logo">
        @error('logo')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="input-block col-12">
        <label class="form-label">About (Write a short description about yourself) <span class="text-danger">*</span></label>
        <textarea class="form-control" wire:model="about"></textarea>
        @error('about')
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

    <div class="text-center dont-have">Already have an Account? <a href="{{ route('mechanic.login') }}">Sign In</a></div>

    <div class="text-center dont-have">Register as a User <a href="{{ route('register') }}">Here</a></div>
</form>
