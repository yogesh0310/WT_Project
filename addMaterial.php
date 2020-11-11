<?php
session_start();
include_once 'faculty-header.php';
if (isset($_GET['msg'])) {
  $msg=$_GET['msg'];
}
?>
<link rel="stylesheet" type="text/css" href="css/forms.css">
<section class="container-fliud">
          <section class="row justify-content-center">
            <section class="col-12 col-sm-2 col-md-8 col-lg-6">
                <form class="form-container" enctype="multipart/form-data" action="uploadFile.php" method="POST">
                    <h3 align="center" style="font-family: Raleway;">Notes Details</h3><br>
                    Subject_Name:<input type="text" name="sname"><br>
			        File_Name:<input type="file" id="filename" name="filename"><br>
			        Document_name:<input type="text" placeholder="Name of Document.." id="docname" name="docname">
			        Unit:<br>
			        <select name="unit">
			            <option value="1">1</option>
			            <option value="2">2</option>
			            <option value="3">3</option>
			            <option value="4">4</option>
			            <option value="5">5</option>
			            <option value="6">6</option>
			            <option value="7">7</option>
			        </select>
			        Year:<br>
			        <select name="year">
			            <option value="FY">FY Btech</option>
			            <option value="SY">SY Btech</option>
			            <option value="TY">TY Btech</option>
			            <option value="Btech">Btech</option>
			        </select>
            <br>
          <input type="submit" class="btn btn-success" align="center">
        </form>
    </section>
</section>
</section>
<script type="text/javascript">
      alert("<?php echo $msg?>")
    </script>
