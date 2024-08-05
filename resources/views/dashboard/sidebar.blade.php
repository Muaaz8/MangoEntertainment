<div class="col-xxl-2 col-xl-2 col-lg-3 col-md-3 d-menu">
    <div class="row">
        <div class="d-logo">
            <a href="#"><img src="./img/mango-------.png" alt=""></a>
        </div>
    </div>
    <div class="row">
        <div class="d-nav">
            <div class="nav flex-column nav-pills me-3 justify-content-start" id="v-pills-tab"
                role="tablist" aria-orientation="vertical">
                <button class="nav-link active justify-content-start" type="button" onclick="window.location.href='/dashboard'"><img
                        src="./img/dashboard-icon.png" alt="">Dashboard</button>
                <button class="nav-link" type="button" onclick="window.location.href='/hashtags'"><img
                        src="./img/hashtag-icon.png" alt="">Hastag</button>
                <button class="nav-link shown-click" onclick="window.location.href='/hashtags'"><img src="./img/user-icon.png" alt="">User</button>
                    {{-- <button style="display: none;" class="nav-admin-button show-click ">Admin</button> --}}

                <button class="nav-link" onclick="window.location.href='/#'"><img
                        src="./img/musical-note-icon.png" alt="">Music</button>

                <button class="nav-link" onclick="window.location.href='/#'"><img
                        src="./img/video-new-icon.png" alt="">Video</button>

                <button class="nav-link" onclick="window.location.href='/#'"><img
                        src="./img/new-post-icon.png" alt="">Post</button>

                <button class="nav-link" onclick="window.location.href='/gifts'"><img
                        src="./img/gift-box-icon.png" alt="">Gifts</button>

                <button class="nav-link" onclick="window.location.href='/#'"><img
                        src="./img/store-m-icon-.png" alt="">Store</button>

                <button class="nav-link" onclick="window.location.href='/#'"><img
                        src="./img/check-icon.png" alt="">Verification</button>

                <button class="nav-link" onclick="window.location.href='/#'"><img
                        src="./img/live-stream-icon.png" alt="">Live streaming</button>

                <button class="nav-link" onclick="window.location.href='/#'"><img
                        src="./img/games-icon.png" alt="">Games</button>


            </div>
        </div>
    </div>
    <div class="row mt-4 mb-4">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <div class="d-logout">
            <a class="logout-button" id="logout-button"><img src="./img/logout-new-icon.png" alt="">Logout</a>
        </div>
    </div>
</div>
<script>
    document.getElementById('logout-button').addEventListener('click', function() {
            document.getElementById('logout-form').submit();
        });
</script>
