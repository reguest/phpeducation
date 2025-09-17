<!DOCTYPE html>
<html lang="tr" >
  <head>
    <meta charset="utf-8">
    <title>Galeri Product</title>
  </head>
  <body>


<style >
.product-small-img img{
height: 92px;
margin:10px 0;
cursor:pointer;
display: block;
opacity: 0.6;
  }

.product-small-img {
float: left;
  }

  .product-small-img img:hover {
  opacity: 1;
    }
.product{
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  position: absolute;
}

.img-container img{
height: 300px;
}

.img-container {
float: right;
padding: 10px;
}

</style>
<div class="product">
  <div class="product-small-img">
<img src="1.jpg" onclick="myFunction(this)" alt="">
<img src="2.jpg" onclick="myFunction(this)" alt="">
<img src="3.jpg" onclick="myFunction(this)" alt="">
<img src="4.jpg" onclick="myFunction(this)" alt="">
  </div>
  <div class="img-container">
    <img id="imageBox" src="1.jpg" >

  </div>
</div>

<script>
  function myFunction(smallImg){
    var fullImg=document.getElementById("imageBox");
    fullImg.src=smallImg.src;
  }
</script>























  </body>
</html>
