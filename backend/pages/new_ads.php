<?php include '../src/templates/header/header.php'; ?>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <?php include '../src/templates/template-parts/navigation/navigation.php'; ?>
            <?php include '../src/templates/auth/users/user_name.php'; ?>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Create New Ads</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active">Create New Ads</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">Publish your new ad</div>
                </div>

                <!-- Profile Information -->
                <div class="card mb-4">

                    <!-- Here comes the code -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 mb-5">
                                <div class="border-0 rounded-lg mt-5">
                                    <form class="md-form" method="post" enctype="multipart/form-data">

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control py-4 bottom-border" id="ads_name" type="text" name="ads_name" placeholder="Title" required />
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control py-4 bottom-border" id="ads_phone" type="text" name="ads_phone" placeholder="Phone" required/>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control py-4 bottom-border" id="ads_price" type="text" name="ads_price" placeholder="Price" required/>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
<!--                                                    <input class="form-control py-4 bottom-border" id="ads_location" type="text" name="ads_location" placeholder="Location" required />-->

                                                    <select class="form-control form-control-lg bottom-border" id="ads_category" name="ads_location[]" required>
                                                        <option>Choose city</option>
                                                        <option value="Beograd">Beograd</option>
                                                        <option value="Ada">Ada</option>
                                                        <option value="Aleksandrovac">Aleksandrovac</option>
                                                        <option value="Aleksinac">Aleksinac</option>
                                                        <option value="Alibunar">Alibunar</option>
                                                        <option value="Apatin">Apatin</option>
                                                        <option value="Aranđelovac">Aranđelovac</option>
                                                        <option value="Arilje">Arilje</option>
                                                        <option value="Babušnica">Babušnica</option>
                                                        <option value="Bač">Bač</option>
                                                        <option value="Bačka Palanka">Bačka Palanka</option>
                                                        <option value="Bačka Topola">Bačka Topola</option>
                                                        <option value="Bački Petrovac">Bački Petrovac</option>
                                                        <option value="Bajina Bašta">Bajina Bašta</option>
                                                        <option value="Bajmok">Bajmok</option>
                                                        <option value="Banatsko Novo Selo">Banatsko Novo Selo</option>
                                                        <option value="Batočina">Batočina</option>
                                                        <option value="Bečej">Bečej</option>
                                                        <option value="Bela Crkva">Bela Crkva</option>
                                                        <option value="Bela Palanka">Bela Palanka</option>
                                                        <option value="Beočin">Beočin</option>
                                                        <option value="Blace">Blace</option>
                                                        <option value="Bogatić">Bogatić</option>
                                                        <option value="Bojnik">Bojnik</option>
                                                        <option value="Boljevac">Boljevac</option>
                                                        <option value="Bor">Bor</option>
                                                        <option value="Bosilegrad">Bosilegrad</option>
                                                        <option value="Brus">Brus</option>
                                                        <option value="Bujanovac">Bujanovac</option>
                                                        <option value="Čačak">Čačak</option>
                                                        <option value="Čajetina">Čajetina</option>
                                                        <option value="Ćićevac">Ćićevac</option>
                                                        <option value="Čoka">Čoka</option>
                                                        <option value="Crna Trava">Crna Trava</option>
                                                        <option value="Ćuprija">Ćuprija</option>
                                                        <option value="Despotovac">Despotovac</option>
                                                        <option value="Dimitrovgrad">Dimitrovgrad</option>
                                                        <option value="Doljevac">Doljevac</option>
                                                        <option value="Elemir">Elemir</option>
                                                        <option value="Gadžin Han">Gadžin Han</option>
                                                        <option value="Golubac">Golubac</option>
                                                        <option value="Gornji Milanovac">Gornji Milanovac</option>
                                                        <option value="Inđija">Inđija</option>
                                                        <option value="Irig">Irig</option>
                                                        <option value="Ivanjica">Ivanjica</option>
                                                        <option value="Jagodina">Jagodina</option>
                                                        <option value="Kanjiža">Kanjiža</option>
                                                        <option value="Kikinda">Kikinda</option>
                                                        <option value="Kladovo">Kladovo</option>
                                                        <option value="Knić">Knić</option>
                                                        <option value="Knjaževac">Knjaževac</option>
                                                        <option value="Koceljeva">Koceljeva</option>
                                                        <option value="Kosjerić">Kosjerić</option>
                                                        <option value="Kovačevac Prijepolje">Kovačevac Prijepolje</option>
                                                        <option value="Kovačica">Kovačica</option>
                                                        <option value="Kovin">Kovin</option>
                                                        <option value="Kragujevac">Kragujevac</option>
                                                        <option value="Kraljevo">Kraljevo</option>
                                                        <option value="Krupanj">Krupanj</option>
                                                        <option value="Kruševac">Kruševac</option>
                                                        <option value="Kučevo">Kučevo</option>
                                                        <option value="Kula">Kula</option>
                                                        <option value="Kuršumlija">Kuršumlija</option>
                                                        <option value="Lajkovac">Lajkovac</option>
                                                        <option value="Lapovo">Lapovo</option>
                                                        <option value="Lazarevac">Lazarevac</option>
                                                        <option value="Lebane">Lebane</option>
                                                        <option value="Leskovac">Leskovac</option>
                                                        <option value="Ljig">Ljig</option>
                                                        <option value="Ljubovija">Ljubovija</option>
                                                        <option value="Loznica">Loznica</option>
                                                        <option value="Lučani">Lučani</option>
                                                        <option value="Majdanpek">Majdanpek</option>
                                                        <option value="Mali Iđoš">Mali Iđoš</option>
                                                        <option value="Mali Zvornik">Mali Zvornik</option>
                                                        <option value="Malo Crniće">Malo Crniće</option>
                                                        <option value="Medveđa">Medveđa</option>
                                                        <option value="Merošina">Merošina</option>
                                                        <option value="Mionica">Mionica</option>
                                                        <option value="Mladenovac">Mladenovac</option>
                                                        <option value="Negotin">Negotin</option>
                                                        <option value="Niš">Niš</option>
                                                        <option value="Nova Crnja">Nova Crnja</option>
                                                        <option value="Nova Pazova">Nova Pazova</option>
                                                        <option value="Nova Varoš">Nova Varoš</option>
                                                        <option value="Novi Bečej">Novi Bečej</option>
                                                        <option value="Novi Kneževac">Novi Kneževac</option>
                                                        <option value="Novi Pazar">Novi Pazar</option>
                                                        <option value="Novi Sad">Novi Sad</option>
                                                        <option value="Obrenovac">Obrenovac</option>
                                                        <option value="Odžaci">Odžaci</option>
                                                        <option value="Opovo">Opovo</option>
                                                        <option value="Osečina">Osečina</option>
                                                        <option value="Ostalo">Ostalo</option>
                                                        <option value="Pančevo">Pančevo</option>
                                                        <option value="Paraćin">Paraćin</option>
                                                        <option value="Pećinci">Pećinci</option>
                                                        <option value="Petrovac na Mlavi">Petrovac na Mlavi</option>
                                                        <option value="Pirot">Pirot</option>
                                                        <option value="Plandište">Plandište</option>
                                                        <option value="Požarevac">Požarevac</option>
                                                        <option value="Požega">Požega</option>
                                                        <option value="Preševo">Preševo</option>
                                                        <option value="Priboj">Priboj</option>
                                                        <option value="Prijepolje">Prijepolje</option>
                                                        <option value="Prokuplje">Prokuplje</option>
                                                        <option value="Rača">Rača</option>
                                                        <option value="Raška">Raška</option>
                                                        <option value="Ražanj">Ražanj</option>
                                                        <option value="Rekovac">Rekovac</option>
                                                        <option value="Ruma">Ruma</option>
                                                        <option value="Šabac">Šabac</option>
                                                        <option value="Sečanj">Sečanj</option>
                                                        <option value="Senta">Senta</option>
                                                        <option value="Šid">Šid</option>
                                                        <option value="Sivac">Sivac</option>
                                                        <option value="Sjenica">Sjenica</option>
                                                        <option value="Smederevo">Smederevo</option>
                                                        <option value="Smederevska Palanka">Smederevska Palanka</option>
                                                        <option value="Soko Banja">Soko Banja</option>
                                                        <option value="Sombor">Sombor</option>
                                                        <option value="Srbobran">Srbobran</option>
                                                        <option value="Sremska Mitrovica">Sremska Mitrovica</option>
                                                        <option value="Sremski Karlovci">Sremski Karlovci</option>
                                                        <option value="Stara Pazova">Stara Pazova</option>
                                                        <option value="Subotica">Subotica</option>
                                                        <option value="Surdulica">Surdulica</option>
                                                        <option value="Svilajnac">Svilajnac</option>
                                                        <option value="Svrljig">Svrljig</option>
                                                        <option value="Temerin">Temerin</option>
                                                        <option value="Titel">Titel</option>
                                                        <option value="Topola">Topola</option>
                                                        <option value="Trgovište">Trgovište</option>
                                                        <option value="Trstenik">Trstenik</option>
                                                        <option value="Tutin">Tutin</option>
                                                        <option value="Ub">Ub</option>
                                                        <option value="Užice">Užice</option>
                                                        <option value="Valjevo">Valjevo</option>
                                                        <option value="Varvarin">Varvarin</option>
                                                        <option value="Velika Plana">Velika Plana</option>
                                                        <option value="Veliko Gradište">Veliko Gradište</option>
                                                        <option value="Vladičin Han">Vladičin Han</option>
                                                        <option value="Vladimirci">Vladimirci</option>
                                                        <option value="Vlasotince">Vlasotince</option>
                                                        <option value="Vranje">Vranje</option>
                                                        <option value="Vrbas">Vrbas</option>
                                                        <option value="Vrnjačka Banja">Vrnjačka Banja</option>
                                                        <option value="Vršac">Vršac</option>
                                                        <option value="Žabalj">Žabalj</option>
                                                        <option value="Žabari">Žabari</option>
                                                        <option value="Žagubica">Žagubica</option>
                                                        <option value="Zaječar">Zaječar</option>
                                                        <option value="Žitište">Žitište</option>
                                                        <option value="Žitorađa">Žitorađa</option>
                                                        <option value="Zrenjanin">Zrenjanin</option>
                                                    </select>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control form-control-lg bottom-border" id="ads_category" name="ads_category[]" required>
                                                        <option value="">Choose category</option>
                                                        <option value="Accessories">Accessories</option>
                                                        <option value="Mobile Phone">Mobile Phone</option>
                                                        <option value="Baby Toys">Baby Toys</option>
                                                        <option value="Computers">Computers</option>
                                                        <option value="Tv and Video">Tv and Video</option>
                                                        <option value="House">House</option>
                                                        <option value="Furniture">Furniture</option>
                                                        <option value="Backyard">Backyard</option>
                                                        <option value="Personal Ad">Personal Ad</option>
                                                        <option value="Pets">Pets</option>
                                                        <option value="Sport">Sport</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control form-control-lg bottom-border" id="ads_plan" name="ads_plan[]" required>
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
                                                    <textarea class="form-control bottom-border" id="ads_description" name="ads_description" rows="7" placeholder="Add description..." wrap="hard" required></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="file" id="ads_image" name="ads_image" required>
                                                </div>
                                            </div>
                                        </div>

                                        <input type="hidden" id="pending_request" name="pending_request" value="0">

                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
<!--                                            <input type="submit" onclick="sendContact();" class="btn btn-primary btn-lg btn-block" value="Save" id="newAdsSubmit" name="newAdsSubmit">-->

                                            <button type="submit" class="btn btn-primary btn-lg btn-block" id="newAdsSubmit" name="newAdsSubmit">Save</button>
                                        </div>
                                    </form>
                                    <?php include '../src/templates/template-parts/ads/new_ads/new_ads_insert.php'; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        <?php include '../src/templates/footer/footer.php'; ?>
    </div>
</div>