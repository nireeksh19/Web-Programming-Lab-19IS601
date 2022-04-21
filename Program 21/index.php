<html>
  <head>
    <title>Program 21</title>
  </head>

  <body>
    <form method="post">
      Enter the filename : <input type="text" name="file" /><br /><br />
      Enter the extension :
      <select name="ext">
        <option value="txt">txt</option>
        <option value="pdf">pdf</option>
        <option value="doc">doc</option>
      </select>
      <br /><br />

      Enter the text<br /><br />
      <textarea name="cont"></textarea><br />
      <input type="submit" value="submit" name="submit" />
    </form>
    <?php
    if(isset($_POST["submit"]))
    {
    $name=$_POST['file'];
    $ext=$_POST['ext'];
    $cont=$_POST['cont'];
    file_put_contents($name.".".$ext,$cont) or die("unable to open");
}
?>
  </body>
</html>
