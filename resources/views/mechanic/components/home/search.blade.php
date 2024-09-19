<div class="section-search">
    <div class="container">
        <div class="search-box-banner">
            <form action="{{ route('mechanic.search') }}" method="post">
                @csrf
                <ul class="align-items-center  justify-content-center">
                    <li class="column-group-main">
                        <div class="input-block">
                            <label>Find Mechanics by Location</label>
                            <div class="group-img">
                                <input type="text" name="mechanic_city" class="form-control" placeholder="Enter City or Town Name">
                                <span><i class="feather-map-pin"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="column-group-last">
                        <div class="input-block">
                            <div class="search-btn">
                                <button class="btn search-button" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>Search
                                </button>
                            </div>
                        </div>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
