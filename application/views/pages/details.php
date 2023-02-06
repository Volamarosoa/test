
<?php
  $this->load->view("templates/header");
?>
        <div class="row">
          <div class="col-lg-12 col-md-12 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <?php echo $detail['info']['first_name']; ?>  <?php echo $detail['info']['last_name']; ?> 
                </h4>
                <p class="card-text">Manager: <?php echo $detail['store']['first_name']; ?> <?php echo $detail['store']['last_name']; ?> </p>
                <p class="card-text">Email: <?php echo $detail['info']['email']; ?> </p>
                <p class="card-text">Address: <?php echo $detail['address']['address']; ?></p>
                <p class="card-text">City: <?php echo $detail['address']['city']; ?></p>
                <p class="card-text">Country: <?php echo $detail['address']['country']; ?></p>
                <p class="card-text">Code postal: <?php echo $detail['address']['postal_code']; ?></p>
                <p class="card-text">Active: <?php if($detail['info']['active'] == 1) { echo "Oui"; } else { echo "Non"; } ?></p>
              </div>
              <div class="card-footer">
                <?php if($detail['info']['active'] == 1) {  ?>
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>                   
                <?php } else { ?>
                    <small class="text-muted">&#9734; &#9734; &#9734; &#9734; &#9734;</small>     
                <?php } ?>
              </div>
            </div>
          </div>

        </div>
<?php
  $this->load->view("templates/footer");
 ?>