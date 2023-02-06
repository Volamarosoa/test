
<?php
  $this->load->view("templates/header");
?>
  <div class="row">
    <?php foreach($liste as $row) { ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="<?php echo site_url(); ?>commerce/detailCustomer?id=<?php echo $row['customer_id']; ?>"><?php echo $row['first_name'] ?></a>
            </h4>
            <p class="card-text"><?php echo $row['email'] ?></p>
            </div>
           <div class="card-footer">
              <?php if($row['active'] == 1) {  ?>
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>                   
              <?php } else { ?>
              <small class="text-muted">&#9734; &#9734; &#9734; &#9734; &#9734;</small>     
              <?php } ?>              
           </div>
          </div>
        </div>
    <?php } ?>

  </div>

<?php
  $this->load->view("templates/footer");
 ?>