// This is animation for all page



AOS.init();


//Main Nav
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


//------------------------------------------------- This is for liquidity page start ----------------------------------------



function addLiquid() {

  const container = document.getElementById('cardCont');

  const box = document.getElementById('cardBox');

  const liquidity = `<div class="card" style="width: 30rem;" id="cardBoxBack" data-aos="zoom-in">

  <div class="card-body">

      <div class="top-card-sec">

          <div class="arrow-btn" onclick="ldtyBack()">

              <a><i class="fas fa-arrow-left"></i></a>

          </div>

          <div class="card-head">

              <h4>Add Liquidity</h4>

              <p class="tltip"><i class="far fa-question-circle"></i> Add liquidity to receive LP tokens </p>

          </div>

          <div class="card-icon">

              <i class="fas fa-cog"></i>

              <i class="fas fa-history"></i>

          </div>

      </div>

      <hr>

      <div class="to-section">

          <div class="to">To</div>

          <div class="to-input">

              <div class="to-inp-field">

                  <input type="text" placeholder="0.0">

              </div>

              <div class="slc-curr">

                  <div class="crr-name">Select a currency</div>

                  <i class="fas fa-chevron-down"></i>

              </div>

          </div>

      </div>

      <div class="down-arrow">

          +

      </div>

      <div class="to-section">

          <div class="to">To</div>

          <div class="to-input">

              <div class="to-inp-field">

                  <input type="text" placeholder="0.0">

              </div>

              <div class="slc-curr">

                  <div class="crr-name">Select a currency</div>

                  <i class="fas fa-chevron-down"></i>

              </div>

          </div>

      </div>

      <a class="btn btn-primary btn-block unlc-wallet">Unlock Wallet</a>

  </div>

</div>`;



  box.style.display = 'none';

  container.innerHTML = liquidity;

}



function ldtyBack() {

  const container = document.getElementById('cardCont');

  const box = document.getElementById('cardBoxBack');

  const boxBack = ` <div class="col-lg-12 card-container" id="cardCont" data-aos="zoom-in">

  <div class="card" style="width: 30rem;" id="cardBox">

      <div class="card-body">

          <div class="top-card-sec">

              <div class="card-head">

                  <h4>Your Liquidity</h4>

                  <p>Remove liquidity to receive tokens back</p>

              </div>

              <div class="card-icon">

                  <i class="fas fa-cog"></i>

                  <i class="fas fa-history"></i>

              </div>

          </div>

          <hr>

          <div class="lqdty-status">

              <h5>Connect to a wallet to view your liquidity.</h5>

          </div>

          <a id="addLiquid" onclick="addLiquid()"

              class="btn btn-primary btn-block unlc-wallet"> + Add liquidity</a>

      </div>

  </div>

</div>`;





  box.style.display = "none";

  container.innerHTML = boxBack;

};

//------------------------------------------------- This is for liquidity page end ----------------------------------------



// Prediction page 

$('.owl-carousel').owlCarousel({

    loop: true,

    margin: 10,

    nav: true,

    autoplay:true,

    autoplayTimeout:2000,

    autoplayHoverPause:true,

    responsive: {

      0: {

        items: 1

      },

      400: {

        items: 1

      },

      700: {

        items: 2

      },

      1000: {

        items: 3

      }

    }

  })





// new Splide( '#splide', {

// 	type   : 'loop',

// 	perPage: 3,

// 	perMove: 1,

//     focus  : 'center', 

//     padding: {

// 		left : '2rem',

// 		right: '2rem',

// 	},

//     breakpoints: {

//         '1400': {

// 			perPage: 3,

// 			gap    : '4rem',

// 		},

//         '1024': {

// 			perPage: 2,

// 			gap    : '1rem',

// 		},

//         '768': {

// 			perPage: 2,

// 			gap    : '1rem',

// 		},

// 		'640': {

// 			perPage: 2,

// 			gap    : '1rem',

// 		},

//         '540': {

// 			perPage: 1,

// 			gap    : '1rem',

// 		},

// 		'480': {

// 			perPage: 1,

// 			gap    : '1rem',

// 		},

//         '425': {

// 			perPage: 1,

// 			gap    : '1rem',

// 		},

//         '320': {

// 			perPage: 1,

// 			gap    : '8rem',

// 		},

// 	}

// } ).mount();











// -------------------------------------------------------------chart info -----------------------------------------

