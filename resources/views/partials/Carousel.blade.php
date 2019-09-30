<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">

        <a href="/show-product/{{$products[0]->id}}" style="color:inherit;text-decoration:none;">
      <div class="carousel-item active">
      <img class="d-block " src="{{$products[0]->imagePath}}" style="width:20%;"   alt="First slide">
      <div class="carousel-title">
          <h3>{{$products[0]->title}}</h3>
      </div>
      <div class="carousel-description">
          <p class="carouselDescP">{{$products[0]->description}}</p>
      </a>
          <div class="carouselReadMore">
              Read more
          </div>
          <a href="/add-to-cart/{{ $products[0]->id }}" class="carousel-button btn btn-success carouselBtn">
            Buy now!
        </a>
      </div>
    
      </div>

      <a href="/show-product/{{$products[1]->id}}" style="color:inherit;text-decoration:none;">
      <div class="carousel-item" >
        <img class="d-block " src="{{$products[1]->imagePath}}" style="width:20%;" alt="Second slide">
        <div class="carousel-title">
            <h3>{{$products[1]->title}}</h3>
        </div>
        <div class="carousel-description">
            <p class="carouselDescP">{{$products[1]->description}}</p>
            <div class="carouselReadMore">
                Read more
            </div>
          </a>
            <a href="/add-to-cart/{{ $products[1]->id }}" class="carousel-button btn btn-success carouselBtn">
              Buy now!
          </a>
        </div>
       
      </div>


      <a href="/show-product/{{$products[2]->id}}" style="color:inherit;text-decoration:none;">
      <div class="carousel-item">
        <img class="d-block " src="{{$products[2]->imagePath}}" style="width:20%;" alt="Third slide">
        <div class="carousel-title">
            <h3>{{$products[2]->title}}</h3>
        </div>
        <div class="carousel-description">
            <p class="carouselDescP">{{$products[2]->description}}</p>
        </a>
            <div class="carouselReadMore">
                Read more
            </div>
            <a href="/add-to-cart/{{ $products[2]->id }}" class="carousel-button btn btn-success carouselBtn">
              Buy now!
          </a>
        </div>
      </div>



      <a href="/show-product/{{$products[4]->id}}" style="color:inherit;text-decoration:none;">
      <div class="carousel-item">
          <img class="d-block " src="{{$products[4]->imagePath}}" style="width:20%;" alt="Third slide">
          <div class="carousel-title">
              <h3>{{$products[4]->title}}</h3>
          </div>
          <div class="carousel-description">
              <p class="carouselDescP">{{$products[4]->description}}</p>
          </a>
              <div class="carouselReadMore">
                  Read more
              </div>
              <a href="/add-to-cart/{{ $products[4]->id }}" class="carousel-button btn btn-success carouselBtn">
                Buy now!
            </a>
          </div>
        </div>
    </div>


    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>