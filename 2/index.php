<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="assets/js/color-modes.js"></script>
    <script src="jquery-3.7.1.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.118.2">
    <link rel="stylesheet" href="css@3.css">

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .modal-header{
        min-width:300px;
        display:flex;
        justify-content:space-between;
      }
      .modal-content{
        border:1px solid gray;
        background:#0E0F11;
        padding:50px;
      }
      .modal_body{
        top:0px;
        left:0px;
        width:100%;
        height:100%;
        display:flex;
        justify-content:center;
        align-items:center;
        background:rgba(0,0,0,0.5);
      }

      .modal_div{
        top:0px;
        left:0px;
        width:100%;
        height:100%;
        position:absolute;
        display:none;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>


<div class="container-fluid">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="width:100%">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">1</span>
        <input type="text" class="form-control" id="input1" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">2</span>
        <input type="text" class="form-control" id="input2" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-default">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">3</span>
        <input type="text" class="form-control" id="input3" aria-label="Пример размера поля ввода" aria-describedby="inputGroup-sizing-default">
      </div>
      <hr>
      <select class="form-select" aria-label="Пример выбора по умолчанию" id="select">
        <option selected>Меню выбора</option>
        <option value="первый">первый</option>
        <option value="второй">второй</option>
        <option value="третий">третий</option>
      </select>
      <div class="modal_div" id="modal_div">
        <div class="modal_body">
          <div class="modal-dialog" role="document" >
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header">
                    <h5 class="modal-title">Модальное окно</h5>
                    <div>
                        <button type="button" class="btn-close" id="close_button"data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                </div>
                    <div class="modal-body">
                        <div class="modal-body py-0">
                            <div style="margin-top:20px; width:100%;background:#2E2E2E">
                            <span id="span1" style="padding:5px;border-radius:20px"></span>
                            </div>
                            <div style="margin-top:20px; width:100%;background:#2E2E2E">
                            <span id="span2" style="padding:5px;border-radius:20px"></span>
                            </div>
                            <div style="margin-top:20px; width:100%;background:#2E2E2E">
                            <span id="span3" style="padding:5px;border-radius:20px"></span>
                            </div>
                            <div style="margin:20px; background:#2E2E2E">
                            <span id="span4" style="padding:5px;border-radius:20px"></span>
                            </div>
                        </div>
                    </div>
              </div>
          </div>
        </div>
      </div>
      <br>
      <button type="button" class="btn btn-secondary" id="out_button">отправить</button>
      <script>
        $("#out_button").on("click",function(){
          $("#modal_div").css({"display":"block"});
          $("#span1").text($("#input1").val());
          $("#span2").text($("#input2").val());
          $("#span3").text($("#input3").val());
          $("#span4").text($("#select").val());
        });
        $("#close_button").on("click",function(){
          $("#modal_div").css({"display":"none"});
        });
      </script>
    </main>
  </div>
</div>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
