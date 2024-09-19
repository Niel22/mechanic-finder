<form wire:submit="login">
    <div class="input-block">
        <label class="form-label">Email <span class="text-danger">*</span></label>
        <input type="email" wire:model="email" class="form-control" placeholder>
        @error('email')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="input-block">
        <label class="form-label">Password <span class="text-danger">*</span></label>
        <div class="pass-group">
            <input type="password" wire:model="password" class="form-control pass-input" placeholder>
            <span class="fas fa-eye-slash toggle-password"></span>
        </div>
        @error('password')
        <span class="text-danger text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="input-block">
        <a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
    </div>
    <div class="input-block m-0">
        <label class="custom_check d-inline-flex"><span>Remember me</span>
            <input type="checkbox" name="remeber">
            <span class="checkmark"></span>
        </label>
    </div>
    <button type="submit" class="btn btn-outline-light w-100 btn-size mt-1">Sign In</button>

    <div class="text-center dont-have">Don't have an account yet? <a
            href="{{ route('register') }}">Register</a></div>
    <div class="text-center dont-have">Login as a mechanic <a
            href="{{ route('mechanic.login') }}">here</a></div>
</form>
