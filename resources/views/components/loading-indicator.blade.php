<div wire:loading.delay>
    <div style="display: flex; justify-content: center; align-items: center; background-color: black; position: fixed; top: 0px; left: 0px; z-index: 9999; width: 100%; height: 100%;opacity: .75;">
      <div class="la-ball-scale-ripple-multiple la-2x" >
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div>
  @push('styles')
  <style>
    /*!
 * Load Awesome v1.1.0 (http://github.danielcardoso.net/load-awesome/)
 * Copyright 2015 Daniel Cardoso <@DanielCardoso>
 * Licensed under MIT
 */
.la-ball-scale-ripple-multiple,
.la-ball-scale-ripple-multiple > div {
    position: relative;
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}
.la-ball-scale-ripple-multiple {
    display: block;
    font-size: 0;
    color: #fff;
}
.la-ball-scale-ripple-multiple.la-dark {
    color: #333;
}
.la-ball-scale-ripple-multiple > div {
    display: inline-block;
    float: none;
    background-color: currentColor;
    border: 0 solid currentColor;
}
.la-ball-scale-ripple-multiple {
    width: 32px;
    height: 32px;
}
.la-ball-scale-ripple-multiple > div {
    position: absolute;
    top: 0;
    left: 0;
    width: 32px;
    height: 32px;
    background: transparent;
    border-width: 2px;
    border-radius: 100%;
    opacity: 0;
    -webkit-animation: ball-scale-ripple-multiple 1.25s 0s infinite cubic-bezier(.21, .53, .56, .8);
       -moz-animation: ball-scale-ripple-multiple 1.25s 0s infinite cubic-bezier(.21, .53, .56, .8);
         -o-animation: ball-scale-ripple-multiple 1.25s 0s infinite cubic-bezier(.21, .53, .56, .8);
            animation: ball-scale-ripple-multiple 1.25s 0s infinite cubic-bezier(.21, .53, .56, .8);
}
.la-ball-scale-ripple-multiple > div:nth-child(1) {
    -webkit-animation-delay: 0s;
       -moz-animation-delay: 0s;
         -o-animation-delay: 0s;
            animation-delay: 0s;
}
.la-ball-scale-ripple-multiple > div:nth-child(2) {
    -webkit-animation-delay: .25s;
       -moz-animation-delay: .25s;
         -o-animation-delay: .25s;
            animation-delay: .25s;
}
.la-ball-scale-ripple-multiple > div:nth-child(3) {
    -webkit-animation-delay: .5s;
       -moz-animation-delay: .5s;
         -o-animation-delay: .5s;
            animation-delay: .5s;
}
.la-ball-scale-ripple-multiple.la-sm {
    width: 16px;
    height: 16px;
}
.la-ball-scale-ripple-multiple.la-sm > div {
    width: 16px;
    height: 16px;
    border-width: 1px;
}
.la-ball-scale-ripple-multiple.la-2x {
    width: 64px;
    height: 64px;
}
.la-ball-scale-ripple-multiple.la-2x > div {
    width: 64px;
    height: 64px;
    border-width: 4px;
}
.la-ball-scale-ripple-multiple.la-3x {
    width: 96px;
    height: 96px;
}
.la-ball-scale-ripple-multiple.la-3x > div {
    width: 96px;
    height: 96px;
    border-width: 6px;
}
/*
 * Animation
 */
@-webkit-keyframes ball-scale-ripple-multiple {
    0% {
        opacity: 1;
        -webkit-transform: scale(.1);
                transform: scale(.1);
    }
    70% {
        opacity: .5;
        -webkit-transform: scale(1);
                transform: scale(1);
    }
    95% {
        opacity: 0;
    }
}
@-moz-keyframes ball-scale-ripple-multiple {
    0% {
        opacity: 1;
        -moz-transform: scale(.1);
             transform: scale(.1);
    }
    70% {
        opacity: .5;
        -moz-transform: scale(1);
             transform: scale(1);
    }
    95% {
        opacity: 0;
    }
}
@-o-keyframes ball-scale-ripple-multiple {
    0% {
        opacity: 1;
        -o-transform: scale(.1);
           transform: scale(.1);
    }
    70% {
        opacity: .5;
        -o-transform: scale(1);
           transform: scale(1);
    }
    95% {
        opacity: 0;
    }
}
@keyframes ball-scale-ripple-multiple {
    0% {
        opacity: 1;
        -webkit-transform: scale(.1);
           -moz-transform: scale(.1);
             -o-transform: scale(.1);
                transform: scale(.1);
    }
    70% {
        opacity: .5;
        -webkit-transform: scale(1);
           -moz-transform: scale(1);
             -o-transform: scale(1);
                transform: scale(1);
    }
    95% {
        opacity: 0;
    }
}
  </style>
  @endpush