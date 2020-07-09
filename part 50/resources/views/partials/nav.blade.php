<!-- HEADER -->

<div style="position: relative;">
    <div class="header">
        <div class="menu_all" id="myHeader">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-4 col-md-4 col-lg-4">
                        <div class="logo">
                            <a href="home.html">
                                <div class="logo_img">
                                    <img src="https://info.appifylab.com/img/appifylab_logo.png" alt="image">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-8 col-md-8 col-lg-8">
                        <div class="menu_right d-flex">
                            <div class="menu_right_list">
                                <ul class="menu_right_ul d-flex">
                                    <li class="dis_fx_cntr">
                                        <a href="/">HOME</a>
                                    </li>

                                    @if(count($categories)>0)
                                        @foreach ($categories as $nav)
                                            <li class="dis_fx_cntr">
                                                <a href="home.html">{{$nav->categoryName}}</a>
                                            </li>
                                        @endforeach
                                    @endif




                                    <li>
                                        <a href="about_us.html">about</a>
                                    </li>

                                    <li>
                                        <a href="contact.html">CONTACT</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="menu_srch d-flex">
                                <i class="fas fa-search search_btn"></i>
                                <!-- SEARCH INPUT -->
                                <div class="header_serch dis_none">
                                    <div class="header_serch_input">
                                        <input type="" name="" placeholder="Search">
                                    </div>
                                    <div class="header_serch_i">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                                <!-- SEARCH INPUT -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HEADER -->
