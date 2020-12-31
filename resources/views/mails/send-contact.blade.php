<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Kamplink</title>
</head>
<body>
     <style>
          * {
               padding: 0;
               margin: 0;
          }

          main {
               padding: 20px;
          }

          body {
               font-family: Georgia, 'Times New Roman', Times, serif
          }

          .card {
               box-shadow: 10px 5px 15px 5px rgba(0,0,0,.15)
          }

          .card-body {
               padding: 25px
          }

          .card-title {
               padding: 5px;
               margin: 0
          }

          .text-muted {
               color: gray
          }

          .divider {
               margin: 10px 0px
          }

          .row {
               display: flex;
          }

          .j-c-c {
               justify-content: center;
          }

          @media screen and (min-width: 720px) {
               .col-md-6 {
                    width: 50%;
               }
          }

          @media screen and (min-width: 1020px) {
               .col-lg-4 {
                    width: 33.3%
               }
          }
     </style>
     
     <main>
          <div class="row j-c-c">
               <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                         <div class="card-body">
                              <h1 class="card-title">{{ $payload["subject"] }}</h1>
                              <p class="card-subtitle text-muted">{{ $payload["email"] }}</p>
                              <hr class="divider">
                              <p class="card-text">{{ $payload["message"] }}</p>
                         </div>
                    </div>
               </div>
          </div>
     </main>
</body>
</html>