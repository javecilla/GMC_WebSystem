<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="{{ asset('/wp-content/uploads/gmclogo.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/wp-content/uploads/gmclogo.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/wp-content/uploads/gmclogo.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/wp-content/uploads/gmclogo.png') }}" />
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700;800&family=Roboto+Flex:opsz,wght@8..144,300&display=swap');
  @import url('https://fonts.bunny.net/css?family=Nunito');

/* latin-ext */
@font-face {
  font-family: 'Oxygen';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('Oxygen Regular'), local('Oxygen-Regular'), url(https://fonts.gstatic.com/s/oxygen/v9/2sDfZG1Wl4LcnbuKgE0mV0Q.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Oxygen';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('Oxygen Regular'), local('Oxygen-Regular'), url(https://fonts.gstatic.com/s/oxygen/v9/2sDfZG1Wl4LcnbuKjk0m.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

body,
html {
    padding: 0;
    margin: 0;
    font-family: 'Quicksand', sans-serif;
    font-weight: 400;
    overflow: hidden;
}

body {
    background: url(/public/wp-content/uploads/sbg.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: fixed;

}
p {
    font-family: 'Oxygen', sans-serif;
}
.subtitle{
    font-size: 14px;
    color: #b3b3b3;
}
.writing {
    width: 320px;
    height: 200px;
    background-color: #3f3f3f;
    border: 1px solid #bbbbbb;
    border-radius: 6px 6px 4px 4px;
    position: relative;
}

.writing-error{
    width: 320px;
    height: 200px;
    border: 1px solid #bbbbbb;
    animation: glitchError 2.5s infinite;
    border-radius: 6px 6px 4px 4px;
    position: relative;
}

@keyframes glitchError {
    0% {
        transform: none;
        opacity: 1;
    }
    7% {
        transform: skew(-0.5deg, -0.9deg);
        opacity: 0.75;
    }
    10% {
        transform: none;
        opacity: 1;
    }
    27% {
        transform: none;
        opacity: 1;
    }
    30% {
        transform: skew(0.8deg, -0.1deg);
        opacity: 0.75;
    }
    35% {
        transform: none;
        opacity: 1;
    }
    52% {
        transform: none;
        opacity: 1;
    }
    55% {
        transform: skew(-1deg, 0.2deg);
        opacity: 0.75;
    }
    50% {
        transform: none;
        opacity: 1;
    }
    72% {
        transform: none;
        opacity: 1;
    }
    75% {
        transform: skew(0.4deg, 1deg);
        opacity: 0.75;
    }
    80% {
        transform: none;
        opacity: 1;
    }
    100% {
        transform: none;
        opacity: 1;
    }
}

.writing .topbar{
    position: absolute;
    width: 100%;
    height: 12px;
    background-color: #f1f1f1;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
}

.writing .topbar div{
    height: 6px;
    width: 6px;
    border-radius: 50%;
    margin: 3px;
    float: left;
}

.writing .topbar div.green{
    background-color: #60d060;
}
.writing .topbar div.red{
    background-color: red;
}
.writing .topbar div.yellow{
    background-color: #e6c015;
}

.writing .code {
    padding: 15px;
}

.writing .code ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.writing .code ul li {
    background-color: #9e9e9e;
    width: 0;
    height: 7px;
    border-radius: 6px;
    margin: 10px 0;
}

.errorLine{
    background-color: #c7151e !important;
    width: 0;
    height: 7px;
    border-radius: 6px;
    margin: 10px 0;
}

.container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    height: 100vh;
    width: 100%;
    -webkit-transition: -webkit-transform .5s;
    transition: -webkit-transform .5s;
    transition: transform .5s;
    transition: transform .5s, -webkit-transform .5s;
}

.stack-container {
    position: relative;
    width: 450px;
    height: 240px;
    -webkit-transition: width 1s, height 1s;
    transition: width 1s, height 1s;
}

.pokeup {
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}

.pokeup:hover {
    -webkit-transform: translateY(-10px);
            transform: translateY(-10px);
    -webkit-transition: .3s ease;
    transition: .3s ease;
}


.error {
    width: 400px;
    padding: 40px;
    text-align: center;
}


.error h2 {
    margin: -30px 0 0 0;
    padding: 0px;
    font-size: 27px;
    text-transform: uppercase;
}

.error h2 span {
    color: #b3b3b3;
    font-weight: 900;
    text-transform: uppercase;
}
.error p i {
  font-family: 'Nunito', sans-serif;
}

.error p a {
  color: black;
  font-family: 'Nunito', sans-serif;
}

.perspec {
    -webkit-perspective: 1000px;
            perspective: 1000px;
}

.writeLine{
    -webkit-animation: writeLine .4s linear forwards;
            animation: writeLine .4s linear forwards;
}

.explode{
    -webkit-animation: explode .5s ease-in-out forwards;
            animation: explode .5s ease-in-out forwards;
}

.card {
    -webkit-animation: tiltcard .5s ease-in-out 1s forwards;
            animation: tiltcard .5s ease-in-out 1s forwards;
    position: absolute;
}

@-webkit-keyframes tiltcard {
    0% {
        -webkit-transform: rotateY(0deg);
                transform: rotateY(0deg);
    }

    100% {
        -webkit-transform: rotateY(-30deg);
                transform: rotateY(-30deg);
    }
}

@keyframes tiltcard {
    0% {
        -webkit-transform: rotateY(0deg);
                transform: rotateY(0deg);
    }

    100% {
        -webkit-transform: rotateY(-30deg);
                transform: rotateY(-30deg);
    }
}

@-webkit-keyframes explode {
    0% {
        -webkit-transform: translate(0, 0) scale(1);
                transform: translate(0, 0) scale(1);
    }

    100% {
        -webkit-transform: translate(var(--spreaddist), var(--vertdist)) scale(var(--scaledist));
                transform: translate(var(--spreaddist), var(--vertdist)) scale(var(--scaledist));
    }
}

@keyframes explode {
    0% {
        -webkit-transform: translate(0, 0) scale(1);
                transform: translate(0, 0) scale(1);
    }

    100% {
        -webkit-transform: translate(var(--spreaddist), var(--vertdist)) scale(var(--scaledist));
                transform: translate(var(--spreaddist), var(--vertdist)) scale(var(--scaledist));
    }
}

@-webkit-keyframes writeLine {
    0% {
        width:0;
    }

    100% {
        width: var(--linelength);
    }
}

@keyframes writeLine {
    0% {
        width:0;
    }

    100% {
        width: var(--linelength);
    }
}

@media screen and (max-width: 1000px) {
    .container {
      -webkit-transform: scale(.85);
              transform: scale(.85);
    }
  }

  @media screen and (max-width: 850px) {
    .container {
      -webkit-transform: scale(.75);
              transform: scale(.75);
    }
  }

  @media screen and (max-width: 775px) {
    .container {
      -ms-flex-wrap: wrap-reverse;
          flex-wrap: wrap-reverse;
      -webkit-box-align: inherit;
          -ms-flex-align: inherit;
              align-items: inherit;
    }
  }

  @media screen and (max-width: 370px) {
    .container {
        -webkit-transform: scale(.6);
                transform: scale(.6);
      }
  }

  .bg-grid {
  background-image:
    linear-gradient(to right, #f2f2f2 1px, transparent 1px),
    linear-gradient(to bottom, #f2f2f2 1px, transparent 1px)!important;
  background-size: 2.5rem 2.5rem;
  background-position: center center;
}
</style>
  </head>
  <body>
<div class="container ">

        <div class="error">

            <h2><span>@yield('code')</span> | @yield('status')</h2>


        <p>
@yield('message')
        </p>

            <p class="subtitle">@yield('subtitle')</p>
        </div>
        <div class="stack-container">
            <div class="card-container">
                <div class="perspec" style="--spreaddist: 125px; --scaledist: .75; --vertdist: -25px;">
                    <div class="card">
                        <div class="writing">
                            <div class="topbar">
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                            <div class="code">
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="perspec" style="--spreaddist: 100px; --scaledist: .8; --vertdist: -20px;">
                    <div class="card">
                        <div class="writing">
                            <div class="topbar">
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                            <div class="code">
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="perspec" style="--spreaddist:75px; --scaledist: .85; --vertdist: -15px;">
                    <div class="card">
                        <div class="writing">
                            <div class="topbar">
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                            <div class="code">
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="perspec" style="--spreaddist: 50px; --scaledist: .9; --vertdist: -10px;">
                    <div class="card">
                        <div class="writing">
                            <div class="topbar">
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                            <div class="code">
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="perspec" style="--spreaddist: 25px; --scaledist: .95; --vertdist: -5px;">
                    <div class="card">
                        <div class="writing">
                            <div class="topbar">
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                            <div class="code">
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="perspec" style="--spreaddist: 0px; --scaledist: 1; --vertdist: 0px;">
                    <div class="card">
                        <div class="writing">
                            <div class="topbar">
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                            <div class="code">
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
      const stackContainer = document.querySelector('.stack-container');
const cardNodes = document.querySelectorAll('.card-container');
const consoleNodes = document.querySelectorAll('.writing');
const perspecNodes = document.querySelectorAll('.perspec');
const perspec = document.querySelector('.perspec');
const card = document.querySelector('.card');

let counter = stackContainer.children.length;

//function to generate random number
function randomIntFromInterval(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}

//after tilt animation, fire the explode animation
card.addEventListener('animationend', function () {
    perspecNodes.forEach(function (elem, index) {
        elem.classList.add('explode');
    });
});

//after explode animation do a bunch of stuff
perspec.addEventListener('animationend', function (e) {
    if (e.animationName === 'explode') {
        cardNodes.forEach(function (elem, index) {

            //add hover animation class
            elem.classList.add('pokeup');

            //add event listner to throw card on click
            elem.addEventListener('click', function () {
                let updown = [800, -800]
                let randomY = updown[Math.floor(Math.random() * updown.length)];
                let randomX = Math.floor(Math.random() * 1000) - 1000;
                elem.style.transform = `translate(${randomX}px, ${randomY}px) rotate(-540deg)`
                elem.style.transition = "transform 1s ease, opacity 2s";
                elem.style.opacity = "0";
                counter--;
                if (counter === 0) {
                    stackContainer.style.width = "0";
                    stackContainer.style.height = "0";
                }
            });

            //generate random number of lines of code between 4 and 10 and add to each card
            let numLines = randomIntFromInterval(5, 10);

            //loop through the lines and add them to the DOM
            for (let index = 0; index < numLines; index++) {
                let lineLength = randomIntFromInterval(25, 97);
                var node = document.createElement("li");
                node.classList.add('node-' + index);

                elem.querySelector('.code ul').appendChild(node).setAttribute('style', '--linelength: ' + lineLength + '%;');

                //draw lines of code 1 by 1
                if (index == 0) {
                    elem.querySelector('.code ul .node-' + index).classList.add('writeLine');
                } else {
                    elem.querySelector('.code ul .node-' + (index - 1)).addEventListener('animationend', function (e) {
                        if(index == numLines-1){
                            node.classList.add('errorLine');
                            elem.querySelector('.code ul .node-' + index).classList.add('writeLine');
                            setTimeout(function() {
                                consoleNodes.forEach(function (elem, index) {
                                    elem.classList.add('writing-error');
                                });
                            }, 2000);
                        }else{
                            elem.querySelector('.code ul .node-' + index).classList.add('writeLine');
                        }
                    });
                }
            }
        });
    }

});
    </script>
  </body>
</html>