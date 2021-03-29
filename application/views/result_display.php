<section id="main-content">
    <section class="wrapper">
		<div id="container">
			<h1>View Result!</h1>
		    <form action="<?php echo base_url();?>Questions/addresult/" method="POST">
		    <?php $score =0; ?>
		    
			<?php $array1= array(); ?>
			<?php $array2= array(); ?>    
			<?php $array3= array(); ?>
			<?php $array4= array(); ?>
			<?php $array5= array(); ?>
			<?php $array6= array(); ?>
			<?php $array7= array(); ?>
			<?php $array8= array(); ?>
		      
		    <?php foreach($checks as $checkans) { ?>
		    	<?php array_push($array1, $checkans); ?>
			<?php } ?>
		               
		               
		    <?php foreach($results as $res) { ?>
               <?php 
               		 array_push($array2, $res->answer); 
			         array_push($array3, $res->quizID); 
			         array_push($array4, $res->question); 
			         array_push($array5, $res->choice1); 
			         array_push($array6, $res->choice2); 
			         array_push($array7, $res->choice3); 
					 array_push($array8, $res->answer);
				?>
			<?php } ?>
		               
		               
		    <?php for ($x=0; $x <count($checks); $x++) { ?>
			    <p>#.<?=$array4[$x]?></p>
			    

			    <?php if ($array2[$x]!=$array1[$x]) { ?>
			      
		           <p><span style="background-color: #FF9C9E"><?=$array1[$x]?></span></p>
		           <p><span style="background-color: #ADFFB4"><?=$array2[$x]?></span></p>
			           
		      	<?php } else { ?>

		           <p><span style="background-color: #ADFFB4"><?=$array1[$x]?></span></p>
		           <?php $score = $score + 1; ?>

			    <?php } ?>
		    <?php }?>
		    
		    <br><br>
		    
		    <h2>Your Score: </h2>
		    <h1><?=$score?>/<?=count($checks)?></h1>
		    <?php 
		    $sesdata = array('score' => $score);
		    $this->session->set_userdata($sesdata); 
		    ?>
		</div>
		<?php foreach($results as $r) { ?>
		<input type="hidden" name="module_id" value="<?=$r->module_id ?>">
	    <?php } ?>
		<input type="submit" name="submit">
	   
        </form>
	</section>
</section>