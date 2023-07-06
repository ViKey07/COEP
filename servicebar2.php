<!DOCTYPE html>
<html>
<head>
    <style>
        .marquee {
          width: 100%;
          overflow: hidden;
          height: 30vh;
          display: flex;
          justify-content: center;
          align-items: center;
        }

        .marquee ul {
            display: flex;
            list-style-type: none; /* Remove bullet points */
            padding: 0; /* Remove default padding */
            animation: marquee 40s linear infinite; /* Start the animation */
            animation-delay: 2s; /* Delay the animation start by 2 seconds */
        }

        .marquee li {
            margin-right: 10%; /* Adjust the spacing between logos */
            height: 100px; /* Set fixed height for logos */
            display: flex;
            flex-direction: column;
            align-items: center; /* Vertically center the logo and title */
        }

        .marquee li img {
            height: 70%; /* Ensure the image takes up 70% of the li height */
            margin-bottom: 5px; /* Adjust spacing between logo and title */
        }

        .marquee li span {
          font-size: medium;
          text-align: center;
          font-weight: 600;
          color: gray;
          display: flex;
          justify-content: center;
          align-items: center;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0%);
            }
            100% {
                transform: translateX(calc(-100% - 30px));
            }
        }

        .heading {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .line {
            width: 50%;
            height: 1px;
            background-color: #c5cae2;
            margin-bottom: 5%;
        }
        .line-div{
          display: flex;
          justify-content: center;
        }


        @media only screen and (max-width: 768px) {
            .marquee li {
                margin-right: 5%;
            }
            .line-div{
                margin-bottom: 10%;
            }
        }
    </style>
</head>
<body>
  <div class="heading"><h3>Our Clients</h3></div>
    <div class="marquee">
        
        <ul>
            <?php
                // Array of logos and titles
                $logos = [
                    ["./assets/iim_ahmdabad.png", "IIM Ahmedabad"],
                    ["./assets/IIM_Calcutta.svg.png", "IIM Calcutta"],
                    ["./assets/iim-bangalore.png", "IIM Bangalore"],
                    ["./assets/pngkey.com-trademark-symbol-png-506039.png", "IIT Bombay"],      
                    ["./assets/LBASNAA.png", "LBSNAA Mussoorie"],
                    ["./assets/Oakridge2.png", "Oakridge international"],
                    ["./assets/singapore-international.png", "Singapore international"],
                    ["./assets/Ecole_Mondiale.png", "Ecole Mondiale"],
                    ["./assets/IIM_Lucknow.svg.png", "IIM Lucknow"],
                    ["./assets/AIIMS_Jodhpur.png", "AIIMS Jodhpur"],
                    ["./assets/IIT_Delhi_Logo.svg.png", "IIT Delhi"],
                    ["./assets/PngItem_1327406.png", "BITS Pilani"],
                    ["./assets/AIIMS_New_Delhi.png", "AIIMS Delhi"],
                    ["./assets/Capgemini-Symbol.png", "Capgemini"],
                    ["./assets/RC.png", "Royal canin"],
                    ["./assets/shri-ram-college-of-commerce.png", "Sri ram college"],
                    ["./assets/Indian_Institute_of_Foreign_Trade.png", "IIFT delhi"],
                    ["./assets/IIT_kanpur.png", "IIT kanpur"],
                    ["./assets/vjti-college.com.png", "VJTI Mumbai"],
                    ["./assets/INSEAD.png", "Insead Singapore"],
                    ["./assets/INSEAD.png", "Insead France"],
                    ["./assets/IIT_Kharagpur_Logo.svg.png", "IIT Kharagpur"]
                    // Add more logos and titles as needed
                ];

                foreach ($logos as $logo) {
                    $logoPath = $logo[0];
                    $title = $logo[1];
                    echo '<li><img src="' . $logoPath . '" alt="' . $title . '"><span>' . $title . '</span></li>';
                }
            ?>
        </ul>
        
    </div>
    <div class="line-div">
        <div class="line"></div>
    </div>
    
</body>
</html>






