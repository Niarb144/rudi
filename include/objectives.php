<style>
    .gallery-container{
    padding: 0;
    justify-content: center;
    align-items: center;
    height: auto;
}

.gridywrap div[class*=gridy] {
    background: #eee;
    box-shadow: inset 0 0 0 1px #ddd;
    padding: 15px; float: left;
    position: relative;
  }
  .gridywrap .gridy-1,
  .gridywrap .gridy-2,
  .gridywrap .gridy-3 {width: 320px;
    overflow: hidden;}
  
  .gridywrap .gridy-1 {width: 100%;}
  .gridywrap .gridy-2 {width: 100%;}
  .gridywrap .gridy-3 {width: 100%;}
  
  .gridywrap .gridyhe-1 {height: 320px;}
  .gridywrap .gridyhe-2 {height: 320px;}
  
  
  @media screen and (min-width: 640px) {
    .gridywrap .gridyhe-2 {height: 320px;}
    .gridywrap {
      width: 100%;
    }
    .gridywrap .gridy-1 {width: 50%;}
    .gridywrap .gridy-2 {width: 50%;}
    .gridywrap .gridy-3 {width: 100%;}
  }
  @media screen and (min-width: 1024px) {
    .gridywrap .gridy-1 {width: 33.3%;}
    .gridywrap .gridy-2 {width: 66.6%;}
    .gridywrap .gridy-3 {width: 100%;}
    .gridywrap .gridyhe-2 {height: 640px;}
  }
  
  /*styling*/
  .gridywrap .gridimg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
    background-position: center center;
    background-size: cover;
  }
  .gridywrap .gridimg img {
    width: 100%;
  }
  .gridywrap .gridinfo {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: rgba(0,0,0,0.4);
    text-align: center;
    transition: all 0.8s;
  }
  .gridywrap .gridinfo h3 {
    font-size: 24px;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    margin: 130px 0 20px;
    position: relative;
  }
  .gridywrap .gridinfo h3:after {
    content: '';
    width: 25px;
    border-top: 4px solid #fff;
    display: block;
    margin: 0 auto;
    margin-top: 25px;
  }
  .gridywrap .gridinfo .gridmeta {
    transition-delay: 0.25s;
  }
  .gridywrap .gridinfo .gridmeta p {
    display: inline-block;
    font-size: 13px;
    color: #fff;
    margin-bottom: 15px;
  }
  .gridywrap .gridinfo .gridmeta p i {
    margin-right: 5px;
  }
  .gridywrap .gridinfo .gridmeta p.gridwho {
    margin-left: 25px;
  }
  .gridywrap .gridinfo p.gridexerpt {
    width: 60%;
    margin: 0 auto;
    line-height: 22px;
    margin-bottom: 25px;
    color: #fff;
    transition-delay: 0.5s;
  }
  
  .gridywrap .gridinfo * {
    opacity: 0;
    transition: all 0.8s;
  }
  .gridywrap .gridinfo h3 {
    opacity: 1;
  }
  .gridywrap .gridinfo .grid-btn {
    color: #fff;
    text-decoration: none;
    margin: 0 auto;
    width: 35px;
    height: 35px;
    line-height: 35px;
    border-radius: 25px;
    border: 1px solid #fff; 
    display: block;
    overflow: hidden;
  }
  .gridywrap .gridinfo .grid-btn:hover {
    width: 75px;
    background: rgba(0,0,0,0.3);
  }
  .gridywrap .gridinfo .grid-btn span {
    opacity: 0;
    display: none;
    transition: opacity 0.8s;
  }
  .gridywrap .gridinfo .grid-btn:hover span {
    opacity: 1;
    display: inline;
  }
  .gridywrap .gridinfo .grid-btn:hover i {
    opacity: 0;
    display: none;
  }
  
  .gridywrap .gridinfo:hover * {
    opacity: 0.7;
  }
  .gridywrap .gridinfo:hover p {
    opacity: 1;
  }
  .gridywrap .gridinfo:hover {
    background: rgb(35, 170, 30, 0.7);
  }
  .gridywrap .gridinfo:hover h3 {
    margin-top: 70px;
    opacity: 1;
  }

  .intro {
    text-align: center;
    padding: 25px;
    background: #ddd;
    color: #111;
  }
  h1 {
    font-size: 48px;
    font-weight: 300;
    padding: 15px 0;
  }

</style>
<section class="gallery-container">
    <!-- <h2>Objectives</h2> -->
    <div class="intro">
        <h1>The Objectives</h1>
    </div>

    <div class="gridywrap">
  <div class="gridy-2 gridyhe-1">
    <div class="gridimg" style="background-image: url(../assets/img/youth2.jpg)">&nbsp;</div>
    
    <div class="gridinfo">
      <h3>Youth and Gender</h3>
      <div class="gridmeta">
        <!-- <p class="gridwhen"><i class="fa fa-clock-o"></i> 17:22 17th Feb 2015</p> -->
        <p class="gridwho"><i class="fa fa-user"></i>Youth and Gender Issues</p>
      </div>
      <p class="gridexerpt">Lorem ipsum dolor set amet, some dummy content..</p>
      <a href="#" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
  </div>
  <div class="gridy-1 gridyhe-1">
    <div class="gridimg" style="background-image: url(../assets/img/health1.jpg)">&nbsp;</div>
    
    <div class="gridinfo">
      <h3>Health</h3>
      <div class="gridmeta">
        <!-- <p class="gridwhen"><i class="fa fa-clock-o"></i> 17:22 17th Feb 2015</p> -->
        <p class="gridwho"><i class="fa fa-user"></i>Community health</p>
      </div>
      <p class="gridexerpt">Lorem ipsum dolor set amet, some dummy content..</p>
      <a href="#" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
  </div>
  <div class="gridy-1 gridyhe-2">
    <div class="gridimg" style="background-image: url(../assets/img/agri1.jpg)">&nbsp;</div>
    
    <div class="gridinfo">
      <h3>Agribusiness</h3>
      <div class="gridmeta">
        <!-- <p class="gridwhen"><i class="fa fa-clock-o"></i> 17:22 17th Feb 2015</p> -->
        <p class="gridwho"><i class="fa fa-user"></i>Agribusiness</p>
      </div>
      <p class="gridexerpt">Lorem ipsum dolor set amet, some dummy content..</p>
      <a href="../src/agribusiness.php" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
  </div>
  <div class="gridy-2 gridyhe-1">
    <div class="gridimg" style="background-image: url(../assets/img/community1.jpg)">&nbsp;</div>
    
    <div class="gridinfo">
      <h3>Community Development</h3>
      <div class="gridmeta">
        <!-- <p class="gridwhen"><i class="fa fa-clock-o"></i> 17:22 17th Feb 2015</p> -->
        <p class="gridwho"><i class="fa fa-user"></i>Community Development</p>
      </div>
      <p class="gridexerpt">Lorem ipsum dolor set amet, some dummy content..</p>
      <a href="#" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
  </div>
  <div class="gridy-1 gridyhe-1">
    <div class="gridimg" style="background-image: url(../assets/img/community4.jpg)">&nbsp;</div>
    <div class="gridinfo">
      <h3>Disaster Management</h3>
      <div class="gridmeta">
        <!-- <p class="gridwhen"><i class="fa fa-clock-o"></i> 17:22 17th Feb 2015</p> -->
        <p class="gridwho"><i class="fa fa-user"></i> Disaster Management</p>
      </div>
      <p class="gridexerpt">Lorem ipsum dolor set amet, some dummy content..</p>
      <a href="#" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
  </div>
</div>
</section>
