    <script>
       
		
		$(document).ready(function(){
          $('.search-box input[type="text"]').on("keyup input", function(){
          var inputVal = $(this).val();
          var resultDropdown = $(this).siblings(".result");
            if(inputVal.length){
            $.get("back_end_search.php", {term: inputVal}).done(function(data){
                resultDropdown.html(data);
            });
            } 
			else{
            resultDropdown.empty();
        }
       });
       $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
     });
});
    </script>

        
        
          <form class="form-inline my-2 my-lg-0">
             <div class="search-box">
             <input  class="form-control mr-sm-2" type="text" autocomplete="off" placeholder="Search..." />
           <div class="result"></div>
        </div>
          </form>
		  