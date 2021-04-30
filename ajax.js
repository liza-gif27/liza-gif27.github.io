/* Article FructCode.com */
$( document ).ready(function() {
    $("#calc_btn").click(
		function(){
			sendAjaxForm('calc_result', 'ajax_form', 'calc.php');
			return false; 
		}
	);
});
 
function sendAjaxForm(calc_result, ajax_form, url) {
    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
        	result = $.parseJSON(response);
        	$('#calc_result').html('Результат: '+result.summa_deposit);
    	},
    	error: function(response) { // Данные не отправлены
            $('#calc_result').html('Ошибка. Данные не отправлены.');
    	}
 	});
}