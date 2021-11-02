include("DropboxUploader.php");
/*** ... ***/
$uploader = new DropboxUploader("xxx@in1.in", "password");
$uploader->upload("upload/".$file_on_your_server, "Public/dropBox_directory", null);
