<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zego Express Video Call - Viewer</title>
    <link rel="stylesheet" href="{{ asset('css/single-live.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="ZegoExpressWebRTC-3.4.0.js"></script>
</head>
<body>
    <div class="single-live-section">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-xl-2 col-lg-3 col-md-3">
                    <div class="wm-update-section">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Weekly</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Monthly</button>
                            </li>
                          </ul>
                          <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="weekly-update">
                                    <div class="wup-1">
                                        <span><img src="./img/Gold.png" alt=""></span>
                                        <span class="pf-img"><img src="./img/profile-image.png" alt=""></span>
                                    </div>
                                    <div class="wup-2">
                                        <p>Enrique Perkins</p>
                                        <p>Gifts:<img src="./img/dollar-coin.png" alt=""><span>100k</span></p>
                                    </div>
                                </div>
                                <div class="weekly-update">
                                    <div class="wup-1">
                                        <span><img src="./img/Silver.png" alt=""></span>
                                        <span class="pf-img"><img src="./img/profile-image.png" alt=""></span>
                                    </div>
                                    <div class="wup-2">
                                        <p>Enrique Perkins</p>
                                        <p>Gifts:<img src="./img/dollar-coin.png" alt=""><span>100k</span></p>
                                    </div>
                                </div>
                                <div class="weekly-update">
                                    <div class="wup-1">
                                        <span><img src="./img/Bronze.png" alt=""></span>
                                        <span class="pf-img"><img src="./img/profile-image.png" alt=""></span>
                                    </div>
                                    <div class="wup-2">
                                        <p>Enrique Perkins</p>
                                        <p>Gifts:<img src="./img/dollar-coin.png" alt=""><span>100k</span></p>
                                    </div>
                                </div>
                                <div class="weekly-update">
                                    <div class="wup-1">
                                        <span style="margin: 0px 7px 0px 5px; font-weight: 500;">4</span>
                                        <span class="pf-img"><img src="./img/profile-image.png" alt=""></span>
                                    </div>
                                    <div class="wup-2">
                                        <p>Enrique Perkins</p>
                                        <p>Gifts:<img src="./img/dollar-coin.png" alt=""><span>100k</span></p>
                                    </div>
                                </div>
                                <div class="weekly-update">
                                    <div class="wup-1">
                                        <span style="margin: 0px 7px 0px 5px; font-weight: 500;">5</span>
                                        <span class="pf-img"><img src="./img/profile-image.png" alt=""></span>
                                    </div>
                                    <div class="wup-2">
                                        <p>Enrique Perkins</p>
                                        <p>Gifts:<img src="./img/dollar-coin.png" alt=""><span>100k</span></p>
                                    </div>
                                </div>
                                <div class="weekly-update">
                                    <div class="wup-1">
                                        <span style="margin: 0px 7px 0px 5px; font-weight: 500;">6</span>
                                        <span class="pf-img"><img src="./img/profile-image.png" alt=""></span>
                                    </div>
                                    <div class="wup-2">
                                        <p>Enrique Perkins</p>
                                        <p>Gifts:<img src="./img/dollar-coin.png" alt=""><span>100k</span></p>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="weekly-update">
                                    <div class="wup-1">
                                        <span><img src="./img/Gold.png" alt=""></span>
                                        <span class="pf-img"><img src="./img/profile-image.png" alt=""></span>
                                    </div>
                                    <div class="wup-2">
                                        <p>Enrique Perkins</p>
                                        <p>Gifts:<img src="./img/dollar-coin.png" alt=""><span>100k</span></p>
                                    </div>
                                </div>
                                <div class="weekly-update">
                                    <div class="wup-1">
                                        <span><img src="./img/Silver.png" alt=""></span>
                                        <span class="pf-img"><img src="./img/profile-image.png" alt=""></span>
                                    </div>
                                    <div class="wup-2">
                                        <p>Enrique Perkins</p>
                                        <p>Gifts:<img src="./img/dollar-coin.png" alt=""><span>100k</span></p>
                                    </div>
                                </div>
                                <div class="weekly-update">
                                    <div class="wup-1">
                                        <span><img src="./img/Bronze.png" alt=""></span>
                                        <span class="pf-img"><img src="./img/profile-image.png" alt=""></span>
                                    </div>
                                    <div class="wup-2">
                                        <p>Enrique Perkins</p>
                                        <p>Gifts:<img src="./img/dollar-coin.png" alt=""><span>100k</span></p>
                                    </div>
                                </div>
                                <div class="weekly-update">
                                    <div class="wup-1">
                                        <span style="margin: 0px 7px 0px 5px; font-weight: 500;">1</span>
                                        <span class="pf-img"><img src="./img/profile-image.png" alt=""></span>
                                    </div>
                                    <div class="wup-2">
                                        <p>Enrique Perkins</p>
                                        <p>Gifts:<img src="./img/dollar-coin.png" alt=""><span>100k</span></p>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6 col-md-6">
                    <div class="single-video-content">
                        <div class="video-live-sec" id="remote-video">
                        </div>
                        <div class="small-screen" id="local-video"></div>
                    </div>
                    <div class="video-live-detail">
                        <div class="vl-detail-right">
                           <div class="vl-child-1">
                            <img src="./img/profile-image.png" alt="">
                           </div>
                           <div class="vl-child-2">
                            <p>Kayalee Jane<img src="./img/profile-details-img.png" alt=""></p>
                            <p>id: 01251421 <a href=""><img src="./img/tabler_copy.png" alt=""></a></p>
                            <span class="age-sec">
                                <i class="fa-solid fa-mars"></i>
                                    24</span>
                            <span class="level-sec">Lv.2</span>
                           </div>
                           <!-- <div class="vl-child-3"></div> -->
                        </div>
                        <div class="vl-detail-left">
                           <p>369<img src="./img/groups.png" alt=""></p>
                           <button class="subscribe-button">Subscribe<img src="./img/bolt (light).png"
                            alt=""></button>
                           <button class="follow-button">Follow</button>
                        </div>
                    </div>
                    <div class="choose-gifts">
                        <p class="chg-heading">Choose the gifts the broadcaster like and show them appreciation</p>
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                <div class="gift-slide-sec">
                                    <img src="./img/bag.png" alt="">
                                    <p>Dark fantasy</p>
                                    <span><img src="./img/dollar-coin.png" alt="">200</span>

                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="gift-slide-sec">
                                    <img src="./img/almeic-stone-nwly.png" alt="">
                                    <p>Almeic Stone</p>
                                    <span><img src="./img/dollar-coin.png" alt="">200</span>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="gift-slide-sec">
                                    <img src="./img/shaphire.png" alt="">
                                    <p>Shaphire</p>
                                    <span><img src="./img/dollar-coin.png" alt="">200</span>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="gift-slide-sec">
                                    <img src="./img/blade.png" alt="">
                                    <p>Blade</p>
                                    <span><img src="./img/dollar-coin.png" alt="">200</span>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="gift-slide-sec">
                                    <img src="./img/coin.png" alt="">
                                    <p>coin</p>
                                    <span><img src="./img/dollar-coin.png" alt="">200</span>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="gift-slide-sec">
                                    <img src="./img/scroll.png" alt="">
                                    <p>scroll</p>
                                    <span><img src="./img/dollar-coin.png" alt="">200</span>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="gift-slide-sec">
                                    <img src="./img/ring.png" alt="">
                                    <p>Ring</p>
                                    <span><img src="./img/dollar-coin.png" alt="">200</span>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="gift-slide-sec">
                                    <img src="./img/bag.png" alt="">
                                    <p>Dark fantasy</p>
                                    <span><img src="./img/dollar-coin.png" alt="">200</span>
                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div class="gift-slide-sec">
                                    <img src="./img/bag.png" alt="">
                                    <p>Dark fantasy</p>
                                    <span><img src="./img/dollar-coin.png" alt="">200</span>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-pagination"></div>
                          </div>

                          <div class="balance">
                            <div class="blnce-1">
                                <p>Balance: 30 <img src="./img/dollar-coin.png" alt=""></p>
                                <!-- <span></span> -->
                                <button class="get-coins-button">Get Coins</button>
                            </div>
                            <div class="blnce-2">
                                <ul>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">10</a></li>
                                    <li><a href="#">99</a></li>
                                    <li><a href="#">199</a></li>
                                    <li><a href="#">999</a></li>
                                    <button class="send-button">Send</button>
                                </ul>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3">
                    <div class="comment-section">
                       {{--<div class="wrap-up">
                            <div class="com-sec">
                                <img class="cmnt" src="./img/profile-image.png" alt="">
                                <p>vant_21:</p>
                                <span><img src="./img/gemstones.png" alt="">LV.53</span>
                            </div>
                            <div class="comments">
                                    <p>The Game is to Harrrzd</p>
                            </div>
                       </div>
                        <div class="wrap-up">
                        <div class="com-sec">
                            <img class="cmnt" src="./img/profile-image.png" alt="">
                        <p>vant_21:</p>
                        <span><img src="./img/gemstones.png" alt="">LV.53</span>
                       </div>
                       <div class="comments">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                       </div>
                       </div>
                       <div class="wrap-up">
                        <div class="com-sec">
                            <img class="cmnt" src="./img/profile-image.png" alt="">
                        <p>vant_21:</p>
                        <span><img src="./img/gemstones.png" alt="">LV.53</span>
                       </div>
                       <div class="comments">
                        <p>are you finish the 2part</p>
                       </div>
                       </div>
                       <div class="wrap-up">
                        <div class="com-sec">
                            <img class="cmnt" src="./img/profile-image.png" alt="">
                        <p>vant_21:</p>
                        <span><img src="./img/gemstones.png" alt="">LV.53</span>
                       </div>
                       <div class="comments">
                        <p>The Game is to Harrrzd</p>
                       </div>
                       </div>
                       <div class="wrap-up">
                        <div class="com-sec">
                            <img class="cmnt" src="./img/profile-image.png" alt="">
                        <p>vant_21:</p>
                        <span><img src="./img/gemstones.png" alt="">LV.53</span>
                       </div>
                       <div class="comments">
                        <p>The Game is to Harrrzd</p>
                       </div>
                       </div> --}}

                       <div class="send-coment">
                            <input type="text" id="message" placeholder="Add a Comment">
                            <button class="send-button" onclick="sendMessage()">Send</button>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    const appId = 1101904631;
    const server = "wss://webliveroom1101904631-api.coolzcloud.com/ws";
    const roomID = "6644de0a19595";
    const userID = "0mf2FtBXsu";
    const userName = "test2";
    const token = "04AAAAAGZN/noAEHRiczBqYnFneXR6ZnEwM3cAsLb6X7RhMViEWvs7hSfEEqs9qHKVzo35YUi6or/X1qWvvHWH+MNN5NqpncdVCpEBAB1QkJvhjsrDcc133QaVZ5iqIv5zdnZKCUfgGPwoLzvb8uzOiaaqkdgEH8NDssZia5AksjR6W+SJH2uORL15PeDK0ZxtUb0rLDNGK04EZUOLUAVFmYNoihehzCo8D9tsLa6I+esAPoulGo2Bb592ZO5BtDoHnTbLQUmo61mwGUjK";
    const streamID = '2';
    var localStream;
    var screenStream;

    var localStreamId;
    var remoteStreamId;

    let option = {
        videoBitrate: 300,
        audioBitrate: 48,
            camera: {
            audio: true,
            video : {
                quality: 4,
                width: 480,
                height: 480,
                frameRate: 15
            }
        }
    }

    const zg = new ZegoExpressEngine(appId, server);
    async function initZego() {
        await zg.loginRoom(roomID, token, { userID, userName });
    }

    initZego();
    zg.on('roomStateUpdate', (roomID,state,errorCode,extendedData) => {
        if (state == 'DISCONNECTED') {
            console.log("disconnected")
        }
        if (state == 'CONNECTING') {
            console.log("connecting...")
        }
        if (state == 'CONNECTED') {
            console.log("connected")
        }
    })

    zg.on('roomStreamUpdate', async (roomID, updateType, streamList) => {
        console.log(streamList)
        if (updateType === 'ADD') {
            streamList.forEach(async (stream, key) => {
                const remoteStream = await zg.startPlayingStream(stream.streamID,option);
                const remoteVideoElement = document.createElement('video');
                remoteVideoElement.srcObject = remoteStream;
                remoteVideoElement.autoplay = true;
                remoteVideoElement.controls = true;
                remoteVideoElement.muted = true;
                remoteVideoElement.style.width = '100%';
                remoteVideoElement.style.height = '100%';
                if (key === 0) {
                    document.getElementById('local-video').appendChild(remoteVideoElement);
                    localStreamId = stream.streamID;
                } else {
                    remoteStreamId = stream.streamID;
                    document.getElementById('remote-video').appendChild(remoteVideoElement);
                }
            });
        }
        if(updateType === "DELETE"){
            streamList.forEach(async (stream) => {
                if (stream.streamID === localStreamId) {
                    const localVideoElement = document.getElementById('local-video').querySelector('video');
                    if (localVideoElement) {
                        localVideoElement.parentNode.removeChild(localVideoElement);
                    }
                    localStreamId = null;
                } else if (stream.streamID === remoteStreamId) {
                    const remoteVideoElement = document.getElementById('remote-video').querySelector('video');
                    if (remoteVideoElement) {
                        remoteVideoElement.parentNode.removeChild(remoteVideoElement);
                    }
                    localStreamId = null;
                }
            });
        }
    });

    async function sendMessage(){

        inputMessage = document.querySelector('#message').value;
        html = '<div class="wrap-up"><div class="com-sec"><img class="cmnt" src="./img/profile-image.png" alt="">'+
                '<p>'+userName+':</p><span><img src="./img/gemstones.png" alt="">LV.53</span></div>'+
                '<div class="comments"><p>'+inputMessage+'</p></div></div>';
        document.querySelector('#message').value = "";
        try {
            const isSent = await zg.sendBroadcastMessage(roomID, inputMessage)
            document.querySelector(".comment-section").insertAdjacentHTML('beforeend', html);
            console.log('>>> sendMsg success,', isSent);
        } catch (error) {
            console.log('>>> sendMsg, error:', error);
        };
    }

    zg.on('IMRecvBroadcastMessage', (roomID, chatData) => {
        let message = {
            ID:'zego' + chatData[0].fromUser.userID + chatData[0].sendTime,
            name: chatData[0].fromUser.userName,
            content: chatData[0].message
        }
        html = '<div class="wrap-up"><div class="com-sec"><img class="cmnt" src="./img/profile-image.png" alt="">'+
                '<p>'+message.name+':</p><span><img src="./img/gemstones.png" alt="">LV.53</span></div>'+
                '<div class="comments"><p>'+message.content+'</p></div></div>';
        document.querySelector(".comment-section").insertAdjacentHTML('beforeend',html);
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 7,
        spaceBetween: 10,
        pagination: {
        el: ".swiper-pagination",
        clickable: true,
        },
        breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 10,
        },
        1200: {
            slidesPerView: 7,
            spaceBetween: 10,
        }
        },
    });
</script>
</html>
