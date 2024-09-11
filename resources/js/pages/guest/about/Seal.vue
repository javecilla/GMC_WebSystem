<script setup>
import Section from '@/components/base/Section.vue';
import Container from '@/components/base/Container.vue';
</script>

<template>
  <Section className="seal">
    <Container className="content">
      <div class="pb-5 pt-5">
        <ul class="timeline">
          <li>
            <div class="timeline-image">
              <img class="img-circle img-responsive shield-image" src="@assets/images/about/shield.png" alt="image"/>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="gradient-brown-text">Shield</h4>
              </div>
              <div class="timeline-body">
                <p class="text">
                  The <strong>Shield</strong> symbolizes our eagerness to protect our students' concern and make them realize the multitude of learning opportunuties that lies ahead.
                </p>
              </div>
            </div>
            <div class="line"></div>
          </li>

          <li class="timeline-inverted">
            <div class="timeline-image">
              <img class="img-circle img-responsive torch-image" src="@assets/images/about/torch.png" alt="image"/>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="gradient-brown-text">Torch</h4>
              </div>
              <div class="timeline-body">
                <p class="text">
                  The <strong>Torch</strong> conveys the intention of this institution to enlighten each and everyone's mind and "fire-up" the learner's spirit within our students.
                </p>
              </div>
            </div>
            <div class="line"></div>
          </li>

          <li>
            <div class="timeline-image">
              <img class="img-circle img-responsive gear-image" src="@assets/images/about/gear.png" alt="image"/>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="gradient-brown-text">Gear</h4>
              </div>
              <div class="timeline-body">
                <p class="text">
                  The <strong>Gear</strong> is the mirror of technology and modernization thus our aim is to make them ready and updated of the current trends.
                </p>
              </div>
            </div>
            <div class="line"></div>
          </li>

          <li class="timeline-inverted plume-content">
            <div class="timeline-image">
              <img class="img-circle img-responsive plume-image" src="@assets/images/about/plume.png" alt="image"/>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="gradient-brown-text">Plume</h4>
              </div>
              <div class="timeline-body">
                <p class="text">
                  In every student's heart and mind lies the hope of being heard and the ability to voice-out valuable opinions as symbolized by the <strong>Plume.</strong>
                </p>
              </div>
            </div>
            <div class="line"></div>
          </li>

          <li>
            <div class="timeline-image">
              <img class="img-circle img-responsive book-image" src="@assets/images/about/book.png" alt="image"/>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="gradient-brown-text">Book</h4>
              </div>
              <div class="timeline-body">
                <p class="text">
                  Our mission of imparting knowledge and skills to our students is characterized by the <strong>"Book of Wisdom"</strong>. This Book signifies the <strong>"Holy Bible"</strong> as spiritual guided or any holy materials a person's faith dictates.
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </Container>
  </Section>
</template>

<style scoped>
.seal {
  background: #F8FAFC;
} .seal .content {
  margin-top: -70px;
} .seal .timeline {
    position: relative;
    padding:4px 0 80px 0;
    margin-top:22px;
    list-style: none;
}
.seal .timeline .timeline-body .text {
  font-size: 16px;
}
.seal .timeline .timeline-heading .gradient-brown-text {
  font-size: 18px;
}
.seal .timeline .shield-image {
  width: 115px;
  height:130px;
  margin-left: 35px;
  margin-top: 30px;
  pointer-events: none;
} .seal .timeline .torch-image {
  width: 80px;
  height:130px;
  margin-left: 50px;
  margin-top: 30px;
  pointer-events: none;
} .seal .timeline .gear-image {
  width: 115px;
  height:130px;
  margin-left: 35px;
  margin-top: 30px;
  pointer-events: none;
} .seal .timeline .plume-image {
  width: 80px;
  height:130px;
  margin-left: 50px;
  margin-top: 30px;
  pointer-events: none;
} .seal .timeline .book-image {
  width: 100px;
  height:115px;
  margin-left: 45px;
  margin-top: 35px;
  pointer-events: none;
}

