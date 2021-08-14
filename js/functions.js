function setApiTypes() {
    var apiType = document.getElementById("api_type");
    API_TYPES.forEach(type => {
        var OPT = document.createElement('OPTION');
        OPT.setAttribute('value', type);
        OPT.appendChild(document.createTextNode(type.toUpperCase()));
        apiType.appendChild(OPT);
    });
}

function readTextFile(file, callback) {
    var rawFile = new XMLHttpRequest();
    rawFile.overrideMimeType("application/json");
    rawFile.open("GET", file, true);
    rawFile.onreadystatechange = function() {
        if (rawFile.readyState === 4 && rawFile.status == "200") {
            callback(rawFile.responseText);
        }
    }
    rawFile.send(null);
}