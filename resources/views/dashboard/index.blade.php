@include('dashboard.header')
@include('dashboard.sidebar')

<div class="col-xxl-10 col-xl-10 col-lg-9 col-md-9">
    @include('dashboard.topbar')
    <div class="row mb-4">
        <div class="d-nav-content">
            <div class="tab-content" id="v-pills-tabContent">
                @yield('content')
                {{--  <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel"
                    aria-labelledby="v-pills-dashboard-tab">
                    <div class="dashboard-content">
                        <div class="d-box">
                            <div class="d-detail">
                                <h4>500</h4>
                                <p>Total User</p>
                            </div>
                            <div class="d-img">
                                <img src="./img/bill-icon.png" alt="">
                            </div>
                        </div>
                        <div class="d-box">
                            <div class="d-detail">
                                <h4>600k</h4>
                                <p>Total Earnings</p>
                            </div>
                            <div class="d-img">
                                <img src="./img/bill-icon.png" alt="">
                            </div>
                        </div>
                        <div class="d-box">
                            <div class="d-detail">
                                <h4>100k</h4>
                                <p>Total Widthdrawl</p>
                            </div>
                            <div class="d-img">
                                <img src="./img/bill-icon.png" alt="">
                            </div>
                        </div>
                        <div class="d-box">
                            <div class="d-detail">
                                <h4>500</h4>
                                <p>Today Redistration</p>
                            </div>
                            <div class="d-img">
                                <img src="./img/bill-icon.png" alt="">
                            </div>
                        </div>
                        <div class="d-box">
                            <div class="d-detail">
                                <h4>39</h4>
                                <p>Verification Request</p>
                            </div>
                            <div class="d-img">
                                <img src="./img/bill-icon.png" alt="">
                            </div>
                        </div>
                        <div class="d-box">
                            <div class="d-detail">
                                <h4>130</h4>
                                <p>Total Report</p>
                            </div>
                            <div class="d-img">
                                <img src="./img/bill-icon.png" alt="">
                            </div>
                        </div>
                        <div class="d-box">
                            <div class="d-detail">
                                <h4>65k</h4>
                                <p>Total Verified User</p>
                            </div>
                            <div class="d-img">
                                <img src="./img/bill-icon.png" alt="">
                            </div>
                        </div>
                        <div class="d-box">
                            <div class="d-detail">
                                <h4>900</h4>
                                <p>Total Music</p>
                            </div>
                            <div class="d-img">
                                <img src="./img/bill-icon.png" alt="">
                            </div>
                        </div>
                        <div class="d-box">
                            <div class="d-detail">
                                <h4>1.5k</h4>
                                <p>Total user</p>
                            </div>
                            <div class="d-img">
                                <img src="./img/bill-icon.png" alt="">
                            </div>
                        </div>
                        <div class="d-box">
                            <div class="d-detail">
                                <h4>2.5k</h4>
                                <p>Total Videos</p>
                            </div>
                            <div class="d-img">
                                <img src="./img/bill-icon.png" alt="">
                            </div>
                        </div>
                        <div class="d-box">
                            <div class="d-detail">
                                <h4>300</h4>
                                <p>Total Live User</p>
                            </div>
                            <div class="d-img">
                                <img src="./img/bill-icon.png" alt="">
                            </div>
                        </div>
                        <div class="d-box">
                            <div class="d-detail">
                                <h4>25K</h4>
                                <p>Subscriber</p>
                            </div>
                            <div class="d-img">
                                <img src="./img/subscriber-icon.png" alt="">
                            </div>
                        </div>

                </div>
                </div>
                <div class="tab-pane fade" id="v-pills-hashtag" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div id="div1" class="hashtag-table mt-4">
                        <div class="hash-top-nav">
                            <div class="h-tp-1">
                                <div class="tp-b-1">
                                    <span>show</span>
                                    <select aria-label="Default select example">
                                        <!-- <option selected>Open this select menu</option> -->
                                        <option value="1">10</option>
                                        <option value="2">20</option>
                                        <option value="3">50</option>
                                    </select>
                                    <span>Entries</span>
                                </div>
                                <div class="tp-b-2">
                                    <input type="search" placeholder="Search">
                                    <img src="./img/new-search-icon.png" alt="">
                                </div>
                            </div>
                            <div class="hash-button-div">
                                <a class="hashtag-button" id="toggleButton" href="#">+ Hashtag</a>
                            </div>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th colspan="2">Hashtag</th>
                                    <th>Post</th>
                                    <th>Video</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td colspan="2">handsome</td>
                                    <td>15</td>
                                    <td>104</td>
                                    <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                            href="#"><img src="./img/Lr-delete-icon.png" alt=""></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td colspan="2">handsome</td>
                                    <td>15</td>
                                    <td>104</td>
                                    <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                            href="#"><img src="./img/Lr-delete-icon.png" alt=""></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td colspan="2">handsome</td>
                                    <td>15</td>
                                    <td>104</td>
                                    <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                            href="#"><img src="./img/Lr-delete-icon.png" alt=""></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td colspan="2">handsome</td>
                                    <td>15</td>
                                    <td>104</td>
                                    <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                            href="#"><img src="./img/Lr-delete-icon.png" alt=""></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td colspan="2">handsome</td>
                                    <td>15</td>
                                    <td>104</td>
                                    <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                            href="#"><img src="./img/Lr-delete-icon.png" alt=""></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td colspan="2">handsome</td>
                                    <td>15</td>
                                    <td>104</td>
                                    <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                            href="#"><img src="./img/Lr-delete-icon.png" alt=""></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td colspan="2">handsome</td>
                                    <td>15</td>
                                    <td>104</td>
                                    <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                            href="#"><img src="./img/Lr-delete-icon.png" alt=""></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td colspan="2">handsome</td>
                                    <td>15</td>
                                    <td>104</td>
                                    <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                            href="#"><img src="./img/Lr-delete-icon.png" alt=""></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td colspan="2">handsome</td>
                                    <td>15</td>
                                    <td>104</td>
                                    <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                            href="#"><img src="./img/Lr-delete-icon.png" alt=""></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td colspan="2">handsome</td>
                                    <td>15</td>
                                    <td>104</td>
                                    <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                            href="#"><img src="./img/Lr-delete-icon.png" alt=""></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td colspan="2">handsome</td>
                                    <td>15</td>
                                    <td>104</td>
                                    <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                            href="#"><img src="./img/Lr-delete-icon.png" alt=""></a>
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                        <nav class="all-navigation mt-3" aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link page-first" href="#">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link num" href="#">1</a></li>
                                <li class="page-item"><a class="page-link num" href="#">2</a></li>
                                <li class="page-item"><a class="page-link num m-0" href="#">3</a></li>
                                <li class="page-item"><a class="page-link page-last" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>

                    </div>

                    <div class="hashtag-edit" id="div2" style="display: none;">
                        <div class="hte-1 mb-4">
                            <p>Add New Hashtag</p><span><img src="./img/close-icon.png" alt=""></span>
                        </div>
                        <div class="hte-2 mb-4"><label for="*Hashtag">Hashtag</label>
                            <textarea name="" id="hedit-text" rows="4">add multiple hashtag separate by comma(),</textarea>
                        </div>
                        <div class="hte-3"><a class="cancel-button" href="">Cancel</a><a class="add-button"
                                href="">Add</a></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab">
                    <section class="user-section mt-4">
                        <div class="user-top-nav">
                            <div class="tp-b-1">
                                <span>show</span>
                                <select aria-label="Default select example">
                                    <!-- <option selected>Open this select menu</option> -->
                                    <option value="1">10</option>
                                    <option value="2">20</option>
                                    <option value="3">50</option>
                                </select>
                                <span>Entries</span>
                            </div>
                            <div class="tp-b-2">
                                <input type="search" placeholder="Search">
                                <img src="./img/new-search-icon.png" alt="">
                            </div>

                        </div>
                        <div class="user-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Profile</th>
                                        <th>name</th>
                                        <th>Login</th>
                                        <th>Device</th>
                                        <th>Country</th>
                                        <th>Coin</th>
                                        <th>Revenew</th>
                                        <th>Gender</th>
                                        <th>Verification</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>0198735</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>Jaqline</td>
                                        <td><img src="./img/gogle-icon.png" alt="">Google</td>
                                        <td>Android</td>
                                        <td><img src="./img/jordan-icon.png" alt=""></td>
                                        <td><img src="./img/coin-icon.png" alt="">16</td>
                                        <td>$104</td>
                                        <td>Male</td>
                                        <td><a class="Verified-button" href="#">Verified</a></td>
                                        <td><a href=""><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href=""><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0198735</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>Jaqline</td>
                                        <td><img src="./img/gogle-icon.png" alt="">Google</td>
                                        <td>Android</td>
                                        <td><img src="./img/jordan-icon.png" alt=""></td>
                                        <td><img src="./img/coin-icon.png" alt="">16</td>
                                        <td>$104</td>
                                        <td>Male</td>
                                        <td><a class="Verified-button" href="#">Verified</a></td>
                                        <td><a href=""><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href=""><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0198735</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>Jaqline</td>
                                        <td><img src="./img/gogle-icon.png" alt="">Google</td>
                                        <td>Android</td>
                                        <td><img src="./img/jordan-icon.png" alt=""></td>
                                        <td><img src="./img/coin-icon.png" alt="">16</td>
                                        <td>$104</td>
                                        <td>Male</td>
                                        <td><a class="Verified-button" href="#">Verified</a></td>
                                        <td><a href=""><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href=""><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0198735</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>Jaqline</td>
                                        <td><img src="./img/gogle-icon.png" alt="">Google</td>
                                        <td>Android</td>
                                        <td><img src="./img/jordan-icon.png" alt=""></td>
                                        <td><img src="./img/coin-icon.png" alt="">16</td>
                                        <td>$104</td>
                                        <td>Male</td>
                                        <td><a class="Verified-button" href="#">Verified</a></td>
                                        <td><a href=""><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href=""><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0198735</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>Jaqline</td>
                                        <td><img src="./img/gogle-icon.png" alt="">Google</td>
                                        <td>Android</td>
                                        <td><img src="./img/jordan-icon.png" alt=""></td>
                                        <td><img src="./img/coin-icon.png" alt="">16</td>
                                        <td>$104</td>
                                        <td>Male</td>
                                        <td><a class="Verified-button" href="#">Verified</a></td>
                                        <td><a href=""><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href=""><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0198735</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>Jaqline</td>
                                        <td><img src="./img/gogle-icon.png" alt="">Google</td>
                                        <td>Android</td>
                                        <td><img src="./img/jordan-icon.png" alt=""></td>
                                        <td><img src="./img/coin-icon.png" alt="">16</td>
                                        <td>$104</td>
                                        <td>Male</td>
                                        <td><a class="Verified-button" href="#">Verified</a></td>
                                        <td><a href=""><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href=""><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0198735</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>Jaqline</td>
                                        <td><img src="./img/gogle-icon.png" alt="">Google</td>
                                        <td>Android</td>
                                        <td><img src="./img/jordan-icon.png" alt=""></td>
                                        <td><img src="./img/coin-icon.png" alt="">16</td>
                                        <td>$104</td>
                                        <td>Male</td>
                                        <td><a class="Verified-button" href="#">Verified</a></td>
                                        <td><a href=""><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href=""><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0198735</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>Jaqline</td>
                                        <td><img src="./img/gogle-icon.png" alt="">Google</td>
                                        <td>Android</td>
                                        <td><img src="./img/jordan-icon.png" alt=""></td>
                                        <td><img src="./img/coin-icon.png" alt="">16</td>
                                        <td>$104</td>
                                        <td>Male</td>
                                        <td><a class="Verified-button" href="#">Verified</a></td>
                                        <td><a href=""><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href=""><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0198735</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>Jaqline</td>
                                        <td><img src="./img/gogle-icon.png" alt="">Google</td>
                                        <td>Android</td>
                                        <td><img src="./img/jordan-icon.png" alt=""></td>
                                        <td><img src="./img/coin-icon.png" alt="">16</td>
                                        <td>$104</td>
                                        <td>Male</td>
                                        <td><a class="Verified-button" href="#">Verified</a></td>
                                        <td><a href=""><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href=""><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0198735</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>Jaqline</td>
                                        <td><img src="./img/gogle-icon.png" alt="">Google</td>
                                        <td>Android</td>
                                        <td><img src="./img/jordan-icon.png" alt=""></td>
                                        <td><img src="./img/coin-icon.png" alt="">16</td>
                                        <td>$104</td>
                                        <td>Male</td>
                                        <td><a class="Verified-button" href="#">Verified</a></td>
                                        <td><a href=""><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href=""><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                            <nav class="all-navigation mt-3" aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link page-first" href="#">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link num" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link num" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link num m-0" href="#">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link page-last" href="#">Next</a></li>
                                </ul>
                            </nav>

                        </div>
                    </section>
                </div>
                <div class="tab-pane fade" id="v-pills-Music" role="tabpanel" aria-labelledby="v-pills-Music-tab">
                    ...</div>

                <div class="tab-pane fade" id="v-pills-Video" role="tabpanel" aria-labelledby="v-pills-Video-tab">
                    ...</div>

                <div class="tab-pane fade" id="v-pills-Post" role="tabpanel" aria-labelledby="v-pills-Post-tab">...
                </div>

                <div class="tab-pane fade" id="v-pills-Gifts" role="tabpanel" aria-labelledby="v-pills-Gifts-tab">
                    <section id="div3" class="gift-section">
                        <div class="gift-table mt-4">
                            <div class="gift-top-nav">
                                <div class="g-tp-1">
                                    <div class="gp-b-1">
                                        <span>show</span>
                                        <select aria-label="Default select example">
                                            <!-- <option selected>Open this select menu</option> -->
                                            <option value="1">10</option>
                                            <option value="2">20</option>
                                            <option value="3">50</option>
                                        </select>
                                        <span>Entries</span>
                                    </div>
                                    <div class="gp-b-2">
                                        <input type="search" placeholder="Search">
                                        <img src="./img/new-search-icon.png" alt="">
                                    </div>
                                </div>
                                <div class="gift-button-div">
                                    <a class="gift-button" id="toggle-Button" href="#">+ Gift</a>
                                </div>
                            </div>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Object id</th>
                                        <th>Gift</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Coin</th>
                                        <th>Created At</th>
                                        <th>Ation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>3245</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>25</td>
                                        <td><a class="all-gift-button" href="">All Gifts</a></td>
                                        <td><img src="./img/coin-icon.png" alt="">15</td>
                                        <td>
                                            <date>2024-09-28</date><time>03:58:04</time>
                                        </td>
                                        <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href="#"><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3245</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>25</td>
                                        <td><a class="new-button" href="">New</a></td>
                                        <td><img src="./img/coin-icon.png" alt="">15</td>
                                        <td>
                                            <date>2024-09-28</date><time>03:58:04</time>
                                        </td>
                                        <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href="#"><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3245</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>25</td>
                                        <td><a class="all-gift-button" href="">All Gifts</a></td>
                                        <td><img src="./img/coin-icon.png" alt="">15</td>
                                        <td>
                                            <date>2024-09-28</date><time>03:58:04</time>
                                        </td>
                                        <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href="#"><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3245</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>25</td>
                                        <td><a class="all-gift-button" href="">All Gifts</a></td>
                                        <td><img src="./img/coin-icon.png" alt="">15</td>
                                        <td>
                                            <date>2024-09-28</date><time>03:58:04</time>
                                        </td>
                                        <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href="#"><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3245</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>25</td>
                                        <td><a class="new-button" href="">New</a></td>
                                        <td><img src="./img/coin-icon.png" alt="">15</td>
                                        <td>
                                            <date>2024-09-28</date><time>03:58:04</time>
                                        </td>
                                        <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href="#"><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3245</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>25</td>
                                        <td><a class="all-gift-button" href="">All Gifts</a></td>
                                        <td><img src="./img/coin-icon.png" alt="">15</td>
                                        <td>
                                            <date>2024-09-28</date><time>03:58:04</time>
                                        </td>
                                        <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href="#"><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3245</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>25</td>
                                        <td><a class="all-gift-button" href="">All Gifts</a></td>
                                        <td><img src="./img/coin-icon.png" alt="">15</td>
                                        <td>
                                            <date>2024-09-28</date><time>03:58:04</time>
                                        </td>
                                        <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href="#"><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3245</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>25</td>
                                        <td><a class="all-gift-button" href="">All Gifts</a></td>
                                        <td><img src="./img/coin-icon.png" alt="">15</td>
                                        <td>
                                            <date>2024-09-28</date><time>03:58:04</time>
                                        </td>
                                        <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href="#"><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3245</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>25</td>
                                        <td><a class="all-gift-button" href="">All Gifts</a></td>
                                        <td><img src="./img/coin-icon.png" alt="">15</td>
                                        <td>
                                            <date>2024-09-28</date><time>03:58:04</time>
                                        </td>
                                        <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href="#"><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3245</td>
                                        <td><img src="./img/profile-image.png" alt=""></td>
                                        <td>25</td>
                                        <td><a class="all-gift-button" href="">All Gifts</a></td>
                                        <td><img src="./img/coin-icon.png" alt="">15</td>
                                        <td>
                                            <date>2024-09-28</date><time>03:58:04</time>
                                        </td>
                                        <td><a href="#"><img src="./img/Lr-edit-icon.png" alt=""></a><a
                                                href="#"><img src="./img/Lr-delete-icon.png"
                                                    alt=""></a>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>

                            <nav class="all-navigation mt-3" aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link page-first" href="#">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link num" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link num" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link num m-0" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link page-last" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </section>

                    <div id="div4" style="display: none;" class="Add-new-gift">
                        <div class="gift-box-1">
                            <p>Add New gift</p><img src="./img/close-icon.png" alt="">
                        </div>
                        <div class="gift-details">
                            <div class="fin">
                                <label for="name"><span class="color-red">*</span>Name</label>
                                <input type="text" placeholder="Give a name to a gift">
                            </div>
                            <div class="fse">
                                <label for="category"><span class="color-red">*</span>Category</label>
                                <select name="category">
                                    <option value="All Gifts">All Gifts</option>
                                    <option value="New">New</option>
                                    <option value="Store">Store</option>
                                </select>
                            </div>
                            <div class="fin">
                                <label for="lname"><span class="color-red">*</span>Coins</label>
                                <input type="text" placeholder="Coins Needed to send the gift">
                            </div>
                        </div>
                        <h6>Upload Files</h6>
                        <div class="gift-darg-drop">

                            <div class="gdd-upload-1">
                                <div class="gup-box-1">
                                    <img src="./img/png-uploader-icon.png" alt="">
                                    <span><img src="./img/cloud-icon.png" alt="">Upload PNG</span>
                                </div>
                                <div class="gup-box-2">
                                    <img src="./img/svga-uploader-icon.png" alt="">
                                    <span><img src="./img/cloud-icon.png" alt="">Upload SVGA</span>
                                </div>
                            </div>
                            <div class="gdd-upload-2">
                                <img src="./img/music-icon-lr.png" alt="">
                                <p><img src="./img/cloud-icon.png" alt="">Upload Music</p>
                            </div>
                        </div>
                        <div class="add-cancel-button">
                            <a class="cancel-button" href="">Cancel</a>
                            <a class="add-button" href="">Add</a>
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="v-pills-Store" role="tabpanel" aria-labelledby="v-pills-Store-tab">
                    ...</div>

                <div class="tab-pane fade" id="v-pills-Verification" role="tabpanel"
                    aria-labelledby="v-pills-Verification-tab">...</div>

                <div class="tab-pane fade" id="v-pills-Live-streaming" role="tabpanel"
                    aria-labelledby="v-pills-Live-streaming-tab">...</div>

                <div class="tab-pane fade" id="v-pills-Games" role="tabpanel" aria-labelledby="v-pills-Games-tab">
                    ...</div>

                <div class="tab-pane fade" id="v-pills-Verification" role="tabpanel"
                    aria-labelledby="v-pills-Verification-tab">...</div>

                <div class="tab-pane fade" id="v-pills-Verification" role="tabpanel"
                    aria-labelledby="v-pills-Verification-tab">...</div>--}}
            </div>
        </div>
    </div>
    @include('dashboard.footer')


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.2/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".shown-click").click(function() {
                $(".show-click").toggle();
            });

        });
    </script>
    <script>
        new DataTable('#hashtag-info');
    </script>

    <script>
        document.getElementById('toggleButton').addEventListener('click', function() {
            let div1 = document.querySelector('.hashtag-table');
            let div2 = document.getElementById('div2');

            div1.style.display = 'none';
            div2.style.display = 'block';
        });
    </script>
    <script>
        document.getElementById('toggle-Button').addEventListener('click', function() {
            let div3 = document.querySelector('.gift-section');
            let div4 = document.getElementById('div4');

            div3.style.display = 'none';
            div4.style.display = 'block';
        });
    </script>

    </body>

    </html>
