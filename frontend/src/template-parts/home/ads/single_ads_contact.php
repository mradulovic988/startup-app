<div class="row justify-content-center">
    <div class="col-lg-12 mb-5">
        <div class="border-0 rounded-lg">

            <form class="md-form" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputFullName">Full Name</label>
                            <input class="form-control py-4" id="inputFullName" type="text" placeholder="Enter full name" name="ads_fullname" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmail">Email</label>
                            <input class="form-control py-4" id="inputEmail" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="ads_email" required />
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="small mb-1" for="inputMessage">Message</label>
                            <textarea class="form-control bottom-border" id="inputMessage" name="ads_message" rows="5" placeholder="Leave the message..." required></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-row mt-4 mb-0">
                    <input type="submit" name="ads_contact" class="btn btn-primary btn-block" value="Contact">
                </div>
            </form>

        </div>
    </div>
</div>

<?php include 'single_ads_mail.php';