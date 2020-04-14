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

<!-- ===== Modal ADD CATEGORY ===== -->
<div class="modal fade" id="addCategoryModal" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ADD CATEGORY</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-9 col-lg-10">
                        <!-- ===== FORM Name ===== -->
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <input type="text"
                            class="form-control" maxlength="50" id="categoryAddName" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Required, max 50 char</small>
                        </div>
                        <!-- ===== END FORM Name ===== -->
                    </div>

                    <div class="col-sm-12 col-md-9 col-lg-10">
                        <!-- ===== FORM Postal fee ===== -->
                        <div class="form-group">
                            <label for="">Postal Fee</label>
                            <select id="ongkirAdd" class="form-control">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                            <!-- <input type="text"
                            class="form-control" maxlength="50" id="categoryAddName" aria-describedby="helpId" placeholder=""> -->
                            <small id="helpId" class="form-text text-muted">Required</small>
                        </div>
                        <!-- ===== END FORM Postal fee ===== -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button id="categoryAddSubmit" type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- ===== END MODAL ADD CATEGORY ===== -->

<!-- ===== Modal EDIT CATEGORY ===== -->
<div class="modal fade" id="editCategoryModal" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDIT CATEGORY</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-9 col-lg-10">
                        <!-- ===== FORM Name ===== -->
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <input type="text"
                            class="form-control" maxlength="50" id="categoryEditName" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Required, max 50 char</small>
                        </div>
                        <!-- ===== END FORM Name ===== -->
                    </div>

                    <div class="col-sm-12 col-md-9 col-lg-10">
                        <!-- ===== FORM Postal fee ===== -->
                        <div class="form-group">
                            <label for="">Postal Fee</label>
                            <select id="ongkirEdit" class="form-control">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                            <small id="helpId" class="form-text text-muted">Required</small>
                        </div>
                        <!-- ===== END FORM Postal fee ===== -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button id="categoryEditSubmit" type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- ===== END MODAL EDIT CATEGORY ===== -->

<!-- ===== Modal DELETE CATEGORY =====  -->
<div class="modal fade " id="deleteCategoryModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                        <td class="th-sm">Postal Fee
                        </td>
                    </tr>
                    <tr>
                        <td id="categoryNo" class="th-sm">
                        </td>
                        <td id="categoryNama" class="th-sm">
                        </td>
                        <td id="categoryPostalFee" class="th-sm">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger px-3 col-2" data-dismiss="modal">No</button>
                <button id="categoryId" type="button" class="btn btn-success px-3 col-2" data-dismiss="modal">Yes</button>
            </div>
        </div>
    </div>
</div>
<!-- ===== END Modal DELETE CATEGORY =====  -->


