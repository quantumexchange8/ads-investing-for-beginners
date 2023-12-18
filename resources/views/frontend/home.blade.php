@extends('layout.master')
@section('content')

<main id="main">
<!-- Tips Investing ---->
<div class="about-area ptb-100">
  <div class="container">
    <div class="about-text">
      <div class="section-title">
        <h2>Successful Investing Tips</h2>
      </div>
      <div class="row align-items-center">
          <div class="col-lg-5">
              <div class="about-image">
                  <img src="asset/img/invest3.png" alt="Image">
              </div>
          </div>

          <div class="col-lg-7">
         

                  <div class="row">
                      <div class="col-lg-12">
                          <ul>
                              <li>
                                  <i class="las la-check-square"></i> Stay Informed
                              </li>
                              <p class="mb-4">Successful investors remain informed about market trends, economic shifts, and financial changes. 
                              Making informed decisions based on this ongoing learning is crucial for establishing a robust and resilient investment strategy.
                              </p>
                          </ul>
                      </div>
                      <div class="col-lg-12">
                        <ul>
                          <li>
                            <i class="las la-check-square"></i> Start Small, Consistent Contributions</li>
                            <p class="mb-4">
                              Start your investment journey with manageable amounts and commit to consistent contributions, whether monthly or quarterly. 
                              Regular investing, even in modest amounts, leverages the power of compounding, leading to significant portfolio growth over time.
                            </p>
                        </ul>
                    </div>
                    <div class="col-lg-12 mb-4">
                      <ul>
                        <li><i class="las la-check-square"></i>Think Long-Term</li>
                        <p>Approach investing as a marathon, not a sprint. Adopt a patient mindset, emphasizing the long-term horizon. 
                          While short-term market fluctuations are inevitable, a well-planned strategy aligned with your financial objectives can endure challenges 
                          and capitalize on the long-term growth potential of your investments.
                        </p>
                        
                      </ul>
                  </div>
                  </div>
                </div>
          </div>
      </div>
  </div>
</div>
<!--End of Tips Investing --->


<!--Why Invest -->
<div class="choose-area ptb-100 section-bg">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-6">
              <div class="choose-text">
                  <div class="section-title">
                      <h2>Why Invest? </h2>
                  </div>
                  
                  <div class="choose-card">
                      <i class="bi bi-bank2"></i>
                      <h3>Wealth Building:</h3>
                      <p>Investing allows you to grow your wealth over time. Instead of letting your money sit idle, strategic investments in stocks, bonds, or other vehicles 
                         have the potential to generate returns, helping you build a solid financial foundation for the future.</p>
                  </div>

                  <div class="choose-card">
                      <i class="bi bi-file-earmark-lock"></i>
                      <h3>Financial Security:</h3>
                      <p>Investing provides a pathway to financial security. Diversifying your assets across different investment options helps mitigate risks and protect your financial well-being. 
                         By cultivating a well-balanced portfolio, you can weather economic uncertainties and safeguard your financial stability.</p>
                  </div>

                  <div class="choose-card">
                      <i class="bi bi-people-fill"></i>
                      <h3>Retirement Planning:</h3>
                      <p>Investing is a crucial component of retirement planning. As you contribute to retirement accounts and watch your investments grow, you're actively shaping a comfortable and 
                         secure retirement. The power of compounding ensures that your money works for you, allowing you to enjoy the golden years with peace of mind</p>
                  </div>
                  
                  <div class="about-btn mb-2">
                    <a href="#contact-form" class="default-btn-one">Grow Your Wealth Now!</a>
                  </div>
              </div>
          </div>

          <div class="col-lg-6">
              <div class="choose-img">
                  <div class="d-table">
                      <div class="d-table-cell">
                          <div class="video-box">
                              <a href="https://www.youtube.com/watch?v=udfEG48f8UE" class="video-btn popup-youtube">
                                  <i class="las la-play"></i>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!--End of Why Invest ---->


<!-- ======= what to consider Section ======= -->
  <section id="team" class="team skills">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>What to consider before you invest</h2>
        </div>
        <div class="row">
          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="services">  
                 <i class="bi bi-currency-dollar"></i>
              </div>
              <div class="member-info">
                <h4>Do you have a lot of credit card debt?</h4>
                <p class="mt-2">If the answer is yes, you’re probably not in a position to invest quite yet. 
                                First, do everything you can do to erase that debt, because no investment you’ll 
                                find will consistently outperform the 14% or so APR that you’re likely forking over to a credit 
                                card company to service your debt. Here’s a good place to start plotting your debt’s annihilation.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="services">  
             <i class="bi bi-piggy-bank"></i>
              </div>
              <div class="member-info">
                <h4>Do you have an emergency fund?</h4>
     
                <p class="mt-2">In polite terms, poop happens. Layoffs, natural disasters, sicknesses — let us count the
                  ways in which your life can be turned upside down. Any financial advisor will tell you that in order to avoid total 
                  ruin you should have between six months and a year of total living expenses in cash, or in a savings account should the unthinkable happen. 
                  If you don’t, bookmark this article, start saving, and come back just as soon as you’ve got that emergency fund squared away.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
