<!DOCTYPE html>
<html lang="en" class="no-js">
<?php include('includes/header.php'); // Include the header ?>
<body>
    <!-- Header Section -->
    <header>
        <!-- Your header content goes here -->
    </header>
    
    <!-- Main Content Section -->
    <main>
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title title-line pb-5">Place Your Vote Here</h4>
                        </div>
                    </div>
                </div>
                
                <!-- Voting Section -->
                <div class="row justify-content-center">
                   
                        <form>
                            <!-- Radio buttons for voting options -->
                            <input type="radio" name="design" value="Gamer.lk" id="gamerRadio" class="btn btn-primary">
                            <label for="gamerRadio"><a href="https://gamer.lk/">Gamer.lk</a></label><br>
                            
                            <input type="radio" name="design" value="Iplay.lk" id="iplayRadio" class="btn btn-primary">
                            <label for="iplayRadio"><a href="https://iplay.lk/">Iplay.lk</a></label><br>
                            
                            <input type="radio" name="design" value="MSI.lk" id="msiRadio" class="btn btn-primary">
                            <label for="msiRadio"><a href="https://www.msi.com/Promotion/Productivity-From-Spring-PRO-series-lk">MSI.lk</a></label><br>
                            
                            <input type="radio" name="design" value="nooballiance.lk" id="nooballianceRadio" class="btn btn-primary">
                            <label for="nooballianceRadio"><a href="https://nooballiance.lk/">nooballiance.lk</a></label><br>
                            
                            <input type="radio" name="design" value="myhub.lk" id="myhubRadio" class="btn btn-primary">
                            <label for="myhubRadio"><a href="https://myhub.lk/">myhub.lk</a></label><br><br>
                            <div class="col-12 text-center mt-4 pt-2">
                            <a href="index.php" class="btn btn-primary">Vote</a>
                        </form>
                    </div>
                </div>
                <!-- End of Voting Section -->
                
                <div class="row justify-content-center">
                    <div class="col-12 text-center mt-4 pt-2">
                        <p class="text-muted para-desc mx-auto mb-1">Web Design Competition 2023 by BestWeb LK</p>
                        <a href="Contact.php" class="btn btn-primary-outline">Contact Us <i class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Footer Section -->
    <?php include('includes/footer.php'); // Include the footer ?>
</body>
</html>