<!-- ===== Modal ADD PRODUK ===== -->
<div class="modal fade" id="addProductModal"  role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content h-100" id="addProductModalContent">
            <form id="submitAddProduct" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">ADD PRODUCT</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4 mt-3 col-md-12 col-sm-12 d-flex justify-content-center mb-3 " id="viewImage" onmouseover="$( this ).children( '.hover' ).css( 'visibility', 'visible' )" onmouseout="$( this ).children( '.hover' ).css( 'visibility', 'hidden' )">
                            <div style="width:230px;height:230px; border:1px solid #ced4da">
                                <p onclick="$('#addImage').click()" href class="h-100 d-flex justify-content-center align-items-center" style="font-size:20px;color : gray;cursor: pointer;">
                                    330 x 330
                                </p>
                            </div>
                        </div>
                        <input type="file" name="file" class="d-none" id="addImage">
                        <input type="hidden" class="d-none" id="cek_gambarAddProduk">
                        <div class="col-lg-7 col-md-12 col-sm-12 d-flex align-items-center">
                            <div id="produkCarousel" class="carousel slide w-100" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <div class="row mt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <!-- ===== FORM Category ===== -->
                                                <div class="form-group">
                                                    <select name="category" class="form-control" placeholder="Choose Category" id="productAddCategory">
                                                        <option value=""></option>
                                                    </select>
                                                    <small id="helpIdproductAddProductName" class="form-text text-muted">Required</small>
                                                </div>
                                                <!-- ===== END FORM Category ===== -->
                                            </div>
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
                                            <?php 
                                                if($this->session->userdata('id_level') == 2){
                                            ?>
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
                                            <?php 
                                                }
                                            ?>
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
                                    <div class="carousel-item w-100">
                                    <div class="row mt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12" id="weightAdd">
                                                <!-- ===== FORM Weight ===== -->
                                                
                                                <!-- ===== END FORM Weight ===== -->
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <!-- ===== FORM Provinsi ===== -->
                                                <div class="form-group">
                                                    <select name="provinsi" class="form-control" placeholder="Choose Province" id="productAddProvinsi">
                                                        <option value=""></option>
                                                    </select>
                                                    <small id="helpIdproductAddProductName" class="form-text text-muted">Required</small>
                                                </div>
                                                <!-- ===== END FORM Provinsi ===== -->
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <!-- ===== FORM City ===== -->
                                                <div class="form-group">
                                                    <select name="kota" class="form-control" placeholder="Choose City" id="productAddCity">
                                                        <option value=""></option>
                                                    </select>
                                                    <small id="helpIdproductAddProductName" class="form-text text-muted">Required</small>
                                                </div>
                                                <!-- ===== END FORM City ===== -->
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <!-- ===== FORM Address ===== -->
                                                <div class="form-group">
                                                    <textarea maxlength="100" id="productAddAddress" name="alamat" class="form-control" rows="3" placeholder="Complete Address"></textarea>
                                                    <div class="d-flex justify-content-between">
                                                        <small id="helpIdproductAddress" class="form-text text-muted">Required, max 100 char</small>
                                                        <small id="productAddAddressSmall" class="form-text text-muted">0 / 100</small>
                                                    </div>
                                                </div>
                                                <!-- ===== END FORM Address ===== -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <i data-target="#produkCarousel" id="arrow-up-add" data-slide-to="0" class="arrow vert-move fa fa-chevron-up fa-lg"></i>
                                </div>
                                <div class="text-center mt-n3 mb-n2">
                                    <i data-target="#produkCarousel" id="arrow-down-add" data-slide-to="1" class="arrow vert-move fa fa-chevron-down fa-lg"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer position-absolute w-100" style="bottom:1px">
                    <button id="productAddclose" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button id="productAddubmit" type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ===== END MODAL ADD PRODUK ===== -->


<!-- ===== START MODAL DETAIL PRODUK ===== -->

<div class="modal fade" id="detailProdukAdmin" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">DETAIL PRODUCT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="slideDetail" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12 d-flex justify-content-center mb-3">
                                    <div style="width:230px;height:230px;">
                                        <img src="" id="productDetailProductImage" class="w-100"></img>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12 d-flex align-items-center">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12" id="productDetailProductName"></div>
                                        <div class="col-sm-12 col-md-12 col-lg-7 mt-3"  id="productDetailDescription"></div>
                                        <div id="detailKonten" class="col-sm-12 col-md-12 col-lg-5 mt-3">
                                            
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12" id="productDetailAlamat">
                                            <div class="mt-3 collapse col-sm-12 col-md-12 col-lg-12" id="Detail2">
                                                <p style="font-size:14px" id="locationDetail"></p>
                                                <div class="card card-body" id="alamatDetail">
                                                    
                                                </div>
                                            </div>
                                            <div class="text-center mt-3 col-sm-12 col-md-12 col-lg-12" data-toggle="collapse" data-target="#Detail2" aria-expanded="true" aria-controls="Detail2">
                                                <i id="detailArrow" class="arrow vert-move fa fa-chevron-down fa-lg"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12 mt-3 text-center" id="productDetailDate" >
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 mt-3 text-center">
                                    <table class="tablePelelang table table-striped table-bordered table-responsive-xl" style="width:100%">
                                    </table>
                                    <button type="button" data-target='#slideDetail' data-slide-to='0' onclick='HalamanDetail = 1;' class="btn btn-primary">Back</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ===== END MODAL DETAIL PRODUK ===== -->



