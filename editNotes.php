<?php
session_start();
include_once 'faculty-header.php';
include_once './config.php';
include "./core/database.php";
include "./core/NotesHandling.php";
$department=$_SESSION['dept'];

use Core\Data\Database;
use Core\Data\NotesHandling;

if (isset($_GET['msg'])) {
  $msg=$_GET['msg'];
}


$d=new Database();
$notes=new NotesHandling($d->connect());

$notes->name=$_SESSION['name'];

$subjects=$notes->getSubjectNamesByFaculty();

?>
<style type="text/css">
  .select-css {
  display: block;
  font-size: 16px;
  font-family: sans-serif;
  font-weight: 700;
  color: #444;
  line-height: 1.3;
  padding: .6em 1.4em .5em .8em;
  width: 100%;
  max-width: 100%;
  margin: 50px;
  margin-left: 0px;
  box-sizing: border-box;
  border: 1px solid #aaa;
  box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
  border-radius: .5em;
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  background-color: #fff;
  background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
    linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
  background-repeat: no-repeat, repeat;
  background-position: right .7em top 50%, 0 0;
  background-size: .65em auto, 100%;
}
.select-css::-ms-expand {
  display: none;
}
.select-css:hover {
  border-color: #888;
}
.select-css:focus {
  border-color: #aaa;
  box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
  box-shadow: 0 0 0 3px -moz-mac-focusring;
  color: #222;
  outline: none;
}
.select-css option {
  font-weight:normal;
}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-2" style="margin: 50px;">
      
	    </div>
	    <div class="col-md-6 input-field" >
	      <select id="subjects" class="select-css">
	        <?php foreach ($subjects as $subject): ?>
	          <?php foreach ($subject as $key => $value): ?>
	            <option value="<?php echo $value;?>"><?php echo $value;?></option>
	          <?php endforeach; ?>
	        <?php endforeach; ?> 
	      </select>
	      <input type="button" name="load" class="btn btn-success" value="Load Data" onclick="showDataForFaculty('<?php echo $department; ?>')" style="margin-left: 230px;">
	      
	    </div>
	    <div class="col-md-4" style="margin: 50px;">
	      
	    </div>
	 </div>
	 <div class="show-data" id="s1" style="display: none;">
        <table id="display" class="table table-striped">
          <tr>
            <th>Unit</th>
            <th>File_name</th>
            <th>File_size</th>
            <th>Document_name</th>
            <th>Time</th>
            <th>Faculty_name</th>
            <th>Download_link</th>
          </tr>
        </table>
  	

<link rel="stylesheet" type="text/css" href="css/forms.css">
<section class="container-fliud">
    <section class="row justify-content-center">
        <section class="col-12 col-sm-2 col-md-8 col-lg-6">
  			<form class="form-container" action="deleteNotes.php" method="POST">
  				<h3 style="font-size: 25px;">Enter File Name from above list to delete file.</h3>
  				<hr>
		  		File Name:<input type="text" name="fname"><br>
		  		<input type="submit" class="btn btn-success" align="center" value="Delete" >
  			</form>
  		</section>
	</section>
</section>
	</div>
</div>

<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
  alert("<?php echo $msg?>")
</script>