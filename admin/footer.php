
    	<!-- begin footer -->
		<div class="row mt-4 text-primary text-center">
			<div class="col-md-6">
				<span >&copy Copyright <?php echo date('Y') ?>, PharmaListing</span>
			</div>
			<div class="col-md-6">
				<span>Powered By: Adedeji Abdulkabir, princeakbar2014@gmail.com</span>
			</div>
			
		</div>
		<!-- end footer -->


</div>

<!-- <script src='../css/jquery.min.js'></script> -->
    <script src="../css/popper.min.js" type="text/javascript"></script>
    <script src="../css/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src='leftside.js'></script>

<script type="text/javascript">

  //register      
        $(".registerBtn").click(function(){
            $('.login-wrapper').hide();
            $(".register-wrapper").removeAttr("hidden");
        });       
//login
        $(".loginBtn").click(function(){
            $('.login-wrapper').show();
            $(".register-wrapper").hide();
        })
// modal
        $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})










    </script>
    
</body>
</html>