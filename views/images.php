<?php include("header.php"); ?>

<?php

 require_once '../models/DAO.php';

$dao = new DAO();

$atelje=$dao->selectAtelje();

?>



<section class="gallery-block compact-gallery">

    <div class="container">

      <div class="heading pt-5">

        <h3>Galerija SLIKA</h3>

      </div>



<!-- Gallery -->



<main class="container">



    <div class="card-columns gallery-block compact-gallery">



    <?php foreach (array_reverse($atelje) as $value) { ?>

      <?php if ($value['category'] == 1) {  ?>

      <div class="card item zoom-on-hover">

        <a href="../pictures/<?= $value['image'] ?>" target="_blank"><img src="../pictures/<?= $value['image'] ?>" class="card-img-top img-fluid image" alt="..." />

          

        <?php if ($value['sold']==0) { $s='';}?>

      <?php if ($value['sold']==1) { $s='PRODATO';}?>

 



          <span class="description">

            <span class="description-heading"><?= $value['namesr'] ?></span>

            <span class="description-body"><?= $value['memosr'] ?></span>
		<span class="description-body text-warning"><?= $s ?></span>
	     
          </span>

	</a>


        

      </div>

      <?php } ?>

      <?php } ?>

    

    </div>

  </main>



  <!-- /Gallery -->



    </div>

</section>



<?php include("footer.php"); ?>