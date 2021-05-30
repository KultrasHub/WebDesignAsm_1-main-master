<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="CSS/BareBearsStyle.css">
    <link rel="stylesheet" href="CSS/BrowseStoreCateStyle.css">
    <link rel="stylesheet" href="CSS/Cookie.css">
    <script src="JS/BareBearsJavascript.js"></script>
</head>

<body>
    <header>
        <a href="Home.html" class="LogoName">
            <img class="logo" src="../Image/Essen/barebear.png" alt="logo">
            <span>Bare Bears</span>
        </a>

        <ul class="navLinks" id="navigationBar">
            <li onclick="location.href='Home.html'"><a href="Home.html">Home</a></li>
            <li onclick="location.href='AboutUs.html'"><a href="AboutUs.html">About Us</a></li>
            <li onclick="location.href='Fees.html'"><a href="Fees.html">Fees</a></li>
            <li onclick="location.href='FAQs.html'"><a href="FAQs.html">FAQs</a></li>
            <!--Online on desktop-->
            <li class="Browse" id="hoverBrowse">
                <k class="BrowseText">Browse</k>
                <ul class="DropDown">
                    <li class="DropDownContent">Browse Stores by Name
                        <ul class="DropDownContainer">
                            <div class="Holder">
                                <h3>Letters</h3>
                                <div class="letters">
                                    <a href="BrowseStore.html#A">A</a>
                                    <a href="BrowseStore.html#B">B</a>
                                    <a href="BrowseStore.html#C">C</a>
                                    <a href="BrowseStore.html#D">D</a>
                                    <a href="BrowseStore.html#E">E</a>
                                    <a href="BrowseStore.html#F">F</a>
                                    <a href="BrowseStore.html#G">G</a>

                                    <a href="BrowseStore.html#H">H</a>
                                    <a href="BrowseStore.html#I">I</a>

                                    <a href="BrowseStore.html#J">J</a>
                                    <a href="BrowseStore.html#K">K</a>
                                    <a href="BrowseStore.html#L">L</a>
                                    <a href="BrowseStore.html#M">M</a>

                                    <a href="BrowseStore.html#N">N</a>
                                    <a href="BrowseStore.html#O">O</a>
                                    <a href="BrowseStore.html#P">P</a>
                                    <a href="BrowseStore.html#Q">Q</a>

                                    <a href="BrowseStore.html#R">R</a>
                                    <a href="BrowseStore.html#S">S</a>
                                    <a href="BrowseStore.html#T">T</a>
                                    <a href="BrowseStore.html#U">U</a>

                                    <a href="BrowseStore.html#V">V</a>
                                    <a href="BrowseStore.html#W">W</a>
                                    <a href="BrowseStore.html#X">X</a>
                                    <a href="BrowseStore.html#Y">Y</a>
                                    <a href="BrowseStore.html#Z">Z</a>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="DropDownContent DropDownEnd">Browse Stores by Category
                        <ul class="DropDownContainer">
                            <li class="DropDownDetail" onclick="location.href='BrowseStoreCate.html'">
                                <span> Book Stores</span>
                            </li>
                            <li class="DropDownDetail" onclick="location.href='BrowseStoreCate.html'">
                                <span> Toy Stores</span>
                            </li>
                            <li class="DropDownDetail" onclick="location.href='BrowseStoreCate.html'">
                                <span> Clothing Stores</span>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!--Online on lower than desktop-->
            <li id="buttonBrowse">
                <input type="checkbox" id='DropDown'>
                <label class="BrowseText" for="DropDown">
                    <div>Browse</div>
                </label>

                <ul class="DropDown">
                    <li class="DropDownContent">
                        <input type="checkbox" id='LettersDropDown'>
                        <label for="LettersDropDown" class="DropDownLabel">
                            <div>Browse Stores by Name</div>
                        </label>
                        <!--Box-->
                        <ul class="DropDownContainer">
                            <div class="Holder">
                                <h3>Letters</h3>
                                <div class="letters">
                                    <a href="BrowseStore.html#A">A</a>
                                    <a href="BrowseStore.html#B">B</a>
                                    <a href="BrowseStore.html#C">C</a>
                                    <a href="BrowseStore.html#D">D</a>
                                    <a href="BrowseStore.html#E">E</a>
                                    <a href="BrowseStore.html#F">F</a>
                                    <a href="BrowseStore.html#G">G</a>

                                    <a href="BrowseStore.html#H">H</a>
                                    <a href="BrowseStore.html#I">I</a>

                                    <a href="BrowseStore.html#J">J</a>
                                    <a href="BrowseStore.html#K">K</a>
                                    <a href="BrowseStore.html#L">L</a>
                                    <a href="BrowseStore.html#M">M</a>

                                    <a href="BrowseStore.html#N">N</a>
                                    <a href="BrowseStore.html#O">O</a>
                                    <a href="BrowseStore.html#P">P</a>
                                    <a href="BrowseStore.html#Q">Q</a>

                                    <a href="BrowseStore.html#R">R</a>
                                    <a href="BrowseStore.html#S">S</a>
                                    <a href="BrowseStore.html#T">T</a>
                                    <a href="BrowseStore.html#U">U</a>

                                    <a href="BrowseStore.html#V">V</a>
                                    <a href="BrowseStore.html#W">W</a>
                                    <a href="BrowseStore.html#X">X</a>
                                    <a href="BrowseStore.html#Y">Y</a>
                                    <a href="BrowseStore.html#Z">Z</a>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <!--Box-->
                    <li class="DropDownContent DropDownEnd">
                        <input type="checkbox" id='CateDropDown'>
                        <label for="CateDropDown" class="DropDownLabel">
                            <div>Browse Stores by Category</div>
                        </label>
                        <ul class="DropDownContainer">
                            <!--Detail-->
                            <li class="DropDownDetail" onclick="location.href='BrowseStoreCate.html'">
                                <span> Book Stores</span>
                            </li>
                            <!--Detail-->
                            <li class="DropDownDetail" onclick="location.href='BrowseStoreCate.html'">
                                <span> Toy Stores</span>
                            </li>
                            <!--Detail-->
                            <li class="DropDownDetail" onclick="location.href='BrowseStoreCate.html'">
                                <span> Clothing Stores</span>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <a href="Contact.html" class="contact"> <button type="button" name="button">Contact</button></a>
            <a href="MyAccount-Login.html" class="myAcount"><img src="../Image/Profolio/user.png" alt=""></a>
        </ul>
        <div class="headerSimulator">
            <div class="holder">
                <a href="MyAccount-Login.html" class="myAcount top_right"><img src="../Image/Profolio/user.png"
                        alt=""></a>
                <label class="Ham" for="check" onclick="HamDisplay()">
                    <input type="checkbox" id="check" />
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>
        </div>
    </header>
    <!--content-->
    <div class="content">
        <div class="Starter">
            <h3>What is your desire?</h3>
            <p>Browse Stores by Category</p>
        </div>
        <div class="container">
            <div class="LetterBox">
                <?php 
                  $categories=[];
                  //save category into a list
                  if(($file=fopen("../Data/categories.csv","r"))!=false){
                    $headingRead=false;
                    while(($data=fgetcsv($file,1000,","))!=false)
                      {
                        if($headingRead==true)
                        {
                          $categories[]=$data[1];
                        }
                        $headingRead=true;
                      }
                      fclose($file);
                  }
                  $storeList=[];
                  //init store list
                  for($i=0;$i<count($categories);$i++)
                  {
                    $storeList[]=array();
                  }
                  //save stores into an array with and group the cate group together
                  if(($file=fopen("../Data/stores.csv","r"))!=false){
                    $headingRead=false;
                    while(($data=fgetcsv($file,1000,","))!=false)
                    {
                      if($headingRead==true)
                      {
                        for($i=1;$i<=count($categories);$i++) //cate start with 1
                        {
                          $cate=(int)$data[2];
                          if($cate===$i)
                          {
                            $storeList[$i-1][]=array($data[0],$data[1]);//$storeList start from 0, save store name
                            break;
                          }
                        }
                      }
                      $headingRead=true;
                    }
                    fclose($file);
                  }
                  //display box
                   $productPath="../Image/GeneralProduct/";
                    $products=array("Yourname.jpg","Coke.jpeg","chip.jpeg","Perfume.jpg","toyota.jpeg","card1.jpg","bag.jpeg","xBox.jpeg","shoe.jpg","router.jpeg");
                    $running=8;
                    for($i=0;$i<count($categories);$i++)
                  {
                    echo'<h3>'.$categories[$i].'</h3>';
                    //container
                    echo'<div class="storeContainer">';
                    echo'<span class="locator" id='.$categories[$i].'></span>';
                    if(count($storeList[$i])>0)
                    {
                      foreach($storeList[$i] as $store)
                      {
                        //assign random photo
                        $path=$productPath.$products[$running];
                        $running++;
                        if($running>=count($products))
                        {
                          $running=0;
                        }
                        $link="HomeStore.php?storeID=".$store[0];
                        echo'
                          <div class="box">
                          <img src='.$path.' alt="Book World Logo">
                          <div class="information">
                              <h3 class="shopName">'.$store[1].'</h3>
                              <h4 class="category">'.$store[1].'</h4>
                          </div>
                          <div class="HoverEffect">
                                <a href='.$link.'>
                              <div class="HoverButton"> Check Now</div>
                              </a>
                          </div>
                          </div>';
                      }
                    }
                    echo'</div>';
                    //end container
                  }
                ?>
            </div>
        </div>
    </div>
    <!--Cookies-->
    <div class="cookiesBar" id="cookies">
        <img src="../Image/FreeCookies.jpg" alt="cookies Logo">
        <span>We use cookies in this website to give you the best experience on our site and show relevant ads. To find
            out more, read <a href="PrivacyPolicy.html">privacy plicy</a> and <a href="">cookie Policy</a></span>
        <div onclick="HideCookie()"> <span>I understand</span></div>
    </div>
    <!--End Cookies-->
    <footer>
        <div class="UpperBar">
            <div class="logoText">Bare Bears <p>with barely best brands</p>
            </div>
            <div class="shop">
                <h1>Top Category</h1>
                <a href="BrowseStore.html">
                    <li>Book Stores</li>
                </a>
                <a href="BrowseStore.html">
                    <li>Toy Stores</li>
                </a>
            </div>
            <div class="Support">
                <h1>Support</h1>

                <a href="#">
                    <li>Order Status</li>
                </a>
                <a href="FAQs.html">
                    <li>FAQs</li>
                </a>
                <a href="Contact.html">
                    <li>Contact Us</li>
                </a>
                <a href="Fees.html">
                    <li>Fees</li>
                </a>
                <a href="#">
                    <li>Order Status</li>
                </a>
                <a href="#">
                    <li>Shipping Information</li>
                </a>
            </div>
            <div class="Language">
                <h1>Language</h1>
                <br>
                🌎
                <select class="language" name="language">
                    <option value="English"> English</option>
                    <option value="Vietnamese">Vietnamese</option>
                    <option value="Korean">Korean</option>
                </select>
            </div>
        </div>
        <div class="LowerBar">
            <section class="CopyRight">
                Copyright© Bare Bears 2021
            </section>
            <section class="Policy">
                <a href="TermOfUse.html">
                    <li>Term Of Service</li>
                </a>
                <a href="PrivacyPolicy.html">
                    <li>Privacy Policy</li>
                </a>
            </section>
        </div>
    </footer>
</body>

</html>
<script type="text/javascript" src="JS/Cookies.js"></script>