<!-- ===== Modal EDIT PRODUK ===== -->
<div class="modal fade" id="editProductModal"  role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content h-100" id="editProductModalContent">
            <form id="submitEditProduct" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">EDIT PRODUCT</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body" style="z-index:9998">
                    <div class="row">
                        <div class="col-lg-4 mt-3 col-md-12 col-sm-12 mb-3 ">
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-center" id="viewImageEdit" onmouseover="$( this ).children( '.hover' ).css( 'visibility', 'visible' )" onmouseout="$( this ).children( '.hover' ).css( 'visibility', 'hidden' )">
                                    <img id='hasilImgEdit' src='' style='width:230px;height:230px;border:1px solid #28A745;z-index:99' alt=''>
                                    <div onclick="$('#editImage').click()" class="hover position-absolute d-flex align-items-center" style="width:230px;height:230px;font-size:20px;color : gray;cursor: pointer;z-index:100;background: rgba(0, 0, 0, 0.4);visibility: hidden;">
                                        <div class="text-center text-light py-2 w-100 rounded-circle">
                                            <i class="fa fa-edit"></i> <br> edit
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-lg-12 text-center" >
                                    <div class="row d-flex px-3" id="actionEdit">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="file" name="file" class="d-none" id="editImage">
                        <input type="hidden" name="cek_gambar" value="tidak" id="cek_gambarEditProduk">
                        <input type="hidden" name="id" id="IdEditSubmit">
                        <div class="col-lg-7 col-md-12 col-sm-12 d-flex align-items-start">
                            <div id="produkCarouselEdit" class="carousel slide w-100" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <div class="row mt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <!-- ===== FORM Category ===== -->
                                                <div class="form-group">
                                                    <select name="category" class="form-control" placeholder="Choose Category" id="productEditCategory">
                                                        <option value=""></option>
                                                    </select>
                                                    <small id="" class="form-text text-muted">Required</small>
                                                </div>
                                                <!-- ===== END FORM Category ===== -->
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <!-- ===== FORM Product Name ===== -->
                                                <div class="form-group">
                                                    <input name="name" type="text" data-toggle="tooltip" data-placement="top" title="Product Name" placeholder="Product Name"
                                                    class="form-control" maxlength="25" id="productEditProductName" aria-describedby="helpId" >
                                                    <small id="" class="form-text text-muted">Required, max 25 char</small>
                                                </div>
                                                <!-- ===== END FORM Product Name ===== -->
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <!-- ===== FORM Initial Price ===== -->
                                                <div class="form-group">
                                                    <input name="harga_awal" type="number" min="0" data-toggle="tooltip" data-placement="top" title="Initial Price" placeholder="Initial Price"
                                                    class="form-control" maxlength="20" id="productEditProductInitialPrice" aria-describedby="helpId" >
                                                    <small id="" class="form-text text-muted">Required, max 20 char</small>
                                                </div>
                                                <!-- ===== END FORM Initial Price ===== -->
                                            </div>
                                            <?php 
                                                if($this->session->userdata('id_level') == 2){
                                            ?>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <!-- ===== FORM Deadline ===== -->
                                                <div class="form-group">
                                                    <input type="text" min="0" data-toggle="tooltip" name="datetimesEdit" data-placement="top" title="Deadline" placeholder="Deadline"
                                                    class="form-control" id="productEditDeadline" aria-describedby="helpId" >
                                                    <small id="" class="form-text text-muted">Required</small>
                                                </div>                                
                                                    <input name="tgl_mulai" type="hidden" id="productEditProductStartDate">                                    
                                                    <input name="tgl_berakhir" type="hidden" id="productEditProductEndDate">

                                                <!-- ===== END FORM Deadline ===== -->
                                            </div>
                                            <?php 
                                                }
                                            ?>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <!-- ===== FORM Description ===== -->
                                                <div class="form-group">
                                                    <?php if($this->session->userdata('id_level') == 1){ ?>
                                                        <textarea maxlength="100" id="productEditDescription" name="deskripsi" class="form-control" rows="4" placeholder="Description"></textarea>

                                                    <?php } else{ ?>
                                                        <textarea maxlength="100" id="productEditDescription" name="deskripsi" class="form-control" rows="3" placeholder="Description"></textarea>
                                                    <?php } ?>
                                                    <div class="d-flex justify-content-between">
                                                        <small id="" class="form-text text-muted">Required, max 100 char</small>
                                                        <small id="productEditDescriptionSmall" class="form-text text-muted">0 / 100</small>
                                                    </div>
                                                </div>
                                                <!-- ===== END FORM Description ===== -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item w-100">
                                    <div class="row mt-3">
                                            <div class="col-sm-12 col-md-12 col-lg-12" id="weightEdit">
                                                <!-- ===== FORM Weight ===== -->
                                                
                                                <!-- ===== END FORM Weight ===== -->
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <!-- ===== FORM Provinsi ===== -->
                                                <div class="form-group">
                                                    <select name="provinsi" class="form-control" placeholder="Choose Province" id="productEditProvinsi">
                                                        <option value=""></option>
                                                    </select>
                                                    <small id="" class="form-text text-muted">Required</small>
                                                </div>
                                                <!-- ===== END FORM Provinsi ===== -->
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <!-- ===== FORM City ===== -->
                                                <div class="form-group">
                                                    <select name="kota" class="form-control" placeholder="Choose City" id="productEditCity">
                                                        <option value=""></option>
                                                    </select>
                                                    <small id="" class="form-text text-muted">Required</small>
                                                </div>
                                                <!-- ===== END FORM City ===== -->
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <!-- ===== FORM Address ===== -->
                                                <div class="form-group">
                                                    <textarea maxlength="100" id="productEditAddress" name="alamat" class="form-control" rows="4" placeholder="Complete Address"></textarea>
                                                    <div class="d-flex justify-content-between">
                                                        <small id="helpIdproductAddress" class="form-text text-muted">Required, max 100 char</small>
                                                        <small id="productEditAddressSmall" class="form-text text-muted">0 / 100</small>
                                                    </div>
                                                </div>
                                                <!-- ===== END FORM Address ===== -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <i data-target="#produkCarouselEdit" id="arrow-up-edit" data-slide-to="0" class="arrow vert-move fa fa-chevron-up fa-lg"></i>
                                </div>
                                <div class="text-center mt-n3 mb-n2">
                                    <i data-target="#produkCarouselEdit" id="arrow-down-edit" data-slide-to="1" class="arrow vert-move fa fa-chevron-down fa-lg"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer position-absolute w-100" style="bottom:1px;background:#FFFFFF;z-index:9999">
                    <button id="productEditclose" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button id="productEditSubmit" type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ===== END MODAL EDIT PRODUK ===== -->

