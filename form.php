<?php include 'header.php'; ?>
<style type="text/css">
        img {
            display: block;
            max-width: 100%;
        }
        .preview {
            overflow: hidden;
            width: 160px; 
            height: 160px;
            margin: 10px;
            border: 1px solid red;
        }
        
    </style>
<div class="card mb-3">
            <div class="card-header ">
              <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                  <h5 class="mb-0" data-anchor="data-anchor" id="file-input">File Input<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#file-input" style="padding-left: 0.375em;"></a></h5>
                </div>
                <div class="col-auto ms-auto">
                  <div class="nav nav-pills nav-pills-falcon flex-grow-1 mt-2" role="tablist"><button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-410f2eb8-4ba8-410f-a73c-182c6b5abc07" type="button" role="tab" aria-controls="dom-410f2eb8-4ba8-410f-a73c-182c6b5abc07" aria-selected="true" id="tab-dom-410f2eb8-4ba8-410f-a73c-182c6b5abc07">Preview</button><button class="btn btn-sm" data-bs-toggle="pill" data-bs-target="#dom-5bbda65a-67ab-4be4-82b8-62eef18af131" type="button" role="tab" aria-controls="dom-5bbda65a-67ab-4be4-82b8-62eef18af131" aria-selected="false" id="tab-dom-5bbda65a-67ab-4be4-82b8-62eef18af131" tabindex="-1">Code</button></div>
                </div>
              </div>
            </div>
            <div class="card-body bg-light">
              <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-410f2eb8-4ba8-410f-a73c-182c6b5abc07" id="dom-410f2eb8-4ba8-410f-a73c-182c6b5abc07">
                  <div class="mb-3 w-50">
                    <label class="form-label" for="customFile">File input example</label>
                    <input class="form-control image" id="customFile" type="file" name="image">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1">Email address</label>
                    <input class="form-control w-50" id="exampleFormControlInput1" type="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>
                <div class="mb-3 w-50">
                <label class="form-label" for="dom-748f15f2-63a1-4a6e-b5f1-ef398d7783e3">Example select</label>
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-748f15f2-63a1-4a6e-b5f1-ef398d7783e3" id="dom-748f15f2-63a1-4a6e-b5f1-ef398d7783e3"><select class="form-select" aria-label="Default select example">
                    <option selected="">Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-header">
              <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                  <h5 class="mb-0" data-anchor="data-anchor" id="basic-form">Basic form<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#basic-form" style="padding-left: 0.375em;"></a></h5>
                </div>
                <div class="col-auto ms-auto">
                  <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist"><button class="btn btn-sm active" data-bs-toggle="pill" data-bs-target="#dom-0f965c27-d873-4b1f-aabf-7c010b99ec42" type="button" role="tab" aria-controls="dom-0f965c27-d873-4b1f-aabf-7c010b99ec42" aria-selected="true" id="tab-dom-0f965c27-d873-4b1f-aabf-7c010b99ec42">Preview</button><button class="btn btn-sm" data-bs-toggle="pill" data-bs-target="#dom-9437605f-753b-4f84-a95f-a0471d48dfb5" type="button" role="tab" aria-controls="dom-9437605f-753b-4f84-a95f-a0471d48dfb5" aria-selected="false" id="tab-dom-9437605f-753b-4f84-a95f-a0471d48dfb5" tabindex="-1">Code</button></div>
                </div>
              </div>
            </div>
            <div class="card-body bg-light">
              <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-0f965c27-d873-4b1f-aabf-7c010b99ec42" id="dom-0f965c27-d873-4b1f-aabf-7c010b99ec42">
                  <form action="php/upload.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3"><label class="form-label" for="basic-form-name">Name</label><input class="form-control" id="basic-form-name" type="text" placeholder="Name"></div>
                    <div class="mb-3"><label class="form-label" for="basic-form-email">Email address</label><input class="form-control" id="basic-form-email" type="email" placeholder="name@example.com"></div>
                    <div class="mb-3"><label class="form-label" for="basic-form-password">Password</label><input class="form-control" id="basic-form-password" type="password" placeholder="Password"></div>
                    <div class="mb-3"><label class="form-label" for="basic-form-dob">Date of Birth</label><input class="form-control" id="basic-form-dob" type="date"></div>
                    <div class="mb-3"><label class="form-label" for="basic-form-gender">Gender</label><select class="form-select" id="basic-form-gender" aria-label="Default select example">
                        <option selected="selected">Select your gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                      </select></div>
                    <div class="mb-3">
                      <div class="form-check"><input class="form-check-input" id="flexRadioDefault1" type="radio" name="flexRadioDefault"><label class="form-check-label mb-0" for="flexRadioDefault1">Personal Account</label></div>
                      <div class="form-check"><input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault" checked="checked"><label class="form-check-label mb-0" for="flexRadioDefault2">Business Account</label></div>
                    </div>
                    <div class="mb-3"><label class="form-label">Upload Image</label><input class="form-control image" name="my_image" type="file"></div>
                    <div class="mb-3"><label class="form-label" for="basic-form-textarea">Description</label><textarea class="form-control" id="basic-form-textarea" rows="3" placeholder="Description"></textarea></div>
                    <div class="mb-3 form-check"><input class="form-check-input" id="basic-form-checkbox" type="checkbox">
                    <label class="form-check-label" for="basic-form-checkbox">Remember me</label></div>
                    <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
          
      <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="modalLabel">Crop image</h5>
                      <button type="button" class="close-button" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">close</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <div class="img-container">
                          <div class="row">
                              <div class="col-md-8">  
                                  <img id="image">
                              </div>
                              <div class="col-md-4">
                                  <div class="preview"></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-info close-button" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary " id="crop">Crop</button>
                  </div>
              </div>
          </div>
      </div>

<?php include 'footer.php'; ?>