<!-- End what to consider Section -->


<!--Strategies Section-->
<div class="case-details-tab ptb-100">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-6">
              <div class="case-details-tab-item">
                  <h2>Pick Your Investment Strategies</h2>
                  <ul class="nav nav-pills" id="pills-tab" role="tablist">
                      <li class="nav-item">
                          <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Financial Advisor</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Robo-Advisor</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Self-Directed</a>
                      </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                          <h3>Hands-off investments managed by a human</h3>
                          <p>
                            If you’d prefer to park your investments with a professional, a financial advisor may be the way to go. Investment management services — 
                            sometimes called wealth advisory services — are offered by all of the major financial institutions in Canada.
                          </p>
                          <p>With this strategy, a financial advisor builds and manages your investments on your behalf.
                            This strategy is best for investors who don’t want to manage their own investments and prefer the human touch of a financial advisor.
                          </p>
                      </div>
                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                          <h3>Hands-off investments managed by an algorithm</h3>
                          <p> Some brokerages offer access to an automated investment service called a robo-advisor. Despite the name, this service 
                            isn’t administered by a robot, but it is made possible by sophisticated investment algorithms.
                          </p>
                        <p> Here’s how it works:
                        <ul>
                              <li> First, you fill out an online application to open an account.</li>
                              <li> Next, you answer a series of questions about your financial goals and how much risk you’re willing to take with your investments.</li>
                              <li> Then, the robo-advisor puts together a portfolio on your behalf based on your questionnaire responses.</li>
                              <li> The robo-advisor uses complex algorithms to monitor your account, moving investments in and out of your portfolio according to your 
                                   financial goals. This technique is called portfolio rebalancing.</li>
                        </ul>
                        </p>
                        <p class="mb-2"> This strategy is best for investors who don’t want to manage their own investments and feel comfortable entrusting their money to a digital service.</p>  
                      </div>
                      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                          <h3>Pick your own investments</h3>
                          <p> For those that want full control over the investing process, self-directed investing, or DIY investing, may be the best way to go. 
                              This approach involves opening an account with an investment brokerage and putting together a portfolio of your choosing. 
                              You’ll also be solely responsible for monitoring your investments and making adjustments over time as needed.
                          </p>
                          <p>This strategy is best for investors who want to manage their investments firsthand and don’t mind the extra homework 
                             that often comes with managing a portfolio solo. 
                          </p>
                     </div>

                     <div class="about-btn mb-2">
                      <a href="#contact-form" class="default-btn-two">Secure Your Future</a>
                    </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6">
              <div class="case-details-tab-item">
                  <div class="case-details-tab-img">
                      <img src="asset/img/strategies.png" alt="Image">
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- End of Strategies --->


<!-- ======= How can i invest Section ======= -->
<section id="skills" class="skills ">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/skills.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>How can I Invest with Little Money?</h3>
            <p>
                <ol>
                    <li class="pt-3">Invest quarters at a time using a spare change app</li>
                    <li class="pt-3">Set up small, monthly transfers from your checking account</li>
                    <li class="pt-3">Use a low-cost investing service</li>
                    <li class="pt-3">Immediately invest any tax returns</li>
                    <li class="pt-3">Invest any raises instead of altering your lifestyle</li>
                </ol>
            </p>
          </div>
        </div>
      </div>
</section>
<!--End of How can i investSection -->




