<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>solar</title>
    <style>
        body{background-color: gray;
            width: 80%;
           max-width: 1240px;
           margin: 0 auto;
        }

        *{
            margin: 0;
            padding: 0;
        }

        .product{
            display: flex;
            flex-wrap: wrap; 
           background-color: #f6f6f6;
           margin-bottom: 10px;
           box-sizing: border-box;


        }
            
        .product-card{
            flex: 1;
            flex-basis: 26%;
            padding: 2%;
            margin-bottom: 10px;
            background-color: #fff;
            box-shadow: 0px 0px 1px 0px rgba(0,0,0, 0.25); 
        }
        .product-card p{
            color: red;
        }
.product-info{
    color: blue;
    font-weight: bolder;
    font-size: 25px;
    text-transform: capitalize;
}
        .product-image{



        }

         .product-image img{
             max-width: 100%;

            
        }

        .product-info{
            text-align: center;
            margin-top: auto;


        }
    @media(max-width:920px){
        .product-card{
            flex: 1 31%;

        }
    }
    @media(max-width:900px){
        .product-card{
            flex: 1 45%;

        }
    }
    @media(max-width:550px){
        .product-card{
            flex: 1 65%;

        }
    }

    </style>
</head>
<body>
    <div id="pre"></div>
    <div class="navbar">
        <div class="logo">
            solar
        </div>
        <div class="nav_btn">
            <a href="#">Home</a>
            <a href="#">Products</a>
            <a href="#">About-Us</a>
            <a href="#">Contact</a>
        </div>
      
    </div>
    <!-- <div id="navbar">
            <ul>
                <li>home</li>
                <li>product</li>
                <li>contact</li>
                <li>services</li>
            </ul>
        </div> -->

       


        <div id="our-products">
            <h1>our products</h1>
        </div>
        <section class="product">
           

            <div class="product-card">
                <div class="product-image">
                     <img src="images/3.jpg" alt="">
                </div>
          
                <div class="product-info">
                 <h5> solar inverters</h5>
                 </div>
                 <div class="product-description">
                     <p class="product-description"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                         Nesciunt non consequatur animi ratione minima voluptate officia o
                         dio corporis sunt deserunt mollitia aliquid eum omni</p>

                 </div>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                     <img src="images/3.jpg" alt="">
                </div>
          
                <div class="product-info">
                 <h5> solar panels</h5>
                 </div>
                   <div class="product-description">
                     <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                         Nesciunt non consequatur animi ratione minima voluptate officia o
                         dio corporis sunt deserunt mollitia aliquid eum omni</p>

                 </div>
            </div>


             <div class="product-card">
                <div class="product-image">
                     <img src="images/5.jpg" alt="">   
                </div>
                <div class="product-info">
                     <h5> building customized solar system</h5>
                </div>
                <div class="product-description">
                     <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                         Nesciunt non consequatur animi ratione minima voluptate officia o
                         dio corporis sunt deserunt mollitia aliquid eum omni</p>

                 </div>
             </div>

              <div class="product-card">
                <div class="product-image">
                     <img src="images/2.jpg" alt="">   
                </div>
                <div class="product-info">
                     <h5>INstallation</h5>
                </div>
                <div class="product-description">
                     <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                         Nesciunt non consequatur animi ratione minima voluptate officia o
                         dio corporis sunt deserunt mollitia aliquid eum omni</p>

                 </div>
             </div>

             
             <div class="product-card">
                <div class="product-image">
                     <img src="images/1.jpg" alt="">   
                </div>
                <div class="product-info">
                     <h5> Servicing, maintainance and repairs</h5>
                </div>
                <div class="product-description">
                     <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                         Nesciunt non consequatur animi ratione minima voluptate officia o
                         dio corporis sunt deserunt mollitia aliquid eum omni</p>

                 </div>
             </div>

             
             <div class="product-card">
                <div class="product-image">
                     <img src="images/7.jpg" alt="">
                </div>
          
                <div class="product-info">
                 <h5> large scale production</h5>
                 </div>
                 <div class="product-description">
                     <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                         Nesciunt non consequatur animi ratione minima voluptate officia o
                         dio corporis sunt deserunt mollitia aliquid eum omni</p>

                 </div>
            </div>


        </section>    


        <div class="wrapper">
            <h1>About Us</h1>

          <div class="team">
             <div class="team_members">
                 <div class="team_img">
                     <img src="images/vision.png" alt="vision">

                 </div>
                 <h3>About us</h3>
                 <p>Lorem ipsum, dolor sit amet consectetur adipisi
                     cing elit. Iure ipsam, laborum qui dolorum non
                      quasi repellendus excepturi ea blanditiis eos
                       tempore. Maxime iure nam iusto dolore enim 
                       voluptatem, reprehenderit ducimus!</p>
             </div>
             <div class="team_members">
                <div class="team_img">
                    <img src="images/vision.png" alt="vision">

                </div>
                <h3>Our Mission</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisi
                    cing elit. Iure ipsam, laborum qui dolorum non
                     quasi repellendus excepturi ea blanditiis eos
                      tempore. Maxime iure nam iusto dolore enim 
                      voluptatem, reprehenderit ducimus!</p>
             </div>
             <div class="team_members">
                <div class="team_img">
                    <img src="images/mission.png" alt="vision">

                </div>
                <h3>Our vision</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisi
                    cing elit. Iure ipsam, laborum qui dolorum non
                     quasi repellendus excepturi ea blanditiis eos
                      tempore. Maxime iure nam iusto dolore enim 
                      voluptatem, reprehenderit ducimus!</p>
             </div>                  

              </div>
          </div>  
        
        <div class="contact-us">
            <div class="contact-content">
                <h1>CONTACT FORM</h1>
                <p>Connect with us by sending a message</p>
            </div>

            <div class="contact-form">
                <form action="form.php" method="post" enctype="multipart/form-data">
                    <div class="top-form">
                    <div class="inner-form">
                        <div class="label"> name</div>
                        <input type="text" placeholder="Your name" name="name">
                    </div>
                    <div class="inner-form">
                        <div class="label"> email</div>
                        <input type="email" placeholder="Example@mail.com" name="email">
                    </div>
                    <div class="inner-form">
                        <div class="label"> phone</div>
                        <input type="number" placeholder="1234567890" name="phone">
                    </div> 

                    </div>

                    <div class="middle-form">
                        <div class="inner-form">
                            <div class="label"> subject</div>
                            <input type="text" placeholder="Subject" name="subject">
                        </div> 
                    </div>

                    <div class="bottom-form">
                        <div class="inner-form">
                            <div class="label">  message</div>
                            <textarea placeholder="Your message" name="message"></textarea>
                        </div> 
                    </div>
                     <div class="btn">
                    <input type="submit" name="submit" value="submit"> </div> 
                </form>

            </div>

        </div>

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>AFFILIATE COMPANIES</h4>
                        <ul>
                            <li><a href="#">JTS</a> </li>
                            <li><a href="#">SHOBZ</a> </li>
                            <li><a href="#">OPEYEMI</a> </li>
                            <li><a href="#">SAHEED</a> </li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>LINKS</h4>
                        <ul>
                            <li><a href="#">HOME</a> </li>
                            <li><a href="#">PRODUCT</a> </li>
                            <li><a href="#">ABOUT-US</a> </li>
                            <li><a href="#">CONTACT</a> </li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>FOLLOW US</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    




            <!--<h3 id="product"> Products</h3>-->

    <!--<section class="products">
        <div class="product-box-1">
            <div class="product-image"></div>
            <h3>product1 </h3>
            
            <img src="images/1.jpg" alt="solar-panel" width="90%" height="300"/>    -->
               <!--<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus sed sit nesciunt ducimu
                quia eum adipisci reprehenderit  laudantium fugit modi. 
                Ullam quae exercitationem dolore a odit consequuntur praesentium quidem quam!</p>
        </div>
        <div class="product-box-1">
           
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus sed sit nesciunt ducimu
             quia eum adipisci reprehenderit  laudantium fugit modi. 
             Ullam quae exercitationem dolore a odit consequuntur praesentium quidem quam!</p>
             <h3>product2 </h3>
            </div>
        <div class="product-box-1">
            <h3>product3 </h3>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus sed sit nesciunt ducimu
             quia eum adipisci reprehenderit  laudantium fugit modi. 
             Ullam quae exercitationem dolore a odit consequuntur praesentium quidem quam!</p>
        </div>
    </section>-->
</body>
</html>