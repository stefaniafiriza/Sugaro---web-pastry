<select class="form" name="table" id="selectList" required>
    <option value="" disabled selected style="color: gray">Please choose the table...</option>
    <?php
        while ($row = mysqli_fetch_assoc($result_sql)){
            echo "<option value='".$row['ID']."'>" . $row['mese'] . "</option>";
        }
?>
</select>