function setApiTypes() {
    var apiType = document.getElementById("api_type");
    API_TYPES.forEach(type => {
        var OPT = document.createElement('OPTION');
        OPT.setAttribute('value', type);
        OPT.appendChild(document.createTextNode(type.toUpperCase()));
        apiType.appendChild(OPT);
    });
}