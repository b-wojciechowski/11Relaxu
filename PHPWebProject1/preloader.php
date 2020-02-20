<?php
echo '	<style>
.preloader-background {
	display: flex;
	align-items: center;
	justify-content: center;
	background-color: #eee;

	position: fixed;
	z-index: 100;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
}

</style>

<div class="preloader-background">
	 <div class="preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
</div>';
?>
<script>
document.addEventListener("DOMContentLoaded", function(){
	$('.preloader-background').delay(0200).fadeOut('slow');
	$('.progress')
		.delay(100)
		.fadeOut();
});
</script>