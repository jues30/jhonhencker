function voto(id_obra) {
    getJSON('http://localhost/jhonhencker/votar.php?id_obra='+id_obra,
    function(err, data) {
      if (err !== null) {
        alert("No pudiste realizar el voto. Disculpa las molestias.");
      } else {
        alert("Gracias por tu voto.");
        window.location.reload();
      }
    });
    
}

var getJSON = function(url, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.responseType = 'json';
    xhr.onload = function() {
        var status = xhr.status;
        if (status === 200) {
            callback(null, xhr.response);
        } else {
            callback(status, xhr.response);
        }
    };
    xhr.send();
};