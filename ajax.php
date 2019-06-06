 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 					<form id="faculty_wrapper">
    <div class="faculty_row">
        <select id="faculty" name="faculty[]">
            <option value="faculty_one">faculty_one</option>
            <option value="faculty_one">faculty_two</option>
            <option value="faculty_one">faculty_three</option>
            <option value="faculty_one">faculty_four</option>
        </select>
        <input type="text" name="message[]">
    </div>
</form>

<a href="#" id="add_more">Add More</a>
<a href="#" id="submit">Submit</a>    
<script>jQuery(document).ready(function($){
   $("#add_more").on('click', function(e){
   		e.preventDefault();
        var clone = $(".faculty_row").eq(0).clone();
        $("#faculty_wrapper").append(clone);
   });
    
    $("#submit").on('click', function(e){
       e.preventDefault();
        alert($("#faculty_wrapper").serialize());
    })
})
</script>