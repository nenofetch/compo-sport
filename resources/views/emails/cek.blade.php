<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Payment Success</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .title-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .title-icon i {
            font-size: 2.5em;
            margin-bottom: 0.5em;
        }
        hr.dashed {
            border-top: 2px dashed #bbb;
        }
    </style>
</head>
<body>
    <div class="container col-md-6 mt-4 mb-4">
        <div class="text-center mb-4">
            <img src="{{ asset('frontend') }}/assets/img/Logo-SSRC-cut.webp" class="img-fluid" width="400" alt="Logo">
        </div>
        <div class="card shadow">
            <div class="container col-md-11">
                <h2 class="text-center mt-5 mb-4">
                    <span class="title-icon">
                        <i class="fa-regular fa-circle-check text-success fa-lg mr-2 mt-4 mb-5"></i>
                        Booking Payment Success
                    </span>
                </h2>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-center mt-4 mb-4">Order ID : <b>ORD20293092030</b></h4>
                            <hr class="dashed">
                            <div class="row mb-2">
                                <div class="col-4 font-weight-bold">City :</div>
                                <div class="col-8">Jakarta</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 font-weight-bold">From :</div>
                                <div class="col-8">HR Rasuna Said</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-4 font-weight-bold">Route :</div>
                                <div class="col-8">HR Rasuna Said - Dipati Ukur</div>
                            </div>
                            <hr class="dashed">
                            <div class="row mb-2">
                                <div class="col-4"><b>Total Payment :</b></div>
                                <h3 class="col-8 text-success font-weight-bold">Rp 160.000</h3>
                            </div>
                            <hr class="dashed">
                            <div class="row mb-2">
                                <div class="col-4"><i class="fa-solid fa-calendar"></i> Date :</div>
                                <div class="col-8">12-05-2023</div>
                                <div class="col-4"><i class="fa-solid fa-clock"></i> Time</div>
                                <div class="col-8">15:45:00</div>
                                <div class="col-4"><i class="fa-solid fa-chair"></i> Seat(s) Number</div>
                                <div class="col-8">15</div>
                            </div>
                            <hr class="dashed">
                            <p><b>Pembayaran :</b></p>
                            <div class="row">
                                <div class="col-4">Metode</div>
                                <div class="col-8"><b>Permata Virtual Account</b><br>Pay with Permata VA</div>
                            </div>
                            <hr class="dashed">
                            <h6>1. Present E-Ticket at Singgasana Sport & Recreation Centre for Check In</h6>
                            <h6>2. Check In at least 30 minutes prior to departure</h6>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</body>
</html>
