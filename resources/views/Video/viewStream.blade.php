<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zego Express Video Call - Viewer</title>
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
    <script src="ZegoExpressWebRTC-3.4.0.js"></script>
</head>
<body>
    <h1>Zego RTC Video Call - Viewer</h1>
    <div class="row">
        <div class="col-md-9">
            <h4>Local video</h4>
            <div id="local-video"></div>
            <h4>Remote video</h4>
            <div id="remote-video"></div>
        </div>
        <div class="col-md-2" style="border:solid;border-color:black">
            <div>
                <input type="text" class="form-control mt-2" id="message">
                <button class="btn btn-primary mt-2" onclick="sendMessage()">Send Message</button>
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
    const token = "04AAAAAGZIlWkAEGd1Y3FobzdyMDh6cXVhcHQAsLG1ckK4WQWkqOAEZJIqiLMqzpuGW0DSlVLhNBSOs4e67mhjEBK2UZg7vZczbKM6eQTuqf6xavB5bi8e5AjhZ55ykD4AhJ+LF6R57arskltpVEy/b8rA6aAKgEtJS/ms3T+tveJ1AMb22BmDYpEo/DH7fdnLFhQ2qJAfT8XPrUbLNrY2jpZ59DHnGgfAKXiAg2rOeb0IHwdht00j5nULisKfSCMIBbX/YaJRcf5SDOMr";
    const streamID = '2';
    var localStream;
    var screenStreamId = 'c87ca000-5017-41ab-8cf1-71e364c7ee32';
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
        await zg.loginRoom(roomID, token, { userID, userName });
    }

    initZego();
    zg.on('roomStreamUpdate', async (roomID, updateType, streamList) => {
            if (updateType === 'ADD') {
                streamList.forEach(async (stream) => {
                    const remoteStream = await zg.startPlayingStream(stream.streamID);
                    const remoteVideoElement = document.createElement('video');
                    console.log(stream);
                    remoteVideoElement.srcObject = remoteStream;
                    remoteVideoElement.autoplay = true;
                    remoteVideoElement.controls = true;
                    remoteVideoElement.style.width = '100%';
                    remoteVideoElement.style.height = '100%';

                    if (stream.streamID === screenStreamId) {
                        document.getElementById('remote-video').appendChild(remoteVideoElement);
                    } else {
                        document.getElementById('local-video').appendChild(remoteVideoElement);
                    }
                });
            }
        });

    async function sendMessage(){
        inputMessage = document.querySelector('#message').value;
        console.log(inputMessage)
        try {
            const isSent = await zg.sendBroadcastMessage(roomID, inputMessage)
            console.log('>>> sendMsg success,', isSent);
        } catch (error) {
            console.log('>>> sendMsg, error:', error);
        };
    }
</script>

</html>
