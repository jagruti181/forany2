<div class="row" style="padding:1% 0">
	<div class="col-md-12">
		<div class="pull-right">
			<a href="<?php echo site_url('site/viewlisting'); ?>" class="btn btn-primary pull-right"><i class="icon-long-arrow-left"></i>&nbsp;Back</a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
	    <section class="panel">
		    <header class="panel-heading">
				 listing Details
			</header>
			<div class="panel-body">
			  <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url('site/createlistingsubmit');?>" enctype= "multipart/form-data">
				<div class="form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Name</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="name" value="<?php echo set_value('name');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label">User</label>
				  <div class="col-sm-4">
					<?php
						
						echo form_dropdown('user',$user,set_value('user'),'class="chzn-select form-control" 	data-placeholder="Choose a Accesslevel..."');
					?>
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label">Category</label>
				  <div class="col-sm-4">
					<?php
						echo form_multiselect('category[]', $category,set_value('category'),'id="select2" class="form-control"');
					?>
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label">modeofpayment</label>
				  <div class="col-sm-4">
					<?php
						echo form_multiselect('modeofpayment[]', $modeofpayment,set_value('modeofpayment'),'id="select3" class="form-control"');
					?>
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label">daysofoperation</label>
				  <div class="col-sm-4">
					<?php
						echo form_multiselect('daysofoperation[]', $daysofoperation,set_value('daysofoperation'),'id="select4" class="form-control"');
					?>
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Address</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control addressclass" name="address" value="<?php echo set_value('address');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label">city</label>
				  <div class="col-sm-4">
					<?php
						
						echo form_dropdown('city',$city,set_value('city'),'class="chzn-select form-control cityclass" 	data-placeholder="Choose a Accesslevel..."');
					?>
				  </div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Area</label>
					<div class="col-sm-4">
					  <input type="text" id="area" name="area" class="form-control" value="<?php echo set_value('area'); ?>">
					</div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">state</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control stateclass" name="state" value="<?php echo set_value('state');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">country</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control countryclass" name="country" value="<?php echo set_value('country');?>">
				  </div>
				  <div class="col-sm-2">
				    <a class="btn btn-primary pull-right latlongbutton">Add Lat/Long</a>
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Latitude</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field latitudeid" class="form-control latitudeclass" name="lat" value="<?php echo set_value('lat');?>">
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Longitude</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field longitudeid" class="form-control longitudeclass" name="long" value="<?php echo set_value('long');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Pincode</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="pincode" value="<?php echo set_value('pincode');?>">
				  </div>
				</div>
				
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Description</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="description" value="<?php echo set_value('description');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Contact</label>
				  <div class="col-sm-4">
					<input type="number" id="normal-field" class="form-control" name="contact" value="<?php echo set_value('contact');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Email</label>
				  <div class="col-sm-4">
					<input type="email" id="normal-field" class="form-control" name="email" value="<?php echo set_value('email');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Website</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="website" value="<?php echo set_value('website');?>">
				  </div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label"> Facebook</label>
					<div class="col-sm-4">
					  <input type="text" id="" name="facebookuserid" class="form-control" value="<?php echo set_value('facebookuserid'); ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">googleplus</label>
					<div class="col-sm-4">
					  <input type="text" id="" name="googleplus" class="form-control" value="<?php echo set_value('googleplus'); ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">twitter</label>
					<div class="col-sm-4">
					  <input type="text" id="" name="twitter" class="form-control" value="<?php echo set_value('twitter'); ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Year Of Establishment</label>
					<div class="col-sm-4">
					  <input type="text" id="" name="yearofestablishment" class="form-control" value="<?php echo set_value('yearofestablishment'); ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Time Of Operation Start</label>
					<div class="col-sm-4">
					  <input type="text" id="" name="timeofoperation_start" class="form-control" value="<?php echo set_value('timeofoperation_start'); ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Time Of Operation End</label>
					<div class="col-sm-4">
					  <input type="text" id="" name="timeofoperation_end" class="form-control" value="<?php echo set_value('timeofoperation_end'); ?>">
					</div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label">type</label>
				  <div class="col-sm-4">
					<?php
						
						echo form_dropdown('type',$type,set_value('type'),'class="chzn-select form-control" 	data-placeholder="Choose a Accesslevel..."');
					?>
				  </div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Credits</label>
					<div class="col-sm-4">
					  <input type="text" id="" name="credits" class="form-control" value="<?php echo set_value('credits'); ?>">
					</div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label">isverified</label>
				  <div class="col-sm-4">
					<?php
						
						echo form_dropdown('isverified',$isverified,set_value('isverified'),'class="chzn-select form-control" 	data-placeholder="Choose a Accesslevel..."');
					?>
				  </div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label">video</label>
					<div class="col-sm-4">
					  <input type="text" id="" name="video" class="form-control" value="<?php echo set_value('video'); ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Pointer</label>
					<div class="col-sm-4">
					  <input type="text" id="pointer" name="pointer" class="form-control" value="<?php echo set_value('pointer'); ?>">
					</div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Logo</label>
				  <div class="col-sm-4">
					<input type="file" id="normal-field" class="form-control" name="logo" value="<?php echo set_value('logo');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label">&nbsp;</label>
				  <div class="col-sm-4">
				  <button type="submit" class="btn btn-primary">Save</button>
				  <a href="<?php echo site_url('site/viewlistings');?>" class="btn btn-secondary">Cancel</a>
				</div>
				</div>
			  </form>
			</div>
		</section>
	</div>
</div>
<script>
    $(".latlongbutton").click(function () {
        console.log($( ".cityclass option:selected" ).text());
        $.getJSON(
            "https://maps.googleapis.com/maps/api/geocode/json?address="+$(".addressclass").val()+","+$( ".cityclass option:selected" ).text()+","+$(".stateclass").val()+","+$(".countryclass").val()+"&key=AIzaSyAvqKowJmLC_xd0N-8e6BoCZf4-gWThOZQ", {
                address: $(".addressclass").val()
            },
            function (data) {
                console.log(data.results[0]);
                console.log(data.results[0].geometry.location.lat);
                console.log(data.results[0].geometry.location.lng);
                $('.latitudeclass').val(data.results[0].geometry.location.lat);
                $('.longitudeclass').val(data.results[0].geometry.location.lng);
//                console.log(parsxed.results[0].geometry);
                nodata = data;
                // $("#store").html(data);
//                allenquiries(data);
//                userdetails(data);

            }
        );
//        return false;
    });
</script>