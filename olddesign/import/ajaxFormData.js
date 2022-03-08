function  registration() {
    var msg   = $('#ajax_form').serialize();
    $.ajax({
        type: 'POST',
        url: 'ajaxRegistration.php',
        data: msg,
        success: function(data) {
            $('#results').html(data);
        },
        error:  function(xhr, str){
            alert('Возникла ошибка: ' + xhr.responseCode);
        }
    });
}

function createRequest() {
    var msg   = $('#ajax_form').serialize();
    $.ajax({
        type: 'POST',
        url: 'ajaxCreateRequest.php',
        data: msg,
        success: function(data) {
            $('#results').html(data);
        },
        error:  function(xhr, str){
            alert('Возникла ошибка: ' + xhr.responseCode);
        }
    });
}