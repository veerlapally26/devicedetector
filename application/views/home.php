<div class="container">
<br/>
<button class="detect-device">Click to Detect Your Device</button>
<hr/>
<div class="Table">
    <div class="Heading">
        <div class="Cell">
            <p>Device Type</p>
        </div>
        <div class="Cell">
            <p>Device OS</p>
        </div>
    </div>
    <div class="Row">
        <div id='deviceType' class="Cell">N/A
        </div>
        <div id='os' class="Cell">N/A
        </div>
    </div>
</div>

</div>
</body>
<script>	  
$('.detect-device').click(function(){
    $.ajax({
    	type: "GET",
       	url: "<?php echo site_url('home/detectDevice'); ?>",
       	dataType: 'json',
        success: function(data) {
            $('#deviceType').html(data['type']);
    		$('#os').html(data['os']);
         }
    });
});
</script>
</html>