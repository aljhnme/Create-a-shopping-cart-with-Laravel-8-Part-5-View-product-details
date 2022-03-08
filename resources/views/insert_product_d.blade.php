<!DOCTYPE html>
<html>
<head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  
@if(!Auth::check())
<script type="text/javascript">
  window.location.href='/register';
</script>
@endif

<link rel="stylesheet" href="assets/css/formoid-solid-green.css" type="text/css" />

<form class="formoid-solid-green" method="post" id="form_d">
      {{ csrf_field() }}
	  <div class="title">
	  	<h2>Information about your product
       </h2>
     </div>
     <h4 style="color:red;text-align:center;" id="alert"></h4>
	<div class="element-input">
		<label class="title">
			<span>*</span>
		</label>
		<div class="item-cont">
			<input class="large" type="text" name="name_product" id="name_product" placeholder="product name"/>
			<span class="icon-place"></span>
		</div>
	</div>

	<div class="element-number">
		<label class="title">
			<span>*</span>
		</label>
		<div class="item-cont">
			<input class="small" type="text" id="price_product" name="price_product" placeholder="add price"/><span class="icon-place"></span>
       </div>
   </div>

	<div class="element-textarea">
		<label class="title"></label>
		<div class="item-cont">
			<textarea class="medium" id="about_product" name="about_product" placeholder="About the product"></textarea>
			<span class="icon-place"></span>
		</div>
	</div>

	<div class="element-rating">
		<label class="title">Product Rating
         <span>*</span>
       </label>
       <div class="rating">
          <input type="radio" class="rating-input" id="rating-5" name="rating" value="5" />
          <label for="rating-5" class="rating-star"></label>

          <input type="radio" class="rating-input" id="rating-4" name="rating" value="4" />
          <label for="rating-4" class="rating-star"></label>

          <input type="radio" class="rating-input" id="rating-3" name="rating" value="3"/>
          <label for="rating-3" class="rating-star"></label>

          <input type="radio" class="rating-input" id="rating-2" name="rating" value="2" />
          <label for="rating-2" class="rating-star"></label>

          <input type="radio" class="rating-input" id="rating-1" name="rating" value="1" />
          <label for="rating-1" class="rating-star"></label>
      </div>
    </div>
	<div class="element-file">
		<label class="title">
			<span>*</span>
		</label>
		<div class="item-cont">
		 <label class="large">
		   <div class="button">Choose</div>
		   <input type="file" class="file_input" name="img_product" id="img_product" />
		   <div class="file_text">Choose a picture for your product</div>
           <span class="icon-place"></span>
        </label>
      </div>
    </div>
  <div class="submit">
	<input type="submit" value="Submit"/>
  </div>
</form>
</body>
<script type="text/javascript">
   $(document).ready(function(){
       $('#form_d').submit(function(e){
       	  e.preventDefault();

          var f_d=new FormData(this);

          var name_product=$("#name_product").val();
          f_d.append('name_p',name_product);

          var price_product=$("#price_product").val();
          f_d.append('price_p',price_product);

          var about_product=$("#about_product").val();
          f_d.append('about_p',about_product);

          var rating=$("input[name='rating']:checked").val();
          f_d.append('rating',rating);

          var img_product=$("#img_product")[0].files[0];
          f_d.append('img_p',img_product);
          
          $.ajax({
              url:"{{ route('insert_product.data') }}",
              method:"POST",
              data:f_d,
              dataType:'JSON',
              contentType:false,
              cache:false,
              processData:false,
              success:function(data)
              {

                if (data.success_insert != "yes") 
                {
                 $("#alert").html(data.name_product+"<br>"+
                                  data.price_product+"<br>"+
                                  data.about_product+"<br>"+
                                  data.img_product);
                }else{

                   window.location.href="/";
                }
                
              }
          });
       });
	});
</script>
</html>
