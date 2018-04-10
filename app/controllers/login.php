<section id="section-login">


	<div class="row justify-content-center">
		<div class="col- col-sm-10 col-md-8 col-lg-6 col-xl-5">
			<div class="card">
				<div class="row justify-content-center">
					<i class="fas fa-user-circle fa-10x"></i>
				</div>
				<div class="card-body">
						<form action="#">
							<div class="input-group mb-3">


								<input type="text" id="groupName" class="form-control" placeholder="Username" aria-label="Recipient's username" aria-describedby="basic-addon2" id="">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2"><i class="fas fa-user"></i></span>
								</div>
							</div>
							<div class="input-group mb-3">
								<input type="password" id="password" class="form-control" placeholder="Password" aria-label="Recipient's password" aria-describedby="basic-addon2">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2"><i class="fas fa-key"></i></span>
								</div>
							</div>
							<button type="button" id="submit" class="btn btn-primary btn-lg btn-block">Login</button>
						</form>	
					</div>	
				</div>
			</div>
		</div>
</section>



<script type="text/javascript">
	
$(document).ready(function(){

	$("#submit").click(function() {

		var nameGroup = $("#groupName").val();
		var pwdGroup = $("#password").val();

		var pwd = JSON.stringify({ "name": nameGroup, "password": pwdGroup });

		console.log(pwd);

		$.ajax({
			type:'post',
			url:'.php',
			data: pwd,

			sucess:function(response){
				if(response) {
					console.log("ok");
				} else {
					console.log("nop");
				}
			}
		});


	});
});





</script>