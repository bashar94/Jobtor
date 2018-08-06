<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!-- jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="style/bootstrap/js/bootstrap.min.js"></script>



<script>
  //image upload
   function chooseImg() {
      $("#imgUp").click();
   }

   $(function(){
    	$("#imgUp").change(function(){
        	$("#fileUp").submit();
    	});
	});
	//end

	//password varification starts
	$(function(){
		$('#password, #cpassword').on('keyup', function () {
	  	if ($('#password').val() == $('#cpassword').val()) {
				$("#submit").prop('disabled',false);
				$("#cpassword").addClass('cpassword-success').removeClass('cpassword');

	  	} else{
				$("#submit").prop('disabled',true);
	    	$("#cpassword").addClass('cpassword').removeClass('cpassword-success');
			}
			});
	});
//password varification ends

function toggle(id, cat) {

		$.ajax({
			url: "config/post-ajax.php",
			type: "POST",
			data: {id: id, cat: cat},
			dataType: 'text/html',
			cache: false,
			success: function(data){

			},
			error: function (request, status, error) {
					console.log(error);
			}
		});

}




	$(document).ready(function() {

		$("#division").bind("click change", function() {

    	var el = $(this).val() ;
			$.ajax({
        url: "config/post-ajax.php",
        type: "POST",
        data: {division: el},
        dataType: 'json',
        cache: false,
        success: function(data){
					$('.rm').remove();
					$('.rm1').remove();
					for (var i = 0; i < data.length; i++) {
						 $("#zilla").append("<option class=\"rm\" value="+data[i]+">"+data[i]+"</option>");
					}
        },
        error: function (request, status, error) {
            console.log(error);
        }
    	});
  	});
		//division dropdown condition emds

		//zilla dropdown condition starts
		$("#zilla").bind("click change", function() {

	    var el = $(this).val() ;
			$.ajax({
				url: "config/post-ajax.php",
				type: "POST",
				data: {zilla: el},
				dataType: 'json',
				cache: false,
				success: function(data){
					$('.rm1').remove();
					for (var i = 0; i < data.length; i++) {
						 $("#thana").append("<option class=\"rm1\" value="+data[i]+">"+data[i]+"</option>");
					}
				},
				error: function (request, status, error) {
						console.log(error);
				}
			});

  	});
		//zilla dropdown condition emds


		if ( $('[type="date"]').prop('type') != 'date' && !$('[type="date"]').hasClass('date') ) {
	    $('[type="date"]').datepicker({
					// Consistent format with the HTML5 picker
							dateFormat : 'mm/dd/yy'
					},
					// Localization
					$.datepicker.regional['it']);
		}

		if ( $('[type="date"]').prop('type') != 'date' && $('[type="date"]').hasClass('date') ) {
	    $('.date').datepicker({
					// Consistent format with the HTML5 picker
							dateFormat : 'mm/dd/yy',
							minDate: 0
					},
					// Localization
					$.datepicker.regional['it']);
		}


		//calender restriction starts
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth()+1; //January is 0!
		var yyyy = today.getFullYear();
		if(dd<10){
			dd='0'+dd
		}
    if(mm<10){
    	mm='0'+mm
    }

		today = yyyy+'-'+mm+'-'+dd;
		$(".date").prop('min', today);
		 //calender restriction ends



});



</script>
