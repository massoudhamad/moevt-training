
<script type="text/javascript" src="js/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $("#districtID").change(function () {
            var districtID = $(this).val();
            var dataString = 'districtID=' + districtID;
            $.ajax
            ({
                type: "POST",
                url: "ajax_shehia.php",
                data: dataString,
                cache: false,
                success: function (html) {
                    $("#shehiaID").html(html);
                }
            });
        });
    });
</script>

<div class="container">
<?php
$db = new DBHelper();
?>

<div class="row">
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label for="FirstName">District/<i>Wilaya</i></label>
                                        <select name="districtCode" id="districtID"  class="form-control" required>
                                        <?php
                                            $district = $db->getRows('ddx_district',array('order_by'=>'regionCode ASC'));
                                            if(!empty($district)){
                                                echo "<option value=''>Select Here</option>";
                                                $count = 0; foreach($district as $dept){ $count++;
                                                    $districtID=$dept['districtCode'];
                                                    $districtName=$dept['districtName'];
                                                    ?>
                                                    <option value="<?php echo $districtID;?>"><?php echo $districtName;?></option>
                                                <?php }
                                            }?> 
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="MiddleName">Shehia/<i>Shehia</i></label>
                                        <select name="shehiaCode" id="shehiaID" class="form-control">
                                            <option value="">--Select Here--</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
</div>
</div>