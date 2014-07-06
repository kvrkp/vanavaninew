<?PHP
$data = array(
  array('sno' => 1, 'name' => "GOBI.K", 'img' =>"images/teachers/01_gobi_k.jpg_medium.jpg", 'designation' => "PRINCIPAL", 'classes' => "IX,X", 'subject' => "ENGLISH", 'classes' => "HISTORY", 'doj' => "1-6-2011"),
  array('sno' => 2, 'name' => "MEENA .M", 'img' =>"images/teachers/02_meena_m.jpg_medium.jpg", 'designation' => "VP", 'classes' => "VIII-X", 'subject' => "MATHS", 'doj' => "12-7-2003"),
  array('sno' => 3, 'name' => "CHINTHAMANI .C", 'img' =>"images/teachers/03_chintamani_c.jpg_medium.jpg", 'designation' => "TAMIL TEACHER", 'classes' => "VIII-X", 'subject' => "TAMIL", 'doj' => "9-7-1993"),
  array('sno' => 4, 'name' => "KALIAMMAL.K", 'img' =>"images/teachers/04_kaliammal_k.jpg_medium.jpg", 'designation' => "GT", 'classes' => "VI-VIII", 'subject' => "SCIENCE", 'doj' => "12-7-2000"),
  array('sno' => 5, 'name' => "DEIVAKUMAR.S", 'img' =>"images/teachers/05_deivakumar_s.jpg_medium.jpg", 'designation' => "SEC. GRADE", 'classes' => "VI-VIII", 'subject' => "HISTORY", 'doj' => "3-6-2008"),
  array('sno' => 6, 'name' => "DHINAKARAN.M", 'img' =>"images/teachers/07_dhinakaran_m.jpg_medium.jpg", 'designation' => "GT", 'classes' => "VI-X", 'subject' => "SCIENCE", 'doj' => "5-6-2008"),
  array('sno' => 7, 'name' => "DEVI.G", 'img' =>"images/teachers/08_devi_g.jpg_medium.jpg", 'designation' => "PRIMARY", 'classes' => "II", 'subject' => "GENERAL", 'doj' => "2-6-2009"),
  array('sno' => 8, 'name' => "AMUTHA.S", 'img' =>"images/teachers/09_amutha_s.jpg_medium.jpg", 'designation' => "PRIMARY", 'classes' => "I", 'subject' => "GENERAL", 'doj' => "4-6-2010"),
  array('sno' => 9, 'name' => "BABY.S", 'img' =>"images/teachers/11_baby_s.jpg_medium.jpg", 'designation' => "GT", 'classes' => "VI-X", 'subject' => "MATHS", 'doj' => "2-7-2012"),
  array('sno' => 10, 'name' => "SOBAMANI.R", 'img' =>"images/teachers/12_sobamani_r.jpg_medium.jpg", 'designation' => "PRIMARY", 'classes' => "III", 'subject' => "GENERAL", 'doj' => "2-6-2009"),
  array('sno' => 11, 'name' => "DEEPARANI.R", 'img' =>"images/teachers/13_deeparani_r.jpg_medium.jpg", 'designation' => "PRIMARY", 'classes' => "KG", 'subject' => "GENERAL", 'doj' => "2-6-2009"),
  array('sno' => 12, 'name' => "PRIYA.S ", 'img' =>"images/teachers/14_priya_s.jpg_medium.jpg", 'designation' => "SEC. GRADE", 'classes' => "III-IV", 'subject' => "SCIENCE", 'doj' => "15-7-2013"),
  array('sno' => 13, 'name' => "POORNIMA.S", 'img' =>"images/teachers/15_poornima_s.jpg_medium.jpg", 'designation' => "COMP.TEACHER", 'classes' => "V-VIII", 'subject' => "COMPUTER", 'doj' => "10-6-2013")
  );

header('Content-Type: application/json');
echo json_encode($data);
?>