<!-- ===== START MODAL ADD PAYMENT METHOD ===== -->
<div class="modal fade" id="addPayment" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ADD PAYMENT METHOD</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-9 col-lg-10">
                        <!-- ===== FORM Bank Name ===== -->
                        <div class="form-group">
                            <label for="">Bank Name</label>
                            <input type="text"
                            class="form-control" maxlength="100" id="addBankName" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Required, max 100 char</small>
                        </div>
                        <!-- ===== END FORM Bank Name ===== -->
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-10">
                        <!-- ===== FORM Bank Name ===== -->
                        <div class="form-group">
                            <label for="">Recipient Name</label>
                            <input type="text"
                            class="form-control" maxlength="50" id="addPenerimaName" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Required, max 50 char</small>
                        </div>
                        <!-- ===== END FORM Bank Name ===== -->
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-10">
                        <!-- ===== FORM Bank Name ===== -->
                        <div class="form-group">
                            <label for="">Account Number</label>
                            <input type="text"
                            class="form-control" maxlength="25" id="addAccountNumber" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Required, max 25 char</small>
                        </div>
                        <!-- ===== END FORM Bank Name ===== -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button id="addPaymentSubmit" type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- ===== End MODAL ADD PAYMENT METHOD ===== -->

<!-- ===== START MODAL ADD PAYMENT METHOD ===== -->
<div class="modal fade" id="editPayment" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ADD PAYMENT METHOD</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-9 col-lg-10">
                        <!-- ===== FORM Bank Name ===== -->
                        <div class="form-group">
                            <label for="">Bank Name</label>
                            <input type="text"
                            class="form-control" maxlength="100" id="editBankName" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Required, max 100 char</small>
                        </div>
                        <!-- ===== END FORM Bank Name ===== -->
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-10">
                        <!-- ===== FORM Bank Name ===== -->
                        <div class="form-group">
                            <label for="">Recipient Name</label>
                            <input type="text"
                            class="form-control" maxlength="50" id="editPenerimaName" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Required, max 50 char</small>
                        </div>
                        <!-- ===== END FORM Bank Name ===== -->
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-10">
                        <!-- ===== FORM Bank Name ===== -->
                        <div class="form-group">
                            <label for="">Account Number</label>
                            <input type="text"
                            class="form-control" maxlength="25" id="editAccountNumber" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Required, max 25 char</small>
                        </div>
                        <!-- ===== END FORM Bank Name ===== -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button id="editPaymentSubmit" type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- ===== End MODAL ADD PAYMENT METHOD ===== -->

