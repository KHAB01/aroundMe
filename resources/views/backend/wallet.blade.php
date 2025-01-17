@extends('layouts.backend_layout')

@section('head')
    <title>AroundMe | Add Listing</title>

@endsection

@section('content')

    @extends('layouts.backend_layout')

@section('head')
    <title>AroundMe | Add Listing</title>

@endsection

@section('content')

    <div id="dashboard">
        <a href="#" class="utf_dashboard_nav_responsive"><i class="fa fa-reorder"></i> Dashboard Sidebar Menu</a>
        <div class="utf_dashboard_navigation js-scrollbar">
            <div class="utf_dashboard_navigation_inner_block">
                <ul>
                    <li><a href="dashboard.html"><i class="sl sl-icon-layers"></i> Dashboard</a></li>
                    <li class="active"><a href="dashboard_add_listing.html"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
                    <li>
                        <a href="javascript:void(0)"><i class="sl sl-icon-layers"></i> My Listings</a>
                        <ul>
                            <li><a href="dashboard_my_listing.html">Active <span class="nav-tag green">10</span></a></li>
                            <li><a href="dashboard_my_listing.html">Pending <span class="nav-tag yellow">4</span></a></li>
                            <li><a href="dashboard_my_listing.html">Expired <span class="nav-tag red">8</span></a></li>
                        </ul>
                    </li>
                    <li><a href="dashboard_bookings.html"><i class="sl sl-icon-docs"></i> Bookings</a></li>
                    <li><a href="dashboard_messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
                    <li><a href="dashboard_wallet.html"><i class="sl sl-icon-wallet"></i> Wallet</a></li>
                    <li>
                        <a href="javascript:void(0)"><i class="sl sl-icon-star"></i> Reviews</a>
                        <ul>
                            <li><a href="dashboard_visitor_review.html">Visitor Reviews <span class="nav-tag green">4</span></a></li>
                            <li><a href="dashboard_submitted_review.html">Submitted Reviews <span class="nav-tag yellow">5</span></a></li>
                        </ul>
                    </li>
                    <li><a href="dashboard_bookmark.html"><i class="sl sl-icon-heart"></i> Bookmark</a></li>
                    <li><a href="dashboard_my_profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
                    <li><a href="dashboard_change_password.html"><i class="sl sl-icon-key"></i> Change Password</a></li>
                    <li><a href="index_1.html"><i class="sl sl-icon-power"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <div id="dialog_signin_part" class="zoom-anim-dialog mfp-hide">
            <div class="small_dialog_header">
                <h3>Sign In</h3>
            </div>

            <div class="utf_signin_form style_one">
                <ul class="utf_tabs_nav">
                    <li class=""><a href="#tab1">Log In</a></li>
                    <li><a href="#tab2">Register</a></li>
                </ul>
                <div class="tab_container alt">

                    <div class="tab_content" id="tab1" style="display:none;">
                        <form method="post" class="login">
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="username">
                                    <input type="text" class="input-text" name="username" id="username" value="" placeholder="Username" />
                                </label>
                            </p>
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="password">
                                    <input class="input-text" type="password" name="password" id="password" placeholder="Password" />
                                </label>
                            </p>
                            <div class="utf_row_form utf_form_wide_block form_forgot_part"> <span class="lost_password fl_left"> <a href="javascript:void(0);">Forgot Password?</a> </span>
                                <div class="checkboxes fl_right">
                                    <input id="remember-me" type="checkbox" name="check">
                                    <label for="remember-me">Remember Me</label>
                                </div>
                            </div>
                            <div class="utf_row_form">
                                <input type="submit" class="button border margin-top-5" name="login" value="Login" />
                            </div>
                        </form>
                    </div>

                    <div class="tab_content" id="tab2" style="display: none;">
                        <form method="post" class="register">
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="username2">
                                    <input type="text" class="input-text" name="username" id="username2" value="" placeholder="Username" />
                                </label>
                            </p>
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="email2">
                                    <input type="text" class="input-text" name="email" id="email2" value="" placeholder="Email" />
                                </label>
                            </p>
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="password1">
                                    <input class="input-text" type="password" name="password1" id="password1" placeholder="Password"/>
                                </label>
                            </p>
                            <p class="utf_row_form utf_form_wide_block">
                                <label for="password2">
                                    <input class="input-text" type="password" name="password2" id="password2" placeholder="Confirm Password" />
                                </label>
                            </p>
                            <input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="utf_dashboard_content">
            <div id="titlebar" class="dashboard_gradient">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Add Listing</h2>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="index_1.html">Home</a></li>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li>Add Listing</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="utf_add_listing_part">
                        <div class="add_utf_listing_section">
                            <div class="utf_add_listing_part_headline_part">
                                <h3><i class="sl sl-icon-user"></i> Have an Account?</h3>
                            </div>
                            <div class="row with-forms">
                                <div class="col-md-12">
                                    <div class="form-group lis-relative">
                                        Sign in If you don’t have an account you can create one below by entering your email address/username. Your account details will be confirmed via email. <a href="#dialog_signin_part" class="login_form sign-in popup-with-zoom-anim">Sign in</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="add_utf_listing_section margin-top-45">
                            <div class="utf_add_listing_part_headline_part">
                                <h3><i class="sl sl-icon-tag"></i> Categories & Tags</h3>
                            </div>
                            <div class="row with-forms">
                                <div class="col-md-6">
                                    <h5>Listing Title</h5>
                                    <input type="text" class="search-field" name="listing_title" id="listing_title" placeholder="Listing Title" value="">
                                </div>
                                <div class="col-md-6">
                                    <h5>Keywords</h5>
                                    <input type="text" name="keywords" id="keywords" placeholder="Keywords..." value="">
                                </div>
                            </div>
                            <div class="row with-forms">
                                <div class="col-md-6">
                                    <h5>Category</h5>
                                    <div class="intro-search-field utf-chosen-cat-single">
                                        <select class="selectpicker default" data-selected-text-format="count" data-size="7" title="Select Category">
                                            <option>Eat & Drink</option>
                                            <option>Shops</option>
                                            <option>Hotels</option>
                                            <option>Restaurants</option>
                                            <option>Fitness</option>
                                            <option>Events</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5>Tags(optional)</h5>
                                    <div class="intro-search-field utf-chosen-cat-single">
                                        <select class="selectpicker default" data-selected-text-format="count" data-size="7" title="Select Tags">
                                            <option>One</option>
                                            <option>Two</option>
                                            <option>Three</option>
                                            <option>Four</option>
                                            <option>Five</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row with-forms">
                                <div class="col-md-12">
                                    <h5>Listing Tags</h5>
                                    <input type="text" class="search-field" name="listing_title" id="listing_title" placeholder="Listing Tags" value="">
                                </div>
                            </div>
                        </div>

                        <div class="add_utf_listing_section margin-top-45">
                            <div class="utf_add_listing_part_headline_part">
                                <h3><i class="sl sl-icon-map"></i> Location</h3>
                            </div>
                            <div class="utf_submit_section">
                                <div class="row with-forms">
                                    <div class="col-md-6">
                                        <h5>City</h5>
                                        <div class="intro-search-field utf-chosen-cat-single">
                                            <select class="selectpicker default" data-selected-text-format="count" data-size="7" title="Select City">
                                                <option>New York</option>
                                                <option>Argentina</option>
                                                <option>Chicago</option>
                                                <option>Azerbaijan</option>
                                                <option>Indonesia</option>
                                                <option>India</option>
                                                <option>Thailand</option>
                                                <option>Gambia</option>
                                                <option>Spain</option>
                                                <option>Iraq</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Address</h5>
                                        <input type="text" class="input-text" name="address" id="address" placeholder="Address" value="">
                                    </div>
                                    <div class="col-md-12">
                                        <h5>Decimal Degrees</h5>
                                        <div class="row with-forms">
                                            <div class="col-md-6">
                                                <input type="text" class="input-text" name="latitude" id="latitude" placeholder="40.7324319" value="">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="input-text" name="longitude" id="longitude" placeholder="-73.824807777775" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="utf_listing_location" class="col-md-12 utf_listing_section">
                                        <div id="utf_single_listing_map_block">
                                            <div id="utf_single_listingmap" data-latitude="40.7324319" data-longitude="-73.824807777775" data-map-icon="im im-icon-Hamburger"></div>
                                            <a href="#" id="utf_street_view_btn">Street View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="add_utf_listing_section margin-top-45">
                            <div class="utf_add_listing_part_headline_part">
                                <h3><i class="sl sl-icon-picture"></i> Images</h3>
                            </div>
                            <div class="row with-forms">
                                <div class="utf_submit_section col-md-4">
                                    <h4>Logo</h4>
                                    <form action="file-upload" class="dropzone"></form>
                                </div>
                                <div class="utf_submit_section col-md-4">
                                    <h4>Cover Image</h4>
                                    <form action="file-upload" class="dropzone"></form>
                                </div>
                                <div class="utf_submit_section col-md-4">
                                    <h4>Gallery Images</h4>
                                    <form action="file-upload" class="dropzone"></form>
                                </div>
                            </div>
                        </div>

                        <div class="add_utf_listing_section margin-top-45">
                            <div class="utf_add_listing_part_headline_part">
                                <h3><i class="sl sl-icon-list"></i> Name & Description</h3>
                            </div>
                            <div class="row with-forms">
                                <div class="col-md-6">
                                    <h5>Name</h5>
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-md-6">
                                    <h5>Email</h5>
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="col-md-6">
                                    <h5>Title</h5>
                                    <input type="text" placeholder="Title">
                                </div>
                                <div class="col-md-6">
                                    <h5>Tagline</h5>
                                    <input type="text" placeholder="Tagline">
                                </div>
                                <div class="col-md-12">
                                    <h5>Description</h5>
                                    <textarea name="summary" cols="40" rows="3" id="description" placeholder="Description..." spellcheck="true"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="add_utf_listing_section margin-top-45">
                            <div class="utf_add_listing_part_headline_part">
                                <h3><i class="sl sl-icon-home"></i> Amenities</h3>
                            </div>
                            <div class="checkboxes in-row amenities_checkbox">
                                <ul>
                                    <li>
                                        <input id="check-a" type="checkbox" name="check">
                                        <label for="check-a">Car Parking</label>
                                    </li>
                                    <li>
                                        <input id="check-b" type="checkbox" name="check">
                                        <label for="check-b">Takes Reservations</label>
                                    </li>
                                    <li>
                                        <input id="check-c" type="checkbox" name="check">
                                        <label for="check-c">Street Parking</label>
                                    </li>
                                    <li>
                                        <input id="check-d" type="checkbox" name="check">
                                        <label for="check-d">Elevator in Building</label>
                                    </li>
                                    <li>
                                        <input id="check-e" type="checkbox" name="check">
                                        <label for="check-e">Outdoor Seating</label>
                                    </li>
                                    <li>
                                        <input id="check-f" type="checkbox" name="check">
                                        <label for="check-f">Friendly Workspace</label>
                                    </li>
                                    <li>
                                        <input id="check-g" type="checkbox" name="check">
                                        <label for="check-g">Wireless Internet</label>
                                    </li>
                                    <li>
                                        <input id="check-h" type="checkbox" name="check" >
                                        <label for="check-h">Good for Kids</label>
                                    </li>
                                    <li>
                                        <input id="check-i" type="checkbox" name="check" >
                                        <label for="check-i">Events</label>
                                    </li>
                                    <li>
                                        <input id="check-j" type="checkbox" name="check">
                                        <label for="check-j">Smoking Allowed</label>
                                    </li>
                                    <li>
                                        <input id="check-k" type="checkbox" name="check">
                                        <label for="check-k">Wheelchair Accessible</label>
                                    </li>
                                    <li>
                                        <input id="check-l" type="checkbox" name="check">
                                        <label for="check-l">Accepted Bank Cards</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="add_utf_listing_section margin-top-45">
                            <div class="utf_add_listing_part_headline_part">
                                <h3><i class="sl sl-icon-clock"></i> Opening Hours</h3>
                            </div>
                            <div class="switcher-content">
                                <div class="row utf_opening_day utf_js_demo_hours">
                                    <div class="col-md-2">
                                        <h5>Monday :-</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="utf_chosen_select" data-placeholder="Open Time"></select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="utf_chosen_select" data-placeholder="Close Time"></select>
                                    </div>
                                </div>

                                <div class="row utf_opening_day utf_js_demo_hours">
                                    <div class="col-md-2">
                                        <h5>Tuesday :-</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="utf_chosen_select" data-placeholder="Open Time"></select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="utf_chosen_select" data-placeholder="Close Time"></select>
                                    </div>
                                </div>

                                <div class="row utf_opening_day utf_js_demo_hours">
                                    <div class="col-md-2">
                                        <h5>Wednesday :-</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="utf_chosen_select" data-placeholder="Open Time"></select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="utf_chosen_select" data-placeholder="Close Time"></select>
                                    </div>
                                </div>

                                <div class="row utf_opening_day utf_js_demo_hours">
                                    <div class="col-md-2">
                                        <h5>Thursday :-</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="utf_chosen_select" data-placeholder="Open Time"></select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="utf_chosen_select" data-placeholder="Close Time"></select>
                                    </div>
                                </div>

                                <div class="row utf_opening_day utf_js_demo_hours">
                                    <div class="col-md-2">
                                        <h5>Friday :-</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="utf_chosen_select" data-placeholder="Open Time"></select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="utf_chosen_select" data-placeholder="Close Time"></select>
                                    </div>
                                </div>

                                <div class="row utf_opening_day utf_js_demo_hours">
                                    <div class="col-md-2">
                                        <h5>Saturday :-</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="utf_chosen_select" data-placeholder="Open Time"></select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="utf_chosen_select" data-placeholder="Close Time"></select>
                                    </div>
                                </div>

                                <div class="row utf_opening_day utf_js_demo_hours">
                                    <div class="col-md-2">
                                        <h5>Sunday :-</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="utf_chosen_select" data-placeholder="Open Time"></select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="utf_chosen_select" data-placeholder="Close Time"></select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="add_utf_listing_section margin-top-45">
                            <div class="utf_add_listing_part_headline_part">
                                <h3><i class="sl sl-icon-tag"></i> Add Pricing</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="utf_pricing_list_section">
                                        <tbody class="ui-sortable">
                                        <tr class="pricing-list-item pattern ui-sortable-handle">
                                            <td><div class="fm-move"><i class="sl sl-icon-cursor-move"></i></div>
                                                <div class="fm-input pricing-name">
                                                    <input type="text" placeholder="Title">
                                                </div>
                                                <div class="fm-input pricing-ingredients">
                                                    <input type="text" placeholder="Description">
                                                </div>
                                                <div class="fm-input pricing-price"><i class="data-unit">$</i>
                                                    <input type="text" placeholder="Price" data-unit="$">
                                                </div>
                                                <div class="fm-close"><a class="delete" href="#"><i class="fa fa-remove"></i></a></div></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <a href="#" class="button add-pricing-list-item">Add Item</a> <a href="#" class="button add-pricing-submenu">Add Category</a> </div>
                            </div>
                        </div>

                        <div class="add_utf_listing_section margin-top-45">
                            <div class="utf_add_listing_part_headline_part">
                                <h3><i class="sl sl-icon-docs"></i> Your Listing Feature</h3>
                            </div>
                            <div class="checkboxes in-row amenities_checkbox">
                                <ul>
                                    <li>
                                        <input id="check-a1" type="checkbox" name="check">
                                        <label for="check-a1">Accepts Credit Cards</label>
                                    </li>
                                    <li>
                                        <input id="check-b1" type="checkbox" name="check">
                                        <label for="check-b1">Smoking Allowed</label>
                                    </li>
                                    <li>
                                        <input id="check-c1" type="checkbox" name="check">
                                        <label for="check-c1">Bike Parking</label>
                                    </li>
                                    <li>
                                        <input id="check-d1" type="checkbox" name="check">
                                        <label for="check-d1">Hostels</label>
                                    </li>
                                    <li>
                                        <input id="check-e1" type="checkbox" name="check">
                                        <label for="check-e1">Wheelchair Accessible</label>
                                    </li>
                                    <li>
                                        <input id="check-f1" type="checkbox" name="check">
                                        <label for="check-f1">Wheelchair Internet</label>
                                    </li>
                                    <li>
                                        <input id="check-g1" type="checkbox" name="check">
                                        <label for="check-g1">Wheelchair Accessible</label>
                                    </li>
                                    <li>
                                        <input id="check-h1" type="checkbox" name="check" >
                                        <label for="check-h1">Parking Street</label>
                                    </li>
                                    <li>
                                        <input id="check-i1" type="checkbox" name="check" >
                                        <label for="check-i1">Wireless Internet</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="button preview">Save & Preview</a> </div>
                </div>
                @include('layouts.includes.footer_back')
            </div>
        </div>
    </div>

@endsection







@endsection





