function descarga_libro(id_obra) {
    getJSON('https://www.juanestebanpelaez.com/votar.php?id_obra='+id_obra,
    function(err, data) {
      if (err !== null) {
        
      } else {
        
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