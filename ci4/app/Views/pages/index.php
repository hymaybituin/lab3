<body>

    <header>
        <h1>My Profile</h1>
    </header>

    <main>
        <section>
            <img src="profile.png" alt="profile">
            <h2>Who am I?</h2>
            <ul id="whoAmI"></ul>
        </section>

        <section>
            <h2>Question?</h2>
            <button id="infoButton" onclick="showMyInfo()">Show My Information</button>
            <div id="questionPart" style="display: none;">
                <p><b>Course:</b> Bachelor of Science in Information in Technology</p>
                <p><b>Scholarship:</b> Yes, Public School Scholarship</p>
                <p><b>Transferee / Second Course?:</b> None</p>
                <p><b>Did you choose this course?:</b> Yes, because I'm curious about computer and encoding. I want to challenge myself and grow academically.</p>
                <p><b>What do you want to learn for your Major?:</b> I want to learn how to encode and program precisely, as it's my weakness.</p>
                <p><b>Goals in life:</b> I want to be a successful software engineer, own a house, car, and have a family.</p>
                <p><b>Dream to fulfill?:</b> My dream is to repay my parents' hard work and give them financial freedom.</p>
                <p><b>Hobbies / Interests:</b> Playing e-sports games, learning and fixing cars, and playing basketball.</p>
            </div>
        </section>

        <section>
            <img src="basketball.png" alt="basketball">
            <button type="button" onclick="showSocialLinks()">Show My Social Links</button>
            <div id="socialLinks" style="display: none;">
                <p><b>Links to my social:</b></p>
                <ul>
                    <li><a href="https://www.facebook.com/profile.php?id=100011625970941">Facebook</a></li>
                    <li><a href="https://github.com/hymaybituin">GitHub</a></li>
                </ul>
            </div>
        </section>

        
        <section class="dateTimeSection">
            <button class="dateTimeButton" onclick="displayDateTime()">Click me to display Date and Time.</button>
            <p id="demo"></p>
        </section>
    </main>


<script src="script.js"></script>

<?php
echo '<img src="images/profile.png" alt="Profile">';
echo '<img src="images/basketball.png" alt="Basketball Image">';
echo '<link rel="stylesheet" type="text/css" href="css/style.css">';
echo '<script src="javascript/script.js"></script>';
?>