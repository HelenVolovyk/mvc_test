<?php
use Framework\Core\AbsView;
AbsView::render('layouts/header.php');
?>

<div class="content">
	<section class="">
		<div class="container">

			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/">Home</a></li>
				<li class="breadcrumb-item"><a href="/shop">Shop</a></li>
				<li class="breadcrumb-item active" aria-current="page">Cart</li>
			</ol>


			<h1 class="text-center pb-3">Cart</h1>
			<div class="col-sm-12 col-md-12 col-md-offset-3 col-sm-offset-3">

				<table class="table table-light">
					<thead>
						<tr>
							<th>Product</th>
							<th>Qty</th>
							<th>Price</th>
							<th>Subtota</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>


			</div>


			<div class="row-right mt-5">
				<div class="col-sm-10 col-md-10 col-md-offset-3 col-sm-offset-3">
					<div>
						<strong>Total</strong>
					</div>
					<div class="mt-3">
						<a href="" type="button" class="btn btn-success">Checkout</a>
					</div>
				</div>



			</div>
		</div>

	</section>
</div>




<?php
AbsView::render('layouts/footer.php');
?>