function getCallbackWithArg(txt) {
    return function () {
        console.log("You gave me the string '" + txt + "'\n");
    };
}

getCallbackWithArg('I hope this works')();