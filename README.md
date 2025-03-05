
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Land Information Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff;
            padding-top: 50px;
        }
        .container {
            max-width: 600px;
            background: lightseagreen;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Location Finder</h1>
        <form action="/Sumbit.php" method="post">
            <div class="form-group">
                <label for="agent_name">Agent Name:</label>
                <input type="text" class="form-control" id="agent_name" name="agent_name" required>
            </div>
            <div class="form-group">
                <label for="agent_phone">Agent Phone No.:</label>
                <input type="tel" class="form-control" id="agent_phone" name="agent_phone" required>
            </div>
            <div class="form-group">
                <label for="owner_name">Owner Name:</label>
                <input type="text" class="form-control" id="owner_name" name="owner_name" required>
            </div>
            <div class="form-group">
                <label for="owner_phone">Owner Phone No.:</label>
                <input type="tel" class="form-control" id="owner_phone" name="owner_phone" required>
            </div>
            <div class="form-group">
                <label for="land_location">Land Location (Google Map Link):</label>
                <input type="url" class="form-control" id="land_location" name="land_location" required>
            </div>
            <div class="form-group">
                <label for="survey_no">Survey No.:</label>
                <input type="text" class="form-control" id="survey_no" name="survey_no" required>
            </div>
            <div class="form-group">
                <label for="land_size">Land Size:</label>
                <input type="text" class="form-control" id="land_size" name="land_size" required>
            </div>
            <button type="submit" class="btn btn-danger btn-lg w-100">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
