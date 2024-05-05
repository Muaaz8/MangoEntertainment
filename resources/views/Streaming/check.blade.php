<html>

<head>
    <style>
        #root {
            width: 100vw;
            height: 100vh;
        }
    </style>
</head>


<body>
    <div id="root"></div>
</body> 
<script src="https://unpkg.com/@zegocloud/zego-uikit-prebuilt/zego-uikit-prebuilt.js"></script>
<script>

    function getUrlParams(url) {
        let urlStr = url.split('?')[1];
        const urlSearchParams = new URLSearchParams(urlStr);
        const result = Object.fromEntries(urlSearchParams.entries());
        return result;
    }


    // Generate a Kit Token by calling a method.
    // @param 1: appID
    // @param 2: serverSecret
    // @param 3: Room ID
    // @param 4: User ID
    // @param 5: Username
    const roomID = "{{$room_id}}";
    const userID = "{{$user_id}}";
    const userName = "{{$user_name}}";
    // const roomID = "qwerty";
    // const userID = Math.floor(Math.random() * 10000) + "";
    // const userName = "userName" + userID;
    const appID = 2023938396;
    const serverSecret = "e428369662d80362cc2e0a15ba6e5cf9";
    const kitToken =  ZegoUIKitPrebuilt.generateKitTokenForTest(appID, serverSecret, roomID, userID, userName);


    // You can assign different roles based on url parameters.
    let role = getUrlParams(window.location.href)['role'] || 'Host';
    role = role === 'Host' ? ZegoUIKitPrebuilt.Host : ZegoUIKitPrebuilt.Audience;


    const zp = ZegoUIKitPrebuilt.create(kitToken);
    zp.joinRoom({
        container: document.querySelector("#root"),
        scenario: {
            mode: ZegoUIKitPrebuilt.LiveStreaming,
            config: {
                role,
            },
        },
        sharedLinks: [{
            name: 'Join as audience',
            url: '{{env("APP_URL")}}join-stream/'+roomID+'?roomID='+roomID+'&role=Audience',
        }]
        // sharedLinks: [{
        //     name: 'Join as audience',
        //     url:
        //        window.location.protocol + '//' + 
        //        window.location.host + window.location.pathname +
        //         '?roomID=' +
        //         roomID +
        //         '&role=Audience',
        // }]
    });
</script>

</html>