<!--Types of Investment Section-->
<div class="hero-slider hero-slider-two owl-carousel owl-theme">
  <div class="hero-slider-item item-bg4">
      <div class="d-table">
          <div class="d-table-cell">
              <div class="container">
                  <div class="slider-content">
                      <div class="row">
                          <div class="col-lg-6">
                              <span>Types of Investment for Beginners</span>
                              <h1>Stock</h1>
                              <p>Stocks or equities are shares of a company that you ideally buy low and sell higher. They also may generate income through dividends, or regular payouts of profits 
                                that some companies pay to shareholders. For example, when Facebook first went public in May 2012, you could buy shares for about $38 each. The company’s stock has skyrocketed since then, 
                                making it one of the most successful investments of this millennium.</p>

                              <p>Remember: Not all companies offer dividends and stock values don't always go up. If share prices fall, you may wind up with stocks worth less than you paid for them.</p>
                              <div class="about-btn">
                                <a href="#contact-form" class="default-btn-two">Unlock Wealth Potential</a>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="slider-image">
                                  <img src="asset/img/hero-slider/stocksm.png" alt="Image">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="hero-slider-item item-bg6" >
      <div class="d-table">
          <div class="d-table-cell">
              <div class="container">
                  <div class="slider-content">
                      <div class="row">
                          <div class="col-lg-6">
                              <span>Types of Investment for Beginners</span>
                              <h1>Bonds</h1>
                              <p> A bond is essentially a loan from an investor to a borrower. Borrowers may be anyone from federal and local governments 
                                 to private companies. Investors generally expect to receive full repayment of the loan—plus interest—by the time the loan is due.
                              </p>
                              <p> Bonds are typically a less risky investment than stocks but often have lower returns. Both factors depend in part on the borrower’s 
                                  creditworthiness.Some high-yield bonds can even have stock-like risk of loss. There are also bonds with lower interest rates that can offer 
                                  tax advantages,such as municipal bonds or Treasury bonds. 
                              </p>
                              <div class="about-btn">
                                <a href="#contact-form" class="default-btn-two">Unlock Wealth Potential</a>
                            </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="slider-image">
                                  <img src="asset/img/hero-slider/bondsm.png" alt="Image">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  <div class="hero-slider-item item-bg3">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="slider-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <span>Types of Investment for Beginners</span>
                            <h1>Real Estate</h1>
                            <p> You can take your money and put it into a second home or an investment property. Both types of investments can be 
                              rented out to recoup some or all of the money you’re spending on the property for the year. Renting out multiple properties 
                              can help you achieve a compounding impact on your overall monthly income.
                            </p>
                            <p> While you can receive income from renting out multiple properties, the easiest investment in real estate for beginners 
                              is through holding the property and selling it for more than you bought it for down the road. If you choose the area of 
                              the property well then holding it as an asset for multiple years can mean a nice increase when you sell it one day.
                            </p>   
                            <div class="about-btn">
                              <a href="#contact-form" class="default-btn-two">Unlock Wealth Potential</a>
                          </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="slider-image">
                                <img src="asset/img/hero-slider/estatesm.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="low-card-area-two">
  <div class="container">
      <div class="low-card-contant">
          <div class="row">
            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
              <div class="low-card-two">
                  <i class="bi bi-bar-chart-line"></i>
                  <h3>Stock</h3>
                  <p>Dividends are another way stocks can earn you money. Depending on the company, it will pay out a part of its earnings per share, often four times a year, 
                     according to a set schedule.</p>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
              <div class="low-card-two">
                  <i class="bi bi-briefcase-fill"></i>
                  <h3>Bonds</h3>
                  <p>Any financial planners advocate investing in bonds because of their lower volatility and relative safety compared with stocks.
                     But not all bonds are equal, and investors need some strategies for investing in bonds and building their bond allocation the right way.</p>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
              <div class="low-card-two">
                  <i class="bi bi-building"></i>
                  <h3>Estate</h3>
                  <p>Real estate investing offers numerous tax advantages, including deductions for operating costs and depreciation and the potential to defer 
                     capital gains taxes through like-kind exchanges or investing in real estate investment trusts (REITs).</p>
              </div>
            </div>

          </div>
      </div>
  </div>
