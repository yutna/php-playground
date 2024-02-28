<?php
$message = '';
$moved = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_FILES['image']['error'] === 0) {
        $temp = $_FILES['image']['tmp_name'];
        $path = 'uploads/' . $_FILES['image']['name'];
        $moved = move_uploaded_file($temp, $path);
    }

    if ($moved === true) {
        $message = '<img alt="Uploaded file" src="' . $path . '">';
    } else {
        $message = 'The file could not be saved.';
    }
}
?>

<?php include 'includes/header.php'; ?>

<?= $message ?>
<form action="move-file.php" enctype="multipart/form-data" method="post">
    <label for="image">
        <b>Upload file:</b>
    </label>
    <input type="file" name="image" id="image" accept="image/*">
    <br>
    <input type="submit" value="Upload">
</form>

<?php include 'includes/footer.php'; ?>
