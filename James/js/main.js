////////////////////////////////////////////////////////////////////////////////////

//add to list
function addtoList(mid, uid) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(isset(xmlhttp.responseText) && xmlhttp.responseText == 'Y'){
                document.getElementById("btn_content").className = "btn btn-success";
            }
        }
    };
    xmlhttp.open("GET", "addtoList.php?mid="+mid+"&uid="+uid, true);
    xmlhttp.send();
}

//remove from list
function removefromlist(mid, uid) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if(isset(xmlhttp.responseText) && xmlhttp.responseText == 'Y'){
                document.getElementById("btn_content").className = "btn btn-success";
            }
        }
    };
    xmlhttp.open("GET", "removefromlist.php?mid"+mid+"&uid="+uid, true);
    xmlhttp.send();
}

//check add-to-list status when page loaded
$(document).ready(function(){
    var forcheck = new XMLHttpRequest();
    forcheck.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (isset(forcheck.responseText) && forcheck.responseText == 'true') {
                document.getElementById("atl_btn").onclick = addtoList();
            }else{
                document.getElementById("atl_btn").onclick = removefromlist();
            }
        }
    };
    forcheck.open("GET", "checkifinlist.php?mid"+mid+"&uid="+uid, true);
    forcheck.send();
});



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
