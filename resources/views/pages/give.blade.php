<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Options | Aleph Ministries</title>
    <link rel="stylesheet" href="{{asset('template/dist/css/main.css')}}">
    <link rel="shortcut icon" href="{{asset('template/images/favicon.png')}}" type="image/png">

    <style>
        

        .form-section {
            background: #fff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            gap: 30px;
        }

        .form-section .form-content {
            flex: 1;
        }

        .form-section .instructions {
            flex: 1;
            border-left: 1px solid #e0e0e0;
            padding-left: 20px;
        }

        .form-section h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 16px;
            margin-bottom: 8px;
            display: block;
            color: #555;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="tel"],
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="radio"] {
            margin-right: 8px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .instructions ul {
            padding-left: 20px;
            margin-top: 0;
        }

        .instructions ul li {
            margin-bottom: 10px;
            color: #555;
        }
    </style>
</head>

<body>
    @include('components.header')
    <main>
                  <!-- BANNER SECTION STARTS -->
        <section class="banner full-width">

            <div class="container">

                <div class="banner__content">

                    <div class="section-heading">
                        <span class="section-intro">Jesus is Lord</span>
                        <h1>Give</h1>
                    </div><!-- .section-heading ends -->

                    <div class="breadcrumb">
                        <div class="breadcrumb__home--link"><a href="{{ route('home') }}">Home</a></div>
                        <span>/</span>
                        <div class="breadcrumb__current--page-link">Contact</div>
                    </div><!-- .breadcrumb ends -->

                </div><!-- .banner__content ends -->

            </div><!-- .container ends -->

        </section><!-- .banner ends -->
        <!-- BANNER SECTION ENDS -->
        <section class="form-section">
            <!-- Form Content -->
            <div class="form-content">
                <h2>Make a Payment</h2>
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="payment_option">Select Payment Option</label>
                        <input type="radio" id="merchant_code" name="payment_option" value="merchant_code" required onchange="toggleFields()"> 
                        <label for="merchant_code">Merchant Code</label>
                        <input type="radio" id="online_payment" name="payment_option" value="online_payment" required onchange="toggleFields()"> 
                        <label for="online_payment">Online Payment</label>
                    </div>

                    <!-- User Details (Visible for Online Payment) -->
                    <div id="online_payment_fields" style="display: none;">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" pattern="[0-9]{10}" required>
                        </div>
                        <div class="form-group">
                            <label for="reason">Reason for Giving</label>
                            <input type="text" id="reason" name="reason" placeholder="Enter the reason for giving" required>
                        </div>
                    </div>

                    <button type="submit" class="btn-primary">Proceed</button>
                </form>
            </div>

            <!-- Payment Instructions -->
            <div class="instructions">
                <div id="merchant_instructions" style="display: none;">
                    <h2>Steps for Merchant Payment</h2>
                    <ul>
                        <li>Dial <strong>*185#</strong></li>
                        <li>Select <strong>Paybill</strong></li>
                        <li>Select <strong>Others</strong></li>
                        <li>Enter Business Number <strong>550619</strong></li>
                        <li>Enter Amount</li>
                        <li>Enter Payment Reference</li>
                        <li>Confirm Payment</li>
                        <li>Enter MM PIN</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    @include('components.footer')

    <script>
        function toggleFields() {
            const merchantInstructions = document.getElementById('merchant_instructions');
            const onlinePaymentFields = document.getElementById('online_payment_fields');
            const merchantCode = document.getElementById('merchant_code');
            const onlinePayment = document.getElementById('online_payment');

            if (merchantCode.checked) {
                merchantInstructions.style.display = 'block';
                onlinePaymentFields.style.display = 'none';
            } else if (onlinePayment.checked) {
                merchantInstructions.style.display = 'none';
                onlinePaymentFields.style.display = 'block';
            }
        }
    </script>
</body>

</html>
