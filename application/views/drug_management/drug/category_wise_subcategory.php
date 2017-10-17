<select id="DrugSubcategoryId" name="DrugSubcategoryId" class="form-control" required="True">
    <option value="0">Select</option>
    <?php foreach ($allSubCategory as $subC) { ?>
        <option value="<?php echo $subC['DrugSubcategoryId'] ?>"><?php echo $subC['DrugSubcategoryName'] ?></option>
    <?php } ?>
</select>
