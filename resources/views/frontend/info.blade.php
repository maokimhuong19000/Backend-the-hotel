@include('frontend.header')
@include('frontend.navigation')
<br>
<br>
<br>
<br>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>information</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .date-picker-group {
            margin-bottom: 20px;
        }

        .date-picker-label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .date-picker-control {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 3px;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .form {
            max-width: 1000px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 3px;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .form-text {
            color: #6c757d;
        }
    </style>
</head>

<body>
    <form class="form" action="{{ url('/sendinfo') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Booking Information</h1>
        <div class="row">
            <div class="col-md-6">
                <!-- First Column -->
                <div class="form-group">
                    <label for="username">Full Name:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <input type="text" class="form-control" id="gender" name="gender" required>

                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Number Phone:</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="" required>
                </div>

            </div>
            <div class="col-md-6">
                <!-- Second Column -->


                <div class="form-group">
                    <label for="room_name">Room:</label>
                    <input type="text" class="form-control" id="room_name" name="room_name" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="guest">Guest:</label>
                    <input type="text" class="form-control" id="guest" name="guest" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="checkin_datepicker">Check In </label>
                    <input type="date" class="form-control" id="checkin_datepicker" name="checkin_datepicker"
                        placeholder=""  required>
                </div>
                <div class="form-group">
                    <label for="checkout_datepicker">Check Out:</label>
                    <input type="date" class="form-control" id="checkout_datepicker" name="checkout_datepicker"
                        placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="desc">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="" required>
                </div>

            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <!-- Include SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.form');

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                // Show SweetAlert confirmation
                Swal.fire({
                    title: 'Thank you!',
                    text: 'We have received your information.We will contact you soon',
                    icon: 'success',
                }).then((result) => {
                    // If the user clicks "OK", proceed with form submission
                    if (result.isConfirmed) {
                        
                        form.submit();
                        form.reset();
                    }
                });
            });
        });
    </script>

</body>


@include('frontend.footer')

</html>
