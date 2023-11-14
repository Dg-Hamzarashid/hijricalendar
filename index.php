<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>
        Bootstrap Hijri Date Picker
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" />

</head>

<body class="bg-light">
    <div class="container">

        <div class="form-group">
            <label>
                Date
            </label>
            <div class="input-group">
                <input type='text' class="form-control hijri-date-input" placeholder="YY-MM-DD" id="hijri-date-input" oninput="inputdate(this)" />
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
    <script src="js/bootstrap-hijri-datetimepicker.min.js"></script>
    <script type="text/javascript">
        $('.hijri-date-input').hijriDatePicker({
            hijri: true,
            showSwitcher: false,
        });

        $(document).ready(function() {
            $('.hijri-date-input').attr('inputmode', 'none');

        })

        function inputdate(data) {
            data.value = '';
            // alert(data.value);
        }
    </script>

</body>

</html>