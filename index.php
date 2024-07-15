<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid Layout with Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header {
            background-color: #1E90FF;
            color: white;
            text-align: center;
            padding: 20px;
            grid-template-columns: auto;
            margin-bottom: 10px;
        } 
        .content {
            background-color: #1E90FF;
            color: white;
            text-align: center;
            padding: 160px;
            margin-right: 20px;
        } 
        .sidebar {
            background-color: #1E90FF;
            color: white;
            text-align: center;
            padding: 80px;
            margin-top: 10px;
        } 
        .footer {
            background-color: #1E90FF;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 10px;
        }

        .header, .footer {
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 header">
                Ini header
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 content">
                Ini konten
            </div>
            <div class="col-md-4 sidebar">
                Ini sidebar
            </div>
        </div>
        <div class="row">
            <div class="col-12 footer">
                Ini footer
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
