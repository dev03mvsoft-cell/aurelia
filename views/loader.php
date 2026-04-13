  <?php defined('SECURE_ACCESS') or die('Direct access not allowed'); ?>
<style>

    /* Loader Wrapper */
    .full-screen {
      position: fixed;
      inset: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: #ffffffff;
      z-index: 999999;
      opacity: 1;
      transition: opacity 0.6s ease, visibility 0.6s ease;
    }

    /* Loader hide class */
    .hide-loader {
      opacity: 0;
      visibility: hidden;
    }

    .loader-container {
      position: relative;
      width: 250px;
      height: 250px;
    }

    /* Logo One Spins */
    .logo-one {
      position: absolute;
      top: 50%;
      left: 15%;
      width: 120px;
      height: 120px;
      transform: translate(-50%, -50%) scale(0.5);
      opacity: 0;
      animation: spinIn 2s ease-out forwards;
    }

    .logo-one img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }

    @keyframes spinIn {
      0% { transform: translate(-50%, -50%) scale(0.5) rotate(-360deg); opacity: 0; }
      60% { transform: translate(-50%, -50%) scale(1.1) rotate(20deg); opacity: 1; }
      100% { transform: translate(-50%, -50%) scale(1) rotate(0deg); opacity: 1; }
    }

    /* Logo Two Slides */
    .logo-two {
      position: absolute;
      top: 50%;
      left: 5%;
      width: 200px;
      height: 200px;
      transform: translate(-50%, -50%) scale(0.5);
      opacity: 0;
      z-index: 5;
      animation: slideOutRight 0.8s ease-out 1.2s forwards;
    }

    .logo-two img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }

    @keyframes slideOutRight {
      0% {
        transform: translate(40px, -50%) scale(0.8);
        opacity: 0;
      }
      10% { opacity: 1; }
      100% {
        transform: translate(70px, -50%) scale(1);
        opacity: 1;
      }
    }

  </style>



  <!-- Loader Screen -->
  <div class="full-screen" id="loader">
    <div class="loader-container">

      <div class="logo-one">
        <img src="/assets/image/logo/2.png" alt="First Logo">
      </div>

      <div class="logo-two">
        <img src="/assets/image/logo/4.png" alt="Second Logo">
      </div>

    </div>
  </div>

  <script>
    // Loader Auto Hide After Animation Complete
    setTimeout(() => {
      document.getElementById("loader").classList.add("hide-loader");
    }, 2500); // 2.5 sec (you can increase/decrease)
  </script>

