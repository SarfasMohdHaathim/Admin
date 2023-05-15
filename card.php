<?php include 'header.php';
$conn  = mysqli_connect("localhost", "akinokib_sarfas", "Hacker@89", "akinokib_yash"); ?>
<div class="card mb-3">
            <div class="card-header">
              <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                  <h5 class="mb-0" data-anchor="data-anchor" id="background">Background<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#background" style="padding-left: 0.375em;"></a></h5>
                </div>
                <div class="col-auto ms-auto">
                  <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist"><button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-7a4ab5ec-8a8a-44ac-9d32-4e27355b889c" type="button" role="tab" aria-controls="dom-7a4ab5ec-8a8a-44ac-9d32-4e27355b889c" aria-selected="true" id="tab-dom-7a4ab5ec-8a8a-44ac-9d32-4e27355b889c">Preview</button><button class="btn btn-sm" data-bs-toggle="pill" data-bs-target="#dom-1e147ccb-fcb2-4f16-a238-fed9935c2f49" type="button" role="tab" aria-controls="dom-1e147ccb-fcb2-4f16-a238-fed9935c2f49" aria-selected="false" id="tab-dom-1e147ccb-fcb2-4f16-a238-fed9935c2f49" tabindex="-1">Code</button></div>
                </div>
              </div>
            </div>
            
           <div class="row">
           <?php 
          $sql = "SELECT * FROM admintable ORDER BY id DESC";
          $res = mysqli_query($conn,$sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($row = mysqli_fetch_assoc($res)) {  ?>
            
           <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        Modal body text goes here.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
           <div class="col-md-4">
            <div class="card-body bg-light">
                  <div class="tab-content">
                    <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-9b51b3a6-b7fa-416c-9f5f-0fbd5384b04a" id="dom-9b51b3a6-b7fa-416c-9f5f-0fbd5384b04a">
                      <div class="card overflow-hidden" style="width: 20rem;">
                        <div class="card-img-top"><img class="img-fluid" src="<?=$row['image_url']?>" alt="Card image cap"></div>
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example</p>
                          <div class="d-flex">
                          <a class="btn btn-falcon-danger btn-sm" href="#!">Delete</a>
                          <a class="btn btn-falcon-info btn-sm" href="#!">Edit</a>
                          <a class="btn btn-falcon-success btn-sm" href="#!">Add</a>
                        </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
                </div>
                <?php }} ?>
                </div>
          </div>
<?php include 'footer.php'; ?>