</div>
<!--End of Types of Investment Section-->

  <!-- ======= invest plan Section ======= -->
  <section id="services" class="services section-bg ">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
    
        <h2>Investment Planning</h2>
        <p>Investment planning is the process of identifying financial goals and converting them through building a plan. 
           Investment planning is the main component of financial planning. The investment planning begins
           with identification of goals and objectives. Then we need to match those goals with our available financial resources. 
        </p>
        <a href="#contact-form" class="default-btn-one btn-round text-uppercase mt-3">Start Your Prosperity Journey
        </a>
      </div>
     
      <div class="row mt-4 justify-content-around">
        <div class="col-xl-6 col-md-auto d-flex align-items-stretch mt-4 " data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-search"></i></div>
            <h4>Find when and how much you are saving</h4>
            <p>This is the first step of investment planning. As soon as we are employed we should start saving. Whatever our salary is 
               we should not spend all of it and start saving for our retirement and unforeseen emergencies.
            </p>
          </div>
        </div>

        <div class="col-xl-6 col-md-auto d-flex align-items-stretch mt-4 " data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-bullseye"></i></div>
            <h4>Set your financial goals</h4>
            <p>We need to identify our short term as well as long term goals. This is how we start goal setting in investment planning. 
               Our goals can be saving for a vacation or buying some gadget which we really want to own. This can be termed as short term goal as 
               saving required for this is less than twelve months.
            </p>
          </div>
        </div>
      </div>

      <div class="row justify-content-around">
        <div class="col-xl-6 col-md-auto d-flex align-items-stretch mt-4 " data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-graph-up"></i></div>
            <h4>Analyse your risk taking ability</h4>
            <p>We should know our risk taking appetite. If we have just start earning then our risk taking appetite is very less. 
               We should invest in those investment vehicles which has less like fixed deposits. People who have ample money to save, their risk 
               taking appetite in more. They should invest in those investment products which have higher risk like investing in index stocks or mutual funds. 
            </p>
          </div>
        </div>

        <div class="col-xl-6 col-md-auto d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-layer"></i></div>
            <h4>Create a savings portfolio</h4>
            <p>One should have a diversified portfolio which should include many investment vehicles such as stocks, gold, bonds, fixed deposit, real estate etc.
               The main purpose to have a diversify portfolio is to diversify the risk associated with investment vehicles. Some investment tools may be less 
               liquated than other.
            </p>
          </div>
        </div>
      </div>
   
      <div class="row justify-content-around">
          <div class="col-xl-6 col-md-auto d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-book"></i></div>
              <h4>Learn about all investment options</h4>
              <p>Before we start investing in we need to learn about all the investment options available in the financial market. 
                 We need to go through all the investment vehicles such stocks, bonds, gold, real estate, life insurance etch and compare 
                 the rate of returns and risks associated with it. It will help us in putting our money in the investment vehicle according
                 our financial condition and risk taking appetite.  
              </p> 
            </div>
          </div>

          <div class="col-xl-6 col-md-auto d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-calculator"></i></div>
              <h4> Calculate your asset allocation</h4>
              <p>After determining the risk return portfolio the investor can develop our asset allocation strategy in investment planning. 
                 The investor can select from the various asset classes available in the financial market and allocate assets in such a way 
                 that it achieves optimum diversification while targeting the expected returns.
              </p>
            </div>
          </div>
      </div>

      <div class="row justify-content-around">
          <div class="col-xl-6 col-md-auto d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person-workspace"></i></div>
              <h4>Know how to build your portfolio</h4>
              <p>The most important step in investment planning is implementing the portfolio plan. After we implement our portfolio plan the management 
                 process begins. It is necessarily to monitor the investment performance regularly, mostly quarterly and review the portfolio plan annually. 
                 The investor’s goals and situations should be reviewed once a year to determine whether there are any significant changes.
              </p>   
            </div>
          </div>
      </div>

    </div>
  </section>
  <!-- End Investment plan Section -->

