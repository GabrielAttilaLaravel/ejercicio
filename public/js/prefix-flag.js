$( "#flag" ).click(function() {
    $("#content-flag").attr("style", "display:block!important");
});

function selectedPrefix(obj){
    var prefix = $(obj).data('prefix-flag');
    var pais = $(obj).data('pais');
    var host = "http://"+window.location.host;

    $("#content-flag").attr("style", "display:none!important");

    document.getElementById("phone").value = '+'+prefix;
    document.getElementById("flag").src = host+"/img/"+pais+".png";
}