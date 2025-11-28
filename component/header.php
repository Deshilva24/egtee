<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EG-Tee</title>
  <link href="https://fonts.googleapis.com/css2?family=Inria+Serif&display=swap" rel="stylesheet">
  <style>

/* NAVBAR */
  body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #736551;
      color: white;
    }

    header {
      background-color: #2F2224;
      padding: 15px;
      display: flex;
      align-items: center;
    }

    .logo img {
      height: 45px;
    }

    .nav-search-icons {
      display: flex;
      align-items: center;
      gap: 20px;
      margin-left: auto;
    }

    nav a {
      color: rgb(255, 253, 253);
      margin: 0 10px;
      text-decoration: none;
    }

    nav a.active {
      color: #f2c100;
      font-weight:bold;
    }

    .search-container {
      display: flex;
      align-items: center;
      background-color: white;
      border-radius: 4px;
      height: 36px;
    }

    .search-container input {
      border: none;
      outline: none;
      font-size: 14px;
    }

    .search-container button {
      background: none;
      border: none;
      cursor: pointer;
      margin-bottom: 8px;
    }

    .icons {
      display: flex;
      gap: 10px;
    }

    .icons button {
      background: white;
      border: none;
      border-radius: 4px;
      padding: 4px;
      cursor: pointer;
      margin-bottom: 10px;
      position: relative;
      top: -2px; 
    }

    .icons img {
      width: 24px;
      height: 24px;
    }


    /* BANNER */
     .banner-container {
      position: auto;
      height: 700px;
      background: url('erigo.jpg') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* ERIGO COLLAB */
    body {
          font-family: 'Arial', sans-serif;
        }

          .container {
          max-width: 1200px;
          margin: 0 auto;
          padding: 40px 20px;
        }

        .hero-section {
            text-align: center;
            margin-bottom: 60px;
        }

        .hero-title {
            font-size: 2.6em;
            font-weight: bold;
            letter-spacing: 3px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.5);
            background: linear-gradient(45deg, #fff, #f0f0f0, #ddd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-description {
            font-size: 1em;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            opacity: 0.9;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }

        .divider {
            height: 3px;
            background: linear-gradient(90deg, transparent, #fff, transparent);
            margin: 25px auto;
            max-width: 500px;
            border-radius: 2px;
        }

        .collaborations {
            display: flex;
            gap: 30px;
            justify-content: center;
            align-items: stretch;
            flex-wrap: wrap;
        }

        .collaboration-card {
            background: white;
            border-radius: 20px;
            padding: 20px;
            flex: 1;
            max-width: 400px;
            min-width: 300px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            height: auto;
        }

        .collaboration-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* CARD BEST SELLER DAN NEW ARRIVAL*/
        .card-content {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }

        .card-image {
            width: 120px;
            height: 170px;
            border-radius: 15px;
            object-fit: cover;
            border: 3px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .card-image:hover {
            transform: scale(1.05);
            border-color: rgba(255, 255, 255, 0.6);
        }

        .card-text {
            flex: 1;
        }

        .card-title {
            font-size: 1em;
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
            text-shadow: none;
            letter-spacing: 1px;
        }

        .card-description {
            font-size: 0.95em;
            line-height: 1.6;
            color: #555;
            text-align: justify;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5em;
                letter-spacing: 2px;
            }

            .hero-description {
                font-size: 1.1em;
                padding: 0 10px;
            }

            .collaborations {
                flex-direction: column;
                align-items: center;
            }

            .collaboration-card {
                max-width: 100%;
            }

            .card-content {
                flex-direction: column;
                text-align: center;
            }

            .card-image {
                width: 120px;
                height: 120px;
                align-self: center;
            }
        }

    section h2 {
      text-align: center;
      font-size: 45px;
      color: white;
      font-family: 'Inria Serif', serif;
      font-weight: 700;
      margin: 60px 0 40px;
      text-shadow: 2px 4px 8px rgba(0,0,0,.3);
      position: relative;
    }

    section h2::after {
      content: '';
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 100px;
      height: 3px;
      background: linear-gradient(90deg, transparent, #f2c100, transparent);
    }

    .product-list, .arrival-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 40px;
      max-width: 800px;
      margin: auto;
      padding: 0 20px 60px;
      justify-items: center;
    }

    .product-card, .arrival-card {
      background: linear-gradient(145deg, #3F2E30, #2a1f21);
      border-radius: 12px;
      padding: 10px;
      width: 100%;
      text-align: center;
      box-shadow: 0 8px 25px rgba(0,0,0,.2);
      transition: .4s;
      overflow: hidden;
    }

    .arrival-card {
      min-height: 335px;  
    }

    .product-card:hover, .arrival-card:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 20px 40px rgba(0,0,0,.3);
    }

    .product-card img, .arrival-card img {
      width: 99%;
      height: 270px;
      object-fit: cover;
      border-radius: 8px;
      transition: .3s;
      filter: brightness(0.9);
    }

    .product-card:hover img, .arrival-card:hover img {
      filter: brightness(1.1);
      transform: scale(1.05);
    }

    .name {
      color: #8DA8FF;
      font-size: 14px;
      font-weight: 600;
      line-height: 1.4;
      margin: 10px 0 6px;
    }

    .price {
      color: #ffffff;
      font-size: 16px;
      font-weight: 700;
      text-shadow: 1px 1px 2px rgba(0,0,0,.3);
    }

    button {
      margin-top: 15px;
      padding: 8px 16px;
      border: none;
      background: linear-gradient(135deg, #2F2224, #1a1516);
      color: white;
      border-radius: 8px;
      font-weight: 600;
      font-family: 'Inter', sans-serif;
      cursor: pointer;
      transition: .3s;
    }

      .product-card button:hover,
      .arrival-card button:hover {
      background: linear-gradient(135deg, #f2c100, #d4a700);
      color: #2F2224;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(242,193,0,.4);
    }

 /* FOOTER */
    footer {
      background: #42393A;
      color: #e5e7eb;
      padding: 40px 60px;
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
    }

    .footer-left {
      display: flex;         
      align-items: center;    
      gap: 15px;              
    }

    /* Bagian kiri */
    .footer-left img {
      width: 155px;
      height: 155px;
      border-radius: 16px;
      margin-bottom: 10px;
    }

    .footer-left p {
      max-width: 300px;
      font-size: 13px;
      line-height: 1.5;
      margin: 0;
    }

    .footer-left p b {
      color: #fff;
    }

      .footer-right {
      display: flex;
      flex-direction: column;
      gap: 14px;
    }

    /* Menu Tengah */
    .footer-center {
      display: flex;
      flex-direction: column;
      gap: 13px;         
      margin-top: -0px;  
    }

    .footer-center p {
      margin: 0 0 10px; 
      font-weight: bold;
      font-size: 18px;
      color: #fff;
    }

    .footer-center a {
      color: #e5e7eb;
      text-decoration: none;
      font-size: 14px;
      gap: 20px;
    }

    .footer-center a:hover {
      color: #f7f305;
    }

    /* Bagian kanan */
    .footer-right p {
      margin: 0;
      font-weight: bold;
      font-size: 18px;
      color: #fff;
      margin-top: -1px;
    }

    .footer-right a {
      color: #e5e7eb;
      text-decoration: none;
      font-size: 14px;
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .footer-right img {
      width: 26px;
      height: 26px;
      border-radius: 50%;
      background: #42393A;
      padding: 6px;
    }

  </style>
  </head>