<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<section id="main-content">
    <section class="wrapper">

		<div id="container">
			<h1 style="text-align:center; color:green;">Start the Test!</h1>
		    
		    
		       
		    
		    <?php foreach($records as $r) { ?>
		    
		    <?php $ans_array = array($r->choice1, $r->choice2, $r->choice3, $r->answer);
			shuffle($ans_array); ?>
		    
		    <h3 style="font-weight: bold;"><?=$r->quizID?>.<?=$r->question?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?= base_url(); ?>Questions/deletequiz/<?php echo $r->quizID;?>" class="btn btn-danger">Delete</a></h3>
		    
		    <input type="radio" name="quizid<?=$r->quizID?>" value="<?=$ans_array[0]?>" required> <?=$ans_array[0]?><br>
		    <input type="radio" name="quizid<?=$r->quizID?>" value="<?=$ans_array[1]?>"> <?=$ans_array[1]?><br>
		    <input type="radio" name="quizid<?=$r->quizID?>" value="<?=$ans_array[2]?>"> <?=$ans_array[2]?><br>
		    <input type="radio" name="quizid<?=$r->quizID?>" value="<?=$ans_array[3]?>"> <?=$ans_array[3]?><br>
		    
		    <?php } ?>
		    
		    <br><br>
		    
		    
		</div>

	</section>
</section>