

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="ratingstyle.css">
    <script src="https://kit.fontawesome.com/a1b45a4cbe.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="media.css">    
</head>
<body>
 <!-- Search Bar -->
 <section class="bg-success text-light p-3">
    <div class="container">
      <div class="d-sm-flex justify-content-between align-items-center">
        <h4>Search for content</h4>
        <div class="input-group search-bar">
          <input type="text" class="form-control" placeholder="Search">
          <div class="input-group-append">
            <button class="btn btn-dark" type="button">Enter</button>
          </div>
        </div>
        </div>
      </div>



    </div>
  </section>

<!-- Ask you question -->
<section class="bg-dark text-light p-3 align-items-center justify-content-between">
    <div class="container">
        <div class="d-sm-flex justify-content-between align-items-center p-3">
    <div class="form-group form-edit text-center p-3">
        <label for="exampleFormControlTextarea1"><h3>Ask your question</h3></label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </form>
</div>
</div>
    </div>
</section>

<!-- Adding input -->
<section class="bg-dark text-light p-3 align-items-center justify-content-between">
  <dic class="container">
    <div class="d-sm-flex justify-content-between align-items-center p-3">
      <div class="row text-center">
        <div class="col-md">
          <div class="thumbnail">
            <a href="#bannerformmodal" data-toggle="modal" data-target="#bannerformmodal">
              <img src="QA1.jpg" alt="Lights" style="width:25%">
              <div class="caption">
                <h4 class="text-success">Add Image</h4>
              </div>
            </a>
            <div class="modal fade bannerformmodal" tabindex="-1" role="dialog" aria-labelledby="bannerformmodal" aria-hidden="true" id="bannerformmodal">
            <div class="modal-dialog">
    <div class="modal-content">
     
      <div class="modal-body">
      
               <input type='file' accept="image/*" class="profile-img"placeholder="">
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
 </div>
          </div>
        </div>
        <!-- Audio -->
        <div class="col-md">
          <div class="thumbnail">
            <a href="#bannerformmodal2" data-toggle="modal" data-target="#bannerformmodal2">
              <img src="QA2.png" alt="Nature" style="width:20%">
              <div class="caption">
                <h4 class="text-success">Add audio</h4>
              </div>
            </a>
            <div class="modal fade bannerformmodal2" tabindex="-1" role="dialog" aria-labelledby="bannerformmodal2" aria-hidden="true" id="bannerformmodal2">
            <div class="modal-dialog">
    <div class="modal-content">
     
      <div class="modal-body">
      
      <input type='file' accept="audio/*" placeholder="" class="profile-aud">
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
 </div> 
          </div>
        </div>
        <!-- video -->
        <div class="col-md">
          <div class="thumbnail">
          <a href="#bannerformmodal3" data-toggle="modal" data-target="#bannerformmodal3">
              <img src="QA3.png" alt="Fjords" style="width:25%">
              <div class="caption">
                <h4 class="text-success">Add Video</h4>
              </div>
            </a>
            <div class="modal fade bannerformmodal3" tabindex="-1" role="dialog" aria-labelledby="bannerformmodal3" aria-hidden="true" id="bannerformmodal3">
            <div class="modal-dialog">
    <div class="modal-content">
     
      <div class="modal-body">
      
      <input type='file' accept="audio/*" placeholder="" class="profile-aud p-3"> 

      <h4 class="text-dark">---or---</h4>

      <br>

<div class="left">
  <div id="startButton" class="button">
    Start
  </div>
  <h2>Preview</h2>
  <video id="preview" width="160" height="120" autoplay muted></video>
</div>

<div class="right">
  <div id="stopButton" class="button">
    Stop
  </div>
  <h2>Recording</h2>
  <video id="recording" width="160" height="120" controls></video>
  <a id="downloadButton" class="button">
    Download
  </a>
</div>

<div class="bottom">
  <pre id="log"></pre>
</div>

            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
 </div> 
          </div>
        </div>
        
      </div>
      <div class="d-sm-flex align-items-center p-3">
        
        <a href="#" class="btn btn-success btn-lg text-center submit-btn">Submit</a>
      
      </div>
    </div>
  </div>
  
