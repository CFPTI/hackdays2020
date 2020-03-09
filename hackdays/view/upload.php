<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <div class="container">
        <form action="?action=upload" method="POST" enctype="multipart/form-data">
            <input type="file" name="docPost[]" multiple accept="docx, pdf" id="fileUpload" class="form-control-file">
            <input type="submit" name="send" class="btn btn-outline-light float-right colorB text-white" value="Envoyer">
        </form>
    </div>
</body>
</html>