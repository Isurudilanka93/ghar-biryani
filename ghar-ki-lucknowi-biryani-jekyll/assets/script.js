
function submitForm() {
    if (!navigator.geolocation) {
        alert("Geolocation is not supported by your browser");
        return false;
    }
    navigator.geolocation.getCurrentPosition(function(position) {
        document.getElementById("location").value = 
            position.coords.latitude + "," + position.coords.longitude;
        document.forms[0].submit();
    }, function() {
        alert("Unable to retrieve your location");
    });
    return false;
}
