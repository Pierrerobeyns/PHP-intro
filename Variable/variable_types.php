<html>
  <head><title>Hi!</title></head>
  <body>

 <?php $name = "Pierre"; $age = "29"; $color = "brown"; 
 
            $team = array(
            0 => 'Dominique',
            1 => 'Nilo',
            2 => 'Emilia',
            3 => 'Anastasia',
            4 => 'Regine');
 ?>

<p>My name is <?php echo $name; ?></p>
<p>I'm <?php echo $age; ?> years old</p>
<p>My eyes are <?php echo $color; ?></p>
<p>The first person in my family is <?php echo $team[0]; ?></p>




  </body>
</html>