<?php
   session_start();
   include('mysqlInterface.php');
   
   if(!isset($_SESSION['Login']))
   {
    header("Location: index.php");
    die();
   }

   $page="";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>SH - Voc Stage 1</title>

    <?php include('header.php'); ?>
    <style type="text/css">
    .side-nav .collapsible-body li a, .side-nav.fixed .collapsible-body li a {
        padding: 0 23.5px 0 95px;
    }

    .voc-header{    
        color: #7f5826;
    }
    span{
        color: #139763 !important;
        font-weight: 500;
    }
    blockquote{
        border-left: 5px solid #7f5826;
    }
    </style>
</head>
<body>  

    <?php include("navigationbar.php"); ?>

    <?php include("sidenavbar.php"); ?>    

    <!-- VOC Stage 1 -->

    <div class="container">
       <h4 class="voc-header center-align">Voice Of Customer - STAGE 1</h4>
        <div>
            Buying a home is among the biggest financial decisions most people make. It is a dream come true for many of us.
            Please take a few moments to share your inputs on the below points. Your privacy is extremely important and your personal information or responses will not be shared with anybody. 
        </div>  
        <br>
        <div>
            The survey questions are divided into 3 stages
            <blockquote><ol>
                <li>Current Scenario</li>
                <li>Your expectations</li>
                <li>Offering</li>
            </ol>
                </blockquote>
        </div>

        <div>
            <div class="divider"></div>
            <div class="section hoverable">
               <ol>
                    <span>1. Are you currently renting a home?</span>
                    <ol type="a">
                        <li>Yes</li>
                        <li>No</li>
                        <li>If yes, what is the rent you pay?</li>
                    </ol>
                </ol>                
            </div>
            <div class="divider"></div>
            <div class="section hoverable">
               <ol>
                    <span>2. What are the current amenities you have in your house?</span>
                    <ol type="a">
                        <li>Swimming pool</li>
                        <li>Club house</li>
                        <li>Garden</li>
                        <li>Children play area</li>
                        <li>Jogging area</li>
                    </ol>
                </ol>                
            </div>
            <div class="divider"></div>
            <div class="section hoverable">
               <ol>
                    <span>3. How many members are part of the family?</span>
                    <ol type="a">
                        <li>Adults</li>
                        <li>Children</li>
                        <li>Senior Citizen</li>
                    </ol>
                </ol>                
            </div>
            <div class="divider"></div>
            <div class="section hoverable">
               <ol>
                    <span>4. Are you and your spouse working?</span>
                    <ol type="a">
                        <li>Yes</li>
                        <li>No</li>
                    </ol>
                </ol>                
            </div>
            <div class="divider"></div>
        </div>

        <blockquote>
            <strong>Did you know </strong>– Gated community has so many advantages such as Safe & Secure environment, Children play area, Social gathering, Specified parking, Jogging track, life long bonds and Events
        </blockquote>

        <!-- Second section -->
        <div>
            <div class="divider"></div>
            <div class="section hoverable">
               <ol>
                    <span>1. What are the facilities available within 2 kms radius from your home?</span>
                    <ol type="a">
                        <li>Hospital</li>
                        <li>Super market</li>
                        <li>School</li>
                        <li>College</li>
                        <li>Place of worship</li>
                        <li>Restaurant</li>
                    </ol>
                </ol>                
            </div>
            <div class="divider"></div>
            <div class="section hoverable">
               <ol>
                    <span>2. What is your commute distance from home to work location?</span>
                    <ol type="a">
                        <li>2 – 5 kms</li>
                        <li>5 – 10 kms</li>
                        <li>>10 kms</li>
                    </ol>
                </ol>                
            </div>
            <div class="divider"></div>
            <div class="section hoverable">
               <ol>
                    <span>3. What is commute time from home to work location?</span>
                    <ol type="a">
                        <li>15 – 30 mins</li>
                        <li>30 – 45 </li>
                        <li>>45 mins</li>
                    </ol>
                </ol>                
            </div>
            <div class="divider"></div>
            <div class="section hoverable">
               <ol>
                    <span>4. What is your favourite past time during the weekend?</span>
                </ol>                
            </div>
            <div class="divider"></div>
        </div>

        <blockquote>
            <strong>Did you know</strong> - There are several builders in the market today. The common pricing from a basic to a top class product ranges from 45 lacs – 2 crores. They boast of amenities, construction quality, compliance and other additional offers. Affording a house can mean loan for the next 30 years with a high emi and maintenance. Additionally, legal checks can be tiresome. These are some of the primary reasons for many of us to stop thinking of buying our dream home.
        </blockquote>
        
          <!-- Third section -->
        <div>
            <div class="divider"></div>
            <div class="section hoverable">
               <ol>
                    <span>1. Are you thinking of buying a home?</span>
                    <ol type="a">
                        <li>Yes</li>
                        <li>No</li>
                        <li>Not sure</li>
                        <li>Will be interested if there is a good deal</li>
                    </ol>
                </ol>                
            </div>
            <div class="divider"></div>
            <div class="section hoverable">
               <ol>
                    <span>2. If you had to buy a home, what is the price range you would look at?</span>
                    <ol type="a">
                        <li>10 – 15 lacs</li>
                        <li>15 – 25 lacs.</li>
                        <li>25 – 30 lacs</li>
                        <li>Mention any other amount </li>
                    </ol>
                </ol>                
            </div>
            <div class="divider"></div>
            <blockquote>
                <strong>Did you know</strong> – Buying a home, which helps you sustain your financial situation and helping you clear your debt soon is an effective and safe home buying methodology. This can be a dream come true for lot of us. One might think – Is this possible?
            </blockquote>
            <div class="divider"></div>
            <div class="section hoverable">
               <ol>
                    <span>3. Have you come across a product with all amenities, legal compliance under 20 lacs? If yes, name the product</span>
                    <ol type="a">
                        <li>Yes</li>
                        <li>No</li>
                    </ol>
                </ol>                
            </div>
            <div class="divider"></div>
            <div class="section hoverable">
               <ol>
                    <span>4. Would you be interested if there was a product with amenities (security, children play area, jogging track, individual water meter), facilities (hospitals, schools, colleges, super market within a close radius), Legally compliant (RERA approved, etc.,), close to work location with a price tag under 20 lakhs?</span>
                      <ol type="a">
                        <li>Yes</li>
                        <li>No</li>
                    </ol>
                </ol>              
            </div>
            <div class="divider"></div>
            <div class="section hoverable">
               <ol>
                    <span>5. Would you be interested in education of effective and safe home buying techniques?</span>
                      <ol type="a">
                        <li>Yes</li>
                        <li>No</li>
                    </ol>
                </ol>              
            </div>
            <div class="section"></div>
        </div>

    </div>

  	  <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
  </body>
</html>