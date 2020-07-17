{{-- 
    <h3 class="mt-0 mb-5">Results <span class="text-primary found-number">6</span></h3> --}}
    <h6 class="text-uppercase font-weight-bold mb-3">Categories</h6>
    <div class="mt-2 mb-2 pl-2">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="category-1">
            <label class="custom-control-label" for="category-1">Agricultural</label>
        </div>
    </div>
    <div class="mt-2 mb-2 pl-2">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="category-2">
            <label class="custom-control-label" for="category-2">Commercial</label>
        </div>
    </div>
    <div class="mt-2 mb-2 pl-2">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="category-3">
            <label class="custom-control-label" for="category-3">Residential</label>
        </div>
    </div>
    <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
    <h6 class="text-uppercase mt-5 mb-3 font-weight-bold">Size in Acres</h6>
    <div class="mt-2 mb-2 pl-2">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="filter-size-1">
            <label class="custom-control-label" for="filter-size-1"> 10-50 </label>
        </div>
    </div>
    <div class="mt-2 mb-2 pl-2">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="filter-size-2">
            <label class="custom-control-label" for="filter-size-2">50-150</label>
        </div>
    </div>
    <div class="mt-2 mb-2 pl-2">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="filter-size-3">
            <label class="custom-control-label" for="filter-size-3">150-250 </label>
        </div>
    </div>
    <div class="mt-2 mb-2 pl-2">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="filter-size-4">
            <label class="custom-control-label" for="filter-size-4">250 and above</label>
        </div>
    </div>
    <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
    <h6 class="text-uppercase mt-5 mb-3 font-weight-bold">Price</h6>
    <div class="price-filter-control">
        <input type="number" class="form-control w-100 pull-left mb-2" value="1000000" step='500000'id="price-min-control">
        <input type="number" class="form-control w-100 pull-right" value="10000000000" step ='500000'id="price-max-control">
    </div>
    <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
    <a href="#" class="btn btn-lg btn-block btn-primary mt-3 update-btn">Update Results</a>
