<!DOCTYPE html>
<html lang="en" id="home">

<head \>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/custom.css" />
  <script src="js/plotly-latest.min.js"></script>
  <title>SoundQM</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand page-scroll" href="#home">Sound.qm</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto menu">
            <a class="nav-link mr-4 page-scroll" href="#data">Data <span class="sr-only">(current)</span></a>
            <a class="nav-link page-scroll" href="#result">Result</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="jumbotron jumbotron-fluid section-background">
      <div class="container text-center">
        <h1 class="display-4">Sound Quality Measurement</h1>
        <p class="lead">Application to measure the sound quality in a room</p>
      </div>
    </div>
  </header>

  <main>
    <div class="container border-bottom mt-5">
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Room Type
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button">Classroom</button>
          <button class="dropdown-item" type="button">Concert Hall</button>
          <button class="dropdown-item" type="button">Mosque</button>
        </div>
      </div>
      <article id="data">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">DATA</h1>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-6">
            <div class="card bg-light mb-3 mx-auto shadow">
              <div class="card-header font-weight-bolder text-center">
                Noise Level
              </div>
              <div class="card-body">
                <h5 class="card-title text-center text-size-custom">70dB</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Quas ea laborum aliquam, nihil doloremque alias
                  perspiciatis. Perferendis, molestiae asperiores quae
                  molestias animi iusto cumque quidem iste est illo,
                  voluptatum sunt?
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card bg-light mb-3 mx-auto shadow">
              <div class="card-header font-weight-bolder text-center">
                Reverberation Time (RT)
              </div>
              <div class="card-body">
                <h5 class="card-title text-center text-size-custom">70s</h5>
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Fuga, aliquid delectus porro ipsa eos ut dicta amet minus,
                  blanditiis libero aperiam dignissimos nam iure, voluptatem
                  pariatur reprehenderit tempore neque quisquam!
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card bg-light mb-3 pb-5 mx-auto shadow">
              <div class="card-header font-weight-bolder text-center">
                Sound Distribution
              </div>
              <div class="card-body">
                <div class="container mt-5">
                  <div class="row mt-5 justify-content-around">
                    <div class="col-md-5 my-auto">
                      <h1>Graph</h1>
                      <p class="text-justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Mollitia excepturi, eveniet cumque recusandae ut
                        quis repellat dolorum, nesciunt ducimus voluptas aut
                        accusantium. Quam dolores quod fugiat tempora nulla
                        omnis sint.
                      </p>
                    </div>
                    <div class="col-md-5 graph">
                      <div id="tester"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
    </div>
    <article id="result">
      <div class="container mt-2">
        <div class="row justify-content-center">
          <div class="col-md-12 my-auto">
            <h1>Result</h1>
            <p class="display-1 mt-5 text-success text-center">GOOD<p>
          </div>
        </div>
      </div>
    </article>
  </main>
  <footer class="text-center">
    <p>Copyright &#169; 2020 - fznnshr. All rights reserved</p>
  </footer>
  <script src="js/jquery-3.5.1.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>