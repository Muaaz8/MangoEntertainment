async function initZego() {
    const appId = 1101904631;
    const server = "wss://wsliveroom-test.zego.im/ws";

    const zg = new ZegoExpressEngine(appId, server);
    const result = await zg.checkSystemRequirements();
    console.log(result);
    // Handle the result as needed
}

// Call the async function
initZego();
