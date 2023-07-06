<div class="l-logo-container">
  <div class="l-logo">
    <img class="l-img-1" src="./assets/shipment.png" alt="Logo 1" />
    <div class="l-detailss">
      <p class="l-title">Free Shipping</p>
      <p class="l-info">Free shipping across India.</p>
    </div>
  </div>
  <div class="l-logo">
    <img class="l-img-2" src="./assets/14 Day Easy Return.png" alt="Logo 2" />
    <div class="l-detailss">
      <p class="l-title">Easy Returns</p>
      <p class="l-info">14 Days Easy Returns Policy.</p>
    </div>
  </div>
  <div class="l-logo">
    <img class="l-img-3" src="./assets/Worldwide Shipping.png" alt="Logo 3" />
    <div class="l-detailss">
      <p class="l-title">Worldwide Shipping</p>
      <p class="l-info">Order from anywhere in the world.</p>
    </div>
  </div>
  <div class="l-logo">
    <img class="l-img-4" src="./assets/100-percent.png" alt="Logo 4" />
    <div class="l-detailss">
      <p class="l-title">High Quality Products</p>
      <p class="l-info">Quality is the pride of our workmanship.</p>
    </div>
  </div>
</div>

<!DOCTYPE html>
<html>
<head>
  <title>Service Bar Example</title>
  <style>
    .l-logo-container {
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      background-color: #70809014;
      padding: 2em 1em;
      margin: 4em 0 0 0;
    }

    .l-logo {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 25%;
    }

    .l-img-1 {
      width: 35%;
      height: 8vh;
      object-fit: contain;
    }

    .l-img-2 {
      width: 45%;
      height: 8vh;
      object-fit: contain;
    }

    .l-img-3 {
      width: 20%;
      height: 8vh;
      object-fit: contain;
    }

    .l-img-4 {
      width: 35%;
      height: 8vh;
      object-fit: contain;
    }

    .l-title {
      font-weight: bolder;
      font-size: large;
      color: gray;
    }

    .l-detailss {
      text-align: center;
      margin: 1em 0 0 0;
    }

    .l-info {
      font-size: medium;
      font-weight: 600;
      color: #a2a2a2;
    }

    @media only screen and (max-width: 768px) {
      .l-logo-container {
        flex-direction: column;
        padding: 2em 0;
      }

      .l-logo {
        margin-bottom: 2em;
        width: 80%;
      }

      .l-img-1,
      .l-img-2 {
        width: 30%;
        height: auto;
        object-fit: contain;
      }

      .l-img-3,
      .l-img-4 {
        width: 25%;
        height: auto;
        object-fit: contain;
      }

      .l-detailss {
        font-size: larger;
      }
    }
  </style>
</head>
<body>
</body>
</html>