.seal .timeline .text {
  font-size: 17px;
} .seal .timeline>li:nth-child(even) {
    position: relative;
    margin-bottom: 50px;
    height: 180px;
    right:-100px;
} .seal .timeline>li:nth-child(odd) {
    position: relative;
    margin-bottom: 50px;
    height: 180px;
    left:-100px;
} .seal .timeline>li:before,
  .seal .timeline>li:after {
    content: " ";
    display: table;
} .seal .timeline>li:after {
    clear: both;
    min-height: 170px;
} .seal .timeline > li .timeline-panel {
    position: relative;
    float: left;
    width: 41%;
    padding: 0 20px 20px 30px;
    text-align: right;
} .seal .timeline>li .timeline-panel:before {
    right: auto;
    left: -15px;
    border-right-width: 15px;
    border-left-width: 0;
} .seal .timeline>li .timeline-panel:after {
    right: auto;
    left: -14px;
    border-right-width: 14px;
    border-left-width: 0;
} .seal .timeline>li .timeline-image {
    z-index: 100;
    position: absolute;
    left: 50%;
    border: 7px solid #f3f3f3;
    border-radius: 100%;
    background-color: #f3f3f3;
    box-shadow: 0 0 5px #faf1fc;
    width: 200px;
    height: 200px;
    margin-left: -100px;
} .seal .timeline>li .timeline-image h4 {
    margin-top: 12px;
    font-size: 10px;
    line-height: 14px;
} .seal .timeline>li.timeline-inverted>.timeline-panel {
    float: right;
    padding: 0 30px 20px 20px;
    text-align: left;
} .seal .timeline>li.timeline-inverted>.timeline-panel:before {
    right: auto;
    left: -15px;
    border-right-width: 15px;
    border-left-width: 0;
} .seal .timeline>li.timeline-inverted>.timeline-panel:after {
    right: auto;
    left: -14px;
    border-right-width: 14px;
    border-left-width: 0;
} .seal .timeline>li:last-child {
    margin-bottom: 0;
} .seal .timeline .timeline-heading h4 {
  margin-top:22px;
    margin-bottom: 4px;
    padding:0;
    font-weight: 600;
} .seal .timeline .timeline-heading h4.subheading {
  margin:0;
  padding:0;
    text-transform: none;
    font-size:18px;
    color:#333333;
} .seal .timeline .timeline-body>p,
  .seal .timeline .timeline-body>ul {
    margin-bottom: 0;
    color:#808080;
}
/*Style for even div.line*/
.seal .timeline>li:nth-child(odd) .line:before {
    content: "";
    position: absolute;
    top: 60px;
    bottom: 0;
    left: 690px;
    width: 4px;
    height:340px;
    background-color: #f3f3f3;
    -ms-transform: rotate(-44deg); /* IE 9 */
    -webkit-transform: rotate(-44deg); /* Safari */
    transform: rotate(-44deg);
    box-shadow: 0 0 5px #f3f3f3;
}
/*Style for odd div.line*/
.seal .timeline>li:nth-child(even) .line:before  {
    content: "";
    position: absolute;
    top: 60px;
    bottom: 0;
    left: 450px;
    width: 4px;
    height:340px;
    background-color: #f3f3f3;
    -ms-transform: rotate(44deg); /* IE 9 */
    -webkit-transform: rotate(44deg); /* Safari */
    transform: rotate(44deg);
    box-shadow: 0 0 5px #f3f3f3;
}

/* Mobile Devices (320px-480px)*/
@media only screen and (min-width: 320px) and (max-width: 480px) {
  .seal {

  } .seal .content {
    margin-top: -60px;
    padding-bottom: 220px;
  } .seal .timeline {
      position: relative;
      padding:4px 0 80px 0;
      margin-top:22px;
      list-style: none;
  }
  .seal .timeline .timeline-body .text {
    font-size: 14px;
  }
  .seal .timeline .timeline-heading .gradient-brown-text {
    font-size: 18px;
  }
  .seal .timeline .shield-image {
    width: 85px;
    height:95px;
    margin-left: 25px;
    margin-top: 25px;
  } .seal .timeline .torch-image {
    width: 60px;
    height:110px;
    margin-left: 37px;
    margin-top: 10px;
    pointer-events: none;
  } .seal .timeline .gear-image {
    width: 85px;
    height:95px;
    margin-left: 25px;
    margin-top: 25px;
    pointer-events: none;
  }

  .seal .timeline>.plume-content {
    left: 0;
    margin-left: 0;
    margin-top: 200px;
  }
  .seal .timeline .plume-image {
    width: 75px;
    height:115px;
    margin-left: 30px;
    margin-top: 10px;
    pointer-events: none;
  } .seal .timeline .book-image {
    width: 75px;
    height: 85px;
    margin-left: 32px;
    margin-top: 25px;
    pointer-events: none;
  }
  .seal .timeline > li:nth-child(even) {
    margin-bottom: 0px;
    min-height: 0px;
    right: 0px;
  }
  .seal .timeline > li:nth-child(odd) {
    margin-bottom: 0px;
    min-height: 0px;
    left: 0px;
  }
  .seal .timeline>li .timeline-image {
    position: static;
    width: 150px;
    height: 150px;
    margin-bottom:0px;
  }
  .seal .timeline>li:nth-child(even) .timeline-image {
    left: 0;
    margin-left: 0;
    margin-top: 110px;
  }

  .seal .timeline>li:nth-child(odd) .timeline-image {
    float:right;
    left: 0px;
    margin-left:0;
  }
 .seal .timeline > li:nth-child(even) .timeline-panel {
    width: 100%;
    padding: 0 0 20px 14px;
  }
  .seal .timeline > li:nth-child(odd) .timeline-panel {
    width: 100%;
    padding: 0 14px 20px 0px;
  }
  .seal .timeline > li .line {
    display: none;
  }
}

