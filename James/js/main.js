
// check add-to-list status when page loaded
window.onload = checkonload();

function checkonload(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (xmlhttp.responseText == "r") {
                rfl_class();
                // location.assign("checkifinlist.php");
            }else{
                atl_class();
                // location.assign("checkifinlist.php");
            }
        }
    };
    xmlhttp.open("GET", "checkifinlist.php", true);
    xmlhttp.send();
}
//add to list
function addtolist() {
    var xh = new XMLHttpRequest();
    xh.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // alert(xh.respon  seText);
            if (xh.responseText == 1) {
                // alert("compare true");
                checkonload();
            }else{
                alert("compare failed");
            }
        }
    };
    xh.open("GET", "addtoList.php", true);
    xh.send();
}

//remove from list
function removefromlist() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(xmlhttp);
            if(xmlhttp.responseText == 'success'){
                // alert("compare true");
                checkonload();
            }else{
                alert("compare failed");
            }
        }
    };
    xmlhttp.open("GET", "removefromlist.php", true);
    xmlhttp.send();
}

//refresh page
function refresh () {
    location.reload(true);
}
//change looking to addtolist
function atl_class () {
    document.getElementById("atl_btn").setAttribute ('onclick','addtolist()');
    document.getElementById("atl_btn").onclick = addtolist; 
    document.getElementById("atl_btn").innerHTML = "Add To List";
    document.getElementById("atl_btn").className = "btn btn-success";
}
//change looking to removefromlist
function rfl_class () {
    document.getElementById("atl_btn").setAttribute ('onclick','removefromlist()');
    document.getElementById("atl_btn").onclick = removefromlist; 
    document.getElementById("atl_btn").innerHTML = "Remove From List";
    document.getElementById("atl_btn").className = "btn btn-warning";
}

//azure video
var myOptions = {
    "nativeControlsForTouch": false,
    controls: true,
    autoplay: true,
    width: "100%",
    height: "auto",
}
myPlayer = amp("azuremediaplayer", myOptions);
myPlayer.src([
        {
            "src": "//trailer-aueas.streaming.media.azure.net/a641d201-9b58-45ff-ab3a-cebd05d75cf5/forwebsite.ism/manifest",
            "type": "application/vnd.ms-sstr+xml"
        }
]);

//set footer to bottom
$(function () {
    function fixedfooter () {
        $("footer").removeClass("fix_bottom");
            var th = document.body.scrollHeight,
                wh = window.innerHeight;
        if (!(th > wh)) {
            $("footer").addClass("fix_bottom");
        }else{
            $("footer").removeClass("fix_bottom");
        }
    };
    fixedfooter();
    $(window).resize(fixedfooter);
});
