<?php
  $course=$_GET['course'];
  $a1=array('DS','OOPS','M-3','CM','DELD','BE');
  $a2=array('DM','SMP','OS','PCS','TOC','CO');
  $a3=array('CN','DAA','MP','DBMS','CG','Elective 1');
  $a4=array('Elective 2','SE','CMC','IWD','ITC','CD');
  $a5=array('MIS','AIES','Elective 3','Elective 4');
  $a6=array('DMWH','CG','Elective 5','Elective 6');
  if($course=="III")
  {
	  foreach($a1 as $a)
	  {
		  echo "<option>$a</option>";
	  }
  }
  else if($course=="IV")
  {
	  foreach($a2 as $a)
	  {
		  echo "<option>$a</option>";
	  }
  }
  else if($course=="V")
  {
	  foreach($a3 as $a)
	  {
		  echo "<option>$a</option>";
	  }
  }
  else if($course=="VI")
  {
    foreach($a4 as $a)
    {
      echo "<option>$a</option>";
    }
  }
  else if($course=="VII")
  {
    foreach($a5 as $a)
    {
      echo "<option>$a</option>";
    }
  }
  else if($course=="VIII")
  {
    foreach($a6 as $a)
    {
      echo "<option>$a</option>";
    }
  }
  else
  {
	  echo "<option>Select Semester first!!</option>";
  }
?>