</section>

 <!-- FAQ -->
 <section class="bg-light text-light p-3 align-items-center justify-content-between">
   <div class="container">

   <h1 class="text-dark p-4"><u>FAQs (Frequently asked Questions)</u></h1>
   
   <div class="organic-intro">
   <h1><span class="text-dark">What is Organic Farming?</span></h1>
    <p class="text-dark">The agriculture is really growing these days and I thought it would be a good way for me to get started into this with the help of organic farming. So can someone help me to get started with the basics of it?</p>

     
     
    <div class="bg-dark">
    <fieldset id='demo1' class="rating">
  <input class="stars" type="radio" id="1star_a-5" name="1rating" value="5" />
  <label class="full" for="1star_a-5" title="5 stars"></label>
  <input class="stars" type="radio" id="1star_a_5-half" name="1rating" value="4.5" />
  <label class="half" for="1star_a_5-half" title="4.5 stars"></label>
  <input class="stars" type="radio" id="1star_a-4" name="1rating" value="4" />
  <label class="full" for="1star_a-4" title="4 stars"></label>
  <input class="stars" type="radio" id="1star_a_4-half" name="1rating" value="3.5" />
  <label class="half" for="1star_a_4-half" title="3.5 stars"></label>
  <input class="stars" type="radio" id="1star_a-3" name="1rating" value="3" />
  <label class="full" for="1star_a-3" title="3 stars"></label>
  <input class="stars" type="radio" id="1star_a_3-half" name="1rating" value="2.5" />
  <label class="half" for="1star_a-3-half" title="2.5 stars"></label>
  <input class="stars" type="radio" id="1star2" name="1rating" value="2" />
  <label class="full" for="1star2" title="2 stars"></label>
  <input class="stars" type="radio" id="1star2half" name="1rating" value="1.5" />
  <label class="half" for="1star2half" title="1.5 stars"></label>
  <input class="stars" type="radio" id="1star1" name="1rating" value="1" />
  <label class="full" for="1star1" title="1 star"></label>
  <input class="stars" type="radio" id="1starhalf" name="rating" value="0.5" />
  <label class="half" for="1starhalf" title="0.5 stars"></label>
</fieldset>

        <br><br>
        
        </div>
        <label for="exampleFormControlTextarea1"><h4 class="text-dark py-3">Answer this question:-</h4></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    <div class="bg-dark">
    <fieldset id='demo2' class="rating">
    <input class="stars" type="radio" id="2star_a-5" name="2rating" value="5" />
    <label class="full" for="2star_a-5" title="5 stars"></label>
    <input class="stars" type="radio" id="2star_a_5-half" name="2rating" value="4.5" />
    <label class="half" for="2star_a_5-half" title=" 4.5 stars"></label>
    <input class="stars" type="radio" id="2star_a-4" name="2rating" value="4" />
    <label class="full" for="2star_a-4" title="4 stars"></label>
    <input class="stars" type="radio" id="2star_a_4-half" name="2rating" value="3.5" />
    <label class="half" for="2star_a_4-half" title="3.5 stars"></label>
    <input class="stars" type="radio" id="2star_a-3" name="2rating" value="3" />
    <label class="full" for="2star_a-3" title="3 stars"></label>
    <input class="stars" type="radio" id="2star_a_3-half" name="2rating" value="2.5" />
    <label class="half" for="2star_a-3-half" title="2.5 stars"></label>
    <input class="stars" type="radio" id="2star2" name="2rating" value="2" />
    <label class="full" for="2star2" title="2 stars"></label>
    <input class="stars" type="radio" id="2star2half" name="2rating" value="1.5" />
    <label class="half" for="2star2half" title="1.5 stars"></label>
    <input class="stars" type="radio" id="2star1" name="2rating" value="1" />
    <label class="full" for="2star1" title=" 1 star"></label>
    <input class="stars" type="radio" id="2starhalf" name="2rating" value="0.5" />
    <label class="half" for="2starhalf" title=" 0.5 stars"></label>
  </fieldset>
        </div>
        </div>  
   </div>
</section>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
<script src="rating.js"></script>
<script src="https://kit.fontawesome.com/a1b45a4cbe.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://www.bootstraptoggle.com/js/bootstrap-toggle.js"></script>
<script src="media.js"></script>
<!-- <script src="capture.js"></script> -->
</body>
</html>