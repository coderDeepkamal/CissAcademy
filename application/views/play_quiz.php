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
		    
		    <form method="post" action="<?php echo base_url();?>Questions/resultdisplay/">
		       
		    
		    <?php foreach($questions as $row) { ?>
		    
		    <?php $ans_array = array($row->choice1, $row->choice2, $row->choice3, $row->answer);
			shuffle($ans_array); ?>
		    
		    <p style="font-weight: bold;">#.<?=$row->question?></p>
		    
		    <input type="radio" name="quizid<?=$row->quizID?>" value="<?=$ans_array[0]?>"> <?=$ans_array[0]?><br>
		    <input type="radio" name="quizid<?=$row->quizID?>" value="<?=$ans_array[1]?>"> <?=$ans_array[1]?><br>
		    <input type="radio" name="quizid<?=$row->quizID?>" value="<?=$ans_array[2]?>"> <?=$ans_array[2]?><br>
		    <input type="radio" name="quizid<?=$row->quizID?>" value="<?=$ans_array[3]?>"> <?=$ans_array[3]?><br>
		    
		    <?php } ?>
		    
		    <br><br>
		    <input type="hidden" name="module_id" value="<?=$module_id ?>">
		    <button class="btn btn-danger" type="submit" value="Submit!">SUBMIT</button>
		    
		    </form>
		    
		</div>

	</section>
</section>