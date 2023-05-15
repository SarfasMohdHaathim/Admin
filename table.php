<?php include 'header.php'; ?>
<div class="card mb-3">
            <div class="card-header border-bottom">
              <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                  <h5 class="mb-0" data-anchor="data-anchor" id="responsive-table">Responsive Table<a class="anchorjs-link " aria-label="Anchor" data-anchorjs-icon="#" href="#responsive-table" style="padding-left: 0.375em;"></a></h5>
                </div>
                <div class="d-flex align-items-center justify-content-end my-3">
                        <div id="bulk-select-replace-element"><button class="btn btn-falcon-success btn-sm" type="button"><span class="fas fa-plus"></span><span class="ms-1">New</span></button></div>
                      </div>
              </div>
            </div>
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


            <div class="card-body pt-0">
              <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-a0cc4f30-2a10-4ef8-ae2b-c45cded0cbf8" id="dom-a0cc4f30-2a10-4ef8-ae2b-c45cded0cbf8">
                  <div class="table-responsive scrollbar">
                    <table class="table table-hover table-striped overflow-hidden">
                      <thead>
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Address</th>
                          <th scope="col">Status</th>
                          <th class="text-end" scope="col">Amount</th>
                          <th class="text-end" scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="align-middle">
                          <td class="text-nowrap">
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/13.jpg" alt="">
                              </div>
                              <div class="ms-2">Emma Watson</div>
                            </div>
                          </td>
                          <td class="text-nowrap">emma@example.com</td>
                          <td class="text-nowrap">(212) 228-8403</td>
                          <td class="text-nowrap">2289 5th Avenue, New York</td>
                          <td><span class="badge badge rounded-pill d-block p-2 badge-soft-success">Completed<svg class="svg-inline--fa fa-check fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span></td>
                          <td class="text-end">
                                <div class="d-flex">
                                <button class="btn btn-falcon-success btn-sm" type="button"><span class="fas fa-plus"></span><span class="ms-1">New</span></button>
                                <button class="btn btn-falcon-success btn-sm" type="button"><span class="fas fa-edit"></span><span class="ms-1">Edit</span></button>
                                <button class="btn btn-falcon-success btn-sm" type="button"  data-toggle="modal" data-target="#myModal"><span class="fas fa-trash"></span><span class="ms-1">Delete</span></button>
                            </div>
                              </td>
                        </tr>
                        <tr class="align-middle">
                          <td class="text-nowrap">
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/13.jpg" alt="">
                              </div>
                              <div class="ms-2">Emma Watson</div>
                            </div>
                          </td>
                          <td class="text-nowrap">emma@example.com</td>
                          <td class="text-nowrap">(212) 228-8403</td>
                          <td class="text-nowrap">2289 5th Avenue, New York</td>
                          <td><span class="badge badge rounded-pill d-block p-2 badge-soft-success">Completed<svg class="svg-inline--fa fa-check fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span></td>
                          <td class="text-end">
                                <div class="d-flex">
                                <button class="btn btn-falcon-success btn-sm" type="button"><span class="fas fa-plus"></span><span class="ms-1">New</span></button>
                                <button class="btn btn-falcon-success btn-sm" type="button"><span class="fas fa-edit"></span><span class="ms-1">Edit</span></button>
                                <button class="btn btn-falcon-success btn-sm" type="button"><span class="fas fa-trash"></span><span class="ms-1">Delete</span></button>
                            </div>
                              </td>
                        </tr>
                        <tr class="align-middle">
                          <td class="text-nowrap">
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/13.jpg" alt="">
                              </div>
                              <div class="ms-2">Emma Watson</div>
                            </div>
                          </td>
                          <td class="text-nowrap">emma@example.com</td>
                          <td class="text-nowrap">(212) 228-8403</td>
                          <td class="text-nowrap">2289 5th Avenue, New York</td>
                          <td><span class="badge badge rounded-pill d-block p-2 badge-soft-success">Completed<svg class="svg-inline--fa fa-check fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span></td>
                          <td class="text-end">
                                <div class="d-flex">
                                <button class="btn btn-falcon-success btn-sm" type="button"><span class="fas fa-plus"></span><span class="ms-1">New</span></button>
                                <button class="btn btn-falcon-success btn-sm" type="button"><span class="fas fa-edit"></span><span class="ms-1">Edit</span></button>
                                <button class="btn btn-falcon-success btn-sm" type="button"><span class="fas fa-trash"></span><span class="ms-1">Delete</span></button>
                            </div>
                              </td>
                        </tr>
                        <tr class="align-middle">
                          <td class="text-nowrap">
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/13.jpg" alt="">
                              </div>
                              <div class="ms-2">Emma Watson</div>
                            </div>
                          </td>
                          <td class="text-nowrap">emma@example.com</td>
                          <td class="text-nowrap">(212) 228-8403</td>
                          <td class="text-nowrap">2289 5th Avenue, New York</td>
                          <td><span class="badge badge rounded-pill d-block p-2 badge-soft-success">Completed<svg class="svg-inline--fa fa-check fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span></td>
                          <td class="text-end">
                                <div class="d-flex">
                                <button class="btn btn-falcon-success btn-sm" type="button"><span class="fas fa-plus"></span><span class="ms-1">New</span></button>
                                <button class="btn btn-falcon-success btn-sm" type="button"><span class="fas fa-edit"></span><span class="ms-1">Edit</span></button>
                                <button class="btn btn-falcon-success btn-sm" type="button"><span class="fas fa-trash"></span><span class="ms-1">Delete</span></button>
                            </div>
                              </td>
                        </tr>
                        <tr class="align-middle">
                          <td class="text-nowrap">
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/13.jpg" alt="">
                              </div>
                              <div class="ms-2">Emma Watson</div>
                            </div>
                          </td>
                          <td class="text-nowrap">emma@example.com</td>
                          <td class="text-nowrap">(212) 228-8403</td>
                          <td class="text-nowrap">2289 5th Avenue, New York</td>
                          <td><span class="badge badge rounded-pill d-block p-2 badge-soft-success">Completed<svg class="svg-inline--fa fa-check fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span></td>
                          <td class="text-end">
                                <div class="d-flex">
                                <button class="btn btn-falcon-success btn-sm" type="button"><span class="fas fa-plus"></span><span class="ms-1">New</span></button>
                                <button class="btn btn-falcon-success btn-sm" type="button"><span class="fas fa-edit"></span><span class="ms-1">Edit</span></button>
                                <button class="btn btn-falcon-success btn-sm" type="button"><span class="fas fa-trash"></span><span class="ms-1">Delete</span></button>
                            </div>
                              </td>
                        </tr>
                        <tr class="align-middle">
                          <td class="text-nowrap">
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/13.jpg" alt="">
                              </div>
                              <div class="ms-2">Emma Watson</div>
                            </div>
                          </td>
                          <td class="text-nowrap">emma@example.com</td>
                          <td class="text-nowrap">(sarfas) 228-8403</td>
                          <td class="text-nowrap">2289 5th Avenue, New York</td>
                          <td><span class="badge badge rounded-pill d-block p-2 badge-soft-success">Completed<svg class="svg-inline--fa fa-check fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span></td>
                          <td class="text-end">
                                <div class="d-flex">
                                <button class="btn btn-falcon-success btn-sm" type="button"><span class="fas fa-plus"></span><span class="ms-1">New</span></button>
                                <button class="btn btn-falcon-success btn-sm" type="button"><span class="fas fa-edit"></span><span class="ms-1">Edit</span></button>
                                <button class="btn btn-falcon-success btn-sm delete-modal" type="button"><span class="fas fa-trash"></span><span class="ms-1">Delete</span></button>
                            </div>
                              </td>
                        </tr>
                        <tr class="align-middle">
                          <td class="text-nowrap">
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>RA</span></div>
                              </div>
                              <div class="ms-2">Rowen Atkinson</div>
                            </div>
                          </td>
                          <td class="text-nowrap">rown@example.com</td>
                          <td class="text-nowrap">(201) 200-1851</td>
                          <td class="text-nowrap">112 Bostwick Avenue, Jersey City</td>
                          <td><span class="badge badge rounded-pill d-block p-2 badge-soft-primary">Processing<svg class="svg-inline--fa fa-redo fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="redo" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M500.33 0h-47.41a12 12 0 0 0-12 12.57l4 82.76A247.42 247.42 0 0 0 256 8C119.34 8 7.9 119.53 8 256.19 8.1 393.07 119.1 504 256 504a247.1 247.1 0 0 0 166.18-63.91 12 12 0 0 0 .48-17.43l-34-34a12 12 0 0 0-16.38-.55A176 176 0 1 1 402.1 157.8l-101.53-4.87a12 12 0 0 0-12.57 12v47.41a12 12 0 0 0 12 12h200.33a12 12 0 0 0 12-12V12a12 12 0 0 0-12-12z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-redo" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span></td>
                          <td class="text-end">
                                <div><button class="btn btn-link p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit"><svg class="svg-inline--fa fa-edit fa-w-18 text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="edit" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"></path></svg><!-- <span class="text-500 fas fa-edit"></span> Font Awesome fontawesome.com --></button><button class="btn btn-link p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete"><svg class="svg-inline--fa fa-trash-alt fa-w-14 text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"></path></svg><!-- <span class="text-500 fas fa-trash-alt"></span> Font Awesome fontawesome.com --></button></div>
                              </td>
                        </tr>
                        <tr class="align-middle">
                          <td class="text-nowrap">
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/2.jpg" alt="">
                              </div>
                              <div class="ms-2">Antony Hopkins</div>
                            </div>
                          </td>
                          <td class="text-nowrap">antony@example.com</td>
                          <td class="text-nowrap">(901) 324-3127</td>
                          <td class="text-nowrap">3448 Ile De France St #242</td>
                          <td><span class="badge badge rounded-pill d-block p-2 badge-soft-secondary">On Hold<svg class="svg-inline--fa fa-ban fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ban" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M256 8C119.034 8 8 119.033 8 256s111.034 248 248 248 248-111.034 248-248S392.967 8 256 8zm130.108 117.892c65.448 65.448 70 165.481 20.677 235.637L150.47 105.216c70.204-49.356 170.226-44.735 235.638 20.676zM125.892 386.108c-65.448-65.448-70-165.481-20.677-235.637L361.53 406.784c-70.203 49.356-170.226 44.736-235.638-20.676z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span></td>
                          <td class="text-end">
                                <div>
                                    <button class="btn btn-link p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit"><svg class="svg-inline--fa fa-edit fa-w-18 text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="edit" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"></path></svg><!-- <span class="text-500 fas fa-edit"></span> Font Awesome fontawesome.com --></button><button class="btn btn-link p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete"><svg class="svg-inline--fa fa-trash-alt fa-w-14 text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"></path></svg><!-- <span class="text-500 fas fa-trash-alt"></span> Font Awesome fontawesome.com --></button></div>
                              </td>
                        </tr>
                        <tr class="align-middle">
                          <td class="text-nowrap">
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="">
                              </div>
                              <div class="ms-2">Jennifer Schramm</div>
                            </div>
                          </td>
                          <td class="text-nowrap">jennifer@example.com</td>
                          <td class="text-nowrap">(828) 382-9631</td>
                          <td class="text-nowrap">659 Hannah Street, Charlotte</td>
                          <td><span class="badge badge rounded-pill d-block p-2 badge-soft-warning">Pending<svg class="svg-inline--fa fa-stream fa-w-16 ms-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="stream" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M16 128h416c8.84 0 16-7.16 16-16V48c0-8.84-7.16-16-16-16H16C7.16 32 0 39.16 0 48v64c0 8.84 7.16 16 16 16zm480 80H80c-8.84 0-16 7.16-16 16v64c0 8.84 7.16 16 16 16h416c8.84 0 16-7.16 16-16v-64c0-8.84-7.16-16-16-16zm-64 176H16c-8.84 0-16 7.16-16 16v64c0 8.84 7.16 16 16 16h416c8.84 0 16-7.16 16-16v-64c0-8.84-7.16-16-16-16z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --></span></td>
                          <td class="text-end">
                                <div><button class="btn btn-link p-0" type="button" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit"><svg class="svg-inline--fa fa-edit fa-w-18 text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="edit" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"></path></svg><!-- <span class="text-500 fas fa-edit"></span> Font Awesome fontawesome.com --></button><button class="btn btn-link p-0 ms-2" type="button" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete" data-bs-original-title="Delete"><svg class="svg-inline--fa fa-trash-alt fa-w-14 text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"></path></svg><!-- <span class="text-500 fas fa-trash-alt"></span> Font Awesome fontawesome.com --></button></div>
                              </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
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