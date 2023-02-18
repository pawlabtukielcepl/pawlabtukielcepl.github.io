<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="Description" content="Strona Pawła Łabędzkiego" />
  <meta name="Keywords" content="Paweł Łabędzki, Politechnika Świętokrzyska" />
  <meta name="Author" content="Paweł Łabędzki	" />

  <title>.:: DOC ::.</title>

  <link rel="stylesheet" href="../css/style.css" type="text/css" />
	
	<script type="text/javascript"
  src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
  </script>
	
	<script type="text/javascript" src="../skrypty/jquery-1.7.1.min.js"></script>          
 <script type="text/javascript">                                         
   $(document).ready(function(){
   $("#m1").toggle(function(){
     $("#message1").hide('slow');
   },function(){
     $("#message1").show('slow');
   });
	 $("#m2").toggle(function(){
     $("#message2").hide('slow');
   },function(){
     $("#message2").show('slow');
   });
	 $("#m3").toggle(function(){
     $("#message3").hide('slow');
   },function(){
     $("#message3").show('slow');
   });
	 $("#m4").toggle(function(){
     $("#message4").hide('slow');
   },function(){
     $("#message4").show('slow');
   });
	 $("#m5").toggle(function(){
     $("#message5").hide('slow');
   },function(){
     $("#message5").show('slow');
   });
	 $("#m6").toggle(function(){
     $("#message6").hide('slow');
   },function(){
     $("#message6").show('slow');
   });
	 $("#m7").toggle(function(){
     $("#message7").hide('slow');
   },function(){
     $("#message7").show('slow');
   });
	 $("#m8").toggle(function(){
     $("#message8").hide('slow');
   },function(){
     $("#message8").show('slow');
   });
	 $("#m9").toggle(function(){
     $("#message9").hide('slow');
   },function(){
     $("#message9").show('slow');
   });
	 $("#m10").toggle(function(){
     $("#message10").hide('slow');
   },function(){
     $("#message10").show('slow');
   });
	 	 $("#m11").toggle(function(){
     $("#message11").hide('slow');
   },function(){
     $("#message11").show('slow');
   });
	 	 	 $("#m12").toggle(function(){
     $("#message12").hide('slow');
   },function(){
     $("#message12").show('slow');
   });
	 $("#m13").toggle(function(){
     $("#message13").hide('slow');
   },function(){
     $("#message13").show('slow');
   });
	 $("#m14").toggle(function(){
     $("#message14").hide('slow');
   },function(){
     $("#message14").show('slow');
   });
	 	 $("#m15").toggle(function(){
     $("#message15").hide('slow');
   },function(){
     $("#message15").show('slow');
   });
	 	 	 $("#m16").toggle(function(){
     $("#message16").hide('slow');
   },function(){
     $("#message16").show('slow');
   });
	 $("#m17").toggle(function(){
     $("#message17").hide('slow');
   },function(){
     $("#message17").show('slow');
   });
	 $("#m18").toggle(function(){
     $("#message18").hide('slow');
   },function(){
     $("#message18").show('slow');
   });
   $("#m19").toggle(function(){
     $("#message19").hide('slow');
   },function(){
     $("#message19").show('slow');
   });
	 $("#m20").toggle(function(){
     $("#message20").hide('slow');
   },function(){
     $("#message20").show('slow');
   });
   	 $("#m21").toggle(function(){
     $("#message21").hide('slow');
   },function(){
     $("#message21").show('slow');
   });
   	 $("#m22").toggle(function(){
     $("#message22").hide('slow');
   },function(){
     $("#message22").show('slow');
   });
   	 $("#m23").toggle(function(){
     $("#message23").hide('slow');
   },function(){
     $("#message23").show('slow');
   });
   	 $("#m24").toggle(function(){
     $("#message24").hide('slow');
   },function(){
     $("#message24").show('slow');
   });
   	 $("#m25").toggle(function(){
     $("#message25").hide('slow');
   },function(){
     $("#message25").show('slow');
   });
   	 $("#m26").toggle(function(){
     $("#message26").hide('slow');
   },function(){
     $("#message26").show('slow');
   });
   	 $("#m27").toggle(function(){
     $("#message27").hide('slow');
   },function(){
     $("#message27").show('slow');
   });
   	 $("#m28").toggle(function(){
     $("#message28").hide('slow');
   },function(){
     $("#message28").show('slow');
   });
   	 $("#m29").toggle(function(){
     $("#message29").hide('slow');
   },function(){
     $("#message29").show('slow');
   });
   	 $("#m30").toggle(function(){
     $("#message30").hide('slow');
   },function(){
     $("#message30").show('slow');
   });
 });    

 </script>
	
</head>
<body>
<div class='main'>
<h1>strona Pawła Łabędzkiego</h1>
<?php
$spr=array("example","poprawa_mes"); //dodaj liste, ktora jest tozsama z nazwami podkatalogow w katalogu sprawdziany
                                       //patrz np. katalog example
$haslo=$_POST['haslo'];
if (in_array($haslo,$spr)) {
      include("sprawdziany/$haslo/index.php");
} else {
   if (file_exists($haslo)) { 
      include("$haslo/index.php");
   } else {
      echo "<p>podano niepoprawne hasło, <a href='../index.php'>powrót</a></p>";
   }
}
?>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

</div>
</body>
</html>