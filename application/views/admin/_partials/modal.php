<!-- ===== Modal ADD USER ===== -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ADD USER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- ===== FORM Name ===== -->
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text"
                            class="form-control" maxlength="25" id="userAddName" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Required, max 25 char</small>
                        </div>
                        <!-- ===== END FORM Name ===== -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- ===== FORM TELP ===== -->
                        <div class="form-group">
                            <label for="">Telp</label>
                            <input type="number"
                            class="form-control" min="0" maxlength="25" id="userAddTelp" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Required, max 25 char</small>
                        </div>
                        <!-- ===== END FORM TELP ===== -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- ===== FORM USERNAME ===== -->
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text"
                            class="form-control" maxlength="25" id="userAddUsername" aria-describedby="helpId" placeholder="">
                            <small id="helpIdUserAddUsername" class="form-text">Required, max 25 char</small>
                        </div>
                        <!-- ===== END FORM USERNAME ===== -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- ===== FORM PASSWORD ===== -->
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password"
                            class="form-control" maxlength="25" minlength="8" id="userAddPassword" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Required, min 8 char and  max 25 char</small>
                        </div>
                        <!-- ===== END FORM PASSWORD ===== -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button id="userAddSubmit" type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- ===== END MODAL ADD USER ===== -->

<!-- ===== Modal EDIT USER ===== -->
<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDIT USER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- ===== FORM Name ===== -->
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text"
                            class="form-control" maxlength="25" id="userEditName" aria-describedby="helpId" >
                            <small id="helpId" class="form-text text-muted">Required, max 25 char</small>
                        </div>
                        <!-- ===== END FORM Name ===== -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- ===== FORM TELP ===== -->
                        <div class="form-group">
                            <label for="">Telp</label>
                            <input type="number"
                            class="form-control" min="0" maxlength="25" id="userEditTelp" aria-describedby="helpId" >
                            <small id="helpId" class="form-text text-muted">Required, max 25 char</small>
                        </div>
                        <!-- ===== END FORM TELP ===== -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- ===== FORM USERNAME ===== -->
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text"
                            class="form-control" maxlength="25" id="userEditUsername" aria-describedby="helpId" >
                            <small id="helpIdUserEditUsername" class="form-text">Required, max 25 char</small>
                        </div>
                        <!-- ===== END FORM USERNAME ===== -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- ===== FORM PASSWORD ===== -->
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password"
                            class="form-control" maxlength="25" minlength="8" id="userEditPassword" aria-describedby="helpId" >
                            <small id="helpId" class="form-text text-muted">Required, min 8 char and  max 25 char</small>
                        </div>
                        <!-- ===== END FORM PASSWORD ===== -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button id="userEditSubmit" type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- ===== END MODAL EDIT USER ===== -->

<!-- ===== Modal DELETE USER =====  -->
<div class="modal fade " id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> <i class="fa fa-warning"></i>Delete this item ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered table-responsive-xs">
                    <tr>
                        <td class="th-sm">No
                        </td>
                        <td class="th-sm">Nama
                        </td>
                        <td class="th-sm">Username
                        </td>
                        <td class="th-sm">Telp
                        </td>
                    </tr>
                    <tr>
                        <td id="userNo" class="th-sm">
                        </td>
                        <td id="userNama" class="th-sm">
                        </td>
                        <td id="userUsername" class="th-sm">
                        </td>
                        <td id="userTelp" class="th-sm">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger px-3 col-2" data-dismiss="modal">No</button>
                <button id="userId" type="button" class="btn btn-success px-3 col-2" data-dismiss="modal">Yes</button>
            </div>
        </div>
    </div>
</div>
<!-- ===== END Modal DELETE USER =====  -->



<!-- ===== Modal ADD OFFICER ===== -->
<div class="modal fade" id="addOfficerModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ADD OFFICER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- ===== FORM Name ===== -->
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text"
                            class="form-control" maxlength="25" id="officerAddName" aria-describedby="helpId" >
                            <small id="helpId" class="form-text text-muted">Required, max 25 char</small>
                        </div>
                        <!-- ===== END FORM Name ===== -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- ===== FORM USERNAME ===== -->
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text"
                            class="form-control" maxlength="25" id="officerAddUsername" aria-describedby="helpId" >
                            <small id="helpIdOfficerAddUsername" class="form-text">Required, max 25 char</small>
                        </div>
                        <!-- ===== END FORM USERNAME ===== -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- ===== FORM PASSWORD ===== -->
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password"
                            class="form-control" maxlength="25" minlength="8" id="officerAddPassword" aria-describedby="helpId" >
                            <small id="helpId" class="form-text text-muted">Required, min 8 char and  max 25 char</small>
                        </div>
                        <!-- ===== END FORM PASSWORD ===== -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button id="officerAddSubmit" type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- ===== END MODAL ADD OFFICER ===== -->

