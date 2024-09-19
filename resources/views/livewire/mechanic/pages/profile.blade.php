<div class="col-lg-12">
    <div class="settings-info">
        <div class="settings-sub-heading">
            <h4>Profile</h4>
        </div>
        <form action="#">

            <div class="profile-info-grid">
                <div class="profile-info-header">
                    <h5>Basic Information</h5>
                    <p>Information about user</p>
                </div>
                <div class="profile-inner">
                    <div class="profile-info-pic">
                        <div class="profile-info-img">
                            <img src="{{ asset('storage/uploads/user/'. Auth::guard('web')->user()->picture) }}" alt="Profile">
                        </div>
                        <div class="profile-info-content">
                            <h6>Profile picture</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-form-group">
                                <label>Shop Name <span class="text-danger">*</span></label>
                                <input type="text" value="{{ Auth::guard('web')->user()->name }}" class="form-control" placeholder="Enter First Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-form-group">
                                <label>Phone Number <span class="text-danger">*</span></label>
                                <input type="text" value="{{ Auth::guard('web')->user()->phone_number }}" class="form-control" placeholder="+ 1 65656565656">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input type="text" value="{{ Auth::guard('web')->user()->email }}" class="form-control" placeholder="Enter Email">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="profile-info-grid">
                <div class="profile-info-header">
                    <h5>Address Information</h5>
                    <p>Information about address of mechanic</p>
                </div>
                <div class="profile-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-form-group">
                                <label>Address <span class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="Enter Address">{{ Auth::guard('web')->user()->street_address }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-form-group">
                                <label>Country <span class="text-danger">*</span></label>
                                <input type="text" value="{{ Auth::guard('web')->user()->country }}" class="form-control" placeholder="Enter Country">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-form-group">
                                <label>State <span class="text-danger">*</span></label>
                                <input type="text" value="{{ Auth::guard('web')->user()->state }}" class="form-control" placeholder="Enter State">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-form-group">
                                <label>City <span class="text-danger">*</span></label>
                                <input type="text" value="{{ Auth::guard('web')->user()->town_city }}" class="form-control" placeholder="Enter City">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="profile-submit-btn">
                <button type="submit" class="btn btn-secondary">Cancel</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>

        </form>
    </div>
</div>
