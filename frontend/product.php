<html>
    <head>
        <title>Product Form</title>
    </head>
    <body>
        <center>
            <h1>Product Entry Form</h1>
            <br>
        <?php
            include('../sql/connection.php');
            include('../sql/functions.php');
            $id = $_REQUEST['pro_id'];
            if($id >0)
            {   
            $where = array('pro_id'=>$id);
            $object_query = new query_builder();
            $sql = $object_query->select("tbl_ccc_product",$where);
            $object_execution = new query_execution();
            $data = $object_execution->select_execution($sql,$conn);
            //echo $sql;
            // $data = mysqli_query($conn,$sql);
            while($record = mysqli_fetch_assoc($data))
            {
        ?>
        <form name="pro_form" action="../backend/product_update.php" method="post">
        <table>
            <tr>
                
                <td><input type="hidden" name="product[pro_id]" id="pro_id" value="<?php echo $record["pro_id"]?>" required/></td>
            </tr>
            <tr>
                <td>*Enter Product Name </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="text" name="product[pro_name]" id="pro_name" value="<?php echo $record["pro_name"]?>" required/></td>
            </tr>
            <tr>
                <td>*Enter Product SKU(Stock Keeping Unit)  </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="number" name="product[pro_sku]" id="pro_sku" value="<?php echo $record["pro_sku"]?>" required/></td>
            </tr>
            <tr>
                <td>*Enter Product Type  </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="radio" name="product[pro_type]" id="pro_type" value="Simple" required/>Simple
                <input type="radio" name="product[pro_type]" id="pro_type" value="Bundle" required/>Bundle </td>
            </tr>
            <tr>
                <td>*Select Product Category  </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td>
                    <select name="product[pro_category]">
                        <option>Bar & Game Room</option>
                        <option>Bedroom</option>
                        <option>Decor</option>
                        <option>Dining & Kitchen</option>
                        <option>Lighting</option>
                        <option>Living Room</option>
                        <option>Mattresses</option>
                        <option>Office</option>
                        <option>Outdoor</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>*Enter Product Manufacturer Cost </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="number" name="product[pro_cp]" id="pro_cp" value="<?php echo $record["pro_cp"]?>" required/></td>
            </tr>
            <tr>
                <td>*Enter Product Shipping Cost </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="number" name="product[pro_sp]" id="pro_sp" value="<?php echo $record["pro_sp"]?>" required/></td>
            </tr>
            <tr>
                <td>*Enter Product Total Price  </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="number" name="product[pro_tp]" id="pro_tp" value="<?php echo $record["pro_tp"]?>" required/></td>
            </tr>
            <tr>
                <td>*Enter Product Price  </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="number" name="product[pro_price]" id="pro_price" value="<?php echo $record["pro_price"]?>" required/></td>
            </tr>
            
            <tr>
                <td>*Enter Product Status  </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td>
                    <select name="product[pro_status]">
                        <option>Enabled</option>
                        <option>Disabled</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>*Enter Product Created At  </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="date" name="product[pro_create]" id="pro_create" value="<?php echo $record["pro_create"]?>" required/></td>
            </tr>
            <tr>
                <td>*Enter Product Updated  At  </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="date" name="product[pro_update]" id="pro_update" value="<?php echo $record["pro_update"]?>" required/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" id="submit"></td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="reset" name="reset" id="reset"></td>
            </tr>
        </table>
    </form>
    <?php
            }
            }
            else
            {
        ?>
        <form name="pro_form" action="../backend/product_insert.php" method="post">
        <table>
            <tr>
                
                <td><input type="hidden" name="product[pro_id]" id="pro_id"  required/></td>
            </tr>
            <tr>
                <td>*Enter Product Name </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="text" name="product[pro_name]" id="pro_name"  required/></td>
            </tr>
            <tr>
                <td>*Enter Product SKU(Stock Keeping Unit)  </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="number" name="product[pro_sku]" id="pro_sku"  required/></td>
            </tr>
            <tr>
                <td>*Enter Product Type  </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="radio" name="product[pro_type]" id="pro_type" value="Simple" required/>Simple
                <input type="radio" name="product[pro_type]" id="pro_type" value="Bundle" required/>Bundle </td>
            </tr>
            <tr>
                <td>*Select Product Category  </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td>
                    <select name="product[pro_category]">
                        <option>Bar & Game Room</option>
                        <option>Bedroom</option>
                        <option>Decor</option>
                        <option>Dining & Kitchen</option>
                        <option>Lighting</option>
                        <option>Living Room</option>
                        <option>Mattresses</option>
                        <option>Office</option>
                        <option>Outdoor</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>*Enter Product Manufacturer Cost </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="number" name="product[pro_cp]" id="pro_cp"  required/></td>
            </tr>
            <tr>
                <td>*Enter Product Shipping Cost </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="number" name="product[pro_sp]" id="pro_sp"  required/></td>
            </tr>
            <tr>
                <td>*Enter Product Total Price  </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="number" name="product[pro_tp]" id="pro_tp" required/></td>
            </tr>
            <tr>
                <td>*Enter Product Price  </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="number" name="product[pro_price]" id="pro_price" required/></td>
            </tr>
            
            <tr>
                <td>*Enter Product Status  </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td>
                    <select name="product[pro_status]">
                        <option>Enabled</option>
                        <option>Disabled</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>*Enter Product Created At  </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="date" name="product[pro_create]" id="pro_create" required/></td>
            </tr>
            <tr>
                <td>*Enter Product Updated  At  </td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="date" name="product[pro_update]" id="pro_update" required/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" id="submit"></td>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td><input type="reset" name="reset" id="reset"></td>
            </tr>
        </table>
    </form>
    <?php
            }
    ?>
    </center>
    </body>
</html>