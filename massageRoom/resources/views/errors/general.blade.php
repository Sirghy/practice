<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Errors</title>
</head>

<body>
    <div class="error-box">
        <div class="error-title">
            <h2>An Error Occurred</h2>
        </div>
        <div class="error-message">
            <?= htmlspecialchars($message ?? 'Unknown error') ?>
        </div>

        <a class="back-btn" href="/">Go back</a>
    </div>
</body>

</html>