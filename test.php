
<?php print $six_digit_random_number = mt_rand(100000, 999999); ?>


 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <a href="#" id="insert-more"> Add New Row </a>

    <br>
<table id="mytable">
    <thead>
        <th>Col 1</th>
        <th>Col 2</th>
        <th>Col 3</th>
        <th>Col 4</th>
    </thead>
    <tbody>
        <tr>
            <td>
                <select name="code">
                    <option value="1">javascript</option>
                    <option value="2">PHP mysql</option>
                </select>
            </td>
            <td>
                <input type="text" id="fee-1" class="fee" name="js-fee">
            </td>
            <td>
                <input type="text" id="fee-2" class="fee" name="php-fee">
            </td>
            <td><a href="#">edit</a>
            </td>
        </tr>
    </tbody>
</table>
<script>
 $("#insert-more").click(function () {
     $("#mytable").each(function () {
         var tds = '<tr>';
         jQuery.each($('tr:last td', this), function () {
             tds += '<td>' + $(this).html() + '</td>';
         });
         tds += '</tr>';
         if ($('tbody', this).length > 0) {
             $('tbody', this).append(tds);
         } else {
             $(this).append(tds);
         }
     });
});
</script>