<!-- ===== START MODAL DELETE PAYMENT METHOD ===== -->
<div class="modal fade " id="deletePayment" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                        <td class="th-sm">Bank Name
                        </td>
                        <td class="th-sm">Recipient Name
                        </td>
                        <td class="th-sm">Account Number
                        </td>
                    </tr>
                    <tr>
                        <td id="paymentNo" class="th-sm">
                        </td>
                        <td id="paymentBank" class="th-sm">
                        </td>
                        <td id="paymentName" class="th-sm">
                        </td>
                        <td id="paymentNumber" class="th-sm">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger px-3 col-2" data-dismiss="modal">No</button>
                <button id="deletePaymentButton" type="button" class="btn btn-success px-3 col-2" data-dismiss="modal">Yes</button>
            </div>
        </div>
    </div>
</div>
<!-- ===== END MODAL DELETE PAYMENT METHOD ===== -->


<!-- ===== START MODAL CEK KONFIRMASI USER ===== -->
<div class="modal fade" id="cekKonfirmasi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data Konfirmasi pembayaran User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="container px-5 py-3">
                    <div class="form-group">
                    <label for="">Nama Pemilik Rekening (transfer) : </label>
                    <input type="text"
                        class="form-control bg-white" readonly name="" id="cekNama" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                    <label for="">Tujuan Transfer Bank : </label>
                    <input type="text"
                        class="form-control bg-white" readonly name="" id="cekTujuan" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                    <label for="">Jumlah Transfer : </label>
                    <input type="text"
                        class="form-control bg-white" readonly name="" id="cekJumlah" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                    <label for="">Tanggal Transfer : </label>
                    <input type="text"
                        class="form-control bg-white" readonly name="" id="cekTanggal" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                    <label for="">No Invoice : </label>
                    <input type="text"
                        class="form-control bg-white" readonly name="" id="cekNo" aria-describedby="helpId" placeholder="">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===== END MODAL CEK KONFIRMASI USER ===== -->


