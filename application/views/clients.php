<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<style>
    .breadcrumb-item+.breadcrumb-item::before {
    color: #000;
    content: "/";
    font-size: 16px;
    font-weight: 500;
    padding: 0 24px;
}

table {
    border:1px solid #dd4454;
}

table thead tr td{
    background-color:#dd9044;
    color:#fff;
    font-weight:700;

}
</style>

<section class="page_title s-pb-xl-80  s-pb-lg-100  s-pb-md-90 s-pt-md-190 s-pt-180 s-pb-60" style="background-image:url('images/Prices-Page-Banner_2.jpg'); background-size:cover!important; background-repeat:no-repeat!important; background-position:center!important;">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center">
                <h1 style="color:#fff;">CLIENTS DETAILS </h1>
                <div class="breadcrumb-wrap">
					<ol class="breadcrumb" style="background:#fff; color:#000;">
						<li class="breadcrumb-item">
							<a style="color:#000;" href="<?php echo base_url() ?>">Home</a>
						</li>
						<li class="breadcrumb-item">
						<a style="color:#000;" href="<?php echo base_url() ?>Clients">Client Details</a>
						</li>

					</ol>
				</div>

			</div>






		</div>
	</div>
</section>

<section class="ls" style="padding:40px 0 0 0;">

	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<br />
				<h2 class="special-heading ">
					<span class="" style="text-transform:uppercase;">
						CLIENTS DETAILS
					</span>
				</h2>
				<h6>Our Clients </h6>

				<div class="divider-line bg-maincolor text-center"></div>
				<div class="fw-divider-space divider-30"></div> <br />
			</div>
		</div>



	</div>
</section>






<section style="padding-bottom:150px; padding-top:25px;">
	<div class="container">
		<div class="d-flex justify-content-between">
			<h3 class="special-heading ">
				<span class="text-capitalize">
					Client Details
				</span>
			</h3>
			<div>
				<a href="<?php echo base_url() ?>Login/logout">Logout</a>
			</div>

		</div>

		<div>
			<form action="<?php echo base_url() ?>Clients" method="GET">
				<div class="d-flex align-items-center">
					<input type="date" name="start" value="<?php if(isset($_GET['start'])){echo $_GET['start'];}  ?>" required>
					<div style="padding:10px 15px;">
						-
					</div>
					<input type="date" name="end" value="<?php if(isset($_GET['end'])){echo $_GET['end'];}  ?>" required>
					<button type="submit" style="margin:0 15px;">Apply</button>
					<a href="<?php echo base_url() ?>Clients" style="padding:10px 15px;">Reset</a>
				</div>
			</form>
		</div>
		
		<div class="row">
			<div class="col-12">
				<table>
					<thead>
						<tr>
							<td>SR NO.</td>
							<td>CLIENT NAME</td>
							<td>QUANTITY</td>
							<td> DATE</td>
						</tr>
					</thead>
					<tbody>
						<?php if(isset($cdata)) { ?>
							<?php for($i=0; $i<sizeof($cdata); $i++) { ?>
								<tr>
									<td><?php echo ($i+1)  ?></td>
									<td style='text-transform:uppercase;'><?php echo $cdata[$i]['name'] ?></td>

									<td><?php echo $cdata[$i]['quantity'] ?></td>

									<td><?php echo $cdata[$i]['date'] ?></td>
								</tr>
							<?php } ?>
						<?php } ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>