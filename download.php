<?php
if(isset($_POST['url'])) {
  $fileUrl = $_POST['url'];

  // Generate a unique filename
  $filename = uniqid() . '.pdf';

  // Set the path to save the downloaded file
  $savePath = 'downloads/' . $filename;

  // Download the remote file
  $fileContent = file_get_contents($fileUrl);

  if($fileContent !== false) {
    // Save the file locally
    file_put_contents($savePath, $fileContent);
    echo 'File downloaded and saved successfully!';
  } else {
    echo 'Failed to download the file.';
  }
}
?>

<!-- HTML form to enter the URL -->
<form method="post" action="">
  <input type="text" name="url" placeholder="Enter the file URL">
  <button type="submit">Download</button>
</form>
