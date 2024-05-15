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
</head>

<body>
    <h1>
        Zego RTC Video Call
    </h1>
    <h4>Local video</h4>
    <div id="local-video"></div>
    <h4>Remote video</h4>
    <div id="remote-video"></div>
</body>

<script>
    const appId = 1101904631;
    const server = "wss://webliveroom1101904631-api.coolzcloud.com/ws";
    const roomID = "6644de0a19595";
    const userID = "cFR2dMKDtw";
    const userName = "test";
    const token = "04AAAAAGZGKggAEGt1ZWJwZzMwYnY3ZWFkcTMAsCWR4DNSMop0IgZ+bLmxhQDv8ajSdc1tdcdvClz2XZjYZPZmgXKwhrv70xwq+ooemEaoVSa6ydZO4GUOwovmCqNdl68PDZ7EiQvNU71BR9HZz48hd9Ax8EcIKjJK4DVJ81W+YTD+3cdQChbDeI7LUe1iJD+jYzwelXhxVmm5ikN01m0ZH/fVl9SnMnYgb41dpx8djJSOWutLB2bYOM6SCrSfLin3ap2ow3yrY2yghhjD";
    const streamID = '{{uniqid()}}';

    const zg = new ZegoExpressEngine(appId, server);

    async function initZego() {
        const result = await zg.loginRoom(roomID, token, {userID, userName}, {userUpdate: true});
        const localStream = await zg.createZegoStream();
        localStream.playVideo(document.querySelector("#local-video"));
        // localStream is the MediaStream object created by calling creatStream in the previous step.
        zg.startPublishingStream(streamID, localStream)

        const remoteStream = await zg.startPlayingStream(streamID);
        // The remote-video is the <div> element's id on your webpage.
        remoteView.play("remote-video", {enableAutoplayDialog:true});
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

</script>

</html>
