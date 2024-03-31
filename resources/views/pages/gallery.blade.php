<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Gallery Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="./bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/alumni-gallery.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/gallery.js" defer></script>
</head>

<body> 
    @include('sideNavigation')

    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <i id="menu-btn" class="fa-solid fa-bars"></i>
            </div>
            <div class="profile">
                <i class="fa-solid fa-bell"></i>
            </div>
        </div>

        <h3 class="i-name">
            Gallery
        </h3>

        <div class="container">
            <div class="row mt-4 ml-1" id="filter-buttons">
              <div class="col-12">
                <button class="btn mb-2 mx-1  active" data-filter="all">All</button>
                <!-- <button class="btn mb-2 mx-1" data-filter="act" data-toggle="tooltip" data-placement="top" title="Bachelor of Arts in Broadcasting">ACT</button> -->
                <button class="btn mb-2 mx-1" data-filter="bab" data-toggle="tooltip" data-placement="top" title="Bachelor of Arts in Broadcasting">BAB</button>
                <button class="btn mb-2 mx-1" data-filter="bsa" data-toggle="tooltip" data-placement="top" title="Bachelor of Science in Accountancy">BSA</button>
                <button class="btn mb-2 mx-1" data-filter="bsais" data-toggle="tooltip" data-placement="top" title="Bachelor of Science in Accountancy Information Systems | BSA Technology">BSAIS</button>
                <button class="btn mb-2 mx-1" data-filter="bssw" data-toggle="tooltip" data-placement="top" title="Bachelor of Science in Social Work">BSSW</button>
                <button class="btn mb-2 mx-1" data-filter="bsis" data-toggle="tooltip" data-placement="top" title="Bachelor of Science in Information Systems">BSIS</button>
                <button class="btn mb-2 mx-1" data-filter="ct" data-toggle="tooltip" data-placement="top" title="Computer Technology">CT</button>
                <button class="btn mb-2 mx-1" data-filter="cp" data-toggle="tooltip" data-placement="top" title="Computer Programming">CP</button>
                <button class="btn mb-2 mx-1" data-filter="hcs" data-toggle="tooltip" data-placement="top" title="Health Care Services">HCS</button>
                <button class="btn mb-2 mx-1" data-filter="ic" data-toggle="tooltip" data-placement="top" title="International Cookery">IC</button>
                <button class="btn mb-2 mx-1" data-filter="mc" data-toggle="tooltip" data-placement="top" title="Mass Communication">MC</button>
                <button class="btn mb-2 mx-1" data-filter="ns" data-toggle="tooltip" data-placement="top" title="Nursing Student">NS</button>
                <button class="btn mb-2 mx-1" data-filter="om" data-toggle="tooltip" data-placement="top" title="Office Management">OM</button>
                <button class="btn mb-2 mx-1" data-filter="">ADD <i class="fas fa-circle-plus "></i></button>
              </div>
            </div>
      
            <div class="row px-2 mt-4 gap-3 ml-1" id="filterable-cards">
                <div class="card p-0" data-name="act" data-toggle="modal" data-target="#imageModal" data-image="img/bsis-corndog.jpg">
                    <img src="img/bsis-corndog.jpg" class="card-img-top img-fluid" alt="Image" data-toggle="modal" data-target="#imageModal">
                  <div class="card-body">
                    <h6 class="card-title">ACT 2021-2022</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                  </div>
                </div>
                <div class="card p-0" data-name="bsis" data-toggle="modal" data-target="#imageModal" data-image="img/bsis-sample-2.jpg">
                  <img src="img/bsis-sample-2.jpg" alt="img">
                  <div class="card-body">
                    <h6 class="card-title">BSIS 2023-2024</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                  </div>
                </div>
                <div class="card p-0" data-name="bab" data-toggle="modal" data-target="#imageModal" data-image="img/bsis-sample-3.jpg">
                  <img src="img/bsis-sample-3.jpg" alt="img">
                  <div class="card-body">
                    <h6 class="card-title">BAB 2022-2023</h6>
                    <p class="card-text">Lorem ipsum dolor..</p>
                  </div>
                </div>

                <div class="card p-0" data-name="bab" data-toggle="modal" data-target="#imageModal" data-image="img/bsis-corndog.jpg">
                    <img src="img/bsis-corndog.jpg" class="card-img-top img-fluid" alt="Image">
                    <div class="card-body">
                        <h6 class="card-title">ACT 2021-2022</h6>
                        <p class="card-text">Lorem ipsum dolor..</p>
                    </div>
                  </div>
                </div> 
          </div>

    </section> 

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="" class="img-fluid" id="modalImage" alt="Modal Image">
                </div>
            </div>
        </div>
    </div>
         
<!--     
    <div class="row">
        <div class="col-md-6"></div>
    </div>
</div>
</div>
    </section> -->

    <script>
        $('#menu-btn').click(function(){
            $('#menu').toggleClass("active");
        })
    </script>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="{{ asset('js/gallery.js') }}"></script>


    

</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    width: 100%;
    background: #EFF2FB;
    position: relative;
    display: flex;
    overflow-x: hidden;
}

#menu{
    background: #162F65;
    width: 300px;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
}

#menu .logo{
    display: flex;
    align-items: center;
    font-size: 90%;
    color: #fff;
    padding: 30px 0 0 20px;
    font-weight: bolder;
}

#menu .items{
    margin-top: 30px;
}

#menu .items li{
    list-style: none;
    padding: 10px;
    transition: 0.3s ease;
}

#menu .items li:hover{
    background: #E8C766;
    cursor: pointer;
}

#menu .items li i{
    color: rgb(255, 255, 255);
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    font-size: 14px;
    margin: 0 10px 0 25px;
}

#menu .items li:hover i,
#menu .items li:hover a {
    color: #162F65;
}

#menu .items li a{
    color: rgb(255, 255, 255);
    text-decoration: none;
    transition: 0.3s ease;
}

#menu-btn{
    display: none;
    cursor: pointer
}

#interface{
    width: calc(100% - 300px);
    margin-left: 300px;
    position: relative;
}

#interface .navigation{
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #fff;
    padding: 15px 30px;
}

#interface .navigation .profile {
    display: flex;
    justify-content: flex-start;
    align-items: center;
}

#interface .navigation .profile i{
    font-size: 19px;
    font-weight: 400; 
}

.i-name{
    color:#2D55B4;
    padding: 20px 30px 0 30px;
    font-size: 24px;
    font-weight: 700;
}

/* .container {
    max-width: 1100px;
  } */
  
#filter-buttons button {
border-radius: 3px;
background: #fff;
border-color: transparent;
}

#filter-buttons button:hover {
background: #ddd;
}

#filter-buttons button.active {
color: #000;
background: #E8C766;
}

#filterable-cards .card {
width: 15rem;
border: none;
}

#filterable-cards .card.hide {
display: none;
}

@media (max-width: 600px) {
#filterable-cards {
    justify-content: center;
}

#filterable-cards .card {
    width: calc(100% / 2 - 10px);
}
}

.card {
    margin-bottom: 10px;
    margin-left: 3px;
    margin-right: 10px;
}

.btn {
    position: relative;
    transition: all 0.3s ease;
}
.btn:hover::before {
    content: "";
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #E8C766; 
    border-color: #ddd;
}

.card:hover {
    box-shadow: 0 0 10px #E8C766;

}

.fas {
    color: #E8C766 ;
}
</style>