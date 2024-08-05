@extends('dashboard.index')

@section('content')
<div class="tab-pane fade show active" id="v-pills-Gifts" role="tabpanel" aria-labelledby="v-pills-Gifts-tab">
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
@endsection