<!-- ===== Modal EDIT OFFICER ===== -->
<div class="modal fade" id="editOfficerModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDIT OFFICER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- ===== FORM Name ===== -->
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text"
                            class="form-control" maxlength="25" id="officerEditName" aria-describedby="helpId" >
                            <small id="helpId" class="form-text text-muted">Required, max 25 char</small>
                        </div>
                        <!-- ===== END FORM Name ===== -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- ===== FORM USERNAME ===== -->
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text"
                            class="form-control" maxlength="25" id="officerEditUsername" aria-describedby="helpId" >
                            <small id="helpIdOfficerEditUsername" class="form-text">Required, max 25 char</small>
                        </div>
                        <!-- ===== END FORM USERNAME ===== -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- ===== FORM PASSWORD ===== -->
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password"
                            class="form-control" maxlength="25" minlength="8" id="officerEditPassword" aria-describedby="helpId" >
                            <small id="helpId" class="form-text text-muted">Required, min 8 char and  max 25 char</small>
                        </div>
                        <!-- ===== END FORM PASSWORD ===== -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button id="officerEditSubmit" type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- ===== END MODAL EDIT OFFICER ===== -->

<!-- ===== Modal DELETE OFFICER =====  -->
<div class="modal fade " id="deleteOfficerModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> <i class="fa fa-warning"></i>Delete this item ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered table-responsive-xs">
                    <tr>
                        <td class="th-sm">No
                        </td>
                        <td class="th-sm">Nama
                        </td>
                        <td class="th-sm">Username
                        </td>
                    </tr>
                    <tr>
                        <td id="officerNo" class="th-sm">
                        </td>
                        <td id="officerNama" class="th-sm">
                        </td>
                        <td id="officerUsername" class="th-sm">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger px-3 col-2" data-dismiss="modal">No</button>
                <button id="officerId" type="button" class="btn btn-success px-3 col-2" data-dismiss="modal">Yes</button>
            </div>
        </div>
    </div>
</div>
<!-- ===== END Modal DELETE OFFICER =====  -->


<!-- ===== Modal ADD PRODUK ===== -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="submitAddProduct" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">ADD PRODUCT</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 d-flex justify-content-center mb-3 " id="viewImage" onmouseover="$( this ).children( '.hover' ).css( 'visibility', 'visible' )" onmouseout="$( this ).children( '.hover' ).css( 'visibility', 'hidden' )">
                            <div style="width:230px;height:230px; border:1px solid #ced4da">
                                <p onclick="$('#addImage').click()" href class="h-100 d-flex justify-content-center align-items-center" style="font-size:20px;color : gray;cursor: pointer;">
                                    330 x 330
                                </p>
                            </div>
                        </div>
                        <input type="file" name="file" class="d-none" id="addImage">
                        <input type="hidden" class="d-none" id="cek_gambarAddProduk">
                        <div class="col-lg-7 col-md-12 col-sm-12 d-flex align-items-center">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <!-- ===== FORM Product Name ===== -->
                                    <div class="form-group">
                                        <input name="name" type="text" data-toggle="tooltip" data-placement="top" title="Product Name" placeholder="Product Name"
                                        class="form-control" maxlength="25" id="productAddProductName" aria-describedby="helpId" >
                                        <small id="helpIdproductAddProductName" class="form-text text-muted">Required, max 25 char</small>
                                    </div>
                                    <!-- ===== END FORM Product Name ===== -->
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <!-- ===== FORM Initial Price ===== -->
                                    <div class="form-group">
                                        <input name="harga_awal" type="number" min="0" data-toggle="tooltip" data-placement="top" title="Initial Price" placeholder="Initial Price"
                                        class="form-control" maxlength="20" id="productAddProductInitialPrice" aria-describedby="helpId" >
                                        <small id="helpIdproductAddProductName" class="form-text text-muted">Required, max 20 char</small>
                                    </div>
                                    <!-- ===== END FORM Initial Price ===== -->
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <!-- ===== FORM Deadline ===== -->
                                    <div class="form-group">
                                        <input type="text" min="0" data-toggle="tooltip" name="datetimes" data-placement="top" title="Deadline" placeholder="Deadline"
                                        class="form-control" id="productAddDeadline" aria-describedby="helpId" >
                                        <small id="helpIdproductAddProductName" class="form-text text-muted">Required</small>
                                    </div>                                
                                        <input name="tgl_mulai" type="hidden" id="productAddProductStartDate">                                    
                                        <input name="tgl_berakhir" type="hidden" id="productAddProductEndDate">
                                    <!-- ===== END FORM Deadline ===== -->
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <!-- ===== FORM Description ===== -->
                                    <div class="form-group">
                                        <textarea maxlength="100" id="productAddDescription" name="deskripsi" class="form-control" rows="3" placeholder="Description"></textarea>
                                        <div class="d-flex justify-content-between">
                                            <small id="helpIdproductAddProductName" class="form-text text-muted">Required, max 100 char</small>
                                            <small id="productAddDescriptionSmall" class="form-text text-muted">0 / 100</small>
                                        </div>
                                    </div>
                                    <!-- ===== END FORM Description ===== -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="productAddclose" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button id="productAddubmit" type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ===== END MODAL ADD PRODUK ===== -->