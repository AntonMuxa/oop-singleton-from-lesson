<!DOCTYPE html>
<html>
 <head>
   <title>index</title>
   <meta charset="utf-8">
 </head>
 <body>
  <h1>Список книг</h1>
  <?php if($books) { ?>
  <table>
  <?php foreach($books as $book) { ?>
	<tr><td><?php echo $book['title']; ?></td></tr>
  <?php } ?>
  </table>
  <?php } ?>
 </body> 
</html>