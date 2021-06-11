/*global $, window*/

function isScrolling() {
  'use strict';
  if (window.document.body.scrollTop > 150 || window.document.documentElement.scrollTop > 150) {
    window.document.getElementById("go-to-top").style.display = "block";
  } else {
    window.document.getElementById("go-to-top").style.display = "none";
  }
}

window.onscroll = function () {
  'use strict';
  isScrolling();
};

window.document.getElementById('go-to-top').onclick = function () {
  'use strict';
  $('html').animate({ scrollTop: 0 }, 'slow');
};

if (news === 'true') {
  window.document.getElementById('news').setAttribute('class', 'active');
} else {
  window.document.getElementById('news').setAttribute('class', 'link');
}