<html>

<head>
    <meta charset="UTF-8">
    <title>Zego Express Video Call</title>
    <style type="text/css">
        * {
            font-family: sans-serif;
        }

        h1,
        h4 {
            text-align: center;
        }

        #local-video, #remote-video {
            width: 400px;
            height: 300px;
            border: 1px solid #dfdfdf;
        }

        #local-video {
            position: relative;
            margin: 0 auto;
            display: block;
        }

        #remote-video {
            display: flex;
            margin: auto;
            position: relative !important;
        }
    </style>
    <script src="{{ asset('ZegoExpressWebRTC-3.4.0.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <h1>
        Zego RTC Video Call
    </h1>
    <h4>Local video</h4>
    <div id="local-video"></div>
    <button class="btn btn-primary" id="screenShareButton" onclick="screenShare()"> Screen Share </button>
    <button class="btn btn-primary d-none" id="stopScreenShareButton" onclick="stopScreenShare()"> Stop Screen Share </button>
    <button class="btn btn-primary" onclick="camera()"> Camera </button>
    <button class="btn btn-primary" onclick="microphone()"> Microphone </button>
    <h4>Remote video</h4>
    <button class="btn btn-primary" onclick="audio()"> Audio </button>
    <div id="remote-video"></div>
</body>

<script>
    const appId = 1101904631;
    const server = "wss://webliveroom1101904631-api.coolzcloud.com/ws";
    const roomID = "6644de0a19595";
    const userID = "cFR2dMKDtw";
    const userName = "test";
    const token = "04AAAAAGZHfJEAEHZyenJvb2NtMzk2Y3dibHQAsPRINNa7UhmIxePYImG5uFu1VwN5u2j8L9aKGCcKmAMWDvIcgkXDEVjqheO3tQdwVcqFboUnN5OrYgKyzhzBM82Zib7/pDD8OKGMR79I26Eidj+be/u8oYMfWD48Rn7RZDK/1eOM8FZWjQrHP06KgnGWk/fG0zd6WIxfWHCBHfUPXvPsKFPIpg24gvjjic3/fdXGWAPrCl0Jp+1DsE3CiOd0uX9Vlf+JrWUX43dNjgj3";
    const streamID = '{{uniqid()}}';
    var localStream;
    var screenStreamId;
    var screenStream;
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
        const result = await zg.loginRoom(roomID, token, {userID, userName}, {userUpdate: true});
        localStream = await zg.createZegoStream(option);
        localStream.playVideo(document.querySelector("#local-video"));
        // localStream is the MediaStream object created by calling creatStream in the previous step.
        zg.startPublishingStream(streamID, localStream)

        // const remoteStream = await zg.startPlayingStream(streamID);
        // // The remote-video is the <div> element's id on your webpage.
        // remoteView.play("remote-video", {enableAutoplayDialog:true});
    }

    initZego();
    // Callback for updates on the current user's room connection status.
    zg.on('roomStateUpdate', (roomID,state,errorCode,extendedData) => {
        if (state == 'DISCONNECTED') {
            // Disconnected from the room
        }

        if (state == 'CONNECTING') {
            // Connecting to the room
        }

        if (state == 'CONNECTED') {
            // Connected to the room
        }
    })

    // Callback for updates on the status of ther users in the room.
    zg.on('roomUserUpdate', (roomID, updateType, userList) => {
        console.warn(
            `roomUserUpdate: room ${roomID}, user ${updateType === 'ADD' ? 'added' : 'left'} `,
            JSON.stringify(userList),
        );
    });

    // Callback for updates on the status of the streams in the room.
    zg.on('roomStreamUpdate', async (roomID, updateType, streamList, extendedData) => {
        if (updateType == 'ADD') {
            // New stream added, start playing the stream.
        } else if (updateType == 'DELETE') {
            // Stream deleted, stop playing the stream.
        }
    });

    zg.on('publisherStateUpdate', result => {
        // Callback for updates on stream publishing status.
        // ...
    })

    zg.on('publishQualityUpdate', (streamID, stats) => {
        // Callback for reporting stream publishing quality.
        // ...
    })
    zg.on('playerStateUpdate', result => {
        // Callback for updates on stream playing status.
        // ...
    })

    zg.on('playQualityUpdate', (streamID,stats) => {
        // Callback for reporting stream playing quality.
    })

    async function screenShare(){
        document.querySelector('#remote-video').innerHTML = '';
        // document.querySelector('#screenShareButton')
        // document.querySelector('#stopScreenShareButton')
        screenStream = await zg.createZegoStream({
            screen: {
                videoBitrate: 1500,
                audio: true,
                video: {
                    quality: 5,
                    frameRate: 30,
                    width: 25,
                    height: 25
                }
            },
        });
        screenStreamId = screenStream.zegoStream.Ie[0].id;
        document.querySelector('#screenShareButton').classList.add('d-none');
        document.querySelector('#stopScreenShareButton').classList.remove('d-none');
        screenStream.playVideo(document.querySelector("#remote-video"));
        const publisRes = zg.startPublishingStream(screenStreamId, screenStream);
    }

    function stopScreenShare(){
        zg.stopPublishingStream(screenStreamId);
        document.querySelector('#screenShareButton').classList.remove('d-none');
        document.querySelector('#stopScreenShareButton').classList.add('d-none');
        zg.destroyStream(screenStream);
    }

    function camera(){
        if(localStream.zegoStream.originVideoTrack.enabled){
            localStream.zegoStream.originVideoTrack.enabled = false;
        }else{
            localStream.zegoStream.originVideoTrack.enabled = true;
        }
    }
    function microphone(){
        if(localStream.zegoStream.originAudioTrack.enabled){
            localStream.zegoStream.originAudioTrack.enabled = false;
        }else{
            localStream.zegoStream.originAudioTrack.enabled = true;
        }
    }
    function audio(){
        if(screenStream.zegoStream.originAudioTrack.enabled){
            screenStream.zegoStream.originAudioTrack.enabled = false;
        }else{
            screenStream.zegoStream.originAudioTrack.enabled = true;
        }
    }



</script>

</html>
