<?php
include 'header.php';
?>

<div class="container">
		<div class="h1 text-center title"><strong>Contact Us</strong></div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card-body">
				  <h3><strong>GET IN TOUCH</strong></h3>
                      <p><strong>Bagaimana cara Anda bisa mendapatkan informasi lebih lanjut tentang Jacket ON?<br>
												  Silahkan isi formulir dan pihak Jacket ON akan menghubungi Anda secepatnya. </strong></p>
                    <p class="mb-0"><strong>Address </strong></p>
                    <p class="pb-2">Jl. Letjen S. Parman No.1, RT.6/RW.16, Tomang, Kec. Grogol petamburan<br>Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta, Indonesia<br>11440</p>
                    <p class="mb-0"><strong>Phone</strong></p>
                    <p class="pb-2">+62878-7899-6598<br>+62878-7878-8796</p>
					<p class="mb-0"><strong>Email</strong></p>
                    <p>andreandanawan@gmail.com<br>ewaldociady@gmail.com</p>
					<br>
					
					<form action="https://formspree.io/mgeeazgy" method="POST">
					   <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input class="form-control" type="text" name="name" placeholder="Full Name" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                            <input class="form-control" type="text" name="Subject" placeholder="Subject" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" type="email" name="_replyto" placeholder="E-mail" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Write Your Message Here..." required="required"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <button class="btn btn-primary" type="submit">Send</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
				
                <div class="col-md-6">
                  <div class="card-body">
					<div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Jl.%20Letjen%20S.%20Parman%20No.1%2C%20RT.6%2FRW.16&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/purevpn-coupon/"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:500px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:500px;}</style></div>
                  </div>
                </div>
              </div>
</div>

			  
<?php
include 'footer.php';
?>