/* iPad, Tablets (481px-768px)*/
@media only screen and (min-width: 481px) and (max-width: 768px) {
  .seal {

  } .seal .content {
    margin-top: -60px;
    padding-bottom: 220px;
  } .seal .timeline {
      position: relative;
      padding:4px 0 80px 0;
      margin-top:22px;
      list-style: none;
  }
  .seal .timeline .timeline-body .text {
    font-size: 14px;
  }
  .seal .timeline .timeline-heading .gradient-brown-text {
    font-size: 18px;
  }
  .seal .timeline .shield-image {
    width: 85px;
    height:95px;
    margin-left: 25px;
    margin-top: 25px;
  } .seal .timeline .torch-image {
    width: 60px;
    height:110px;
    margin-left: 37px;
    margin-top: 10px;
    pointer-events: none;
  } .seal .timeline .gear-image {
    width: 85px;
    height:95px;
    margin-left: 25px;
    margin-top: 25px;
    pointer-events: none;
  }

  .seal .timeline>.plume-content {
    left: 0;
    margin-left: 0;
    margin-top: 200px;
  }
  .seal .timeline .plume-image {
    width: 75px;
    height:115px;
    margin-left: 30px;
    margin-top: 10px;
    pointer-events: none;
  } .seal .timeline .book-image {
    width: 75px;
    height: 85px;
    margin-left: 32px;
    margin-top: 25px;
    pointer-events: none;
  }
  .seal .timeline > li:nth-child(even) {
    margin-bottom: 0px;
    min-height: 0px;
    right: 0px;
  }
  .seal .timeline > li:nth-child(odd) {
    margin-bottom: 0px;
    min-height: 0px;
    left: 0px;
  }
  .seal .timeline>li .timeline-image {
    position: static;
    width: 150px;
    height: 150px;
    margin-bottom:0px;
  }
  .seal .timeline>li:nth-child(even) .timeline-image {
    left: 0;
    margin-left: 0;
    margin-top: 110px;
  }
  .seal .timeline>li:nth-child(odd) .timeline-image {
    float:right;
    left: 0px;
    margin-left:0;
  }
 .seal .timeline > li:nth-child(even) .timeline-panel {
    width: 100%;
    padding: 0 0 20px 14px;
  }
  .seal .timeline > li:nth-child(odd) .timeline-panel {
    width: 100%;
    padding: 0 14px 20px 0px;
  }
  .seal .timeline > li .line {
    display: none;
  }
}

/* Small screens, laptops (769px-1024px)*/
@media only screen and (min-width: 769px) and (max-width: 1024px) {
  .seal .timeline > li:nth-child(even) {
    margin-bottom: 0px;
    min-height: 0px;
    right: 0px;
  }
  .seal .timeline > li:nth-child(odd) {
    margin-bottom: 0px;
    min-height: 0px;
    left: 0px;
  }
  .seal .timeline>li:nth-child(even) .timeline-image {
    left: 0;
    margin-left: 0px;
  }
  .seal .timeline>li:nth-child(odd) .timeline-image {
    left: 520px;
    margin-left: 0px;
  }
  .seal .timeline > li:nth-child(even) .timeline-panel {
    width: 70%;
    padding: 0 0 20px 0px;
    text-align: left;
  }
  .seal .timeline > li:nth-child(odd) .timeline-panel {
    width: 70%;
    padding: 0 0 20px 0px;
    text-align: right;
  }
  .seal .timeline > li .line {
    display: none;
  }
}

/* Desktops, large screens (1025px-1200px)*/
@media only screen and (min-width: 1025px) and (max-width: 1200px) {
  .seal .timeline > li:nth-child(even) {
    margin-bottom: 0px;
    min-height: 0px;
    right: 0px;
  }
  .seal .timeline > li:nth-child(odd) {
    margin-bottom: 0px;
    min-height: 0px;
    left: 0px;
  }
  .seal .timeline>li:nth-child(even) .timeline-image {
    left: 0;
    margin-left: 0px;
  }
  .seal .timeline>li:nth-child(odd) .timeline-image {
    left: 690px;
    margin-left: 0px;
  }
  .seal .timeline > li:nth-child(even) .timeline-panel {
    width: 76%;
    padding: 0 0 20px 0px;
    text-align: left;
  }
  .seal .timeline > li:nth-child(odd) .timeline-panel {
    width: 70%;
    padding: 0 0 20px 0px;
    text-align: right;
  }
  .seal .timeline > li .line {
    display: none;
  }
}
</style>