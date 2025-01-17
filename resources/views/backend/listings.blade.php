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
                    <li><a href="dashboard_add_listing.html"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
                    <li class="active">
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
        <div class="utf_dashboard_content">
            <div id="titlebar" class="dashboard_gradient">
                <div class="row">
                    <div class="col-md-12">
                        <h2>My Listings</h2>
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="index_1.html">Home</a></li>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li>My Listings</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="utf_dashboard_list_box margin-top-0">
                        <div class="sort-by my_sort_by">
                            <div class="utf_sort_by_select_item">
                                <select data-placeholder="Default Listing" class="utf_chosen_select_single">
                                    <option>Default Listing</option>
                                    <option>Active Listing</option>
                                    <option>Pending Listing</option>
                                    <option>Expired Listing</option>
                                </select>
                            </div>
                        </div>
                        <h4><i class="sl sl-icon-list"></i> My Listings</h4>
                        <ul>
                            <li>
                                <div class="utf_list_box_listing_item">
                                    <div class="utf_list_box_listing_item-img"><a href="#"><img src="images/utf_listing_item-01.jpg" alt=""></a></div>
                                    <div class="utf_list_box_listing_item_content">
                                        <div class="inner">
                                            <h3>Chontaduro Barcelona</h3>
                                            <span><i class="im im-icon-Hotel"></i> Hotels</span>
                                            <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                            <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                            <div class="utf_star_rating_section" data-rating="4.5">
                                                <div class="utf_counter_star_rating">(4.5)</div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="#" class="button gray"><i class="fa fa-pencil"></i> Edit</a>
                                    <a href="#" class="button gray"><i class="fa fa-trash-o"></i> Delete</a>
                                </div>
                            </li>
                            <li>
                                <div class="utf_list_box_listing_item">
                                    <div class="utf_list_box_listing_item-img"><a href="#"><img src="images/utf_listing_item-02.jpg" alt=""></a></div>
                                    <div class="utf_list_box_listing_item_content">
                                        <div class="inner">
                                            <h3>The Lounge & Bar</h3>
                                            <span><i class="im im-icon-Hotel"></i> Hotels</span>
                                            <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                            <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                            <div class="utf_star_rating_section" data-rating="4.5">
                                                <div class="utf_counter_star_rating">(4.5)</div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="#" class="button gray"><i class="fa fa-pencil"></i> Edit</a>
                                    <a href="#" class="button gray"><i class="fa fa-trash-o"></i> Delete</a>
                                </div>
                            </li>
                            <li>
                                <div class="utf_list_box_listing_item">
                                    <div class="utf_list_box_listing_item-img"><a href="#"><img src="images/utf_listing_item-03.jpg" alt=""></a></div>
                                    <div class="utf_list_box_listing_item_content">
                                        <div class="inner">
                                            <h3>Westfield Sydney</h3>
                                            <span><i class="im im-icon-Hotel"></i> Hotels</span>
                                            <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                            <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                            <div class="utf_star_rating_section" data-rating="4.5">
                                                <div class="utf_counter_star_rating">(4.5)</div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="#" class="button gray"><i class="fa fa-pencil"></i> Edit</a>
                                    <a href="#" class="button gray"><i class="fa fa-trash-o"></i> Delete</a>
                                </div>
                            </li>
                            <li>
                                <div class="utf_list_box_listing_item">
                                    <div class="utf_list_box_listing_item-img"><a href="#"><img src="images/utf_listing_item-04.jpg" alt=""></a></div>
                                    <div class="utf_list_box_listing_item_content">
                                        <div class="inner">
                                            <h3>Ruby Beauty Center</h3>
                                            <span><i class="im im-icon-Hotel"></i> Hotels</span>
                                            <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                            <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                            <div class="utf_star_rating_section" data-rating="4.5">
                                                <div class="utf_counter_star_rating">(4.5)</div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="#" class="button gray"><i class="fa fa-pencil"></i> Edit</a>
                                    <a href="#" class="button gray"><i class="fa fa-trash-o"></i> Delete</a>
                                </div>
                            </li>
                            <li>
                                <div class="utf_list_box_listing_item">
                                    <div class="utf_list_box_listing_item-img"><a href="#"><img src="images/utf_listing_item-05.jpg" alt=""></a></div>
                                    <div class="utf_list_box_listing_item_content">
                                        <div class="inner">
                                            <h3>UK Fitness Club</h3>
                                            <span><i class="im im-icon-Hotel"></i> Hotels</span>
                                            <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                            <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                            <div class="utf_star_rating_section" data-rating="4.5">
                                                <div class="utf_counter_star_rating">(4.5)</div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="#" class="button gray"><i class="fa fa-pencil"></i> Edit</a>
                                    <a href="#" class="button gray"><i class="fa fa-trash-o"></i> Delete</a>
                                </div>
                            </li>
                            <li>
                                <div class="utf_list_box_listing_item">
                                    <div class="utf_list_box_listing_item-img"><a href="#"><img src="images/utf_listing_item-06.jpg" alt=""></a></div>
                                    <div class="utf_list_box_listing_item_content">
                                        <div class="inner">
                                            <h3>Fairmont Pacific Rim</h3>
                                            <span><i class="im im-icon-Hotel"></i> Hotels</span>
                                            <span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
                                            <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>
                                            <div class="utf_star_rating_section" data-rating="4.5">
                                                <div class="utf_counter_star_rating">(4.5)</div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="#" class="button gray"><i class="fa fa-pencil"></i> Edit</a>
                                    <a href="#" class="button gray"><i class="fa fa-trash-o"></i> Delete</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="utf_pagination_container_part margin-top-30 margin-bottom-30">
                        <nav class="pagination">
                            <ul>
                                <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                                <li><a href="#" class="current-page">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="footer_copyright_part">Copyright © 2019 All Rights Reserved.</div>
                </div>
            </div>
        </div>
    </div>

@endsection





