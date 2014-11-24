	<!-- menu -->
		<div id="menu" class="hello">
			<!-- 
				Here appears the menu 
				Loaded by the script 
				dedicated to the menu  -->
			
				<script>
			// THis script is used to generate the menu interactions.  
			jQuery(document).ready(function($) {
					$("#menu").load('assets/inc/menu/menu.php');
  				});
		
				function load(num){
					$("#menu").load('assets/inc/menu/menu-page'+num+'.php');
				};
				function die(){
					$("#menu").load('assets/inc/menu/menu.php');
				}
				
			</script>	
		</div>
		<!-- Endofmenu -->
