<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Streaming Demo</title>
    <!-- Include Zego JavaScript SDK -->
    <script src="https://zego.im/u/h5sdk/zego-express-web-sdk/latest/zego-express-web-sdk.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <h1>Live Streaming Demo</h1>
    
    <div>
        <button id="startStream">Start Streaming</button>
        <button id="stopStream">Stop Streaming</button>
    </div>
    
    <div id="streamContainer"></div>
    
    <script>
        $(document).ready(function(){
            const AppID = 'your_app_id'; // Your Zego AppID
            const Server = 'wss://wsliveroom-test.zego.im/ws'; // Zego Server
            const userID = 'user'; // User ID
            const userName = 'user'; // User Name

            const zg = new ZegoExpressEngine(AppID, Server);

            zg.setLogConfig({
                logLevel: 'info',
                remoteLogLevel: 'info',
                logURL: '',
            });

            async function startStreaming() {
                try {
                    const streamID = userID;
                    const publishOption = {
                        streamID: streamID,
                        audio: true,
                        video: true,
                    };

                    const result = await zg.startPublishingStream(streamID, publishOption);

                    if (result.errorCode === 0) {
                        console.log('Publishing stream success');
                        createPlayer(streamID);
                    } else {
                        console.error('Publishing stream failed', result.errorMsg);
                    }
                } catch (error) {
                    console.error('Error starting stream:', error);
                }
            }

            async function stopStreaming() {
                try {
                    const streamID = userID;
                    await zg.stopPublishingStream(streamID);

                    console.log('Stop publishing success');
                    removePlayer(streamID);
                } catch (error) {
                    console.error('Error stopping stream:', error);
                }
            }

            function createPlayer(streamID) {
                const player = document.createElement('video');
                player.id = `player_${streamID}`;
                player.autoplay = true;
                player.playsinline = true;

                document.getElementById('streamContainer').appendChild(player);

                zg.startPlayingStream(streamID, player);
            }

            function removePlayer(streamID) {
                const player = document.getElementById(`player_${streamID}`);
                if (player) {
                    player.remove();
                }
            }

            document.getElementById('startStream').addEventListener('click', startStreaming);
            document.getElementById('stopStream').addEventListener('click', stopStreaming);
        });
    </script>
</body>
</html>
