@extends('dashboard.index')

@section('content')
    <div class="tab-pane fade show active" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab">
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
                                    href=""><img src="./img/Lr-delete-icon.png" alt=""></a>
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
                                    href=""><img src="./img/Lr-delete-icon.png" alt=""></a>
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
                                    href=""><img src="./img/Lr-delete-icon.png" alt=""></a>
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
                                    href=""><img src="./img/Lr-delete-icon.png" alt=""></a>
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
                                    href=""><img src="./img/Lr-delete-icon.png" alt=""></a>
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
                                    href=""><img src="./img/Lr-delete-icon.png" alt=""></a>
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
                                    href=""><img src="./img/Lr-delete-icon.png" alt=""></a>
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
                                    href=""><img src="./img/Lr-delete-icon.png" alt=""></a>
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
                                    href=""><img src="./img/Lr-delete-icon.png" alt=""></a>
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
                                    href=""><img src="./img/Lr-delete-icon.png" alt=""></a>
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
@endsection