<!--FAQ and Submit Form Section-->
<div class="faq-area ptb-100 section-bg">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-6 col-md-12">
            <div class="section-title">
              <h2>Frequently Asked Questions</h2>
            </div>
              <div class="faq-accordion">
                  <ul class="accordion">
                      <li class="accordion-item">
                          <a class="accordion-title active">
                              <i class="las la-plus"></i>
                              What is investing, and why should I consider it as a beginner?
                          </a>
                          <p class="accordion-content show">
                            Investing involves putting your money to work with the goal of generating returns over time. It's a pathway to wealth-building, financial security,
                            and achieving long-term financial goals.   
                          </p>
                      </li>
                      
                      <li class="accordion-item">
                          <a class="accordion-title" >
                              <i class="las la-plus"></i>
                              How much money do I need to start investing?
                          </a>
                          <p class="accordion-content">
                            You can start with as little as you're comfortable with. Many investment platforms allow you to begin with small amounts. 
                            The key is consistency in contributions. 
                          </p>
                      </li>
                      
                      <li class="accordion-item">
                          <a class="accordion-title">
                              <i class="las la-plus"></i>
                              What are some beginner-friendly investment options?
                          </a>
                          <p class="accordion-content">
                            Consider diversified options like index funds, ETFs, or target-date funds. These provide broad exposure and are relatively less 
                            volatile than individual stocks.     
                          </p>
                      </li>

                      <li class="accordion-item">
                          <a class="accordion-title">
                              <i class="las la-plus"></i>
                              Is investing risky, and can I lose all my money?
                          </a>
                          <p class="accordion-content">
                            All investments come with some level of risk. However, diversification and a long-term perspective can help mitigate risks. 
                            It's crucial to understand your risk tolerance and invest accordingly.       
                          </p>
                      </li>
                      
                      <li class="accordion-item">
                          <a class="accordion-title">
                              <i class="las la-plus"></i>
                              How do I choose the right investment strategy? 
                          </a>
                          <p class="accordion-content">
                            Start by defining your financial goals and risk tolerance. Consider factors like time horizon and the level of involvement you want. 
                            Consult with a financial advisor if needed.   
                          </p>
                      </li>
                  </ul>
              </div>
          </div>

          <div class="col-lg-6 col-md-12">
            <div class="contact-form" id="contact-form">
              <form method="POST" name="contact-form" action="https://sheetdb.io/api/v1/vktjbmdq0a1ub" onsubmit="return disableButton()"  role="form" id="sheetdb-form">
                  <div class="section-title mb-2">
                      <h2>Invest in Your Future Prosperity</h2>  
                  </div> 
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <input type="text" name="data[name]" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                              <div class="help-block with-errors"></div>
                              <i class="las la-user"></i>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                            <input type="email" name="data[email]" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email Address">
                            <div class="help-block with-errors"></div>
                            <i class="las la-envelope"></i>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <input type="text" name="data[phone]" class="form-control" id="phone" required data-error="Please enter your phone" placeholder="Your Phone">
                              <div class="help-block with-errors"></div>
                              <i class="las la-phone"></i>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-12 col-md-12">
                          <div class="form-group">
                              <textarea name="data[description]" id="message" class="form-control" cols="30" rows="6" data-error="Please enter your message" placeholder="Write message..."></textarea>
                              <div class="help-block with-errors"></div>
                              <i class="las la-sms"></i>
                          </div>
                      </div>
                      <div class="col-lg-12 col-md-12">
                          <button type="submit" id="btn" class="default-btn-one">Submit</button>
                      </div>
                  </div>
              </form>
            </div>
          </div> 
      </div>
  </div>
</div>

<script>
    function disableButton(){
          let btn=document.getElementById('btn');
          btn.disabled=true;
          btn.innerText='Posting..';
          return true;
    }

          var form = document.getElementById('sheetdb-form');
          form.addEventListener("submit", e => {
              e.preventDefault();
              fetch(form.action, {
                  method : "POST",
                  body: new FormData(document.getElementById("sheetdb-form")),
              }).then(response => response.json())
                .then((html) => {
                  swal("Thank You!", "Your detail has been successfully submitted", "success");
                  document.getElementById("sheetdb-form").reset();
                  let btn=document.getElementById('btn');
                  btn.disabled=false;
                  btn.innerText='Submit';
                  return false;
                });
          });
</script>


<!--<section id="slick" class="section-bg">
  <div class="container">
    <div class="row justify-content-center align-content-center">
      <div class="col-lg-10">
        <div class="slider_content">
          <div class="slider_items">
            <img src="asset/img/banner/akamai.jpg">          
          </div>
          <div class="slider_items">
            <img src="asset/img/banner/apollo.jpg">          
          </div>
          <div class="slider_items">
            <img src="asset/img/banner/assurant.jpg">          
          </div>
   
        </div>


      </div>
    </div>
  </div>
</section>
-->
<section class="section-bg">
  <div class="slider-container">
    <div class="slider">
  
            <div class="slider-item">
                <img src="asset/img/banner/apollo.jpg"  data-lightbox="slider" alt="Slider Image">
            </div>
            <div class="slider-item">
              <img src="asset/img/banner/akamai.jpg"  data-lightbox="slider" alt="Slider Image">
          </div>
          <div class="slider-item">
            <img src="asset/img/banner/assurant.jpg"  data-lightbox="slider" alt="Slider Image">
        </div>
        <div class="slider-item">
          <img src="asset/img/banner/Axcellis.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/Chipotle.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>   
      <div class="slider-item">
      <img src="asset/img/banner/console.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/ECOLAB.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/euroseas.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/expedia.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/INSIGHT.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/KADANT.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/kinsale.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/lily.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/Marriot.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/moody.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/MOTOROLA.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/nrg.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/OneMain.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/owens.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/ph.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/ralph.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/saia.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/super micro.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/vertex.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/watsco.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>
      <div class="slider-item">
        <img src="asset/img/banner/wesco.jpg"  data-lightbox="slider" alt="Slider Image">
      </div>


    </div>
  </div>
</section>


<!--End of FAQ---->

</main>

<!-- End #main -->

@endsection
