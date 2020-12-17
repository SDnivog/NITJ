<div class="header" style="min-height: 100px; background-color: #17234e!important;">
	<div class="row">
		 <div class="col-md-2 py-3 ml-1 ">
			<img src="http://localhost/NITJ/Arya/images/logo3.png" >

			
                         
		</div> 
		<div class="col-md-9 py-2 d-none d-md-block">
			<div style="float: right;" id="google_translate_element"></div>
			    <div id="time" class="text-light" style="float: right; margin-right: 10px;"> </div>
		</div>


	</div>

</div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


     <script type="text/javascript">
              var fxn = function() {
var now = new Date(), // current date
        months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']; // you get the idea
        time = now.getHours() + ':' + now.getMinutes() + ':' + now.getSeconds(), // again, you get the idea

        // a cleaner way than string concatenation
        date = [now.getDate(),
                months[now.getMonth()],
                now.getFullYear()].join(' ');

  document.getElementById('time').innerHTML = [date, time].join(' / ');
}
setInterval(fxn, 1000);
              </script>
