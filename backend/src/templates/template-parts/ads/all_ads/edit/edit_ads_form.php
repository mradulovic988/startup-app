<div class="modal fade" id="edit_ads" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit your ad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="md-form" method="post" enctype="multipart/form-data">

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control py-4 bottom-border" id="ads_name" type="text" name="ads_edit_name" placeholder="Title" required />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control py-4 bottom-border" id="ads_phone" type="text" name="ads_edit_phone" placeholder="Phone" required/>
                            </div>
                        </div>


                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control py-4 bottom-border" id="ads_price" type="text" name="ads_edit_price" placeholder="Price" required/>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control py-4 bottom-border" id="ads_location" type="text" name="ads_edit_location" placeholder="Location" required />
                            </div>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control form-control-lg bottom-border" id="ads_category" name="ads_edit_category[]" required>
                                    <option value="">Choose category</option>
                                    <option value="Mobile Phone">Mobile Phone</option>
                                    <option value="Computers">Computers</option>
                                    <option value="House">House</option>
                                    <option value="Backyard">Backyard</option>
                                    <option value="Personal Ad">Personal Ad</option>
                                    <option value="Pets">Pets</option>
                                    <option value="Sport">Sport</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control form-control-lg bottom-border" id="ads_plan" name="ads_edit_plan[]" required>
                                    <option value="">Choose plan</option>
                                    <option value="Free">Free</option>
                                    <option value="Basic">Basic</option>
                                    <option value="Premium">Premium</option>
                                    <option value="Delux">Delux</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control bottom-border" name="ads_edit_description" rows="7" placeholder="Add description..." required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" name="ads_edit_image" required>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="pending_edit_request" value="0">
                    <input type="hidden" id="dbEditId" name="dbEditId">

                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Edit" name="editAdsSubmit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('.editBtn').on('click', function(e) {
        let edit_id = $(e.target).closest('div').find('.edit_id').val();
        $("#dbEditId").val(edit_id);
    });
</script>
<?php include 'update/update_ads.php'; ?>