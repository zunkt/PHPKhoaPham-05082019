$(document).ready(function(){
    $('#txt-value').keypress(function(event){
        console.log(event);
        if (event.keyCode == 13) {
            var text = $('#txt-value').val();
            if (text != '') {
                $('#txt-value').val('');
                var text = `
                    <div class="content-item">
                        <div class="text-input">
                            <p>${text}</p>
                        </div>
                        <div class="close">
                            <div class="bt-cls"><a href="#" id="bt-remove"><i class="fas fa-times"></i></a></div>
                        </div>
                    </div>
                `;
                $('.list-content').append(text);
            }
        }
    });
    $('#bt-add').click(function(){
        var text = $('#txt-value').val();
        if (text != '') {
            $('#txt-value').val('');
            var text = `
                <div class="content-item">
                    <div class="text-input">
                        <p>${text}</p>
                    </div>
                    <div class="close">
                        <div class="bt-cls"><a href="#" id="bt-remove"><i class="fas fa-times"></i></a></div>
                    </div>
                </div>
            `;
            $('.list-content').append(text);
        }
        
    });

    $(document).delegate('.close', 'click', function(){
        $(this).parent().remove();
    });
});