console.log("hrk")

$("#address").suggestions({
    token: "5df219f3e58702e3497e700ab0b3e9850fa11366",
    type: "ADDRESS",
    /* Вызывается, когда пользователь выбирает одну из подсказок */
    onSelect: function(suggestion) {
        console.log(suggestion)
        $("#latitude").val(suggestion.data.geo_lat);
        $("#long").val(suggestion.data.geo_lon);
        console.log('latitude', $("#latitude").val());
        console.log('long', $("#long").val());
    }
});