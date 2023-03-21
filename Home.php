<html>
<header>
    <title>Real Estate</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet.css">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <?php include "Header.php" ?>
</header>
<!-- Header with image -->
<div id="bgimg">
    <img src="1.jpg" style="width:100%; max-width:1500px; height: 500px; ">

    <h3 class="first-txt">The Company</h3>
</div>
</div>



<body>

    <!-- Add a background color and large text to the whole page -->
    <center>
        <div>
            <div>
                <div>
                    <div>
                        <h2>Search Properties</h2>
                        <div class="row">
                            <div>
                                <div class="input-field">
                                    <label for="from">Location:</label>
                                    <input type="text" id="from-place" placeholder="Any" />
                                </div>
                            </div>
                            <div>
                                <section>
                                    <label for="class">Property Status:</label>
                                    <select>
                                        <option value="" disabled selected>Any</option>
                                        <option value="1">Rent</option>
                                        <option value="2">Sale</option>
                                    </select>
                                </section>
                            </div>
                            <div>
                                <section>
                                    <label for="class">Property Type:</label>
                                    <select>
                                        <option value="" disabled selected>Any</option>
                                        <option value="1">Building</option>
                                        <option value="2">Office</option>
                                    </select>
                                </section>
                            </div>
                            <div>
                                <div>
                                    <section>
                                        <label for="class">Price:</label>
                                        <div class="wide">
                                            <select>
                                                <option value="" disabled selected>Any</option>
                                                <option value="1">High</option>
                                                <option value="2">Low</option>
                                                <option value="3">Average</option>
                                            </select>
                                        </div>
                                    </section>
                                </div>
                                <div>
                                    <section>
                                        <label for="class">Bedrooms:</label>
                                        <div class="wide">
                                            <select>
                                                <option value="" disabled selected>Any</option>
                                                <option value="1">2</option>
                                                <option value="2">+3</option>
                                            </select>
                                        </div>
                                    </section>
                                </div>
                                <div>
                                    <section>
                                        <label for="class">Bathrooms:</label>
                                        <div class="wide">
                                            <select>
                                                <option value="" disabled selected>Any</option>
                                                <option value="1">2</option>
                                                <option value="2">+3</option>
                                            </select>
                                        </div>
                                    </section>
                                </div>
                                <div>
                                    <section>
                                        <label for="class">Area:</label>
                                        <div class="wide">
                                            <select>
                                                <option value="" disabled selected>Any</option>
                                                <option value="1">New Cairo</option>
                                                <option value="2">Nasr City</option>
                                                <option value="3">October</option>
                                            </select>
                                        </div>
                                    </section>
                                </div>
                                <div>
                                    <section>
                                        <label for="class">Parking spots:</label>
                                        <div class="wide">
                                            <select>
                                                <option value="" disabled selected>Any</option>
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="map" style="background-image: url(images/cover_bg_1.jpg);">
                    </div>
                </div>

                <footer>
                    <?php include "footer.php" ?>
                </footer>

                <script>
                    // Tabbed Menu
                    function openMenu(evt, menuName) {
                        var i, x, tablinks;
                        x = document.getElementsByClassName("menu");
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        tablinks = document.getElementsByClassName("tablink");
                        for (i = 0; i < x.length; i++) {
                            tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
                        }
                        document.getElementById(menuName).style.display = "block";
                        evt.currentTarget.firstElementChild.className += " w3-dark-grey";
                    }
                    document.getElementById("myLink").click();
                </script>
            </div>
    </center>
</body>

</html>